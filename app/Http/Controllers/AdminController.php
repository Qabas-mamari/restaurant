<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Food, Foodchef, Reservation, Order};

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteUsers($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()-back();
    }

    public function foodmenu()
    {
        $data = food::all(); //food is the table name

        return view("admin.foodmenu", compact("data"));
    }

    public function uploadfood(Request $request)
    {
        $data = new food;

        $data->title = $request->title; // first title indicate to field name in table, second indicate to the input name in form
        $data->price = $request->price;

        $image = $request->image;  // second "image" indicated the input name on foodmenu form
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename); // foodimage is a folder to upload the image "public\foodimage"
        $data->image = $imagename; // second "image" indicated to the field name on food table

        $data->description= $request->description;

        $data->save();
        return redirect()->back();
    }

    public function deleteMenu($id){
        $data= food::find($id);
        $data->delete();
        return redirect()->back();
    }

     public function reservation(Request $request)
    {
        $data = new reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data = reservation::all();
        return view('admin.adminreservation', compact("data"));
    }

    public function viewchef()
    {
        $data = foodchef::all();
        return view('admin.adminchef', compact('data'));
    }

    public function uploadchef(Request $request)
    {
        $data = new foodchef;

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodchef', $imagename);
        $data->image = $imagename;

        $data->save();
        return redirect()->back();

    }

    public function updatechef($id)
    {
        $data= foodchef::find($id);
        return view('admin.updatechef', compact('data'));
    }

    public function updatefoodchef(Request $request, $id)
    {
       $data = foodchef::find($id);

       $data->name = $request->name;
       $data->speciality = $request->speciality;

       $image = $request->image;
       if ($image) {
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodchef', $imagename);
        $data->image = $imagename;
       }

       $data->save();
       return redirect()->back();

    }
    public function deletechef($id)
    {
        $data= foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders()
    {
        $data = order::all();
        return view('admin.orders', compact('data'));
    }
}
