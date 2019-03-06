<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $primaryKey = 'id_project';
    protected $table = 't_project';
    protected $fillable =[
    	'nama_project', 'bahasa', 'desc', 'id_tipe', 'foto'
    ];

    public function tipe()
    {
    	return $this->hasOne('\App\Tipe', 'id_tipe','id_tipe');
        return $this->hasOne('\App\Tipe', 'nama_tipe', 'nama_tipe');
        return $this->hasOne('\App\Tipe', 'foto', 'foto');
    }
}
