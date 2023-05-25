<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Cursus;
  
class ContactController extends Controller
{
    public function get() {
        $cursus = Cursus::orderBy('priority', 'desc')->get();
        return view('content.pages.contact', [
            'cursus' => $cursus
        ]);
    }
    
    public function dashboard()
    {
        $contact = Contact::where('treated', 0)->get();
        return view('content.admin.contact.contactmanaging', [
            'contact' => $contact
        ]);
    }

    
    
    public function treated($id)
    {
        $contact = Contact::where('id', $id)->update([
            'treated' => 1,
        ]);
        return redirect('/dashboard/contact');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email',
            'subject' => 'required|string|max:50',
            'message' => 'required|string'
        ]);

        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'treated' => 0,
        ]);
        
  
        return redirect()->back()
                         ->with(['success' => 'Bedankt, we zullen u zo snel mogelijk contacteren!']);
    }
}