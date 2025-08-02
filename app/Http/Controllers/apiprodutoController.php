<?php

namespace App\Http\Controllers;

use App\Http\Resources\apiProdutoResource;
use App\Http\Resources\remedioCollection;
use App\Models\Apiproduto;
use Illuminate\Http\Request;

class apiprodutoController extends Controller
{
    /*
     $students = Student::get()->toJson(JSON_PRETTY_PRINT);
    return response($students, 200);
    */

    public function index()
    {
        $posts = Apiproduto::all();
        return new remedioCollection(Apiproduto::all());
    }

    // public function store(StorePostRequest $request)
    // {
    //     $post = Post::create($request->validated());
    //     return new PostResource($post);
    // }

    // public function update(StorePostRequest $request, Post $post)
    // {
    //     $post->update($request->validated());
    //     return new PostResource($post);
    // }

    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return response(null, 204);
    // }

    public function show($registro){
        
        // return ResponseClass::sendResponse(new ProductResource($product),'',200);
            $registromedicamento = Apiproduto::find($registro);
            return new apiProdutoGeralResource($registromedicamento);
       
    }

}
