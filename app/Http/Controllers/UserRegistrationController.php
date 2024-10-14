<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use Mail; 
use DB;
class UserRegistrationController extends Controller
{
    public function userregistration(request $request){
    $response = 0;
    $data = array();

    $password = Hash::make($request->password);

    $messages = [
        'email.unique' => 'The email address is already taken.',
        'phone.unique' => 'The phone number is already taken.',
        'password.min' => 'The password must be at least 4 characters long.',
        'password.confirmed' => 'The password and confirmation password do not match.',
        'email.required' => 'Email  is required.',
        'phone.required' => 'Phone numberis required.',
        'name.required' => 'Name is required.',
    ];
    
    $validator = $request->validate([
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|unique:users,phone',
        'password' => 'required|min:4|confirmed',
        'password_confirmation' => 'required',
        'name' => 'required',
    ], $messages);



    
    if ($validator) {

        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['password']= $password;
        $data['date']= Carbon::today()->toDateString();
        $insertData = DB::table('users')->insert($data);

        if($insertData){

        $token = DB::getPdo()->lastInsertId(); 

        $data = ['token'=>$token];

        $sendmail = Mail::send('web.verifyaccount', ['data' => $data], function($message) use($request){
            $message->to($request->email);
            $message->subject('Verify account');
        });

        $response = 2;
        return json_encode($response);
   
        }
        else{


            $response = 3;
            return json_encode($response);
       
         
        }

      
    }   
    else {
     
        return back()->withErrors($validator)->withInput();
    }
    
    

    }
}
