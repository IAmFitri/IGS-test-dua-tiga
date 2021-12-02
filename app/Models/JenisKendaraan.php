<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKendaraan extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'jenis_kendaraan';
	protected $primaryKey = 'id';
	protected $guarded = [];
}
