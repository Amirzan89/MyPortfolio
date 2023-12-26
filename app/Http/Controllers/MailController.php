<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function send(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'name' =>'required',
            'subject' =>'required',
            'message' =>'required'
        ],[
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'name.required' => 'Full Name is required',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',
        ]);
        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->toArray() as $field => $errorMessages) {
                $errors = $errorMessages[0];
                break;
            }
            return response()->json(['status' => 'error', 'message' => $errors], 400);
        }
        return response()->json(['status'=>'success','message'=>'Email send success']);
    }
}