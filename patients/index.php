<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="?orderColumn=name&orderDirect=<?=checkDirect('name')?>">Name</a></th>
				<th><a href="?orderColumn=species&orderDirect=<?=checkDirect('species')?>">Species</a></th>
				<th><a href="?orderColumn=status&orderDirect=<?=checkDirect('status')?>">Status</a></th>
				<th><a href="?orderColumn=gender&orderDirect=<?=checkDirect('gender')?>">Gender</a></th>
				<th><a href="?orderColumn=clientname&orderDirect=<?=checkDirect('clientname')?>">Client</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['clientname']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>