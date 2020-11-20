<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use DB;

class EmployeeController extends Controller
{
    public function index(){

	return view('welcome');
    }

    public function login(Request $login){

    	
    	$email = $login->email;
    	$password=  $login->password;

    	if($email =="admin" && $password=="1234"){
    		
    		return redirect('/employee');
    	}
    	else{

    		return redirect('/welcome');

    	}

    }
    public function add_employee(Request $employee){
    	$data = $employee->input();
    	$new_employee = new Employee;
       	$new_employee ->first_name = $data['first_name'];
       	$new_employee ->last_name = $data['last_name'];
      	$new_employee ->email = $data['email'];
       	$new_employee ->address = $data['address'];
       	$new_employee ->contact_number = $data['contact_number'];
       	$new_employee ->company = $data['company'];
       	echo $new_employee->save();
       	return redirect('/employee');
    }
    public function view_employee(){
    	
    	$view_employees = DB::select('SELECT employee.id,employee.first_name,employee.last_name,employee.email,employee.address,employee.contact_number,company.company_name FROM employee INNER JOIN company on employee.company=company.id');

		$company = DB::select('select * from company');
		

		return view('/employee', compact('company', 'view_employees'));

    }

    public function update_employee($id) {
$update_employee = DB::select('SELECT employee.id,employee.first_name,employee.last_name,employee.email,employee.address,employee.contact_number,company.company_name FROM employee INNER JOIN company on employee.company=company.id where employee.id = ?',[$id]);
$company = DB::select('select * from company');
return view('/update_employee', compact('company', 'update_employee'));


}

	public function update_employee_action(Request $request,$id) {
$first_name = $request->input('first_name');
$last_name = $request->input('last_name');
$address = $request->input('address');
$email = $request->input('email');
$contact_number = $request-> input('contact_number');
$company = $request->input('company');

DB::update('update employee set first_name = ?,last_name=?,email=?,address=?,contact_number=?,company=? where id = ?',[$first_name,$last_name,$email,$address,$contact_number,$company,$id]);
	return redirect('/employee');
}

	public function delete_employee($id) {
DB::delete('delete from employee where id = ?',[$id]);
return redirect('/employee');
}

	public function table_company(){
		$companies = Company::all();

	}

	public function view_company(){
		$view_employees = DB::select('SELECT employee.id,employee.first_name,employee.last_name,employee.email,employee.address,employee.contact_number,company.company_name FROM employee INNER JOIN company on employee.company=company.id');

		$company = DB::select('select * from company');
		

		return view('/company', compact('company', 'view_employees'));

	}
  public function company_employees($cid) {
$company_employees = DB::select('SELECT employee.id,employee.first_name,employee.last_name,employee.email,employee.address,employee.contact_number,company.company_name FROM employee INNER JOIN company on employee.company=company.id where company.id = ?',[$cid]);
$company = DB::select('select * from company where id = ?',[$cid]);
return view('/company_employees', compact('company', 'company_employees'));


}
}
