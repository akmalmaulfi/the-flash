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
      <li class="nav-item active">
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
      <li class="nav-item">
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $nama_user }}</span>
                <img class="img-profile rounded-circle" src="img/logo/logo4.png">
              </a>
              <!-- Dropdown nya -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="{{ url('/logout') }}" data-toggle="modal" data-target="#signoutModal">
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

          <!-- Header title Halaman -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <!-- //Header title Halaman// -->

          <!-- Row -->
          <div class="row">

            <!-- 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Member</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $member }} Member</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //1// -->

            <!-- 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Trophy</div>

                      {{-- ISI KEMENANGAN TROPHY TEAM PADA ANGKA DI BAWAH --}}
                      <div class="h5 mb-0 font-weight-bold text-gray-800">1 Trophy</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-trophy fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //2// -->

            <!-- 3 -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Merchandise</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $merch }} Merch</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //3// -->

          </div>
          <!-- //Row// -->

      </div>
      <!--  //Content// -->

      <!-- Footer Nya -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script>
               TheFlash. All rights reserved. Designed by <a href="http://www.behance.net/sandysaputra" target="blank">TeamTime</a>
            </span>
          </div>
        </div>
      </footer>
      <!-- //Footer Nya// -->

    </div>
    <!-- //Content Wrapper// -->

  </div>
  <!-- //Page Wrapper// -->

  <!-- to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
          <a class="btn btn-primary" href="{{ url('/logout') }}">Sign Out</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //Sign Out Modal// -->

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
