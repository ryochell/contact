<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $types = Contact::$types;
        $genders = Contact::$genders;
 
        return view('contacts.index', compact('types', 'genders'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
    
        $type = '';
        if (isset($request->type)) {
            $type = implode(', ',$request->type);
        }
    
        return view('contacts.confirm', compact('contact', 'type'));
    }

    public function complete(ContactRequest $request)
    {
        $input = $request->except('action');
        
        if ($request->action === '戻る') {
            return redirect()->action('ContactsController@index')->withInput($input);
        }
 
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }

        Contact::create($request->all());
    
        $request->session()->regenerateToken();
            
        return view('contacts.complete');
    }
}
