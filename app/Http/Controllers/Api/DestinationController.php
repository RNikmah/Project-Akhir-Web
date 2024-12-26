<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Http\Resources\DestinationResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Destination::latest()->paginate(5);

        //return collection of posts as a resource
        return new DestinationResource(true, 'List Data Destination', $posts);
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
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'     => 'required',
            'country'   => 'required',
            'city'   => 'required',
            'description'   => 'required',
            'price' => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/destination', $image->hashName());

        //create post
        $post = Destination::create([
            'image'     => $image->hashName(),
            'name'     => $request->name,
            'country'   => $request->country,
            'city'   => $request->city,
            'description'   => $request->country,
            'price'   => $request->price,
        ]);

        //return response
        return new DestinationResource(true, 'Data Destination Berhasil Ditambahkan!', $post);
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
        $post = Destination::find($id);

        //return single post as a resource
        return new DestinationResource(true, 'Detail Data Destination!', $post);
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
            'name'     => 'required',
            'country'   => 'required',
            'city'   => 'required',
            'description'   => 'required',
            'price'   => 'price',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = Destination::find($id);

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/destination', $image->hashName());

            //delete old image
            Storage::delete('public/destination/' . basename($post->image));

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'country'   => $request->country,
                'city'   => $request->city,
                'description'   => $request->country,
                'price'   => $request->price,
            ]);
        } else {

            //update post without image
            $post->update([
                'name'     => $request->name,
                'country'   => $request->country,
                'city'   => $request->city,
                'description'   => $request->country,
                'price'   => $request->price,
            ]);
        }

        //return response
        return new DestinationResource(true, 'Data Destination Berhasil Diubah!', $post);
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
        $post = Destination::find($id);

        //delete image
        Storage::delete('public/destination/' . basename($post->image));

        //delete post
        $post->delete();

        //return response
        return new DestinationResource(true, 'Data Destination Berhasil Dihapus!', null);
    }
}
