<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  

  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/cute-alert.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/simplePagination.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/assets/backend/css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <router-link to="/dashboard" class="brand-link">
      <img src="{{ asset('/images/logo.png') }}" alt="The Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </router-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <router-link to="/profile">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{ asset('/images/profile.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">

                  {{ Auth::user()->name }}
                  <span class="d-block text-muted">
                    {{ Ucfirst(Auth::user()->type) }}
                  </span>
              </div>
          </div>
        </router-link>

      <!-- Sidebar Menu -->
      @include('backend.layouts.sidebar-menu')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  {{-- Content Wrapper. Contains page content --}}
  <div class="content-wrapper" id="vuerouter" style="padding: 15px;"></div>
  {{-- /.content-wrapper --}}

  {{-- Main Footer --}}
  <footer class="main-footer">
    {{-- To the right --}}
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    {{-- Default to the left --}}
    <strong>Copyright &copy; 2021 <a href="https://rocketechit.com/">Rocketech IT</a>.</strong> All rights reserved.
  </footer>
</div>
{{-- ./wrapper --}}

@auth
<script>
    window.user = @json(auth()->user());
</script>
@endauth
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.simplePagination.js') }}"></script>
<script src="{{ asset('assets/backend/js/vue.js') }}"></script>
<script src="{{ asset('assets/backend/js/axios.min.js') }}"></script>

<script src="{{ asset('assets/backend/js/cute-alert.js') }}"></script>
<script src="{{ asset('assets/backend/plugin/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
  var vueCli = new Vue({
      el: '#app',
      methods: {
        loadVueComponent(vueRoute){
          $('#vuerouter').load(vueRoute,function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success"){
              $('#vuerouter').html(responseTxt);
            }
            else if(statusTxt == "error"){
              console.log("Error: Vue CLI");
            }
          });
        },
        error_txt: function(msg,obj){
          $('.error_txt').show();
          $(".error_txt")[0].focus();
          $('.error_txt').html(msg);
          obj.focus();
          setTimeout(function(){
            $('.error_txt').html(''); 
            $('.error_txt').hide();
          }, 1500);
        }
      },
      created(){  
      this.loadVueComponent('content-dashboard');     
      }
  })
</script>
</body>
</html>
