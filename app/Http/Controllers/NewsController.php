<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('content.pages.news', [
            'news' => $news
        ]);
    }
    public function get()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('content.admin.news.newsmanaging', [
            'news' => $news
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required|max:100',
            'content' => 'required',
            'cover_image' => 'required|mimes:jpg,png,jpeg|max:10096|dimensions:max_width=2500,max_height=2048'
        ]);
        $cover_image = $request->file('cover_image');
        $titel = $request->input('titel');
        $niewsNaampje = time() . '-' . $titel . '.' . $cover_image->extension();
        
        $cover_image->move(public_path('media/nieuwsberichten'), $niewsNaampje);
        $news = News::create([
            'titel' => $titel,
            'content' => nl2br($request->input('content')),
            'cover_image' => $niewsNaampje,
        ]);
        return redirect('/dashboard/news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('content.admin.news.editNews', [
            'news' => $news
        ]);
    }

    public function editfoto($id)
    {
        $news = News::find($id);
        return view('content.admin.news.editFoto', [
            'news' => $news
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titel' => 'required|max:100',
            'content' => 'required',
        ]);
        $news = News::where('id', $id)->update([
            'titel' => $request->input('titel'),
            'content' => nl2br($request->input('content')),
        ]);
        return redirect('/dashboard/news');
        
    }
    public function updatefoto(Request $request, $id)
    {
        $request->validate([
            'cover_image' => 'required|mimes:jpg,png,jpeg|max:10096|dimensions:max_width=2500,max_height=2048'
        ]);
        $prev_post = News::where('id', $id)->first();
        $prev_pic = $prev_post->cover_image;
        File::delete(public_path('media/nieuwsberichten/'.$prev_pic));

        
        $picture = $request->file('cover_image');
        $titel = $prev_post->titel;
        $content = $prev_post->content;
        $picture_name = time() . '-' . $titel . '.' . $picture->extension();
        $picture->move(public_path('media/nieuwsberichten'), $picture_name);

        $news = News::where('id', $id)->update([
            'titel' => $titel,
            'content' => nl2br($content),
            'cover_image' => $picture_name,
        ]);
        return redirect('/dashboard/news');
        
    }

    public function destroy($id)
    {
        $news = News::find($id);
        File::delete(public_path('media/nieuwsberichten/'.$news->cover_image));
        $news->delete();
        return redirect('/dashboard/news');
    }
}
