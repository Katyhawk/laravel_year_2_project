<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        return view('index', [
            'test' => 'hello world'
        ]);
    }

    public function showContact()
    {
        $query = request('query');

        return view('contact', [
            'test' => 'hello world',
            'query' => $query,
        ]);
    }

    public function showBooking()
    {
        return view('booking');
    }

    public function showHomePage()
    {
        return view('homepage');
    }

    public function showEscapeRooms()
    {
        return view('escaperooms');
    }
}
