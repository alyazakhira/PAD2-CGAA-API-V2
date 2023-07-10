<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Meta and Title --}}
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simulasi CGAA | Reset Password</title>

        {{-- Online-based Stylesheet --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        
        {{-- Local-based Stylesheet --}}
        <link rel="stylesheet" href={{ asset('style/font.css') }}>
        <link rel="stylesheet" href={{ asset('style/button.css') }}>
        <link rel="stylesheet" href={{ asset('style/color.css') }}>
    </head>
    <body>
        <!-- The wrapper -->
        <main class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-12">
                    <div class="row vh-100">

                        <!-- The colored blank space section -->
                        <section class="col-lg-6 bg-yellow-normal1"></section>

                        <!-- The form section -->
                        {{-- @if ($errors->any())
                        <div class="fixed-top" aria-live="assertive" aria-atomic="true" data-bs-delay="100">
                            <div class="toast-container top-0 end-0 p-3">
                                @foreach ($errors->all() as $error)
                                <div class="toast text-bg-danger border-0 show" role="alert">
                                    <div class="d-flex">
                                        <div class="toast-body">{{ $error }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif --}}
                        <section class="col-lg-6 p-5 bg-blue-normal1">
                            <div class="text-center">
                                <h2 class="h3-text mt-1 mb-3 pb-1 p-bold font-yellow-light1">Reset Password</h2>
                            </div>
                            <form action={{ route('reset.pass') }} method="POST">
                                @csrf
                                <div class="d-flex flex-column justify-content-between" style="height: 75vh">
                                    <div class="d-flex flex-wrap">

                                        <input type="hidden" value={{ $token }} name="token">

                                        <!-- Email input -->
                                        <div class="form-outline mb-4 d-grid gap-2 col-10 mx-auto fw-semibold">
                                            <label class="form-label font-yellow-light1 par-text p-medium mb-0" for="email">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text fw-bold font-blue-dark2 bg-yellow-light2">@</span>
                                                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                                            </div>
                                        </div>
                                        
                                        <!-- Password input -->
                                        <div class="form-outline mb-5 d-grid gap-2 col-10 mx-auto fw-semibold">
                                            <label class="form-label font-yellow-light1 par-text p-medium mb-0" for="password">Password Baru</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text font-blue-dark2 bg-yellow-light2"><i class="bi bi-lock-fill"></i></span>
                                                <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex flex-wrap">
                                        <!-- Submit credential button -->
                                        <div class="d-grid col-10 mx-auto">
                                            <button type="submit" class="btn btn-yellow-normal">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>