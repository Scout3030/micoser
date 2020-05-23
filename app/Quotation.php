<?php

namespace App;

use App\Client;
use App\QuotationDetail;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model {
	protected $fillable = [
		'client_id', 'title', 'total', 'additional_information', 'time',
	];

	public function client() {
		return $this->belongsTo(Client::class);
	}

	public function quotationDetails() {
		return $this->hasMany(QuotationDetail::class);
	}
}
