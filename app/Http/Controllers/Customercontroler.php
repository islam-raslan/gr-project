<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\customer;
    use Illuminate\Support\Facades\DB;
class Customercontroler extends Controller{
    
     function AddCustomer(Request $req){
         $email = $req->input()['email'];
         $query = DB::select("select email from customers where email='{$email}'");
         if(count($query) == 0){
            $Customer= new customer;
            $Customer->email=$req->email;
            $Customer->password=$req->password;
            $Customer->name=$req->name;
            $Customer->address=$req->address;
            $Customer->phone=$req->phone;
            $Customer->save();
            return redirect('customer_login');
         }
         else {
             return "email already teken";
         }
     }

     function coustomerLogin(Request $req){
        $data=$req->input(); // store data from client to data variable

        $email = $data['email']; //var email store email from client
        $password = $data['password'];//var password store email from client

        // get data from db if email and password from client is already exist in db, if exiest will containe one object unless or empty if not
        $query = DB::select("select email, password from customers where email='{$email}' and password='{$password}'"); 

        //check if query length is bigger than 0 login is success, else login error
        if(count($query) != 0){
            $req->session()->put('email', $data['email']);
            return redirect('home');
        }
        else {
            return redirect('customer_login');
        }
    }

    
}
