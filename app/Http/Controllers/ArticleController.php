<?php
namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.add');
    }
    public function save(ArticleRequest $request){
        $validated = $request->validated();
        $article= new Article;
        $article -> name = $request -> name;
        $article -> details = $request -> details;
        $article -> slug = $request -> slug;
        $article -> category_id = $request -> categoryId;
        $article->save(); // INSERT INTO TABLE 
    
        return redirect()->route('articles.list');
        // save new category
    }
    public function list()
    {
        // get list of the cateories 
        $article = Article::all(); // SELECT * from categories;
        // $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('article.list',['articles'=>$article ]);
    }
    public function updateGet($id)
    { 
        $article = DB::table('articles')->where('id', $id)->first();
    
        return view('article.update',['article'=>$article ]);
    }
    public function updateArticle(ArticleRequest $request){

    
        $validated = $request->validated();
        $article= DB::table('articles')
              ->where('id', $request->id)
              ->update(['name' => $request->name,'details' => $request -> details,'slug' => $request -> slug,'category_id' => $request -> categoryId]);
        return redirect()->route('articles.list');
       
    }
    public function delete($id)
    {
        $article = DB::table('articles')->where('id', '=', $id)->delete();

       
        return redirect()->route('articles.list');
}
}
