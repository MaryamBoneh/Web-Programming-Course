<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        $Contacts = Contact::all();
        return view("index", [
            "contacts" => $Contacts
        ]);
    }

    function add_contact(Request $request)
    {
        $contact = new Contact();
        $contact ->NAME = $request["NAME"];
        $contact ->PHONE_NUMBER = $request["PHONE_NUMBER"];
        $contact ->EMAIL = $request["EMAIL"];

        $contact->save();

        return redirect()->to('/');
    }

    function delete_all(Request $request)
    {
        Contact::truncate();
        return redirect()->to('/');
    }
}