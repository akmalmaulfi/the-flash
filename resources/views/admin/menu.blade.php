<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu | Admin | ResTwoRant | Breakfast and Lunch</title>

    <!--===============================================================================================-->
    <link rel="shortcut icon" href="img/logo/icon.ico">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fonts/font-awesome/new/css/all.css') !!}">
    <!--===============================================================================================-->
    <link href="{!! asset('css/admin/boostrap.min.css') !!}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{!! asset('source/datatables/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">
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
                <div class="sidebar-brand-text mx-3">Rest<sup>2</sup>Rant</div>
            </a>

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
                Fitur
            </div>

            <!-- Orders -->
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('ordersAdmin') !!}">
                    <i class="fas fa-fw fa-dolly"></i>
                    <span>Orders</span></a>
            </li>
            <!-- //Orders// -->

            <!-- Transaksi -->
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('transaksiAdmin') !!}">
                    <i class="fas fa-fw fa-hand-holding-usd"></i>
                    <span>Transaksi</span></a>
            </li>
            <!-- //Transaksi// -->

            <!-- Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{!! asset('menuAdmin') !!}">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span>Menu</span></a>
            </li>
            <!-- //Menu// -->

            <!-- Divider sidebar -->
            <hr class="sidebar-divider">

            <!-- Heading sidebar title -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Generate Laporan -->
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('laporanAdmin') !!}">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Generate Laporan</span></a>
            </li>
            <!-- //Generate Laporan// -->

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle" src="img/logo/user.png">
                            </a>
                            <!-- Dropdown nya -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sign Out
                                </a>
                            </div>
                        </li>
                        <!-- //Navbar Item// -->

                    </ul>

                </nav>
                <!-- //Topbar Navbar// -->


                <!-- container -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Menu</h1>
                        <a class="btn btn-sm btn-primary m-1 text-white" data-toggle="modal" data-target="#menuModal"><i
                                class="fas fa-plus"></i> Add menu</a>
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                        @foreach ($menu as $mnA)
                            <!-- Border Left -->
                            <div class="col-lg-6">

                                <div    class="card mb-4 py-3 border-left-primary">
                                    <div class="card-body">
                                        <div class="card" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img src="{{asset('file/'.$mnA->file)}}" class="card-img" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h6>{{ $mnA->nama_masakan }}</h6>
                                                        <span>RP. {{ $mnA->harga }}</span>
                                                        <br>

                                                        @if ($mnA->status_masakan == 'Tersedia')
                                                        <small class="text-success">Stock {{ $mnA->status_masakan }}</small>
                                                        @elseif ($mnA->status_masakan == 'Tidak Tersedia')
                                                        <small class="text-primary">Stock {{ $mnA->status_masakan }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-sm btn-dark m-1 text-white" data-toggle="modal"
                                                data-target="#editModal"><i class="fas fa-pencil-alt"></i>  Edit Menu</a>
                                             <a href="{{ url('/menudeleteAdmin/'.$mnA->id_masakan) }}" class="btn btn-sm btn-primary m-1 text-white" >
                                             <i class="fas fa-trash"></i>  Delete Menu</a>

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
                            RestTwoRant. All rights reserved. Designed by <a href="http://www.behance.net/sandysaputra"
                                target="blank">Sansdy's</a>
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
                    <a class="btn btn-dark" href="{!! asset('signin') !!}">Sign Out</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add menu references</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    @if ($errors->any())
                        <ul>
                                @foreach ($errors->all() as $errors)
                                        <li>({$errors})</li>
                                @endforeach
                        </ul>
                    @endif

                    <form action="{{ route('tambahmenuAdmin') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                                <div class="custom-file">
                                    <label for="exampleFormControlFile1">Gambar </label>
                                    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" required>
                                    <small class="text-primary">* Maximum size 2mb</small>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Menu</label>
                            <input type="text" class="form-control" name="nama_masakan"  id="formGroupExampleInput">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Harga</label>
                            <input type="number" class="form-control" name="harga"  id="formGroupExampleInput">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status Masakan</label>
                            <select class="form-control" name="status_masakan"  id="exampleFormControlSelect1">
                            <option>-- Pilih Status --</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select class="form-control" name="kategori"  id="exampleFormControlSelect1">
                            <option>-- Pilih Kategori --</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            </select>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Add Menu References</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Add menu Modal// -->

     <!-- Edit menu Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit menu references</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('updatemenuAdmin') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                                <div class="col-md-auto">
                                        <img src="{{asset('file/'.$mnA->file)}}" class="card-img" alt="Menu img">
                                </div>
                                <div class="custom-file mt-2">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label">Choose image file...</label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Menu</label>
                            <input type="text" class="form-control" value="{{ $mnA->nama_masakan }}" name="nama_masakan"  id="formGroupExampleInput">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Harga</label>
                            <input type="number" class="form-control" value="{{ $mnA->harga }}" name="harga"  id="formGroupExampleInput">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status Masakan</label>
                            <select class="form-control" name="status_masakan" value="{{ $mnA->status_masakan }}"  id="exampleFormControlSelect1">
                            <option value="{{ $mnA->status_masakan }}"> {{ $mnA->status_masakan }}</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select class="form-control" name="kategori"  id="exampleFormControlSelect1">
                            <option value="{{ $mnA->kategori }}">{{ $mnA->kategori }}</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            </select>
                        </div>

                        <button class="btn btn-primary" type="submit">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Edit menu Modal// -->

    <!--===============================================================================================-->
    <script src="{!! asset('source/jquery/jquery.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('source/bootstrap/js/bootstrap.bundle.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('source/jquery-easing/jquery.easing.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('js/admin/admin.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('source/datatables/jquery.dataTables.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('source/datatables/dataTables.bootstrap4.min.js') !!}"></script>
    <!--===============================================================================================-->
    <script src="{!! asset('js/admin/demo/datatables-demo.js') !!}"></script>
    <!--===============================================================================================-->

</body>

</html>
