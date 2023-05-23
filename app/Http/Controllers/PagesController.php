<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursus;
use App\Models\News;

class PagesController extends Controller
{
    public function index() {
        $cursus = Cursus::inRandomOrder()->first();
        $news = News::orderBy('created_at', 'desc')->first();
        return view('content.index', [
            'cursus' => $cursus,
            'news' => $news
        ]);
    }
}
