<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','description','time','user_id','place_id','category_id','admin_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function place(){
        return $this->belongsTo(Place::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
