<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | The Flash | E-sport Team</title>

    <!--=============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo/logo.png') !!}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('library/fonts/font-awesome/new/css/all.css') !!}">
    <!--===============================================================================================-->
    <link href="{!! asset('css/admin/boostrap.min.css') !!}" rel="stylesheet">
    <!--===============================================================================================-->

</head>

<body id="page-top">

    <!-- Wrapper Nya -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar Logo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! asset('admin') !!}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="img-profile" src="img/logo/logo3.png">
                </div>
                <div class="sidebar-brand-text mx-3">The Flash</div>
            </a>
            <!-- //Sidebar Logo// -->

            <!-- Divider sidebar -->
            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('admin') !!}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider sidebar -->
            <hr class="sidebar-divider">

            <!-- Heading sidebar title nya -->
            <div class="sidebar-heading">
                Feature
            </div>

            <!-- Manage -->
            <li class="nav-item active">
                <a class="nav-link" href="{!! asset('managemember') !!}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Manage members</span></a>
            </li>
            <!-- //Manage// -->

            <!-- Merch -->
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('merch') !!}">
                    <i class="fas fa-fw fa-hand-holding-usd"></i>
                    <span>Merchandise</span></a>
            </li>
            <!-- //Merch// -->

            <!-- Divider sidebar -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggle nya -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- //Sidebar// -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Toggle nya -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Navbar Item -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $nama_user }}</span>
                                <img class="img-profile rounded-circle" src="img/logo/logo4.png">
                            </a>
                            <!-- Dropdown nya -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('/slogout') }}" data-toggle="modal" data-target="#signoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sign Out
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- //Topbar Navbar// -->

                <!-- container -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Member</h1>
                        <a class="btn btn-sm btn-primary m-1 text-white" data-toggle="modal" data-target="#menuModal"><i
                                class="fas fa-plus"></i> Add Member</a>
                    </div>



                    <!-- Content Row -->
                    <div class="row">

                        @foreach($members as $member)
                        <!-- Border Left -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3 border-left-primary">
                                <div class="card-body">
                                    <div class="card" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="file/{{ $member->foto }}" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6>{{ $member->nama }}</h6>
                                                    <small class="text-success">NickGame : {{ $member->ign }}</small>
                                                    <br>
                                                    <span>{{ $member->game }}</span>
                                                    <br>
                                                    <small class="text-success">Email : {{ $member->email }}</small>
                                                    <br>
                                                    <span>{{ $member->role }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-sm btn-dark m-1 text-white" data-toggle="modal"
                                            data-target="#editModal{{ $member->id }}"><i class="fas fa-pencil-alt"></i> Edit Member</a>
                                        <a href="{{ url('/delete/member/'.$member->id) }}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fas fa-trash"></i> Delete Member</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>

                </div>

                <!-- //container// -->

            </div>
            <!-- //Main Content// -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script>
                            TheFlash. All rights reserved. Designed by <a href="http://www.behance.net/sandysaputra"
                                target="blank">TeamTime</a>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- //Footer// -->

        </div>
        <!-- //Content Wrapper// -->

    </div>
    <!-- //Page Wrapper// -->

    <!-- to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Sign Out Modal -->
    <div class="modal fade" id="signoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin Sign Out?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-dark" href="{{ url('/logout') }}"> Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //Sign Out Modal// -->

    <!-- Add menu Modal -->
    <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" autocomplete="off"
                        enctype="multipart/form-data" action="{{ url('add/member') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="custom-file">
                                <label for="exampleFormControlFile1">Gambar </label>
                                <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1"
                                    required>
                                <small class="text-info">* Maximum size 2mb</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nickname</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="ign">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" id="formGroupExampleInput" name="email">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" name="password">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="level">
                                <option>-- Pilih Level --</option>

                                @foreach($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Divisi Game</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="game">
                                <option>-- Pilih Divisi --</option>
                                <option value="PUBG">PUBG</option>
                                <option value="FreeFire">Freefire</option>
                                <option value="MobileLegends">Mobile Legends</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role Game</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="role">
                                <option>-- Pilih Role --</option>
                                <option value="Flanker">Flanker</option>
                                <option value="Rusher">Rusher</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Add Member</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Add menu Modal// -->

    @foreach($members as $member)
    <!-- Edit menu Modal -->
    <div class="modal fade" id="editModal{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/update/member/'.$member->id) }}"  method="POST" autocomplete="off"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-auto">
                                <img src="{{ asset('file/'.$member->foto) }}" class="card-img" alt="img">
                            </div>
                            <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" name="file">
                                <label class="custom-file-label">Choose image file...</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" name="nama"  class="form-control" value="{{ $member->nama }}"
                                id="formGroupExampleInput">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nick Game</label>
                            <input type="text" class="form-control" value="{{ $member->ign }}" id="formGroupExampleInput" name="ign">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" value="{{ $member->email }}"
                                id="formGroupExampleInput" name="email">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="password" class="form-control" id="formGroupExampleInput" name="password" value="{{ $member->password }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="level">
                                @foreach($levels as $level)
                                <option value="{{ $level->id }}" @if ($level->id == $member->id_level) selected @endif>{{ $level->nama_level }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Divisi</label>
                            <select class="form-control"
                                id="exampleFormControlSelect1" name="game">
                                <option value="PUBG" @if ($member->game == 'PUBG') selected @endif>PUBG</option>
                                <option value="FreeFire" @if ($member->game == 'FreeFire') selected @endif>FreeFire</option>
                                <option value="MobileLegends" @if ($member->game == 'MobileLegends') selected @endif>Mobile Legends</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role game</label>
                            <select class="form-control"
                                id="exampleFormControlSelect1" name="role">
                                <option value="Flanker" @if ($member->role == 'Flanker') selected @endif>Flanker</option>
                                <option value="Support" @if ($member->role == 'Support') selected @endif>Support</option>
                                <option value="Rusher" @if ($member->role == 'Rusher') selected @endif>Rusher</option>
                            </select>
                        </div>

                        <button class="btn btn-primary" type="submit">Edit Member</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Edit menu Modal// -->
    @endforeach

<!--===============================================================================================-->
<script src="{!! asset('library/jquery/dist/jquery.min.js') !!}"></script>
<!--===============================================================================================-->
  <script src="{!! asset('library/bootstrap/js/bootstrap.bundle.js') !!}"></script>
<!--===============================================================================================-->
  <script src="{!! asset('library/jquery-easing/jquery.easing.min.js') !!}"></script>
<!--===============================================================================================-->
  <script src="{!! asset('js/admin/admin.js') !!}"></script>
<!--===============================================================================================-->


</body>

</html>
