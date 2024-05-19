<?php

namespace App\Http\Controllers;

//import Model "Post"
use App\Models\Post;

//return type View
use Illuminate\View\View;

//return type redirectresponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     * 
     * @return View
     * 
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with post
        return view('posts.index', compact('posts'));
    }
    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form 
        $this->validate($request, [
            'nama' => 'required|max:50',
            'jurusan' => 'required|max:50',
            'nohp' => 'required|max:20',
            'email' => 'required|max:50',
            'alamat' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image 
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post 
        Post::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'image' => $image->hashName()
        ]);

        //redirect to index 
        return redirect()->route('posts.index')->with([
            'success' => 'Data Berhasil Disimpan!'
        ]);
    }

    public function show(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        Storage::delete('public/posts' . $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus']);
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('posts.edit' , compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form 
        $this->validate($request, [
            'nama' => 'required|max:50',
            'jurusan' => 'required|max:50',
            'nohp' => 'required|max:20',
            'email' => 'required|max:50',
            'alamat' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);


        //get post by ID 
        $post = Post::findOrFail($id);
        //check if image is uploaded 
        if ($request->hasFile('image')) {
            //upload new image 
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            //delete old image 
            Storage::delete('public/posts/' . $post->image);
            //update post with new image 
            $post->update([
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'nohp' => $request->nohp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'image' => $image->hashName()
            ]);
        } else {

            //update post without image 
            $post->update([
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'nohp' => $request->nohp,
                'email' => $request->email,
                'alamat' => $request->alamat
            ]);
        }

        //redirect to index 
        return redirect()->route('posts.index')->with([
            'success' => 'Data Berhasil Diubah!'
        ]);
    }
}