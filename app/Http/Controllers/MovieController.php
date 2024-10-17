<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function store(Request $request)


    {

        // $userid = Auth::id(); // Get the authenticated user's ID

        // if (is_null($userid)) {
        //     return response()->json(['error' => 'User ID cannot be null'], 400);
        // }

        $validatedData = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'release_data' => 'required|string',
            'genre' => 'required|string',
            'thumbnail' => 'required|string',
        ]);

        $movie = new Movie($validatedData);
   //     $movie->userid = $userid; // Set the userid
        $movie->save();

        return response()->json(['success' => 'Movie inserted successfully.']);
    }
}







//     public function store(Request $request)
//     {
//         // Validate the request
//         $validator = Validator::make($request->all(), [
//          //   'name' => 'required|string|max:255',
//           //  'name' => 'required|string|max:255',
//             'title' => 'required|string|max:255',
//             'description' => 'required|string|max:255',
//             'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'release_data' => 'required|string|max:255',
//             'genre' => 'required|string|max:255',
//            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         if ($validator->fails()) {
//             return response()->json($validator->errors(), 422);
//         }

//         // Store the thumbnail
//         $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');

//         $userid = Auth::id();

//       //  $user = auth()->user();
//         // Create a new movie record
//         $movie = Movie::create([
//             'userid' => $request->userid,
//           //  'userid' => $user->id,
//            'name' => $request->name,
//            'title' => $request->title,
//            'description' => $request->description ,
//            'release_data' => $request->release_data,
//            'genre' => $request->genre,
//             'thumbnail' => $thumbnailPath,


//         ]);

//         return response()->json([
//             'message' => 'Movie created successfully!',
//             'movie' => $movie,
//         ], 201);
//     }
// }

