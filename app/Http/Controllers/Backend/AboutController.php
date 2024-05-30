<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['abouts'] = About::get();
        return View('backend.about.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return View('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'about_title' => 'required',
                'about_description' => 'required',
                'about_image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
                'mission_title' => 'required',
                'mission_description' => 'required',
                'mission_image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',

            ]);
            $about = New  About();
            $about->about_title = $request->about_title;
            $about->about_description = $request->about_description;
            $about->mission_title = $request->mission_title;
            $about->mission_description = $request->mission_description;

            if ($request->hasFile('about_image')) {
                $file = $request->file('about_image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/about/', $file_name);
                $about->about_image = 'uploads/about/' . $file_name;
            }
            if ($request->hasFile('mission_image')) {
                $file = $request->file('mission_image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/about/', $file_name);
                $about->mission_image = 'uploads/about/' . $file_name;
            }

            $about->save();
            return redirect()->route('about.index')
                ->with('success', 'About Updated successfully.');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['about'] = About::find($id);
        return View('backend.about.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $about = About::find($id);
            $about->about_title = $request->about_title;
            $about->about_description = $request->about_description;
            $about->mission_title = $request->mission_title;
            $about->mission_description = $request->mission_description;

            if ($request->hasFile('about_image')) {
                $file = $request->file('about_image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/about/', $file_name);
                $about->about_image = 'uploads/about/' . $file_name;
            }
            if ($request->hasFile('mission_image')) {
                $file = $request->file('mission_image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/about/', $file_name);
                $about->mission_image = 'uploads/about/' . $file_name;
            }

            $about->save();
            return redirect()->route('about.index')
                ->with('success', 'About Updated successfully.');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $about = About::find($id);
            $about->delete();
            return redirect()->route('about.index')
                ->with('success', 'About deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}