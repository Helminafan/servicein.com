<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promise extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function dataUser()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
