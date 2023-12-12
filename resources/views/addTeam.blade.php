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
            .logoutButton{
                margin-top: 20px;
                background-color:white;
                border-radius: .5rem;
                padding: 10px; 
                width:200px; 
                text-decoration:none; 
                font-weight: bold;
                color: #282c2e; 
                cursor: pointer;
                background-color:white; 
            }
            .logoutButton:hover{
                background-color:#282c2e;
                color:white;
                border:1px solid #fff !important;
            }
            .deleteBtn{ 
                background-color:red;
                border-radius: .5rem;
                padding: 5px; 
                width:100px; 
                text-decoration:none; 
                font-weight: bold;
                color: #fff; 
                cursor: pointer;
                background-color: #282c2e;
            }
            .deleteBtn:hover{
                background-color:red;
                color:white;
                border:1px solid #fff !important;
            }
            .editBtn{ 
                background-color:green;
                border-radius: .5rem;
                padding: 5px; 
                width:100px; 
                text-decoration:none; 
                font-weight: bold;
                color: #fff; 
                cursor: pointer;
                background-color:#282c2e; 
            }
            .editBtn:hover{
                background-color:green;
                color:white;
                border:1px solid #fff !important;
            }
             
        </style>
    </head>
    @if(session('user'))
    <body class="antialiased">
        <div class="flex-column relative flex-column justify-center">
            <!-- add team form name,logo -->

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="text-4xl">Add Team</h1>
            </div>

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <form action="{{ route('saveTeams') }}" method="POST" enctype="multipart/form-data" class="flex-column">
                    @csrf
                    <div class="flex-column">
                        <label for="name">Team Name</label>
                        <input type="text" name="name" id="name" class="h-8 border-gray-300 border-2 rounded-md" placeholder="Team Name">
                    </div>
                    <div class="flex-column">
                        <label for="logo">Team Logo</label>
                        <input type="file" name="logo" id="logo" class="h-8 border-gray-300 border-2 rounded-md" accept=".png, .jpg, .jpeg" placeholder="Team Logo">
                        @error('logo')
                            <div class="flex-column">
                                <span class="text-red-500">{{ $message }}</span>
                            </div>
                        @enderror    
                    </div>  
                    <div class="flex-column">
                        <button type="submit" class="h-8 bg-gray-300 rounded-md" id="add_team">Add Team</button>
                    </div> 
                </form>
            </div>

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
