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
            .auth-form{
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            .auth-form__container{
                background-color: #fff;
                border-radius: 4px;
                padding: 20px;
            }
            .auth-form__header{
                text-align: center;
                margin-bottom: 20px;
            }
            .auth-form__title{
                font-size: 20px;
                font-weight: 600;
                color: #333;
            }
            .auth-form__form{
                margin-bottom: 20px;
            }
            .auth-form__group{
                margin-bottom: 20px;
            }
            .auth-form__label{
                display: block;
                margin-bottom: 5px;
                font-weight: 500;
                color: #333;
            }
            .auth-form__input{
                width: 100%;
                height: 40px;
                border-radius: 4px;
                border: 1px solid #ccc;
                padding: 0 10px;
                font-size: 16px;
            }
            .auth-form__button{
                width: 100%;
                height: 40px;
                border-radius: 4px;
                border: none;
                background-color: #333;
                color: #fff;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
            }
            .auth-form__error{
                color: red;
                font-size: 14px;
            } 


        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h1 class="auth-form__title">Login</h1>
                    </div>
                    <div class="auth-form__form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="auth-form__group">
                                <label for="email" class="auth-form__label">Email</label>
                                <input type="email" name="email" id="email" class="auth-form__input" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="auth-form__error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="auth-form__group">
                                <label for="password" class="auth-form__label">Password</label>
                                <input type="password" name="password" id="password" class="auth-form__input" placeholder="Password">
                                @error('password')
                                    <div class="auth-form__error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="auth-form__group">
                                <button class="auth-form__button">Login</button>
                            </div>

                            <div class="auth-form__group">
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
