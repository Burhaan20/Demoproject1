<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\selldata;
use App\Models\category;
use App\Rules\sellRule;
use Illuminate\Http\Request;

class SelldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('selldata');    
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
        $s=new selldata();
         $this->validate($request,['sname'=>'required','price'=>'required','disc'=>'required',
         'img'=>'required|image|mimes:jpg,png,gif,jpeg,svg|max:2048']);
            $s->sname=$request->sname;
            $s->tid=$request->tid;
            $s->price=$request->price;
          //  $s->img=$request->img;
            $path=$request->file('img')->store('images','public');
            $s->img=$path;
            $s->disc=$request->disc;
            $s->save();
            return redirect('/selldata');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\selldata  $selldata
     * @return \Illuminate\Http\Response
     */
    public function show(selldata $selldata)
    {
        //$data=selldata::All();
        $data=selldata::select (
            "selldatas.id",
            "sname",
            "price",
            "img",
            "selldatas.disc",
            "categories.cname as name"
        )
        ->leftjoin("categories","selldatas.tid","=","categories.id")->paginate(5);
        return view('selldata',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\selldata  $selldata
     * @return \Illuminate\Http\Response
     */
    public function edit(selldata $selldata,$id)
     {
       //  $id=$selldata->id;
         //return $id;
         $data=category::All();
         $s=selldata::find($id);
        // return $s;
         return view('editselldata',compact('s','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\selldata  $selldata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, selldata $selldata,$id)
    {
                $selldata=selldata::find($id);

        $selldata->sname=$request->sname;
        $selldata->tid=$request->tid;
        $selldata->price=$request->price;
        $path=$request->file('img')->store('images','public');
        $selldata->img=$path;
        $selldata->disc=$request->disc;
        $selldata->save();
        return redirect('/selldata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\selldata  $selldata
     * @return \Illuminate\Http\Response
     */
    public function destroy(selldata $selldata)
    {
        // $selldata->delete();
        // return redirect('/selldata');
    }
    public function delete($id)
    {
       $data=selldata::find($id);
       $data->delete();
        return redirect('/selldata');
    }
    public function searchdata(Request $request)
    {
        $price=$request->sprice;
      //  $data=DB::table('selldatas')->
        $data=selldata::select (
            "selldatas.id",
            "sname",
            "price",
            "img",
            "selldatas.disc",
            "categories.cname as name"
        )
        ->leftjoin("categories","selldatas.tid","=","categories.id")->where('selldatas.price',$price)->where('selldatas.price',$price)->paginate(5);
        return view('selldata',compact('data'));
    }
    public function searchdata1(Request $request)
    {
        $loc=$request->sename;
       // $data=DB::table('selldatas')
        $data=selldata::select (
            "selldatas.id",
            "sname",
            "price",
            "img",
            "selldatas.disc",
            "categories.cname as name"
        )
        ->leftjoin("categories","selldatas.tid","=","categories.id")->where('selldatas.loc',$loc)->get();
        return view('index',compact('data'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $selldata=selldata::findOrFail($id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$id]))
        {
            $cart[$id]['qua']++;
        }
        else
        {
            $cart[$id]=[
                "pname"=>$selldata->sname,
                "photo"=>$selldata->img,
                "price"=>$selldata->price,
                "qua"=> 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success','Your Order added to Cart successfully!');
    }
    public function update1(Request $request)
    {
        if($request->id && $request->qua){
            $cart = session()->get('cart');
            $cart[$request->id]["qua"] = $request->qua;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    
}