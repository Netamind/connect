<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{

    
    public function admindashboard(){

        return view('admin.dashboard');

    }

    public function users(){

        return view('admin.users');

    }

    public function categories(){

        return view('admin.categories');

    }

    public function appdata(){

        return view('admin.appdata');

    }

    public function updateappdatageneral(request $request){

        $data = array();
        $response ="";

        $data['appname']=$request->appname;
        $data['applink']=$request->applink;
        $data['apptitle']=$request->apptitle;

        $checkRow = DB::table('appdata')->count();

        if($checkRow>0){

          $updateData =  DB::table('appdata')->update($data);

          if($updateData){

             $response= 2;
             return json_encode($response);
          }
          else{
            $response= 1;
            return json_encode($response);

          }


        }

        else{

          $insertData = DB::table('appdata')->insert($data);
          if($insertData ){
            $response= 4;
            return json_encode($response);
         }
         else{
           $response= 3;
           return json_encode($response);

         }

        }


    }


    public function updateappdatacontact(request $request){

        $data = array();
        $response ="";

        $data['appaddress']=$request->appaddress;
        $data['appcontact']=$request->appcontact;
        $data['appemail']=$request->appemail;

        $checkRow = DB::table('appdata')->count();

        if($checkRow>0){

          $updateData =  DB::table('appdata')->update($data);

          if($updateData){

             $response= 2;
             return json_encode($response);
          }
          else{
            $response= 1;
            return json_encode($response);

          }


        }

        else{

          $insertData = DB::table('appdata')->insert($data);
          if($insertData ){
            $response= 4;
            return json_encode($response);
         }
         else{
           $response= 3;
           return json_encode($response);

         }

        }


    }





}
