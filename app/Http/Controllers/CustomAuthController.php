<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\role;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function Login(){

        return view("auth.Login");
        
    }
    public function Registration(){

        $mem = array();
        $mem = role::all();
         
        return view("auth.Registration",compact('mem'));
       

    }
    public function RegisterUser(Request $request){
        
        // return view("auth.Registration");
        // echo "Welcome";
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  
        $user->role = $request->role;

        $res = $user->save();
        if($res){
            return back()->with('Success','You Have registered Sucessfully');
        }
        else{
            
            return back()->with('Fail','Something Went Wrong');
        }
        
        
    }
    public function loginUser(Request $request){
        
        // $request->validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        
        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('deshboard');
            }
            else{
                return back()->with('Fail','Incorrect Password');
            }
        }
        else{
            return back()->with('Fail','User Doesnt exits');
        }
    
    }
    public function deshboard(){

        $data = array();
        if(Session::has('loginId')){
            // return Session::get('loginId');
           $data = User::where('id','=',Session::get('loginId'))->first();
        }

        

        $mem = User::all();
       
        // $me = role::all();
        return view('deshboard',compact('data'),['User'=>$mem]);
       
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');

        }
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('deshboard');

    }

    public function showdata($id){
        $data = User::find($id);
        $mem = array();
        $mem = role::all();
        return view('update',['data'=>$data],compact('mem'));
        
    }
    public function visual($id){
        $data = User::find($id);
        return view('show',['data'=>$data]);
        
    }
    public function update(Request $req){
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->role=$req->role;
        $data->save();
        return redirect('/deshboard');


        
    }


    public function crtrole(){ 
       
        // return (Compact('mem'));        
        return view("createrole");
    }


    public function enterrole(Request $request){
        $roles = new role();
        $roles->role = $request->role;   
        $res = $roles->save();
        if($res){
            return back()->with('Success','New Role Created');
        }
        else{
            return back()->with('Fail','Something Went Wrong');
        }
        // return redirect('deshboard');
        // $mem = array();

        // $mem = role::all();
        // // $mem = 'deepanshu';
        // // echo '<pre>';
        // // print_r($mem);
        // // return view('CreateRole',['User'=>$mem]);
        // return view('CreateRole',compact('mem'));
    }


    public function rolemanage(){



        $mem = array();
        $mem = role::all();
         
        return view("rolemange",compact('mem'));

    }



    public function deleterole($id){


        $role = role::find($id);

        
        $data = User::where('role','=', $role->role)->first();

        if(!$data){

            $role->delete();
            return redirect('rolesmanagment');

        }

        else{

            return back()->with('Fail','Cant delete this role already asign to '.$data['name']);

        }







    }
}
