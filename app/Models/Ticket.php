<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['nomor_id', 'nama', 'tanggal_lahir', 'alamat'];

    // properti lain dan metode dapat didefinisikan di sini
}