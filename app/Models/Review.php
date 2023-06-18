<?php

namespace App\Models;

use App\Models\Kntin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $primaryKey = 'id';

    protected $fillable = [
    'kantinID',
    'review',
    'likes',
    ];

    public function kantin() 
    {
        return $this->belongsTo(Kntin::class, 'kantinID', 'kantinID');
    }
     
}
