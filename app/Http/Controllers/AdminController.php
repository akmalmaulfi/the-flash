<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Merchandise;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::all();
        $levels = Level::all();

        $nama_user = Auth::User()->nama;

        return view('admin.managemember', compact('levels','members','nama_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ign' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
            'game' => 'required',
            'role' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg'
        ]);

        $data = new User;
        $data->id_level = $request->level;
        $data->ign = $request->ign;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->game = $request->game;
        $data->role = $request->role;

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/',$filename);

            $data->foto = $filename;
        }

        $data->save();
        return redirect('/managemember');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $members = User::all();
        $merchandises = Merchandise::all();

        $merch = count($merchandises);
        $member = count($members);
        $nama_user = Auth::User()->nama;

        return view('admin.index', compact('merch', 'member', 'nama_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ign' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
            'game' => 'required',
            'role' => 'required',
            'file' => 'mimes:jpeg,png,jpg'
        ]);

        $data = User::find($id);
        $data->id_level = $request->level;
        $data->ign = $request->ign;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->game = $request->game;
        $data->role = $request->role;

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/',$filename);

            $data->foto = $filename;
        }

        $data->save();
        return redirect('/managemember');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = User::where('id', $id)->first();
        Storage::delete('file/'.$member->foto);

        User::find($id)->delete();

        return redirect('/managemember');

    }
}
