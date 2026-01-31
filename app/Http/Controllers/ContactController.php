<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactReaquest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(StoreContactReaquest $request)
    {
        $data=$request->validated();
        Contact::create($data);
        return back()->with('message-success', 'Thanks for contacting us!');
    }
}
