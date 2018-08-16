<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getList($limit = 5)
    {
        $data = DB::table($this->table)->orderBy('created_at DESC')->take($limit)->get();

        return $data;
    }
}
