<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class AboutCounterController extends Controller
{
    function index()
    {
        $counter = Counter::first();
        return view('backend.about.counter', compact('counter'));
    }
    function storeCouter(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'years' => 'required',
            'project_complete' => 'required',
            'natural_product' => 'required',
            'clients_reviews' => 'required',
            'satisfied_clientd' => 'required',
            'dec' => 'required',
        ]);

        $counter = Counter::firstOrNew();
        $counter->title = $request->title;
        $counter->years = $request->years;
        $counter->project_complete = $request->project_complete;
        $counter->natural_product = $request->natural_product;
        $counter->clients_reviews = $request->clients_reviews;
        $counter->satisfied_clientd = $request->satisfied_clientd;
        $counter->dec = $request->dec;
        $counter->status = $request->has('status') ? 1 : 0;
        $counter->save();
        return back()->with('success', 'Counter Update successfully.');
    }
}
