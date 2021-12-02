<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'status';
	protected $primaryKey = 'id';
	protected $guarded = [];
}
