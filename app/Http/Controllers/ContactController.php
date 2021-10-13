<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        } 
        else {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->message = $request->message;
            
            $query = $contact->save();

            $body = [
                'name'=> $contact->name,
                'email' => $contact->email,
                'message' => $contact->message,
            ];

    
            // $hasEmail = $contact->email;
            

            if(!$query) {
                return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
            } else { 
                Mail::to($request->email)->send(new Welcome($body));
                return
                response()->json(['code'=>1, 'msg'=>'Message sent successfully. Please check on your email for more details']);
            }
        }
    }

}
