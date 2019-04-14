<?php

namespace App;

use App\BaseModel;

class Character extends BaseModel
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'character',
		'pinyin',
		'definition',
		'radical',
		'stroke_count',
		'hsk_level',
		'general_standard',
		'frequency_rank',
	];
}

	
	
	
	
	
	