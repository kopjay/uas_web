<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'item_id', 'price',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function item(){
        return $this->belongsTo(Item::class,'item_id','id');
    }
    
}
