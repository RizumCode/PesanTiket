<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    public function create()
    {
        return view('ticket.create');
    }

    // metode-metode lain dapat didefinisikan di sini
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required',
    ]);

    $nomor_id = strtoupper(Str::random(10));

    Ticket::create([
        'nomor_id' => $nomor_id,
        'nama' => $request->nama,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
    ]);

    return view('ticket.show', ['nomor_id' => $nomor_id]);
}
}