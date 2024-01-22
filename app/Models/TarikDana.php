<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarikDana extends Model
{
    use HasFactory;
    protected $table = 'penarikan';
    protected $primaryKey = 'id';

    function akun()  {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
