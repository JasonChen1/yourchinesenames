<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class BaseModel extends Model
{
	use UuidTrait;
}