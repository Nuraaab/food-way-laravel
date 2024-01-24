<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryList;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CategoryApiControllers extends Controller
{
    public function index()
    {
        $category = Catagory::latest()->get();

        $response =[
            'category' => CategoryList::collection($category)
        ];
        return response($response, 200);
    }

}
