<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performer; // Import the Performer model

class FormController extends Controller
{
    // FormController.php


    public function submit(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'stage_name' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'youtube' => 'required|string',
            'bio' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded picture
        $picturePath = $request->file('picture')->store('performer_pictures', 'public');

        // Create a new Performer model instance
        $performer = new Performer();
        $performer->name = $validatedData['name'];
        $performer->gender = $validatedData['gender'];
        $performer->stage_name = $validatedData['stage_name'];
        $performer->facebook = $validatedData['facebook'];
        $performer->instagram = $validatedData['instagram'];
        $performer->youtube = $validatedData['youtube'];
        $performer->bio = $validatedData['bio'];
        $performer->picture = $picturePath;
        $performer->save();

        return redirect()->route('shopping');
    }
}
