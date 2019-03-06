<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    public $primaryKey = 'id_tipe';
    protected $table = 'table_tipe';
    protected $fillable =[
    	'nama_tipe', 'foto'
    ];
}
