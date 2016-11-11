<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ositMail extends Mailable {
	use Queueable, SerializesModels;
	public $total = 30;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct() {
		//
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		$address = 'mominriyadh@gmail.com';
		$name    = 'Momin Riyadh';
		$subject = 'Opensource-It';

		return $this->view( 'email.osit' )
		            ->from( $address, $name )
		            ->cc( $address, $name )
		            ->bcc( $address, $name )
		            ->replyTo( $address, $name )
		            ->subject( $subject );
	}
}
