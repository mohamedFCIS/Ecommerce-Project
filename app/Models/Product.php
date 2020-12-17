<?php

namespace App\Models;

use App\Models\Favourite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;



class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class , 'cat_id' );

    }
    
    public function users(){
        return $this->belongsToMany(User::class , 'favourites' ,
            'product_id' , 'user_id')->withTimestamps();
    }

    // the relation between the fav table and the product table 
    public function favourits(){
        return $this->hasMany(Favourite::class);
    }

    // To Check if that the user Fav the product or not
     
    public function favouritBy(User $user){

        return $this->favourits->contains('user_id',$user->id);
    }

    // relation to show how many fav done by the users on the product (user->product->favourit)

    public function recievedFavour()
    {
        // return $this->hasManyThrough(Like::class,Post::class);
        return $this->hasManyThrough(Favourite::class,User::class);
    }
}
