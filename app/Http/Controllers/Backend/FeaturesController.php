<?php

namespace App\Http\Controllers\Backend;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['features'] = Feature::latest()->get();
        return View('backend.feature.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',

            ]);
            $features = new Feature();
            $features->title = $request->title;
            $features->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/feature/', $file_name);
                $features->image = 'uploads/feature/' . $file_name;
            }
            $features->save();
            return redirect()->route('features.index')
                ->with('success', 'Features created successfully.');
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

        $data['feature'] = Feature::find($id);
        return View('backend.feature.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            
            $features = Feature::find($id);
            $features->title = $request->title;
            $features->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/feature/', $file_name);
                $features->image = 'uploads/feature/' . $file_name;
            }
            $features->save();
            return redirect()->route('features.index')
                ->with('success', 'Features Updated successfully.');
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
            $features = Feature::find($id);
            $features->delete();
            return redirect()->route('features.index')
                ->with('success', 'Features deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}