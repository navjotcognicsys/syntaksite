<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
   public function index(){
    $comments = DB::table('blogs')->where(['activated'=>'1'])->paginate(3);
    return view('blog-details',['comments' => $comments]);
   }

   public function store(Request $request){
    Blog::create([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'url'=>$request['url'],
        'review'=>$request['review'],
        ]);
        return redirect('blog-details');
    }

}
