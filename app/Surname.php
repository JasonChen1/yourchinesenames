<?php

namespace App;

use BaseModel;

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
