<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    
    protected $fillable=['user_id','pengaduan_id','tgl_tanggapan','tanggapan'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pengaduan(){
        return $this->belongsTo(Pengaduan::class);
    }
    

}

