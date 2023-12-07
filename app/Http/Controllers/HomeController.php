<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User; 

use App\Models\Doctor; 

use App\Models\Appointment; 



class HomeController extends Controller
{
    public function redirect()
    {

      if(Auth::id())
      {
           if(Auth::user()->usertype=='0')
            {

              $doctor = doctor::all();

              
                return view('user.home',compact('doctor'));
            }

            else
            {
              return view('admin.home');  
            }
      }
     else
     {
        return redirect()->back();
     }


    }

    public function index() 
    {
      if(Auth::id())
      {
        return redirect('home');
      }

      else
      {

      $doctor = doctor::all();

       return view('user.home',compact('doctor'));
      }
    } 


public function appointment(Request $request)
{

  $data = new Appointment;

<<<<<<< HEAD
  $data->services=$request->services;
=======
  $data->speciality=$request->speciality;
>>>>>>> b423acd6fc35106447513050a818aba48f5096d2

  $data->name=$request->name;

  $data->vechile_num=$request->vechile_num;

  $data->date=$request->date;

  $data->time=$request->time;

  $data->message=$request->message;

<<<<<<< HEAD
  $data->status='In progress';

=======

  $data->status='In progress';
>>>>>>> b423acd6fc35106447513050a818aba48f5096d2
  if(Auth::id())
  {

    $data->user_id=Auth::user()->id;

  }
 
  $data->save();

  return redirect()->back()->with('message', 'Appointment Request Successful . We Will Contact With You Soon');

} 


<<<<<<< HEAD
=======
public function myappointment()
{
  if(Auth::id())
  {

    if(Auth::user()->usertype==0)
    {

      $userid=Auth::user()->id;

      $appoint=appointment::where('user_id',$userid)->get();
   
       return view('user.my_appointment',compact('appoint'));
    }

  

  }
else

{
  return redirect()->back();
}


}


>>>>>>> b423acd6fc35106447513050a818aba48f5096d2
public function getItem()
{
  $doctor = doctor::all();

  return view('front.vet',compact('doctor'));

}

<<<<<<< HEAD
=======
public function cancel_appoint($id)
{

    $data=appointment::find($id);
    $data->delete();
    return redirect()->back();
}


public function getappointment()
{
  $doctor = doctor::all();

  return view('front.pricing',compact('doctor'));

}


>>>>>>> b423acd6fc35106447513050a818aba48f5096d2
}

