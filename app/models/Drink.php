<?php

class Drink extends Eloquent {

	public function vote() {
		return $this->hasOne('Vote');
	}
}
