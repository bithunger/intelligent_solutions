<?php

namespace App\Http\Controllers\Backend;

use App\Models\faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['faqs'] = faq::latest()->get();
        return View('backend.faq.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
            faq::create($request->all());
            return redirect()->route('faq.index')
                ->with('success', 'Faq created successfully.');
        }

        catch(\Exception $e){
            return back()->with("error", $e->getMessage());
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
        $data['faq'] = faq::find($id);
        return View('backend.faq.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faq $faq)
    {
        try {
            $faq->update($request->all());
            return redirect()->route('faq.index')
            ->with('success', 'Faq updated successfully');
        }
        catch (\Throwable $th) {
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
            $faq = faq::find($id);
            $faq->delete();
            return redirect()->route('faq.index')
                ->with('success', 'faq deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}