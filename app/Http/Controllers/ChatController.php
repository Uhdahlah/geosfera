<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    public function index()
    {
        return Chat::orderBy('created_at', 'asc')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;

        // Jika ada file gambar, simpan
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Simpan data ke database
        $chat = Chat::create([
            'name' => $validatedData['name'],
            'message' => $validatedData['message'] ?? null,
            'image_path' => $imagePath,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Chat message stored successfully.',
            'data' => $chat,
        ], 201);
    }
}
