<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pricings'] = Pricing::get();
        return View('backend.pricing.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'price' => 'nullable',
                'type' => 'nullable',
                'description' => 'required',

            ]);
            $pricing = new Pricing();
            $pricing->title = $request->title;
            $pricing->price = $request->price;
            $pricing->type = $request->type;
            $pricing->description = $request->description;
            $pricing->save();
            return redirect()->route('pricing.index')
                ->with('success', 'Pricing created successfully.');
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
        $data['pricing'] = Pricing::find($id);
        return View('backend.pricing.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      try {
            $pricing = Pricing::find($id);
            $pricing->title = $request->title;
            $pricing->price = $request->price;
            $pricing->type = $request->type;
            $pricing->description = $request->description;
            $pricing->save();
            return redirect()->route('pricing.index')
                ->with('success', 'Pricing created successfully.');
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
            $pricing = Pricing::find($id);
            $pricing->delete();
            return redirect()->route('pricing.index')
                ->with('success', 'Pricing deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}