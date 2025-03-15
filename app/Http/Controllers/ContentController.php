<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'caption' => 'required|string|max:255',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();
            
            Content::create([
                'id' => Str::uuid(),
                'title' => $request->title,
                'caption' => $request->caption,
                'filename' => $fileName,
            ]);

            Storage::disk('public')->putFileAs('images', $file, $fileName);
            // Storage::put('public', $file, $fileName);

            return redirect()->back()->with('success', 'File uploaded successfully');
        }

        return redirect()->back()->with('error', 'Failed to upload file');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
