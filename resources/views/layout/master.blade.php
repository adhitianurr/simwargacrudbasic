<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sistem Infomasi &mdash; Data Warga
    
  </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        </form>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href=""> SIM Data Warga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header mt-3">Data Warga</li>
              <a href="/warga" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Warga</span></a>
            </li>
              <a href="/data/customer" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data User</span></a>
            </li>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('headercontent')</h1>
          </div>
            @yield('content')
          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022<div class="bullet"></div> Created By <a href="https://adhitianurr.github.io/adhitia-portofolio-bootstrap/">Adhitia Nur Riski</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.')}}"></script>
  <script src="{{asset('assets/modules/popper.')}}"></script>
  <script src="{{asset('assets/modules/tooltip.')}}"></script>
  <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>