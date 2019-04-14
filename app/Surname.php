<?php

namespace App;

use App\BaseModel;

class Surname extends BaseModel
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'character',
		'pinyin',
	];


}
