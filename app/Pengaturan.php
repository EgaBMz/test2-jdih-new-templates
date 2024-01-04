<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $guarded = [];

    public static function value($id)
    {
        $data = Pengaturan::where('id', $id)->value('value');

        return $data;
    }
}
