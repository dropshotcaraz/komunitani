<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomepageController extends Controller
{
    public function index()
    {
        // Dummy posts data
        $posts = [
            (object)[
                'user' => (object)['name' => 'Vishnu Kumar Agrawal', 'avatar' => asset('images/avatar2.png')],
                'content' => 'Cara Menanam Padi dengan Jajar Legowo
                Sistem Jajar Legowo meningkatkan hasil panen dengan memberi ruang lebih bagi tanaman. Atur barisan tanam 25 cm dan antar tanaman 12,5 cm. Pastikan lahan tergenang air dan pupuk teratur.',
                'created_at' => now(),
                'image' => asset('images/post_image.png'),
            ],
            (object)[
                'user' => (object)['name' => 'Jajang', 'avatar' => asset('images/avatar1.png')],
                'content' => 'Cara Menanam Padi dengan Jajar Legowo
                Sistem Jajar Legowo meningkatkan hasil panen dengan memberi ruang lebih bagi tanaman. Atur barisan tanam 25 cm dan antar tanaman 12,5 cm. Pastikan lahan tergenang air dan pupuk teratur.',
                'created_at' => now(),
                'image' => null
            ],
            // Add more dummy posts as needed
        ];

        // Dummy trending topics data
        $trendingTopics = [
            (object)['title' => 'Cara Menanam Padi', 'id' => 1],
            (object)['title' => 'Manfaat Pupuk Organik', 'id' => 2],
            (object)['title' => 'Bibit Padi Unggul', 'id' => 3],
            (object)['title' => 'Cara Panen Padi', 'id' => 4],
            (object)['title' => 'Teknik Pengairan Sawah', 'id' => 5],
        ];

        // Pass dummy data to the view
        return view('homepage', compact('posts', 'trendingTopics'));
    }

    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        // Validate the request
        $request->validate([
            'content' => 'required|string|max:255',
            'topic' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        // Create the post
        $post = Post::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
            'topic' => $request->input('topic'),
            'tags' => $request->input('tags'),
        ]);

        // Return the response
        return response()->json(['success' => true, 'content' => $post->content]);
    }
}
