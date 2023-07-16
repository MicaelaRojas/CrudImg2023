<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Obra extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'codigo',
        'imagen',
        'user_id',
    ];

    /**
     * Get the user that owns the obra.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
