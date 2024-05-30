<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['testimonials'] = Testimonial::latest()->get();
        return view('backend.testimonial.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'designation' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',

            ]);
            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->designation = $request->designation;
            $testimonial->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/testimonial/', $file_name);
                $testimonial->image = 'uploads/testimonial/' . $file_name;
            }
            $testimonial->save();
            return redirect()->route('testimonial.index')
                ->with('success', 'Testimonial created successfully.');
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
        $data['testimonial'] = Testimonial::find($id);
        return view('backend.testimonial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $testimonial = Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->designation = $request->designation;
            $testimonial->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/testimonial/', $file_name);
                $testimonial->image = 'uploads/testimonial/' . $file_name;
            }
            $testimonial->save();
            return redirect()->route('testimonial.index')
                ->with('success', 'Testimonial created successfully.');
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
            $testimonial = Testimonial::find($id);
            $testimonial->delete();
            return redirect()->route('testimonial.index')
                ->with('success', 'Testimonial deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}