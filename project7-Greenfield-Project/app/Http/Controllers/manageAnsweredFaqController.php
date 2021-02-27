<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class manageAnsweredFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all()->where('question_status', '=', '1');
        return view('Admin.viewAnsweredFaq', compact('faqs'));
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
        //
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
        $faq = Faq::find($id);
        return view('Admin.editAnsweredFaq', compact('faq'));
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
        if (!empty(request()->question_answer)){
            $faq = Faq::find($id);
            $faq->question_context =  $request->get('question_context');
            $faq->question_answer = $request->get('question_answer');
            $faq->save();
            return redirect('admin/manageAnsweredFaq')->with('success', 'Question updated!');
        }
        else {
            $faq = Faq::find($id);
            $faq->question_context =  $request->get('question_context');
            $faq->question_answer = '';
            $faq->question_status = 0;
            $faq->save();
            return redirect('admin/manageAnsweredFaq')->with('success', 'Qustion back to unanswered Questions section!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return back()->with('success', 'Message deleted!');    }
}
