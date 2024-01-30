<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class formmodel extends Model
{
    use HasFactory;

      protected $table_name = 'about_form';

    public function storage($store){
        $db =DB::table($this->table_name)->insertGetId($store);
        return $db;
    }
}
