<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
	protected $table = 'sekolah';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nss', 'nama','alamat','desa_id','rt','rw','no_telp','no_fax','lat_long','image','email','website','kepala_sekolah'
    ];

    public $timestamps = true;
}