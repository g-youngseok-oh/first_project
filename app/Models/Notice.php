<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Notice extends Model
{
    protected $table = 'notice';

    protected $guarded = array('id');

    public $timestamps = false;

    public $data_list = array();

    public function getList($limit = 5)
    {
        $data = DB::table($this->table)->orderBy('created_at', 'desc')->take($limit)->get();

        $this->data_list = $data->toArray();
        return $this;
    }

    public function setNewTag()
    {
        foreach ($this->data_list as $key => $data) {
            $created_at = new Carbon(strtotime($data['created_at']));
            $data['created_at'] = $created_at->format('Y-m-d');
            $this->data_list[$key] = $data;
        }
        return $this;
    }
}
