<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mini Employee Management System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
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
             <div class="w3-container w3-theme ">
  <p>Welcome Admin</p>
</div>   
<div class=" w3-border w3-container ">
   <form action = "/edit/<?php echo $update_employee[0]->id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<label class="w3-text-theme"><b>First Name</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="first_name" value='<?php echo$update_employee[0]->first_name; ?>'>
  <label class="w3-text-theme"><b>Last Name</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="last_name" value='<?php echo$update_employee[0]->last_name; ?>'>
  <label class="w3-text-theme"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="email" value='<?php echo$update_employee[0]->email; ?>'>
  <label class="w3-text-theme"><b>Address</b></label >
  <input class="w3-input w3-border w3-light-grey" type="text"name="address" value='<?php echo$update_employee[0]->address; ?>'>
  <label class="w3-text-theme"><b>Contact Number</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="contact_number" value='<?php echo$update_employee[0]->contact_number; ?>'>
  <label class="w3-text-theme"><b>Company</b></label>
  <p>Currently Selected: <b class="w3-text-red" style="text-transform: capitalize">@php echo $update_employee[0]->company_name; @endphp</b> </p>
  <select class="w3-select w3-border" name="company">
 @foreach ($company as $company1)
<option value='{{ $company1->id }}'>{{ $company1->company_name }}</option>>
@endforeach
  </select>
  <button class="w3-btn w3-theme w3-margin-bottom w3-margin-top" type="submit">Update Employee</button>
  <a href="/employee">Cancel</a>
</form>


</div>


        </div>
    </body>
</html>
