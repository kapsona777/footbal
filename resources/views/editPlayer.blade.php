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
        
        *{
            background-color: #282c2e;
            color:#fff;
        }

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }


            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
            }

            body {
                margin: 0;
            }

            a {
                background-color: transparent;
            }

            [hidden] {
                display: none;
            }

            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                line-height: 1.5;
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(1, minmax(0, 1fr));
            } 

            .p-6 {
                padding: 1.5rem;
            }

            .border-b {
                border-bottom-width: 1px;
            } 

            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .gap-4 {
                gap: 1rem;
            }

            .relative {
                position: relative;
            }

            .flex{
                display: flex; 
            } 

            .items-center {
                align-items: center;
            }

            .font-semibold {
                font-weight: 600;
            }

            .h-5 {
                height: 1.25rem;
            }

            .flex-column{
                display:flex;
                flex-direction: column;
            }

            .flex-row{
                display:flex;
                flex-direction: row;
            }

            .h-8 {
                height: 2rem;
            }

            .justify-center {
                justify-content: center !important;
            }

            .viewPlayersBtn{
                color: #fff;
                text-decoration: underline;
                cursor: pointer;
                background-color:#282c2e;
            }

            .fulldiv{
                border-radius: .5rem; 
                border:1px solid #fff !important; 
            } 

            .editBtn{
                color: #fff;
                text-decoration: underline;
                cursor: pointer;
                background-color:#282c2e;
            }

            .logoutButton{
                margin-top: 20px;
                background-color:white;
                border-radius: .5rem;
                padding: 10px; 
            }

            .editable-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100vh;
                background-color: #282c2e;
                color: #fff;
            }

            .editable-content input {
                width: 100%;
                max-width: 400px;
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
                border: 1px solid #fff;
                background-color: #282c2e;
                color: #fff;
            }

            .editable-content img {
                width: 100%;
                max-width: 400px;
                margin-bottom: 10px;
            }

            .editable-content button {
                width: 100%;
                max-width: 400px;
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
                border: 1px solid #fff;
                background-color: #282c2e;
                color: #fff;
            }

            .editable-content button:hover {
                background-color: #fff;
                color: #282c2e;
                border: 1px solid #282c2e;
            }

            .editable-content a {
                width: 100%;
                max-width: 400px;
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
                border: 1px solid #fff;
                background-color: #282c2e;
                color: #fff;
                text-decoration: none;
            }

            .editable-content a:hover {
                background-color: #fff;
                color: #282c2e;
                border: 1px solid #282c2e;
            }

            .editable-content .error {
                color: red;
                font-size: 12px;
                margin-bottom: 10px;
            }

        </style>
    </head>
    @if(session('user'))
    <body class="antialiased">  
        <div class="editable-content">
            <!-- player name,lastname, age,team_id -->
            <form action="/updatePlayer/{{$player->id}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$player->id}}">
                <input type="text" name="name" placeholder="Player Name" value="{{$player->name}}">
                <input type="text" name="lastname" placeholder="Player Lastname" value="{{$player->lastname}}">
                <input type="number" name="age" placeholder="Player Age" value="{{$player->age}}">
                <select name="team_id">
                    @foreach($teams as $team)
                        <option value="{{$team->id}}" @if($team->id == $player->team_id) selected @endif>{{$team->name}}</option>
                    @endforeach
                </select>
                <button type="submit">Edit Player</button>
        </div>
    </body> 
    @else

        <body class="antialiased">
            <div class="flex-column relative flex-column justify-center">
                <div class="flex-row justify-center">
                    <h1 class="text-4xl">Please Login</h1>
                </div>
                <div class="flex-row justify-center">
                    <a href="/login" class="flex-row justify-center editBtn">Login</a>
                </div>
            </div>
        </body>
    
    @endif
</html> 