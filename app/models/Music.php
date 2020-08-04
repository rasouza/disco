<?php

class Music extends Eloquent {

	public function vote() {
		return $this->hasOne('Vote');
	}
}
