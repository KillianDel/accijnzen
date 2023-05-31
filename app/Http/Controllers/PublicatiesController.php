<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicatie;

use Illuminate\Support\Facades\File;

class PublicatiesController extends Controller
{
    public function index()
    {
        $publicaties = Publicatie::orderBy('created_at', 'desc')->get();
        return view('content.pages.publicatie', [
            'publicaties' => $publicaties
        ]);
    }
    public function get()
    {
        $publicaties = Publicatie::orderBy('created_at', 'desc')->get();
        return view('content.admin.publicaties.publicatiemanaging', [
            'publicaties' => $publicaties
        ]);
    }
    public function download($id)
    {
        $file = Publicatie::findOrFail($id);
        $filePath = public_path('media/publicaties/' . $file->path);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return response()->json(['error' => 'File not found.'], 404);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:150',
            'path' => 'required|mimes:pdf'
        ]);
        $file = $request->file('path');
        $name = $request->input('name');
        $filename = time() . '-' . $name . '.' . $file->extension();
        
        $file->move(public_path('media/publicaties'), $filename);
        $publicatie = Publicatie::create([
            'name' => $name,
            'subject' => nl2br($request->input('subject')),
            'path' => $filename,
        ]);
        return redirect('/dashboard/publicaties');
    }

    public function edit($id)
    {
        $publicatie = Publicatie::find($id);
        return view('content.admin.publicaties.editPublicatie', [
            'publicatie' => $publicatie
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:150',
        ]);
        $publicatie = Publicatie::where('id', $id)->update([
            'name' => $request->input('name'),
            'subject' => nl2br($request->input('subject')),
        ]);
        return redirect('/dashboard/publicaties');
        
    }

    public function destroy($id)
    {
        $publicatie = Publicatie::find($id);
        File::delete(public_path('media/publicaties/'.$publicatie->path));
        $publicatie->delete();
        return redirect('/dashboard/publicaties');
    }
}
