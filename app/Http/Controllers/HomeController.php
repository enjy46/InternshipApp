<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('Home');
    }
    public function index()
    {
        $data['getRecord'] = Article::getRecord();
        return view('Article', $data);
    }


    public function add()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        $article = new Article ; 
        $article->name =$request->name;
        $article->category =$request->category;
        $article->description =$request->description;
        $article->save();
        return redirect()->route('article'); 
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('Details', compact('article'));
    }
}
