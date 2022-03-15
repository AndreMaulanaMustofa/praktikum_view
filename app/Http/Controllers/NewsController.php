<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;

class NewsController extends Controller
{
    public function team(){
        $news = News::orderBy('created_at', 'DESC')->paginate(5);
        return view('team', compact('news'));
    }
}
