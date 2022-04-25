<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $table = 'item';

    protected $fillable = ['name','price','gender','categories','designers','made_in','material','XS','S','M','L','LL','img_url1','img_url2','img_url3','img_url4'];
}
