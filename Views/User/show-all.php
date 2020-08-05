<div>
	<h1>Listado de usuario</h1>
	<?php while($user = $users->fetch_object()): ?>
		<?=$user->name?> <?=$user->lastname?> - <?=$user->email?> <br>
	<?php endwhile;?>
</div>