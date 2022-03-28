<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

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
        return view("admin.foodmenu");
    }

    public function upload(Request $request)
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
}
