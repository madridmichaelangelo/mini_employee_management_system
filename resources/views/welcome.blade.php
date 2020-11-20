<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mini Employee Management System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<div class="w3-display-middle w3-border ">
    <div class="w3-container w3-blue ">
  <p>Hello Admin</p>
</div>

<form class="w3-container w3-margin w3-padding" method="post" name="login_credentials" action="submit">
    {{ csrf_field() }}
  <label class="w3-text-blue"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="email" >
  <label class="w3-text-blue"><b>Password</b></label>
  <input class="w3-input w3-border w3-light-grey" type="password" name="password">
  <button class="w3-btn w3-blue " type="submit">Login</button>
 
  


</form>

</div>


        </div>
    </body>
</html>
