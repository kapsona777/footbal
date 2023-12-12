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
        </style>
    </head>
    <body class="antialiased">
        <!-- go back button -->
        <div class="flex-row"> 
            <a href = "{{ url('/viewTeams') }}" class="viewPlayersBtn">See Teams</a>
        </div>
        <div class="relative flex-column items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> 
            @foreach($teams as $team) 
            <h1>Players of {{$team->name}} </h1> 
            @endforeach
            <div class="flex-row gap-4"> 
                @foreach($players as $player)
                <div class="flex-column fulldiv p-6"> 
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>{{$player->name}}</td>
                        </tr>
                        <tr>
                            <td>Lastname</td>
                            <td>{{$player->lastname}}</td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>{{$player->age}}</td>
                        </tr>
                        <tr>
                            <td>Team</td>
                            <td>{{$player->team_id}}</td>
                        </tr>
                        <tr>
                            <td>Team Name</td>
                            @foreach($teams as $team)
                            <td>{{$team->name}}</td>
                            @endforeach
                        </tr>
                    </table>
                </div> 
                @endforeach
            </div> 
        </div>
    </body>
</html> 