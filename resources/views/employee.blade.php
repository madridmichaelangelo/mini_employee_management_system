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
   

    <div class="w3-container">
    

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
     <h2 class="w3-padding w3-theme">Enter Employee Details</h2>
     <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
<form class="w3-container w3-margin w3-padding" method="post" name="add_employee" action="add_employee">
    {{ csrf_field() }}
  <label class="w3-text-theme"><b>First Name</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="first_name" >
  <label class="w3-text-theme"><b>Last Name</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="last_name" >
  <label class="w3-text-theme"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="email" >
  <label class="w3-text-theme"><b>Address</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="address" >
  <label class="w3-text-theme"><b>Contact Number</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text"name="contact_number" >
  <label class="w3-text-theme"><b>Company</b></label>
 <!-- <input class="w3-input w3-border w3-light-grey" type="text"name="company" >-->
  <select class="w3-select w3-border" name="company">
 @foreach ($company as $company1)
<option value='{{ $company1->id }}'>{{ $company1->company_name }}</option>>

@endforeach
  </select>
  
  <button class="w3-btn w3-theme w3-margin-bottom w3-margin-top" type="submit">Add Employee</button>
 
  


</form>
    </div>
  </div>
</div>
 



<div>
    <a href="/company"><button class="w3-button w3-theme w3-right w3-margin-bottom w3-margin-top w3-margin-left">View Companies</button></a> 

    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-theme w3-right w3-margin-bottom w3-margin-top">Add Employee</button>

<table class="w3-table-all ">
    <tr class="w3-theme">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Contact Number</th>
      <th>Company</th>
      <th>Action</th>
    </tr>
    @foreach ($view_employees as $view_employee)
    <tr>
    <td>{{ $view_employee->first_name }}</td>
    <td>{{ $view_employee->last_name }}</td>
    <td>{{ $view_employee->email }}</td>
    <td>{{ $view_employee->address }}</td>
    <td>{{ $view_employee->contact_number}}</td>
    <td style="text-transform: capitalize">{{ $view_employee->company_name }}</td>
    <p>
   
    </p>
    <td>
    <a href = 'edit/{{ $view_employee->id }}'>Edit</a>
    <a href = 'delete/{{ $view_employee->id }}'>Delete</a>
    </td>
</tr>
@endforeach
  </table>

</div>


</div>

        </div>
    </body>
</html>
