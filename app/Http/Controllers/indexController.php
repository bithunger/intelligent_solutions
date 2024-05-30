<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\About;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index()
    {
        $data['about'] = About::first();
        $data['pricings'] = Pricing::latest()->limit(3)->get();
        $data['features'] = Feature::get();
        $data['services'] = Service::latest()->limit(6)->get();
        $data['testimonials'] = Testimonial::get();
        $data['brands'] = Brand::latest()->get();
        // $data['contact'] = Contact::get();
        return view('index', $data);
    }

    public function about()
    {
        $data['about'] = About::first();
        return view('fronted.pages.about-us',$data);
    }

    public function service()
    {
        $data['services'] = Service::get();
        return view('fronted.pages.services',$data);
    }
    public function service_details($id)
    {
        $data['service_details'] = Service::find($id);
        return view('fronted.pages.service-details',$data);
    }
    public function feature_details($id)
    {
        $data['feature_details'] = Feature::find($id);
        return view('fronted.pages.feature-details',$data);
    }
    public function faq()
    {
        $data['faqs'] = faq::get();
        return view('fronted.pages.faq',$data);
    }
    public function pricing()
    {
        return view('fronted.pages.pricing');
    }

    public function contact()
    {
        return view('fronted.pages.contact-us');
    }
    public function store(Request $request)
    {

        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

        Contact::create($request->all());
        

        }catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }

    }
}