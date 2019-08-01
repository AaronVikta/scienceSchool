<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Form;
use App\Pins;
use App\User;
use App\Http\Resources\FormResource;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      return FormResource::collection(Form::paginate(5));
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
        $this->validate($request,[
          'fullname'=>'required',
          'sex'=>'required',
          'address'=>'required',
          'lga'=>'required',
          'state'=>'required',
          'last_school'=>'required',
          'basic_cert_no'=>'required',
          'school_of_choice'=>'required',
          'choice_of_center'=>'required',
          'pin'=>'required',
          'user'=>'required',
          'sub1'=>'required',
          'sub2'=>'required',
          'sub3'=>'required',
          'sub4'=>'required',
          'sub5'=>'required',
          'sub6'=>'required',
          'sub7'=>'required',
          'sub8'=>'required',
          'sub9'=>'required',
          'sub10'=>'required',
          'grad1'=>'required',
          'grad2'=>'required',
          'grad3'=>'required',
          'grad4'=>'required',
          'grad5'=>'required',
          'grad6'=>'required',
          'grad7'=>'required',
          'grad8'=>'required',
          'grad9'=>'required',
          'grad10'=>'required',
        ]);
        $user=$request->user;
        $user= User::where('id',$user)->get();
        $user =$user['0'];
        $name= $user['name'];
        $passport=$user['profile_pic'];
        $pin= $request->pin;
        $pins = Pins::where('PinCode', $pin)->get();
        if(count($pins)>0){
            $pin =$pins[0];
            $owner=$pin['owner'];
            // dd($owner);
            $times=$pin['usage'];
            // dd($times);
            if(($owner==""||$owner==$request->fullname)){
              if($times<2){
                $form = new Form;
                $form->fullname = $request->fullname;
                $form->sex=$request->sex;
                $form->address=$request->address;
                $form->lga=$request->lga;
                $form->state=$request->state;
                $form->last_school=$request->last_school;
                $form->basic_cert_no=$request->basic_cert_no;
                $form->school_of_choice=$request->school_of_choice;
                $form->choice_of_center=$request->choice_of_center;
                $form->subject1=$request->sub1;
                $form->subject2=$request->sub2;
                $form->subject3=$request->sub3;
                $form->subject4=$request->sub4;
                $form->subject5=$request->sub5;
                $form->subject6=$request->sub6;
                $form->subject7=$request->sub7;
                $form->subject8=$request->sub8;
                $form->subject9=$request->sub9;
                $form->subject10=$request->sub10;
                $form->grade1=$request->grad1;
                $form->grade2=$request->grad2;
                $form->grade3=$request->grad3;
                $form->grade4=$request->grad4;
                $form->grade5=$request->grad5;
                $form->grade6=$request->grad6;
                $form->grade7=$request->grad7;
                $form->grade8=$request->grad8;
                $form->grade9=$request->grad9;
                $form->grade10=$request->grad10;
                $form->passport=$passport;
                $form->parent=$request->parent;
                $form->save();
                return response()->json("ok");
            }
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }
    public function myForm($pin){
      $form =Form::where('basic_cert_no',$pin)->get();
      return response()->json($form);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $user=$request->user;
        // dd($user);
        $id =$request->pin;
        // dd($name);
        $pin = Pins::where('PinCode', $id)->get();
        $pin =$pin[0];
        $id=$pin['id'];
        $times= $pin['usage'];
        $times=$times+1;
        // dd($id);

        $updatedPin =Pins::findOrFail($id);
        $updatedPin->usage=$times;
        $updatedPin->owner=$user;
        $updatedPin->update();
        return response()->json(
          ['status'=>'ok',200]
        );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
