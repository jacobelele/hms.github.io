<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Presensi</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{URL::asset('asset/vendors/iCheck/skins/flat/green.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/iCheck/skins/flat/green.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/nprogress/nprogress.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/build/css/custom.min.css')}}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><i class="fa fa-group"></i> <span>Home</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="#" alt="..." class="img-circle profile_img"> -->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Management User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" target="iframe_a">SimSdm</a></li>
                      <li><a href="#" target="iframe_a">SKP</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-clock-o"></i> Management Cuti <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" target="iframe_a">Login Simpel</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-envelope"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" target="iframe_a">Login Simabdimas</a></li>
                    </ul>
                  </li>

                  <?php
                  // <li><a><i class="fa fa-gear"></i> Pengaturan Shift <span class="fa fa-chevron-down"></span></a>
                  ?>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <?php
                  // <li><a><i class="fa fa-clone"></i> Report <span class="fa fa-chevron-down"></span></a>
                  ?>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>

                      </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Pusat Sistem Informasi 2018
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <script src="{{URL::asset('asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/skycons/skycons.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/flot.curvedlines/curvedLines.js')}}"></script>

    <script src="{{URL::asset('asset/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <script src="{{URL::asset('asset/vendors/DateJS/build/date.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('asset/build/js/custom.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    @stack('scripts')
  </body>
</html>