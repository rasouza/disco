<?php

class PublicStyle extends Eloquent {

	protected $table = 'publics';

	public function vote() {
		return $this->hasOne('Vote', 'public_id');
	}
}
