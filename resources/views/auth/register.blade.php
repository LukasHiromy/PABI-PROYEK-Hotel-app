<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi!</title>
</head>
<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fff;
}

.card {
  background: linear-gradient(to bottom right, #0074D9, #1E90FF);
  color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 20px;
  max-width: 500px;
}


.card-body {
  padding: 30px;
}

.form-control {
  background-color: #e6e6e6;
  color: #000;
  border-color: #e6e6e6;
}

.form-control:focus {
  background-color: #fff;
  color: #000;
  border-color: #f9c846;
  box-shadow: none;
}

.btn-primary {
  background: #0074D9;
  color: #fff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.btn-primary:hover {
  background-color: #1E90FF;
  border-color: #1E90FF;
  color: #fff;
  transition: all 0.4s ease;
}

.col-form-label {
  font-weight: bold;
  color: #333;
}

.form-group {
  margin-bottom: 30px;
}

@media screen and (max-width: 767px) {
  .form-group {
    margin-bottom: 20px;
  }
}

body {
  background-color: #f5f5f5;
}

.form-header {
  text-align: center;
  margin-bottom: 40px;
}

.form-header h2 {
  font-size: 36px;
  font-weight: bold;
  color: #f9c846;
  margin-bottom: 20px;
}

.form-header p {
  font-size: 18px;
  color: #000;
  margin-bottom: 0;
}

.form-link {
  text-align: center;
  margin-top: 20px;
}

.form-link a {
  color: #f9c846;
  font-weight: bold;
  text-decoration: none;
}

.form-link a:hover {
  color: #eaa922;
}
</style>
<body>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
</body>
</html>