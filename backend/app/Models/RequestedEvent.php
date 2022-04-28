<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedEvent extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','description','start_time','end_time','user_id','place_id','category_id','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
