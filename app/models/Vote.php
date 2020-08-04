<?php

class Vote extends Eloquent {

	public function nightclub() {
		return $this->belongsTo('Nightclub');
	}

	public function comment() {
		return $this->hasOne('Comment');
	}

	public function drink() {
		return $this->belongsTo('Drink');
	}

	public function music() {
		return $this->belongsTo('Music');
	}

	public function publicStyle() {
		return $this->belongsTo('PublicStyle', 'public_id');
	}
}
