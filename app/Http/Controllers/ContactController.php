<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            $contact->name = Crypt::decryptString($contact->name);
            $contact->email = Crypt::decryptString($contact->email);
        }
        return view('contact', compact('contacts'));
    }

    public function store() {
        $contact = new Contact();
        $contact->name = Crypt::encryptString('Wesley Cesar');
        $contact->email = Crypt::encryptString('wesleycesar@gmail.com');
        $contact->telefone = '(42) 98415-4732';
        $contact->data_nascimento = '2000-09-09';
        $contact->save();
    }

    public function update() {
        $contact = Contact::where('name', 'Wesley Cesar')->first();
        $contact->name = "Bastião";
        $contact->email = "Bastião@gmail.com";
        $contact->save();
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
