<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\selldata;



use Illuminate\Http\Request;

class home extends Controller
{
    public function checkUser()
    {

        if(auth()->user()->email=='admin@gmail.com')
        {
            return view('adminhomepage');
        }
        else
        {
            $data=selldata::All();
      return view('index',compact('data'));
            // return view('index');
        }
    }
    public function store(User $userdata)
    {
            $u=new User();
            $u->name=$request->name;
            $u->email=$request->email;
            $u->password=$request->password;
            $u->save();
            return redirect('/userdata');
        }

public function showUser()
{
    $userdata= User::paginate(5);
    return view('userdata',compact('userdata'));
}

public function edit($id)
{
   // $id=$userdata->id;
    $u=User::find($id);
   // return ($u);
   return view('edituser',compact('u'));
}

public function update(Request $request,$id)
{
    $userdata=User::find($id);
    $userdata->name=$request->name;  
    $userdata->email=$request->email;
    $userdata->password=$request->password;
    $userdata->save();
    return redirect('/userdata');
}

public function destroy($id)
    {
        $userdata=User::find($id);
        $userdata->delete();
        return redirect('/userdata');
    }
    public function searchdata(Request $request)
    {
        $uemail=$request->uemail;
        $userdata=DB::table('users')->where('email',$uemail)->paginate(5);
        return view('userdata',compact('userdata'));
    }
}
