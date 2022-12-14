<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\StatusUser;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Sluggable; //install (composer require cviebrock/eloquent-sluggable)

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'foto_profile',
        'foto_kegiatan',
        'nisn',
        'nama',
        'no_tlp',
        'nama_panggilan',
        'pekerjaan',
        'karya',
        'tmpt_pekerjaan',
        'email',
        'keahlian',
        'jurusan',
        'thn_lulus',
        'alamat',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $attributes = [
        'role_id' => 2,
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }


    public function organisasi()
    {
        return $this->hasMany(Organisasi::class);
    }

    public function riwayat_organisasi()
    {
        return $this->hasMany(Riwayat_organisasi::class);
    }

    public function sosmed()
    {
        return $this->hasMany(Sosmed::class);
    }


    public function riwayat_prestasi()
    {
        return $this->hasMany(Riwayat_prestasi::class);
    }

    public function riwayat_pendidikan()
    {
        return $this->hasOne(Riwayat_pendidikan::class);
    }
    
    public function kesanpesan(){
        return $this->hasOne(KesanPesan::class);
    }
}
