<?php

class Nightclub extends Eloquent {

	public function votes() {
		return $this->hasMany('Vote');
	}

	public function ratio()
	{
		$media = 0;
		$n = count($this->votes);
		foreach ($this->votes as $vote) {
			$media += $vote->grade;
		}
		if ($n > 0)
			return $media/$n;
		else
			return 0;
	}

}
