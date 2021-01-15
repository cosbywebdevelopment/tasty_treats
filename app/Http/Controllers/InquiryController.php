<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{

    public function index(){
//        display all inquiries
        $inquiries = Inquiry::orderBy('created_at', 'desc')->paginate(15);
        return view('inquiry.index', compact('inquiries'));
    }
//    display inquiry form
    public function create(){
        return view('inquiry.create');
    }

    public function store(Request $request){
//        honeypot spam detector
        if(!$request->has('catch1') || !empty($request->input('catch1'))){
            abort(422, 'Spam detected');
        }
//        check the data input speed
        if((microtime(true) -  $request->input('catch2')) <=2){
            abort(422, 'Spam detected');
        }
//        validation & save to db
        Inquiry::create($request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'message' => 'required',
            'subscription' => 'boolean'
        ]));
//        redirect to thank you page
        return view('thanks');
    }
}
