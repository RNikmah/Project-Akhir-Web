<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Resources\PaymentResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Payment::latest()->paginate(5);

        //return collection of posts as a resource
        return new PaymentResource(true, 'List Data Payment', $posts);
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
            // 'cart_id'     => 'required',
            'payment_method'   => 'required',
            'payment_status'   => 'required',
            'transaction_id'   => 'required',
            'total_amount'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Payment::create([
            // 'cart_id'     => $request->cart_id,
            'payment_method'   => $request->payment_method,
            'payment_status'   => $request->payment_status,
            'transaction_id'   => $request->transaction_id,
            'total_amount'   => $request->total_amount,
        ]);

        //return response
        return new PaymentResource(true, 'Data Payment Berhasil Ditambahkan!', $post);
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
        $post = Payment::find($id);

        //return single post as a resource
        return new PaymentResource(true, 'Detail Data Payment!', $post);
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
            // 'cart_id'     => 'required',
            'payment_method'   => 'required',
            'payment_status'   => 'required',
            'transaction_id'   => 'required',
            'total_amount'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = Payment::find($id);

        //update post without image
        $post->update([
            // 'cart_id'     => $request->cart_id,
            'payment_method'   => $request->payment_method,
            'payment_status'   => $request->payment_status,
            'transaction_id'   => $request->transaction_id,
            'total_amount'   => $request->total_amount,
        ]);

        //return response
        return new PaymentResource(true, 'Data Payment Berhasil Diubah!', $post);
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
        $post = Payment::find($id);

        //delete image
        Storage::delete('public/payment/' . basename($post->image));

        //delete post
        $post->delete();

        //return response
        return new PaymentResource(true, 'Data Payment Berhasil Dihapus!', null);
    }
}
