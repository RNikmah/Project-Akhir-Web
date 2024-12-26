<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Http\Resources\InvoiceResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\TestStatus\Incomplete;

class InvoiceController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Invoice::latest()->paginate(5);

        //return collection of posts as a resource
        return new InvoiceResource(true, 'List Data Invoice', $posts);
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
            // 'user_id'     => 'required',
            'billing_address'   => 'required',
            'shipping_address'   => 'required',
            'invoice_amount'   => 'required',
            'status'   => 'required',
            'invoice_number'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = Invoice::create([
            // 'cart_id'     => $request->cart_id,
            // 'user_id'     => $request->user_id,
            'billing_address'   => $request->billing_address,
            'shipping_address'   => $request->shipping_address,
            'invoice_amount'   => $request->invoice_amount,
            'status'   => $request->status,
            'invoice_number'   => $request->invoice_number,
        ]);

        //return response
        return new InvoiceResource(true, 'Data Invoice Berhasil Ditambahkan!', $post);
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
        $post = Invoice::find($id);

        //return single post as a resource
        return new InvoiceResource(true, 'Detail Data Invoice!', $post);
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
            // 'user_id'     => 'required',
            'billing_address'   => 'required',
            'shipping_address'   => 'required',
            'invoice_amount'   => 'required',
            'status'   => 'required',
            'invoice_number'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = Invoice::find($id);

        //update post without image
        $post->update([
            // 'cart_id'     => $request->cart_id,
            // 'user_id'     => $request->user_id,
            'billing_address'   => $request->billing_address,
            'shipping_address'   => $request->shipping_address,
            'invoice_amount'   => $request->invoice_amount,
            'status'   => $request->status,
            'invoice_number'   => $request->invoice_number,
        ]);

        //return response
        return new InvoiceResource(true, 'Data Invoice Berhasil Diubah!', $post);
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
        $post = Invoice::find($id);

        //delete image
        Storage::delete('public/invoice/' . basename($post->image));

        //delete post
        $post->delete();

        //return response
        return new InvoiceResource(true, 'Data Invoice Berhasil Dihapus!', null);
    }
}
