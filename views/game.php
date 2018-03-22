<table class="table">
 <tr>
  <th></th>
  <th>Équipe à domicile</th>
  <th>Résultat</th>
  <th>Équipe à l'extérieur</th>
 </tr>
 <tr class="active">
<td><?=$game['date']?></td>
<td><a href="/index.php/soccer/team/<?=$game['teams'][0] ?>"><?=$team_names[$game['teams'][0]]?></td>
<td><?=$goal_counts[0] ?> - <?=$goal_counts[1] ?></td>
<td><a href="/index.php/soccer/team/<?=$game['teams'][1] ?>"><?=$team_names[$game['teams'][1]]?></td>
  </tr>

<?php foreach($game['goals'] as $goal){ ?> 
<tr>
  <td><?=$goal['time']?>'</td>
<?php if ($goal['team']==1) { ?> <td></td><td></td> <?php } ?>
<td><?=$goal['player']?></td>
<?php if ($goal['team']==0) { ?> <td></td><td></td> <?php } ?>
 </tr>
<?php } ?>
</table>



