<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSolicitude extends Mailable {
	use Queueable, SerializesModels;

	private $request;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct(Request $request) {
		$this->request = $request;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		return $this
			->subject("Nuevo mensaje desde la web de MICOSER")
			->markdown('mails.new_solicitude')
			->with('request', $this->request);
	}
}
