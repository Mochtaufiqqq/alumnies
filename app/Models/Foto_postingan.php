<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_postingan extends Model
{
    use HasFactory;

    protected $table = 'foto_postingan';
    protected $primaryKey = 'id';
    protected $guarded = ['id_postingan'];

    public function foto_postingan()
    {
        return $this->hasMany(User::class);
    }
}