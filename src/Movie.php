<?php

class Movie {

protected $rating;
protected $watched;
protected $title;

	public function __construct($title)
	{
		$this->title = $title;
	}

	public function watch()
	{
		$this->watched = true;		
	}	

	public function isWatched()
	{
		return $this->watched;
	}

	public function setRating($rating) 
	{
		$this->validateRatingChange($rating);
		$this->rating = $rating;
	}

	public function getRating() 
	{
		return $this->rating;
	}

	private function validateRatingChange($rating)
	{
		if($rating > 5)
			throw new InvalidArgumentException;
	}

	public function getTitle()
	{
		return $this->title;
	}


}

?>