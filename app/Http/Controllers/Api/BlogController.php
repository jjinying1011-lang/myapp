<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // GET /api/blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return BlogResource::collection($blogs);
    }

    // POST /api/blogs
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'sometimes|boolean',
        ]);

        $blog = Blog::create($fields);

        return (new BlogResource($blog))
            ->response()
            ->setStatusCode(201);
    }

    // GET /api/blogs/{id}
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return new BlogResource($blog);
    }

    // PUT /api/blogs/{id}
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $fields = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'status' => 'sometimes|boolean',
        ]);

        $blog->update($fields);

        return new BlogResource($blog);
    }

    // DELETE /api/blogs/{id}
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'ลบบทความเรียบร้อยแล้ว',
        ], 200);
    }
}
