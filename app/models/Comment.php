<?php

class Comment extends Eloquent {

	public function vote() {
		return $this->belongsTo('Vote');
	}

}
