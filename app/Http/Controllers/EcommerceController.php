<?php

namespace App\Http\Controllers;
use App\Models\Tablebook;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Offer;
use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class EcommerceController extends Controller
{
    public function add(Request $req){
        $validation=$req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:booktable,email',
            'password'=>'required|confirmed',
            'pincode'=>'required|max:6'
            ],
            ['password.confirmed'=>'password is not matched'
        ]);if($validation){
        Tablebook::create([
            'firstname'=>$req->firstname,
            'lastname'=>$req->lastname,
            'email'=>$req->email,
            'dob'=>$req->dob,
            'city'=>$req->city,
            'address'=>$req->address,
            'password'=>Hash::make($req->password),
            'confirm'=>Hash::make($req->confirm),
            'gender'=>$req->gender,
            'contact'=>$req->contact,
            'pincode'=>$req->pincode
        ]);return redirect('index')->with('success','Registered Successfully');
    }
    }public function login(Request $req){
        $check=Tablebook::where('email',$req->email)->first();
        if($check && Hash::check($req->password,$check->password)){
            session([
                'id'=>$check->id,
                'email'=>$check->email,
                'firstname'=>$check->firstname,
                'lastname'=>$check->lastname
            ]);
            return redirect('customerdashboard'); 
           
        }else{
            return "login failed";
        }
    }public function addfooditem(Request $req){
        $image=$req->file('image')->store('img','public');
        Item::create([
            'name'=>$req->title,
            'description'=>$req->description,
            'amount'=>$req->amount,
            'image'=>$image,
            'mode'=>$req->mode,
            'type'=>$req->type
        ]);return back();
    }public function newoffer(Request $req){
    Offer::create([
        'title'=>$req->title,
        'description'=>$req->description,
        'discount'=>$req->discount,
        'offercode'=>$req->offercode,
        'startdate'=>$req->startdate,
        'enddate'=>$req->enddate
    ]);

    }public function logout(){
        session::flush();
        return redirect('index');
    }public function change(){
        $customer=Tablebook::where('id',session('id'))->first();
        return view('customer.update',compact('customer'));
    }public function newupdate(Request $req){
        $updating=Tablebook::where('id',session('id'))->update([
            'firstname'=>$req->firstname,
            'lastname'=>$req->lastname,
            'dob'=>$req->dob,
            'city'=>$req->city,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'pincode'=>$req->pincode
        ]);
    }public function createmembership(Request $req){
        $new=Membership::create([
            'title'=>$req->title,
            'description'=>$req->description,
            'amount'=>$req->amount,
            'validity'=>$req->validity,
            'percentage'=>$req->percentage
        ]);
    }public function allfooditem(){
        $fetch=Item::all();
        return view('allitem',compact('fetch'));
    }public function allrice(){
        $fetch=Item::where('type','rice')->get();
        return view('rice',compact('fetch'));
    }public function allchowmein(){
        $fetch=Item::where('type','chowmein')->get();
        return view('chowmein',compact('fetch'));
    }public function allroll(){
        $fetch=Item::where('type','roll')->get();
        return view('roll',compact('fetch'));
    }public function allburger(){
        $fetch=Item::where('type','burger')->get();
        return view('burger',compact('fetch'));
    }public function allmomos(){
        $fetch=Item::where('type','momos')->get();
        return view('momos',compact('fetch'));
        $fetch=Item::where('type','momos')->get();
        return view('momos',compact('fetch'));
    }public function allitem(){
        $fetch=Item::all();
        return view('allitem',compact('fetch'));
    }public function allchaap(){
        $fetch=Item::where('type','chaap')->get();
        return view('chaap',compact('fetch'));
    }public function addcart($id){
        $find=Item::where('id',$id)->first();
        $insert=Cart::create([
            'customerid'=>session('id'),
            'itemid'=>$find->id,
            'name'=>$find->name,
            'description'=>$find->description,
            'amount'=>$find->amount,
            'image'=>$find->image,
            'qty'=>0,
            'total'=>0

        ]);
    }public function cartitem(){
        $allitem=Cart::where('customerid',session('id'))->get();
        return view('cart',compact('allitem'));
    }public function delitem($id){
        $del=Cart::where('customerid',session('id'))->where('id',$id)->delete();
        return back();
    }public function addcoupan(Request $req){
        $check=offer::get()->first();
        $date=Carbon::today();
        $enddate=Carbon::parse($check->enddate);
      
        if($req->coupan == $check->offercode && $date->lte($enddate) ){
            $discount=$check->discount;
            return view('finalamount',compact('discount'))->withInput()->with('success','Coupan Applied');
        }else{
            return back()->withInput()->with('error','invalid code');
        }
    }public function checkoutitem(Request $req){
        $ant=$req->amount;
        $qty=$req->quantity;
        $final=0;
        for($i=0;$i<count($ant);$i++){
                $total=$ant[$i]*$qty[$i];
                $final +=$total;
        }   $net=$final ;
            $cgst=($final*2.5)/100;
            $sgst=($final*2.5)/100;
            $netamount=$net+$cgst+$sgst;
        return view('finalamount',compact('net','cgst','sgst','netamount'));
    }
}
