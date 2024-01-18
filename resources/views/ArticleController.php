<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('/addArticle');
    }
    public function showArticles(){
        $articles = Article::paginate(3);
        return view("home" , [ "articles" => $articles ] );
    }
    public function showArticle(Request $request){
        $article = Article::find($request->id);
        
        return view("article" , [ "article" => $article ] );
    }

    public function storeArticle(Request $request){
        $article = new Article;
        $article->titre = $request->titre;
        $article->slug = $request->slug;
        $article->content = $request->content;
        $article->save();
        return redirect("addArticle")->with("success","Article added successfully!");
    }
}
