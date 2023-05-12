<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \AIlluminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate form data
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string',
            'email'=> 'required|email',
            'subject'=> 'required|string',
            'phone'=> 'required|string',
            'message'=> 'sometimes|nullable|string'
        ]);

        //If any validation errors.
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        //if form data is valid
        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);

        //save to db
        $contact->save();

        $message = 'Thank you for your message! We will review your submission and respond to you in 24-48 hours.';

        //return json response for ajax request
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => $message]);
        }
        
        //return session response for non ajax request.
        return redirect(route('contact.view'))->with('message', $message);
    }
}
