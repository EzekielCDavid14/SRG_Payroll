<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
<body class="login">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form method="POST" action="{{ route('login') }}">
             {{ csrf_field() }}



              <h1>Admin Login</h1>
              <div>

                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

              </div>
              <div>
                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              <div>
                <button class="btn btn-default" type="submit">Log in</button>

              </div>

              <div class="clearfix"></div>

              <div class="separator">
              

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-star"></i> Tanglaw System </h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

     
      </div>
    </div>



  </body>
</html>
