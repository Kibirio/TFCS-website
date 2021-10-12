<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if (!$validator->passes()){
            return response()->json(['code'=>0, 'error'=>$validator->errors()->toArray()]);
        } 
        else {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->subject = $request->subject;
            $contact->email = $request->email;
            $contact->message = $request->message;

            $body = [
                'name'=> $contact->name,
                'email' => $contact->email,
                'message' => $contact->message,
            ];
            $query = $contact->save();

            if(!$query) {
                return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
            } else { 
                // Mail::to($request->email)->send(new WelcomeMail($body));
                return
                response()->json(['code'=>1, 'msg'=>'Message sent successfully. Please check on your email for more details']);
            }
        }
    }

}
