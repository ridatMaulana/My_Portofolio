<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	public $primaryKey = 'id_contact';
    protected $table = 't_contact';
    protected $fillable = [
    	'nama','email', 'notelp', 'pesan'
    ];
}
