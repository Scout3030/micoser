<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class JobOffer extends Model {
	const ACTIVE = 1;
	const PAUSED = 2;
	const INACTIVE = 3;

	protected $fillable = [
		'title', 'description', 'expires_at',
	];

	public static function boot() {
		parent::boot();

		static::saving(function (JobOffer $jobOffer) {
			if (!\App::runningInConsole()) {
				$jobOffer->slug = Str::slug($jobOffer->title, "-");
			}
		});
	}

	public function getRouteKeyName() {
		return 'slug';
	}
}
