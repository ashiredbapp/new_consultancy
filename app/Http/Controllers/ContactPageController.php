<?php

namespace App\Http\Controllers;

use App\ContactPage;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=ContactPage::get();
        return $contact;
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
        $contact=new ContactPage();
        $contact->full_name=$request->full_name;
        $contact->email=$request->email;
        $contact->mobile=$request->mobile;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->type=$request->type;
        $contact->save();
        return "data saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $contactPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPage $contactPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}