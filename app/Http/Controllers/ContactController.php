<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
  
class ContactController extends Controller
{
    public function get() {
        return view('content.pages.contact');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email',
            'subject' => 'required|string|max:50',
            'message' => 'required|string'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Bedankt, we zullen u zo snel mogelijk contacteren!']);
    }
}