<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use App\Models\order;
use App\Models\message;

class HomeController extends Controller
{
    /*public function first1(){
        return "Hello world";
    }
    public function second2(){
        return view('bookstore/bookstore');
    }
    public function userid($id){
        return 'welcome user ' . $id;
    } */

    //------------------------------------retrieving data from accounts table------------------------------------
    public function show(){
        $data = account::all();
        return view('bookstore/account' , ['accounts' => $data]);
     
    }
    //------------------------------------retrieving data from orders table------------------------------------
    public function show2(){
        $data = order::all();
        return view('bookstore/order' , ['orders' => $data]);
    
    }
    //------------------------------------retrieving data from feedbacks table------------------------------------
    public function show3(){
        $data = message::all();
        return view('bookstore/feedback' , ['messages' => $data]);
    
    }
    //----------------------------------------for inserting data into account table--------------------------------
    public function show4(Request $req){
        $account = new account;
        $account->name = $req->name;
        $account->lastname = $req->lastname;
        $account->username = $req->username;
        $account->email = $req->email;
        $account->password = $req->password;
        $account->save();
      // return back()->with('alert',"you've successfully signed up!");
       //return redirect('/account');
       return redirect('/message');
    }
     //----------------------------------------for inserting data into order table--------------------------------
    public function show5(Request $req){
        $order = new order;
        $order->book_name = $req->book_name;
        $order->author_name = $req->author_name;
        $order->name_of_user = $req->name_of_user;
        $order->phoneNumber = $req->phoneNumber;
        $order->address = $req->address;
        $order->save();
       return redirect('/order');
    }
     //----------------------------------------for inserting data into feedbacks table--------------------------------
    public function show6(Request $req){
        $message = new message;
        $message->name = $req->name;
        $message->email = $req->email;
        $message->message= $req->message;
        $message->rating = $req->rating;
        $message->save();
       return redirect('/feedback');
    }
    //-------------------------------------------for deleting accounts---------------------------------------------
  public function delete($id){
    $data = account::find($id);
    $data->delete();
    return redirect('/account');
     }
      //-------------------------------------------for deleting feedbacks---------------------------------------------
  public function delete2($id){
    $data = message::find($id);
    $data->delete();
    return redirect('/feedback');
      }
       //-------------------------------------------for deleting orders in single action controller----------------
       //...
       //-------------------------------------------for updating order records-------------------------------------
  public function edit(Request $req){
    $data = order::find($req->id);
    $data->book_name=$req->book_name;
    $data->author_name=$req->author_name;
    $data->name_of_user=$req->name_of_user;
    $data->phoneNumber=$req->phoneNumber;
    $data->address=$req->address;
    $data->update();
    return redirect('/order');
      }
    //-------------------------------------------for updating account records-------------------------------------
      public function edit2(Request $req){
        $data = account::find($req->id);
        $data->name=$req->name;
        $data->lastname=$req->lastname;
        $data->username=$req->username;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->update();
        return redirect('/account');
          }
          //-------------------------------------------for updating feedback records-------------------------------------
          public function edit3(Request $req){
            $data = message::find($req->id);
            $data->name=$req->name;
            $data->email=$req->email;
            $data->message=$req->message;
            $data->rating=$req->rating;
            $data->update();
            return redirect('/feedback');
              }
}
