
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=asset('admin')?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=asset('admin')?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=asset('admin')?>/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <b>PALMERA</b> CARE
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		{{ csrf_field() }}
         
           
            
          <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" placeholder="Full name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            
			@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
			@endif            
          </div>

          <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="text" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            
			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif            
          </div>
                    
                                        
		<div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
				<input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
		</div>


		<div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

				<input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

				@if ($errors->has('password_confirmation'))
					<span class="help-block">
						<strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
				@endif
		</div>
          
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" value="red">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

        {{-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div> --}}

        <a href="{{ url('admin/login') }}" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?=asset('admin')?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=asset('admin')?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?=asset('admin')?>/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

