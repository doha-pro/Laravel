<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function list()
    {
        // get list of the cateories 
        $categories = Category::all(); // SELECT * from categories;
        // $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('category.list',['categories'=>$categories ]);
    }
    public function updateShow($id)
    { 
        $category = DB::table('categories')->where('id', $id)->first();
    
        return view('category.update',['category'=>$category ]);
    }
    public function updateCategory(Request $request){
    
        $category= DB::table('categories')
              ->where('id', $request->id)
              ->update(['name' => $request->name]);
        return redirect()->route('categories.list');
       
    }

    public function create()
    {
        return view('category.create');
    }

    public function save(Request $request)
    {
        $category = new Category;
        $category -> name = $request -> name;
        $category->save(); // INSERT INTO TABLE 

        return redirect()->route('categories.list');
        // save new category
    }

    public function delete($id)
    {
        $category = DB::table('categories')->where('id', '=', $id)->delete();

       
        return redirect()->route('categories.list');
}
}
