<?php

namespace App\Http\Controllers;

use auth;
use App\Contact;
use App\ContactImage;
use App\Helpers\CustomUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\StoreContactPost;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rol.user');
    }

    
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')
            ->paginate(5);

        return view('dashboard.contact.index',['contacts' => $contacts]);
    }

    public function create()
    {
        return view("dashboard.contact.create", ['contact' => new Contact()]);
    }

    
    public function store(StoreContactPost $request)
    {
        Contact::create($request->validated());

        return back()->with('status', 'Contacto registrado con exito!');
    }

    
     public function show(Contact $contact)
     {
        //  $contact = Contact::findOrFail($contact);

             return view("dashboard.contact.show", ["contact" => $contact]);
     }

     public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit',  ['contact' => $contact]);
    }

    
    public function update(StoreContactPost $request, Contact $contact)
    {
        $contact->update($request->validated());

        return back()->with('status', 'Contacto actualizado con exito!');
    }


     public function destroy(Contact $contact)
     {
         $contact->delete();
         return back()->with('status', 'Contact borrado con exito!');
     }
}
