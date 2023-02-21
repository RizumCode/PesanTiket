@extends('layouts.app')

@section('content')
    <h1>Pemesanan Tiket</h1>

    <form action="{{ route('ticket.create') }}" method="POST">
        @csrf

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">

        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat"></textarea>

        <button type="submit">Pesan Tiket</button>
    </form>
@endsection