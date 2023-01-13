<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    // Recupera todos os contatos cadastrados no banco de dados:

    public function getAll() {
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        $contacts = Contact::where('user_id', $user->id)->get();

        return view('contact.contacts', compact('contacts'));
    }

    // Cria o registro de um contato no banco de dados:

    public function create() {
        return view('contact.create');
    }

    public function store (Request $request) {
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_id' => $user->id,
        ]);

        return redirect('/contacts');
    }

    // Recupera um contato baseado no id:

    public function getById($id) {
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();

        $contact = Contact::find($id);

        if ($user->id != $contact->user_id) {
            return view('errors.404', 404);
        }

        return view('contact.id', compact('contact'));
    }
}
