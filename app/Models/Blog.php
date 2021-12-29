<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table='blogs';
    protected $fillable = [
        'id','photo','name','body', 'catagory_id'];
     public $timestamps = ["created_at"]; //only want to used created_at column
      const UPDATED_AT = null;


public function Catagory()
{
    return $this->belongsTo(Catagory::class, 'catagory_id', 'id'); //one blog $this belongs to one catagory
}

}
