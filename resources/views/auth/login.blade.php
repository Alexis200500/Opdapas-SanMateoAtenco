<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/smt22recortado.png');"></div>
    <div class="contents order-2 order-md-1"><br><br>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Iniciar Sesión</strong></h3>
              </div>
              <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group first">
                  <label for="username">Usuario</label>
                  <input id="email" type="email" placeholder="Your-email@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Contraseña</label>
                  <input id="password" type="password" placeholder="Tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Recuerdame</span>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Olvidaste tu contraseña</a></span> 
                </div>

                <input type="submit" value="Iniciar" class="btn btn-block btn-info">
                <br>
                <center>
                  <span class="ml-auto"><a href="{{ route('register') }}" class="forgot-pass">Si no tienes cuenta, registrate</a></span> 
                <center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>