<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchans = Merchandise::all();
        $nama_user = Auth::user()->nama;
        return view('admin.merch', compact('merchans', 'nama_user'));
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
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'file' => 'required|mimes:jpeg,jpg,png,svg'
        ]);

        $data = new Merchandise;
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->harga = $request->harga;
        $data->kategori = $request->kategori;

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/merch',$filename);

            $data->foto = $filename;
        }

        $data->save();
        return redirect('/merch');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'nama_barang' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'file' => 'mimes:jpeg,png,jpg,svg'
        ]);

        $data = Merchandise::find($id);
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->harga = $request->harga;
        $data->kategori = $request->kategori;

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/merch/',$filename);

            $data->foto = $filename;
        }

        $data->save();
        return redirect('/merch');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merch = Merchandise::where('id', $id)->first();
        Storage::delete('file/merch'.$merch->foto);

        Merchandise::find($id)->delete();

        return redirect('/merch');
    }
}
