<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
        // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'sex' => 'required',
        'hobby'=>'requiewd',
        'body'=>'requiewd',
    );
}