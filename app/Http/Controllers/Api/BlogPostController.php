<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Stephenjude\FilamentBlog\Models\Post;

class BlogPostController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Define the number of items per page
        $perPage = 12; // Adjust this number as needed

        // Fetch paginated blog posts
        $posts = Post::paginate($perPage);

        // Return the paginated data
        return response()->json([
            'items' => $posts->items(),
            'current_page' => $posts->currentPage(),
            'last_page' => $posts->lastPage(),
            'total' => $posts->total(),
        ]);
    }
}
