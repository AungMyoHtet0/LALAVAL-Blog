<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        //$categories = Category::latest('id')->simplepaginate(5);
        $categories = Category::when(request('search'), function($query) {
            $query->where('name', 'like', "%" . request('search') . "%");
        })
        ->latest('id')
        ->paginate(5)
        ->withQueryString();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
       return view('categories.create');
    }

    public function store(CategoryRequest $request){

        Category::created([
            'name'=> $request->name
        ]);
        return redirect('category')->with('success','Category Create Success');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name
        ]);

        return redirect('categories')->with('success', 'A category was updated successfully.');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return back()->with('success', 'A category was deleted successfully.');
    }

   
}
