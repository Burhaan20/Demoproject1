<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category');
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
        $c=new category();
        $this->validate($request,['cname'=>'required','disc'=>'required']);
            $c->cname=$request->cname;
            $c->disc=$request->disc;
            $c->save();
            return redirect('/category');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        $data=category::paginate(5);
        return view('category',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $id=$category->id;
        $c=category::find($id);
        return view('editcategory',compact('c'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->cname=$request->cname;
        $category->disc=$request->disc;
        $category->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect('/category');
    }
    public function searchdata(Request $request)
    {
        $cname=$request->scname;
        $data=DB::table('categories')->where('cname',$cname)->paginate(5);
        return view('category',compact('data'));
    }
}