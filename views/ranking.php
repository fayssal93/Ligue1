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
<? $rank = 1; foreach ($ranking as $team_id => $team) { ?>
<tr>
 <td><?=$rank?></td>                                    
<td><a href="/index.php/soccer/team/<?=$team_id?>"><?=$team_names[$team_id] ?></a></td>  

<?/*(ça c'est avant l'excution du controleurs<td><a href="?action=team&id=<?=$team_id >"><?=$team_names[$team_id] ?></a></td>) >*/ ?>

<td><?=$team['played']?></td>
 <td><?=$team['won']?></td>
 <td><?=$team['drawn']?></td>
 <td><?=$team['lost']?></td>
 <td><?=$team['goals_for']?></td>
 <td><?=$team['goals_against']?></td>
 <td><?=$team['goal_difference']?></td>
 <td><?=$team['points']?></td>
</tr>
<? $rank++; } ?>
</table>
