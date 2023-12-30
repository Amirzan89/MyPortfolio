<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;
class MailController extends Controller
{
    public function send(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ], [
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
            putenv('MAIL_FROM_ADDRESS='.$request->input('email'));
            putenv('MAIL_FROM_NAME='.$request->input('name'));
            Mail::to(env('MAIL_TO_ADDRESS', 'amirzanfikri5@gmail.com'))->send(new ContactMe($request->all()));
            return response()->json(['status' => 'success', 'message' => 'Email send success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'An error occurred while sending the email'], 500);
        }
    }
}