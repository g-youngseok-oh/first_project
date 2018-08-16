<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notice extends Model
{
    protected $table = 'notice';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getList($limit = 5)
    {
        $data = DB::table($this->table)->orderBy('created_at', 'desc')->take($limit)->get();

        return $data;
    }
}
