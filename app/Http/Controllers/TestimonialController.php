<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Testimonial::all();
        return view('pages.testimonial', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = new Testimonial();
        $image = $request->image;
        if($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Foods', $imageName);
            $comment->avator = $imageName;
        }
        $comment->name = $request->name;
        $comment->usertype = 'Customer';
        $comment->comment = $request->comment;

        $comment->save();

        return redirect()->back()->with(['message' => 'Thankyou for your comment!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
