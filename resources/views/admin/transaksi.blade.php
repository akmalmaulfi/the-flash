<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Transaksi | Admin | ResTwoRant | Breakfast and Lunch</title>

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
      <li class="nav-item active">
        <a class="nav-link" href="{!! asset('transaksiAdmin') !!}">
          <i class="fas fa-fw fa-hand-holding-usd"></i>
          <span>Transaksi</span></a>
      </li>
      <!-- //Transaksi// -->

      <!-- Menu -->
      <li class="nav-item">
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" src="img/logo/user.png">
              </a>
              <!-- Dropdown nya -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signoutModal">
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
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
          </div>

          <!-- Data Table Transaksi -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data List Transaksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr class="text-center">
                      <th>No.Transaksi</th>
                      <th>ID Order</th>
                      <th>Tanggal</th>
                      <th>Total Bayar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach ($transaksi as $tr)
                  <tbody>
                    <tr class="text-center">
                      <td>{{ $tr->id_transaksi }}</td>
                      <td>{{ $tr->id_orders }}</td>
                      <td>{{ $tr->tanggal }}</td>
                      <td>{{ $tr->total_bayar }}</td>
                      <td>
                        <a class="btn btn-sm btn-dark m-1" data-toggle="modal" data-target="#editModal"><i class="fas fa-info-circle text-white"></i></a>
                        <a class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash text-white"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
          <!-- //Data Table Transaksi// -->

        </div>
        <!-- //container//-->

      </div>
      <!--  //Content// -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> 
               RestTwoRant. All rights reserved. Designed by <a href="http://www.behance.net/sandysaputra" target="blank">Sansdy's</a>
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

  <!-- Detail Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
  
                <div class="card-body">

                    <div class="table-wrapper">

                        <table class="table  table-bordered text-center">
                          <thead class="border">
                            <tr>
                              <th scope="col">Nama</th>
                              <th scope="col">jumlah Order</th>
                              <th scope="col">Transaksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Ujang daru</th>
                              <td>1</td>
                              <td>Rp. 200.000</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Back</button>
        </div>
      </div>
    </div>
  </div>
  <!-- //Detail Modal// -->

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete List Transaksi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <!-- //Delete Modal// -->

  <!-- Sign Out Modal -->
  <div class="modal fade" id="signoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin Sign Out?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{!! asset('signin') !!}">Sign Out</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //Sign Out Modal// -->

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
