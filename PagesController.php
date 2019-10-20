<?php 


	public function leaderboard(){
		return view('leaderboard')->with([
			'data' => User::all()
		]);
	}
?>
