<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['title','details','user_id'];
    public static function details($id){
        return Blogs::where('id',$id)->first();//find($id);
        //where('id',$id)->first()
    }
}
