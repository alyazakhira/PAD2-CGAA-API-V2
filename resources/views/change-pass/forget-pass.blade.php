{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <div class="card">
        <div class="header" style="border-style: solid; border-color: darkgray; border-radius: 5px 5px 0px 0px; background-color: darkgray; padding: 5px 0px 5px 0px">
            <p style="font-size: 18px; text-align: center; color: white; margin-bottom: 0px; font-weight: bold">Reset Password Email</h3>
        </div>
        <div class="content" style="margin-bottom: 30px; min-height: 200px; background-color: lightgrey; display: flex; flex-direction: column; align-items: center; justify-content: center">
            <div>
                <p>You can reset password from bellow link:</p>
            </div>
            <br>
            <div>
                <a href="{{ route('reset.pass.form', ['token'=>$token, 'email'=>$email]) }}" type="button" style="background-color: blue; color: white; border-radius: 10px; padding: 5px; text-decoration: none; padding: 10px">Reset Password</a>
            </div>     
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
{{-- <body>
    <div class="box-top"></div>
    <div class="body-email">
        <h3>Selamat Datang!</h3>
        <img src="{{ asset('/images/email-icon.png') }}">
        <p class="desc">Tekan tombol di bawah ini untuk mengubah password Anda</p>
        <a id="btn_reset" href="{{ route('reset.pass.form', ['token'=>$token, 'email'=>$email]) }}" type="button">Reset Password</a>
        <div class="footer">
            <div class="rule"></div>
            <div class="in-footer">
                <p class="cp">© DEB, Sekolah Vokasi, UGM</p>
                <ul class="nav">    
                    <li>
                        <a href="mailto:asp-deb.sv@ugm.ac.id">
                            <img src="{{ asset('/images/email.svg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a  href="https://www.facebook.com/d4aspugm?mibextid=ZbWKwL">
                            <img src="{{ asset('/images/facebook.svg') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a  href="https://instagram.com/asp.ugm?igshid=MzRlODBiNWFlZA==">
                            <img src="{{ asset('/images/instagram.svg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="box-bottom"></div>
</body> --}}

<body >
    <center>
        <div style="background-color: #c7cbfa; padding: 1rem; border-radius: 10px; width: 75%;">
            <center><b><h3>Selamat Datang!</h3></b></center>
            <center><p>Tekan tombol di bawah ini untuk mengubah password Anda</p></center>
            <center>
                <a style="background-color: #3b46bf;  color: white; padding: 0.5rem; text-decoration: none; border-radius: 0.5rem;" href="{{ route('reset.pass.form', ['token'=>$token, 'email'=>$email]) }}" type="button">
                    Reset Password
                </a>
            </center>
        </div>
    </center>
</body>

</html>