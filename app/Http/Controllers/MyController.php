<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\DeleteCategory;

class MyController extends Controller
{
    public function index (){
        $categories = Category::all();
        return view('pages.index', compact('categories'));
    }

    public function categoryShow($id){
        /* $categories = Category::all(); */
        $category = Category::findOrFail($id);
        return view("pages.categoryShow", compact("category")/* ,compact("categories") */);
    }
    public function categoryDelete($id){
        /* $categories = Category::all(); */
        $category = Category::findOrFail($id);
        $category -> posts() -> delete();
        $category -> delete();

         Mail::to("mr2803@mail.com")->send(new DeleteCategory(
             "Category", $category -> name
         ));
       return redirect() -> route('home.index');
    }

    public function categoryCreate(){
        return view('pages.categoryStore');
    }
    public function categoryStore(CategoryRequest $request){
        $validatedData = $request -> validated();
        $category= Category::create($validatedData);
        return redirect() -> route('home.index');
    }

    public function categoryPost($id) {
        $category = Category::findOrFail($id);
        $mypict = array("/img/img1.jpg", "/img/img2.jpg","/img/img3.jpg", "/img/img4.jpg","/img/img5.jpg");
        $picture = $mypict[array_rand($mypict)];
        return view('pages.categoryPost', [
            'category' => $category,
            'picture' => $picture
        ]);//compact('category', 'picture'));
    }

    public function categoryPostCreate(PostRequest $request, $id) {
        $validatedData = $request -> validated();
        $post = Post::make($validatedData);
        $category = Category::findOrFail($id);
        $post -> category() -> associate($category);
        $post -> save();
        return redirect() -> route('home.index');
    }

    public function randomPict(){
        $mypict = array("/img/img1.jpg", "/img/img2.jpg","/img/img3.jpg", "/img/img4.jpg","/img/img5.jpg");

        return $mypict[array_rand($mypict)];
    }
}
