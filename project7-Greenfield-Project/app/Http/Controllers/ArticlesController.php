<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\Faq;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles =  Article::orderBy('article_title', 'desc')->paginate(3);
        $questions = Faq::where('question_status', true)->get()->take(5);
        return view('Public.articles', compact('articles', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comment_store()
    {
        request()->validate([
            'comment_body' => 'required',
        ]);
        $comment = new Comment;
        $comment->comment_body = request()->comment_body;
        $comment->user_id=Auth::id();
        $comment->article_id=request()->id;
        $comment->save();
        return redirect()->back();
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
            'name' => 'required',
            'email' => 'required',
            'context' => 'required',
        ]);

        //
        $faq = new Faq;
        $faq->question_owner_name = $request->input('name');
        $faq->question_owner_email = $request->input('email');
        $faq->question_context = $request->input('context');

        $faq->save();

        return redirect('/articles')->with('success', 'sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($article_id)
    {
        $article = Article::find($article_id);
        $comments= Comment::where("article_id",$article_id)->orderBy("updated_at","desc")->get();
        return view('Public.single_Article',compact('article','comments'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
