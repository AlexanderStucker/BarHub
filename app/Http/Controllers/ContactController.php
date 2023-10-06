<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('contact', compact('reservations'));
    }

    public function handleForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'type' => 'required|string',
            'reservation_datetime' => 'nullable|date',
        ]);

        if ($data['type'] === 'request') {
            ContactRequest::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'message' => $data['message'],
            ]);
        } elseif ($data['type'] === 'reservation') {
            Reservation::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'message' => $data['message'],
                'reservation_datetime' => $data['reservation_datetime'],
            ]);
        }

        return redirect()->back()->with('status', 'Form submitted successfully!');
    }
}
