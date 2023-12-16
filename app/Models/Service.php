<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';
    public function dataUser()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
    public function teknisi()
    {
        return $this->hasOne(TokoTeknisi::class, 'service_id');
    }
    public function status()
    {
        return $this->hasOne(Transaksi::class, 'service_id');
    }

}
