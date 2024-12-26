<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Cart::latest()->paginate(5);

        //return collection of posts as a resource
        return new CartResource(true, 'List Data Cart', $posts);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            // 'user_id'     => 'required',
            // 'destination_id'   => 'required',
            'quantity'   => 'required',
            'total_price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Cart::create([
            // 'user_id'     => $request->user_id,
            // 'destination_id'   => $request->destination_id,
            'quantity'   => $request->quantity,
            'total_price'   => $request->total_price,
        ]);

        //return response
        return new CartResource(true, 'Data Cart Berhasil Ditambahkan!', $post);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $post = Cart::find($id);

        //return single post as a resource
        return new CartResource(true, 'Detail Data Cart!', $post);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            // 'user_id'     => 'required',
            // 'destination_id'   => 'required',
            'quantity'   => 'required',
            'total_price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = Cart::find($id);

        //update post without image
        $post->update([
             // 'user_id'     => $request->user_id,
            // 'destination_id'   => $request->destination_id,
            'quantity'   => $request->quantity,
            'total_price'   => $request->total_price,
        ]);

        //return response
        return new CartResource(true, 'Data Cart Berhasil Diubah!', $post);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $post = Cart::find($id);

        //delete image
        Storage::delete('public/cart/' . basename($post->image));

        //delete post
        $post->delete();

        //return response
        return new CartResource(true, 'Data Cart Berhasil Dihapus!', null);
    }
}
