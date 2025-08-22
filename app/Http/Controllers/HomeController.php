<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('home.pages.index');
    }
    public function about()
    {
        //
        return view('home.pages.about');
    }
    public function prices()
    {
        //
        return view('home.pages.prices');
    }

    public function gallery()
    {
        //
        return view('home.pages.gallery');
    }
    public function dryCleaning()
    {
        //
        return view('home.pages.dryCleaning');
    }
    public function uphostery()
    {
        //
        return view('home.pages.uphostery');
    }
    public function laundryService()
    {
        //
        return view('home.pages.laundryService');
    }
    public function stainRemoval()
    {
        //
        return view('home.pages.stainRemoval');
    }
    public function industrialCleaning()
    {
        //
        return view('home.pages.industrialCleaning');
    }
    public function houseCleaning()
    {
        //
        return view('home.pages.houseCleaning');
    }
    public function contact()
    {
        //
        return view('home.pages.contact');
    }
    public function services()
    {
        //
        return view('home.pages.services');
    }
    public function booking()
    {
        //
        return view('home.pages.booking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
