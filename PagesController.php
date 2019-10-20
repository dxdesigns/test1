<?php 

/**
 * Leaderboards
 */
public function leaderboard($data){
	return view('leaderboard')->with([
		'data' => User::all()
	]);
}
?>
