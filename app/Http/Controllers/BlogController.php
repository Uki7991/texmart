<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index',
        [
            'blogs' => Blog::all(),
        ]);
    }
    public function index2()
    {
        $blogs = Blog::all()->paginate(10);
        return view('blog.blog_index', [
            'blogs' => $blogs
        ]);
    }

    public function upload(Request $request, Blog $blog)
    {
        $fileName = "";
        if ($logo = request('file')) {
            $fileName = 'blogs/'.uniqid('tinymce_').'.jpg';
            $image = ImageManagerStatic::make($logo);

            $image->stream('jpg', 40);

            Storage::disk('local')->put('public/'.$fileName, $image);
        }
        return response()->json([
            'location' => asset('storage/'.$fileName),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('user-production.form-tabs.blog-create', [
//            'user' => auth()->user(),
//        ]);
        return view('admin.blog.create', [
            'blog'=>Blog::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog($request->all());
        $blog->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.blog_show', ['blog'=>$blog, 'blogs' => Blog::all()]);
    }

    /**
     *
     * Show the form for editing the specified resource.
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', ['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }

    public function datatable(Request $request)
    {
        return view('admin.blog.index', ['blogs'=>Blog::all()]);
    }
    public function datatableData(Request $request)
    {
        return DataTables::of(Blog::query())->make(true);
    }
}
