<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Contact;

class FormController extends Controller
{
    //
    public function index()
    {
        return view('admin.ajax-form');
    }       
 
    public function store(Request $request)
    {  
        $res = array('msg' => 'Something goes to wrong');

        $client = new Contact();

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->mobile_number = $request->input('mobile_number');
       
        $client->save();
        

        if($client){
            $res = array('msg' => 'Form data Successfully submited');
        }

        return Response()->json($res);

        /*
        $data = $request->all();

        $save = Contact::insert($data);

       */
    }


}
