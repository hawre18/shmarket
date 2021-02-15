<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class,'attributevalue_product','product_id','attributeValue_id');
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class,'photo_product','product_id','photo_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
