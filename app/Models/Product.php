<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'seller_id',
        'name',
        'price',
        'description',
        'quantity'
    ];

    //
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
