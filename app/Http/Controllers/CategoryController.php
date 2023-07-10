<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        return view('backend.pages.category');
    }

    public function index()

    {
        $category=Category::paginate(5);
        return view('backend.pages.category.index',compact(('category')));
    }
    public function create()
    {
        return view('backend.pages.category.create');
    }
    public function store(Request $request)
     

    {
        $request->validate
        ([
            'name'=>'required',
            'description'=>'required'
        ]);

        Category::create([

            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->back()->with('msg','Created successfully.');
    }
}












