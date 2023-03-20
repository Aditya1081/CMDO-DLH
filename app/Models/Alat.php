<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'alats';
    protected $primaryKey = 'id';
    protected $fillable = ['id','NamaAlat'];
    protected $hidden = [];

    public function speakalat()
    {
        return $this->hasMany(SpeakAlat::class);
    }
}
