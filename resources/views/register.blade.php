<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
              
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .register-form{
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            .register-form__container{
                background-color: #fff;
                border-radius: 4px;
                padding: 20px;
            }
            .register-form__header{
                text-align: center;
                margin-bottom: 20px;
            }
            .register-form__title{
                font-size: 20px;
                font-weight: 600;
                color: #333;
            }
            .register-form__form{
                margin-bottom: 20px;
            }
            .register-form__group{
                margin-bottom: 20px;
            }
            .register-form__label{
                display: block;
                margin-bottom: 5px;
                font-weight: 500;
                color: #333;
            }
            .register-form__input{
                width: 100%;
                height: 40px;
                border-radius: 4px;
                border: 1px solid #ccc;
                padding: 0 10px;
                font-size: 16px;
            }
            .register-form__button{
                width: 100%;
                height: 40px;
                border-radius: 4px;
                border: none;
                background-color: #333;
                color: #fff;
                font-size: 16px;
            }
            .register-form__error{
                color: red;
                font-size: 14px;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="register-form"> 
                <div class="register-form__container">
                    <div class="register-form__header">
                        <h3 class="register-form__title">Register</h3>
                    </div>
                    <form action="{{ route('registerUser') }}" method="POST" class="register-form__form">
                        @csrf
                        <div class="register-form__group">
                            <label for="name" class="register-form__label">Username</label>
                            <input type="text" name="name" id="name" class="register-form__input">
                        </div>
                        <div class="register-form__group">
                            <label for="email" class="register-form__label">Email</label>
                            <input type="text" name="email" id="email" class="register-form__input">
                        </div>
                        <div class="register-form__group">
                            <label for="password" class="register-form__label">Password</label>
                            <input type="password" name="password" id="password" class="register-form__input">
                        </div>
                        <div class="register-form__group">
                            <label for="confirm_password" class="register-form__label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="register-form__input">
                        </div>

                        <div class="register-form__group">
                            <button type="submit" class="register-form__button">Register</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
