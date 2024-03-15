<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | {{ env('APP_NAME') }}</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
        <div class="login-box">
                <div class="login-logo">
                        <a href="#"><b>E</b>Store</a>
                </div>
  <!-- /.login-logo -->
                <div class="card">
                        <div class="card-body login-card-body">
                                <p class="login-box-msg">Sign in to start your session</p>
                                <div class="row">
                                        <div class="col-5">
                                                <div class="form-group">
                                                        <label class="float-right">ADMIN</label>
                                                </div>
                                        </div>
                                        <div class="col-2">
                                                <div class="form-group">
                                                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                                <input type="checkbox" class="custom-control-input" id="userswitch">
                                                                <label class="custom-control-label" for="userswitch"></label>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-5">
                                                <div class="form-group">
                                                        <label>SELLER</label>
                                                </div>
                                        </div>
                                </div>
                                @if (session('msg'))
                                        <div class="text-danger text-center">
                                        {{ session('msg') }}
                                        </div>
                                @endif
                                <form id="loginForm" action="{{ route('admin.logaction') }}" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('uname') border-danger @enderror" placeholder="Username" name="uname">
                                        @error('uname')<p class="text-danger">{{ $message }}</p>@enderror
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="input-group mb-3">
                                        <input type="password" class="form-control @error('pword') border-danger @enderror" name="pword" placeholder="Password">
                                        @error('pword')<p class="text-danger">{{ $message }}</p>@enderror
                                        <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-8">
                                        <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                                Remember Me
                                        </label>
                                        </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <!-- /.col -->
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
        <!-- /.login-box -->
        <!-- jQuery -->
        <script src="{{ asset('public/template/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('public/template/dist/js/adminlte.min.js') }}"></script>
        <script>
                $(document).ready(function(){
                        $("#userswitch").change(function(){
                                if($(this).is(':checked')){
                                        $('#loginForm').attr('action', "{{ route('seller.logaction') }}");
                                }else{
                                        $('#loginForm').attr('action', "{{ route('admin.logaction') }}");
                                }
                        });
                });
        </script>
</body>
</html>