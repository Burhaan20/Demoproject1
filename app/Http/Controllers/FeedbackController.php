<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback');

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
        $f=new feedback();
        $this->validate($request,['fname'=>'required','femail'=>'required',
        'sub'=>'required','meg'=>'required']);
            $f->fname=$request->fname;
            $f->femail=$request->femail;
            $f->sub=$request->sub;
            $f->meg=$request->meg;
            $f->save();
            return redirect('/feedback');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        $data=feedback::paginate(5);
        return view('feedback',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        $id=$feedback->id;
        $f=feedback::find($id);
        return view('editfeedback',compact('f'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        $feedback->fname=$request->fname;  
        $feedback->femail=$request->femail;
        $feedback->sub=$request->sub;
        $feedback->meg=$request->meg;
        $feedback->save();
        return redirect('/feedback');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        $feedback->delete();
        return redirect('/feedback');
    }
    public function searchdata(Request $request)
    {
        $femail=$request->seemail;
        $data=DB::table('feedback')->where('femail',$femail)->paginate(5);
        return view('feedback',compact('data'));
    }
}