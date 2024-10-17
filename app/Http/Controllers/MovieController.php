<?php

// namespace App\Http\Controllers;
// use App\Models\Movie;
// use App\Models\User;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Validator;

// use Illuminate\Http\Request;

// class MovieController extends Controller
// {
//     public function store(Request $request)
//     {
//         // Validate the request
//         $validator = Validator::make($request->all(), [
//             'name' => 'required|string|max:255',
//             'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         if ($validator->fails()) {
//             return response()->json($validator->errors(), 422);
//         }

//         // Store the thumbnail
//         $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

//         // Create a new movie record
//         $movie = Movie::create([
//             'name' => $request->name,
//             'thumbnail' => $thumbnailPath,
//         ]);

//         return response()->json([
//             'message' => 'Movie created successfully!',
//             'movie' => $movie,
//         ], 201);
//     }
// }

