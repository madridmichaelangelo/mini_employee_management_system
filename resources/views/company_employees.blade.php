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
   


<div>
    <a href="/company"><button class="w3-button w3-theme w3-right w3-margin-bottom w3-margin-top w3-margin-left">View Companies</button></a> 

  @foreach ($company as $comp)
  <h1>{{ $comp->company_name }}</h1>
  @endforeach   


<table class="w3-table-all ">
    <tr class="w3-theme">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Contact Number</th>
      
      
    </tr>
    @foreach ($company_employees as $company_employee)

    <tr>
    <td>{{ $company_employee->first_name }}</td>
    <td>{{ $company_employee->last_name }}</td>
    <td>{{ $company_employee->email }}</td>
    <td>{{ $company_employee->address }}</td>
    <td>{{ $company_employee->contact_number}}</td>
    
    
    
</tr>
@endforeach
  </table>

</div>


</div>

        </div>
    </body>
</html>
