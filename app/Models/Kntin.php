<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kntin extends Model
{
    use HasFactory;

    protected $table = 'kntins';

    protected $fillable = [
        'namaKantin',
        'alamat',
        'file',
        'buka',        
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'kantinID', 'kantinID');
    }
}
