<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class manageArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.addArticle');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'article_title' => 'required|min:4|unique:articles',
            'article_body' => 'required|min:150',
            'article_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->article_image->getClientOriginalExtension();
        request()->article_image->move(public_path('images'), $imageName);
        $var = new Article();
        $var->article_title = $request->input('article_title');
        $var->article_body = $request->input('article_body');
        $var->article_image = $imageName;
        $var->save();
        return redirect('admin/viewArticle')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('Admin.editArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'article_title' => 'required|min:4',
            'article_body' => 'required|min:150',
            'article_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->article_image)){
            $article = Article::find($id);
            $imageName= $article-> article_image;
            File::delete(public_path('images/'.$imageName));
            $imageName = time().'.'.request()->article_image->getClientOriginalExtension();
            request()->article_image->move(public_path('images'), $imageName);
        }
        else {
            $article = Article::find($id);
            $imageName= $article-> article_image;
        }

        $article = Article::find($id);
        $article->article_title =  $request->get('article_title');
        $article->article_body = $request->get('article_body');
        $article->article_image = $imageName;
        $article->save();

        return redirect('admin/viewArticle')->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        File::delete(public_path('images/'.$article->article_image));
        $article->delete();
        return back()->with('success', 'Article deleted!');
    }
}
