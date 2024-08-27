
<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('Back/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('Back/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('Back/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('Back/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Back/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('Back/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Back/assets/css/icons.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Blackdash - Bootstrap5 Admin Template</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-3">
        <div class="container-fluid">
          <a href="javascript:;"><img src="{{asset('Back/assets/images/logo-icon-3.png')}}" width="140" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign Up</h4>
                <p>Creat New account</p>
              </div>
                 @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
             </div>
             @endsession
              <form class="form-body row g-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-12">
                  <label for="inputName" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email"  name="email" :value="old('email')" required autocomplete="username">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control"  id="password" name="password" required autocomplete="new-password">
                </div>

                 <div class="col-12">
                  <label for="inputPassword" class="form-label"> Confirm Password</label>
                  <input id="password_confirmation" class="form-control"type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="col-12 col-lg-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      I agree the Terms and Conditions
                    </label>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Sign Up</button>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator translate-middle-y">or continue with</div>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                    <a href="javascript:;" class=""><img src="{{asset('Back/assets/images/icons/facebook.png')}}" alt=""></a>
                    <a href="javascript:;" class=""><img src="{{asset('Back/assets/images/icons/apple-black-logo.png')}}" alt=""></a>
                    <a href="javascript:;" class=""><img src="{{asset('Back/assets/images/icons/google.png')}}" alt=""></a>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Already have an account? <a href="authentication-sign-in-simple.html">Sign in</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="text-center">
          <p class="mb-0">Copyright © 2024 UI Admin by Codervent.</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->


</body>

</html>


