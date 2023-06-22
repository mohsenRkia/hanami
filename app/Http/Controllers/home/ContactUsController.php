<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactUsRequest;
use App\Models\home\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('',['contacts' => $contacts ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormContactUsRequest $request)
    {
        {
            $contacts = Contact::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' => $request->mobile,
                'description'=> $request->description,
            ]);

            return redirect()->back()->with('success', ' متشکرم! پیام شما ارسال شد.' );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
