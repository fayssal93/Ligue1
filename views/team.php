<h3><a href="/index.php">Classement</a></h3><br>

<table class="table">
 <tr>
  <th>N°</th>
  <th>Équipe</th>
  <th>MJ</th>
  <th>G</th>
  <th>N</th>
  <th>P</th>
  <th>BP</th>
  <th>BC</th>
  <th>DB</th>
  <th>PTS</th>
 </tr>
<tr class="active">
 <td><?=$team['ranking']?></td>
 <td><b><?=$team_names[$id] ?><b></td>
 <td><?=$team['played']?></td>
 <td><?=$team['won']?></td>
 <td><?=$team['drawn']?></td>
 <td><?=$team['lost']?></td>
 <td><?=$team['goals_for']?></td>
 <td><?=$team['goals_against']?></td>
 <td><?=$team['goal_difference']?></td>
 <td><?=$team['points']?></td>
</tr>
</table>

<h3>Matchs</h3><br>

<table class="table table-hover">
 <? foreach ($team['games'] as $game_id => $game) { ?>
 <tr>
  <td><?=$game['date'] ?></td>
  <td><a href="/index.php/soccer/team/<?=$game['teams'][0]?>"><?=$team_names[$game['teams'][0]] ?></a></td>
  <td><a href="/index.php/soccer/game/<?=$game_id ?>"><?=$game['goal_counts'][0] ?>- <b><?=$game['goal_counts'][1] ?></b></a></td>
  <td><a href="/index.php/soccer/team/<?=$game['teams'][1]?>"><?=$team_names[$game['teams'][1]] ?></a></td>
 </tr>
 <? } ?>
</table>
