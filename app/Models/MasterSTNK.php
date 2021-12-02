<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterSTNK extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'master_stnk';
	protected $fillable = [
		'no_stnk',
		'no_polisi',
		'merk',
		'jenis_kendaraan_id',
		'model',
		'no_rangka',
		'silinder',
		'no_mesin',
		'masa_berlaku',
		'tnkb',
		'swdkllj',
		'jasa_perpanjangan',
		'pkb',
		'bahan_bakar',
		'tahun_kendaraan',
		'nama_stnk',
		'warna',
		'no_bpkb',
		'nilai_pajak_stnk',
		'pajak_jasa',
		'pajak_stnk',
		'status_id',
		'created_by',
		'created_at'
	];

    public function jenis_kendaraan() {
		return $this->belongsTo(JenisKendaraan::class, 'jenis_kendaraan_id');
	}

    public function status() {
		return $this->belongsTo(Status::class, 'status_id');
	}
}
