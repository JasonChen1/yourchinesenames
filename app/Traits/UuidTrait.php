<?php
namespace App\Traits;
use Ramsey\Uuid\Uuid;

trait UuidTrait
{
	/**
	 * Boot the Uuid trait for the model.
	 */
	public static function boot()
	{
		parent::boot();
		static::creating(function ($model) {
			$model->incrementing = false;
			$model->{$model->getKeyName()} = (string) Uuid::uuid4();
		});
		
	}
	/**
	 * Get the casts array.
	 *
	 * @return array
	 */
	public function getCasts()
	{
		return $this->casts;
	}
}