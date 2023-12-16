<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoTeknisi extends Model
{
    use HasFactory;
    protected $table = 'tokoteknisi';
    protected $primaryKey = 'id';
    public function user_teknisi()
    {
        return $this->hasOne(User::class, 'id', 'teknisi_id');
    }
    public function teknisi()
    {
        return $this->hasOne(User::class, 'id', 'teknisi_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }
}
