<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['Name',
                           'email',
                           'number',
                           'age',
                           'roles',
                           'recommend',
                           'options',
                           'comment'];

protected $casts = ['options'=>'array'];

function setOptionsAttribute($values = null)
{
   if(null === $values) {
     $this->attributes['options'] = null;
   }
   $this->attributes['options'] = json_encode($values);
}
function getOptionsAttribute($values)
{
   if(null === $values){
     return null;
   }
   return json_decode($values,true);
}
 protected $dates = [ 'deleted_at' ];
}
