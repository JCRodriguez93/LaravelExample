<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;

use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $title = 'Preguntas y Respuestas';
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur labore et magnam fuga impedit suscipit, molestias rerum quas ratione. Deleniti mollitia sint qui amet assumenda doloribus nemo facere asperiores labore.
';
        
        $threads = Thread::orderBy('id', 'DESC')
        ->with('category','tags','user')
        ->withCount('comments')
        -> paginate();
        return view('list', compact('title','description','threads'));
    }

    public function category(Category $category){
        $title = "Categoría: $category->name";
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur labore et magnam fuga impedit suscipit, molestias rerum quas ratione. Deleniti mollitia sint qui amet assumenda doloribus nemo facere asperiores labore.
';
        $threads = $category->threads()
        ->orderBy('id','DESC')
        ->with('category','tags','user')
        ->withCount('comments')
        ->paginate();

        return view ('list' , compact('title','description','category','threads'));
    }
    public function tag(tag $tag){
        $title = "Etiqueta: $tag->name";
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur labore et magnam fuga impedit suscipit, molestias rerum quas ratione. Deleniti mollitia sint qui amet assumenda doloribus nemo facere asperiores labore.
';

        $threads = $tag->threads()
        ->orderBy('id','DESC')
        ->with('category','tags','user')
        ->withCount('comments')
        ->paginate();

        return view( 'list' , compact('title','description','tag','threads'));
    }
    public function thread(Thread $thread){

        $title = "Etiqueta: $thread->title";
        $description = "Categoría ". $thread->category->name;

        $comments = $thread
        ->comments()
        ->orderBy('id','DESC')
        ->with('user')
        ->get();

        return view( 'thread' ,compact('title','description','thread','comments'));
    }
    


}
