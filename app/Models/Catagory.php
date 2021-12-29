<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table='catagories';
    protected $fillable = [
        'id','name'];
     public $timestamps = ["created_at"]; //only want to used created_at column
      const UPDATED_AT = null;


public function blog()

{
    return $this->hasMany(blog::class, 'catagory_id', 'id'); // one catagory $this has many blogs
}


}
