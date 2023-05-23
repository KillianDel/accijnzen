<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursus;

use Illuminate\Support\Facades\File;

class CursusController extends Controller
{
    public function index()
    {
        $cursus = Cursus::orderBy('priority', 'desc')->get();
        return view('content.pages.cursus', [
            'cursus' => $cursus
        ]);
    }
    public function get()
    {
        $cursus = Cursus::orderBy('priority', 'desc')->get();
        return view('content.admin.cursus.cursusmanaging', [
            'cursus' => $cursus
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:150',
            'description' => 'required|max:500',
            'price' => 'required',
            'priority' => 'required|integer',
            'photo' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $photo = $request->file('photo');
        $name = $request->input('name');
        $niewsNaampje = time() . '-' . $name . '.' . $photo->extension();
        
        $photo->move(public_path('media/cursussen'), $niewsNaampje);
        $cursus = Cursus::create([
            'name' => $name,
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'priority' => $request->input('priority'),
            'photo' => $niewsNaampje,
        ]);
        return redirect('/dashboard/cursussen');
    }

    public function edit($id)
    {
        $cursus = Cursus::find($id);
        return view('content.admin.cursus.editCursus', [
            'cursus' => $cursus
        ]);
    }

    public function showcursus($id)
    {
        $cursus = Cursus::find($id);
        return view('content.pages.showcursus', [
            'cursus' => $cursus
        ]);
    }

    public function editfoto($id)
    {
        $cursus = Cursus::find($id);
        return view('content.admin.cursus.editFoto', [
            'cursus' => $cursus
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:150',
            'description' => 'required|max:500',
            'price' => 'required',
            'priority' => 'required|integer'
        ]);
        $cursus = Cursus::where('id', $id)->update([
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'priority' => $request->input('priority'),
        ]);
        return redirect('/dashboard/cursussen');
        
    }
    public function updatefoto(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|mimes:jpg,png,jpeg|max:5048|dimensions:max_width=2000,max_height=1100'
        ]);
        $prev_curs = Cursus::where('id', $id)->first();
        $prev_pic = $prev_curs->photo;
        File::delete(public_path('media/cursussen/'.$prev_pic));
        
        $photo = $request->file('photo');
        $name = $request->input('name');
        $niewsNaampje = time() . '-' . $name . '.' . $photo->extension();
        $photo->move(public_path('media/cursussen'), $niewsNaampje);

        $cursus = Cursus::where('id', $id)->update([
            'name' => $prev_curs->name,
            'subject' => $prev_curs->subject,
            'description' => $prev_curs->description,
            'price' => $prev_curs->price,
            'priority' => $prev_curs->priority,
            'photo' => $niewsNaampje,
        ]);
        return redirect('/dashboard/cursussen');
        
    }

    public function destroy($id)
    {
        $cursus = Cursus::find($id);
        File::delete(public_path('media/cursussen/'.$cursus->photo));
        $cursus->delete();
        return redirect('/dashboard/cursussen');
    }
}
