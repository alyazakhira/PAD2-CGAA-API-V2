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
    <style>
        body{
            margin: 0.5rem;
        }
        .box-top{
            width: 100%;
            border-radius: 0.5rem 0.5rem 0 0;
            height: 3rem;
            background-color: #c7cbfa;
        }
        .box-bottom{
            width: 100%;
            border-radius: 0 0 0.5rem 0.5rem;
            height: 3rem;
            background-color: #c7cbfa;
        }
        img{
            width: 15%;
            height: 20%;
        }
        .body-email{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            align-items: center;
            background-color: white;
            margin: 1rem 0 1rem 0;
        }
        h3{
            font-weight: bold;
        }
        .desc{
            width: 75%;
            text-align: center;
        }
        a#btn_reset{
            background-color: #3b46bf; 
            color: white; 
            padding: 0.4rem; 
            text-decoration: none;
            border-radius: 0.5rem;
        }
        .rule{
            height: 1px;
            background-color: #2c348f;
            margin-bottom: 0.5rem;
        }
        .cp{
            font-size: smaller;
            text-align: center;
        }
        .footer{
            width: 75%;
            display: flex;
            flex-direction: column;
            margin-top: 3rem;
        }
        .in-footer{
            display: flex;
            justify-content: space-between;
        }
        .nav{
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        li{
            margin-left: 1rem;
        }
        ul, .cp{
            margin-top: 0;
        }
    </style>
</head>
<body>
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
</body>
</html>