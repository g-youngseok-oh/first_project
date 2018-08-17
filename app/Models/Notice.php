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
        $now = Carbon::now();
        $now = $now->format('Y-m-d');
        foreach ($this->data_list as $key => $data) {

            // 日付フォーマット変更
            $created_at = new Carbon($data->created_at, 'JST');
            $data->created_at = $created_at->format('Y-m-d');

            // 今日の書き込みはnew
            $data->is_new  = ($data->created_at == $now);

            $this->data_list[$key] = $data;
        }
        return $this;
    }
}
