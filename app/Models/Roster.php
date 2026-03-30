<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    //

protected $table = 'rosters';
protected $primarykey = 'id';
protected $fillable = ['employee_name','date', 'shift', 'status'];

}
