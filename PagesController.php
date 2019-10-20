<?php 

class Leaderboard{

	public $newString = '';
	public function __construct(){
		$this->newString = "This will show new string";
	}
	/**
	 * Leaderboards
	 */
	public function leaderboard($data){
		return view('leaderboard')->with([
			'data' => User::all(),
			'newString' => $this->newString,
		]);
	}
}
?>
