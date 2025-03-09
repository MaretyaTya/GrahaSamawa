<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/icon/ICON.png') }}" type="image/x-icon">
        <title>Login - Admin Graha Samawa</title>

        <!-- BOOTSTRAP CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <!-- LINK CSS DAN JS -->
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <script src="{{ asset('js/script.js') }}" defer></script>

        <!-- FONT AWESOME & GOOGLE FONTS CDN -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js">

    </head>

    <body>
        <div class="container d-flex justify-content-center">
            <div class="card shadow-lg bg-body-secondary" style="margin-top: 120px;">
                <div class="card-body py-5 px-md-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 text-center">
                            <img src="{{ asset('images/icon/GS_Black.png') }}" width="10%">
                            <br>
                            <h2 class="fw-bold mb-5">LOGIN ADMIN</h2>
                        </div>
                        <form action="{{ route('auth') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-floating">
                                        <input type="text" id="username" name="username" class="form-control"
                                            value="{{ old('username') }}">
                                        <label for="username" class="form-label">Username</label>
                                        @error('username')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="form-floating">
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="password" class="form-label">Password</label>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary custom-btn w-100">LOGIN</button>
                            </div>

                        </form>
                        @if ($errors->has('auth'))
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first('auth') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer text-center bg-body-secondary copyright">
                    Copyright &copy; <strong>Testing Website</strong>
                </div>
            </div>
        </div>
    </body>

</html>
