<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Document</title>
</head>
<body>


    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">A lightweight and simple sign-up form</h1>
        </header>
        
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
                <input type="text" placeholder="Username" name="name" class="form__input" />
            </div>
            
            <div class="form__group">
                <input type="email" placeholder="Email" name="email" class="form__input" />
            </div>
            
            <div class="form__group">
                <input type="password" placeholder="Password" name="pwd" class="form__input" />
            </div>
            
            <button class="btn" type="submit">Register</button>
        </form>
    </div>
    
</body>
</html>