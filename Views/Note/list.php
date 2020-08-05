<div>
	<h1>Listado de notas</h1>
	<?php while($note = $notes->fetch_object()): ?>
		<?=$note->title?> - <?=$note->date?><br>
	<?php endwhile;?>
</div>