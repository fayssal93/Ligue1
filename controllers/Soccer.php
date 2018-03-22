<?php
class Soccer extends Controller {
  public function index() {

    $this->ranking();
  }
  
  public function ranking() {
	//include 'models/team_names.php'; 
	//include 'models/ranking.php';
	$team_names = $this->soccer->team_names();
	$ranking = $this->soccer->ranking($id); 
	$title = 'Classement de la ligue de football';
	$this->loader->load('ranking', ['title'=>$title, 'team_names'=>$team_names, 'ranking'=>$ranking]);
	/*$view = 'ranking';
	include 'views/page.php'; On peut remplacer cette barre de code en un truc plus simple  $this->loader->load('ranking', ['title'=>$title, 'team_names'=>$team_names, 'ranking'=>$ranking]); */
	

  }


  public function team($id) {
	$id = filter_var( $id, FILTER_VALIDATE_INT);
	if ($id===null || $id === false) { throw new Exception("Format du paramètre incorrect."); }

	//include 'models/team_names.php'; // - Inclure les fichiers qui noms des équipes 
	//include "models/team_$id.php"; //  et les informations liés à l'équipe choisie par le client. "" si on a mis deux c'est pour donner la valeur exacte des Id 
	$team_names = $this->soccer->team_names();
	$team = $this->soccer->team($id);
	$title = $team_names[$id]; 

	/*$view = 'team';// - Choisir la vue "team".  
	include 'views/page.php';// - Générer la page.*/

	$this->loader->load('team', ['title'=>$title, 'team_names'=>$team_names, 'team'=>$team]);
  }

  public function game($id) {
	$id = filter_var( $id, FILTER_VALIDATE_INT);
	if ($id===null || $id === false || !file_exists("models/game_$id.php")) { throw new Exception(); }
	$title=$team_names[$id];
	//include "models/team_names.php";
	/*include "models/game_$id.php"; les includes dans la dérniere question seront remplacé par "$team_names = $this->soccer->team_names();" pour include "models/	team_names.php"; et $game = $this->soccer->game($id); pour game($id) */
	$team_names = $this->soccer->team_names();
	$game = $this->soccer->game($id);
	$goal_counts = [$this->goal_counts($game, 0), $this->goal_counts($game, 1)];
	/*$view="game" ; 
	include 'views/page.php';*/
	$this->loader->load('game', ['title'=>$title, 'team_names'=>$team_names, 'game'=>$game, 'goal_counts'=>$goal_counts]);

  }
  
 private function goal_counts($game, $position) {
	$count = 0;
	foreach($game['goals'] as $goal)
	if ($goal['team']==$position)
	$count++;
	return $count;
  }
}
