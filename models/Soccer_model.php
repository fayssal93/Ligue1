<?php
class Soccer_model extends Model {

 public function ranking() {
    include 'models/ranking.php';
    return $ranking;
  }

  public function team_names() {
    include 'models/team_names.php';
    return $team_names;
  }

  public function team($id) {
    if (!file_exists("models/team_$id.php")) { throw new Exception("L'équipe n'existe pas."); }
    include "models/team_$id.php"; 
    return $team;
  }

  public function game($id) {
    if (!file_exists("models/game_$id.php")) { throw new Exception(); }
    include "models/game_$id.php"; 
    return $game;
  }
}
?>
