<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body >
    <center>
        <div style="background-color: #c7cbfa; padding: 1rem; border-radius: 10px; width: 75%;">
            <center><b><h3>Selamat Datang!</h3></b></center>
            <center><p>Tekan tombol di bawah ini untuk mengubah password Anda</p></center>
            <center>
                <a style="background-color: #3b46bf;  color: white; padding: 0.5rem; text-decoration: none; border-radius: 0.5rem;" href="{{ route('reset.pass.form', ['email'=>$email,'token'=>$token]) }}" type="button">
                    Reset Password
                </a>
            </center>
        </div>
    </center>
</body>
</html>