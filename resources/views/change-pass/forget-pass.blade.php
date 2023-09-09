<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="header" style="border-style: solid; border-color: darkgray; border-radius: 5px 5px 0px 0px; background-color: darkgray; padding: 5px 0px 5px 0px">
        <p style="font-size: 18px; text-align: center; color: white; margin-bottom: 0px; font-weight: bold">Forget Password Email</h3>
    </div>
    <div class="content" style="margin-bottom: 30px; min-height: 200px; background-color: lightgrey; display: flex; flex-direction: column; align-items: center; justify-content: center">
        <div>
            <p>You can reset password from bellow link:</p>
        </div>
        <div>
            <a href="{{ route('reset.pass.form', $token) }}" type="button" style="background-color: blue; color: white; border-radius: 10px; padding: 5px; text-decoration: none; padding: 10px">Reset Password!</a>
        </div>     
    </div>
</div>
    <!-- <div class="d-flex flex-column border border-2">
        <div class="d-flex border border-2 border-secondary">
            <h>Forget Password Email</h1>
        </div>
    </div>
    <h1>Forget Password Email</h1> -->
    
    <!--You can reset password from bellow link:
    <a href="{{ route('reset.pass.form', $token) }}">Reset Password</a> -->
</body>
</html>
