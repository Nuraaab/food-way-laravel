<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_food()
    {
        $category = Catagory::all();
        return view('admin.food.create', compact('category'));
    }
    public function view_category()
    {
        return view('admin.category.create');
    }

    public function category(Request $request)
    {
    //    $request->validate([
    //     'name' => 'required'
    //    ]);
       Catagory::create([
        'name'=>$request->category_name,
       ]);

       return redirect()->back()->with(['message' => 'Category added successfully!']);
    }

    public function add_food(Request $request)
    {
       $food = new Food();
       $category = $request->input('category');
       $food->name = $request->name;
       $food->price =$request->price;
       $food->quantity = $request->quantity;
       $food->catagory =$category;
       $image = $request->image;
       if($image){
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Foods', $imageName);
        $food->image = $imageName;
       }
       $food->save();
       return redirect()->back()->with(['message' => 'Food added successfully!']);
    }

    public function show_food()
    {
        $foods = Food::all();
        return view('admin.food.show', compact('foods'));
    }

    public function delete($id)
    {
        $food = Food::find($id);
            $food->delete();
            return redirect()->back()->with(['message' => 'Food deleted successfully!']);
    }

    public function update($id)
    {
            $food = Food::find($id);
            $category =Catagory::all();

            return view('admin.food.edit', compact('food', 'category'));
    }

    public function edit(Request $request, $id)
    {
        $food = Food::find($id);
        $image = $request->image;
        $category = $request->input('category');
        $food->name = $request->name;
        $food->price =$request->price;
        $food->quantity = $request->quantity;
        $food->catagory =$category;
        if($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Foods', $imageName);
            $food->image = $imageName;
        }
        $food->save();
        return redirect()->back()->with(['message' => 'Food updated successfully!']);
    }

    public function view_user()
    {
        return view('admin.user.create');
    }

    public function add_user(Request $request)
    {
        $role = $request->input('role');
        
        $user = new User();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = $request->password;
        if($role == "Admin"){
            $user->usertype = "1";
        }else{
            $user->usertype = "0";
        }
        $user->save();
        return redirect()->back()->with(['message' => 'User added successfully!']);
    }

    public function show_user()
    {
        $users = User::all();
        return view('admin.user.show', compact('users'));
    }


    public function delete_user($id){
        $user = User::find($id);
            $user->delete();
            return redirect()->back()->with(['message' => 'User deleted successfully!']);
    }
    public function update_user($id)
    {
      $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function edit_user(Request $request, $id){
       $user = User::find($id);
       $role = $request->input('role');
       $user->name =$request->name;
       $user->email =$request->email;
       if($role == "Admin"){
        $user->usertype ="1";
       }else{
        $user->usertype ="0";
       }
       $user->save();
       return redirect()->back()->with(['message' => 'User Updated successfully!']);
    }

    public function show_category(){
        $category = Catagory::all();
        return view('admin.category.show', compact('category'));
    }

    public function delete_category($id)
    {
        $category = Catagory::find($id);

        $category->delete();
        return redirect()->back()->with(['message' => 'Category deleted successfully!']);
    }

    public function update_category($id){
        $category = Catagory::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function edit_category( Request $request, $id)
    {
        $category = Catagory::find($id);
        $category->name =$request->category_name;
        $category->save();
        return redirect()->back()->with(['message' => 'Category Updated successfully!']);
    }

    public function profile(){
        return view('admin.profile.profile');
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $userImage = $request->image;
        if($userImage){
            $imageName = time().'.'.$userImage->getClientOriginalExtension();
            $request->image->move('Foods', $imageName);
            $user->profile_photo_path = $imageName;
        }
        $user->save();
        return redirect()->back()->with(['message' => 'Profile Updated Successfully']);

    }
}
