<?php require_once('header.html');?>
	<h3>Valiku tulemus</h3>
	<p>
	<?php
	if (isset($_GET['pilt']) && !empty($_GET['pilt'])){
	echo 'Kasutaja valis pildi nr: '. htmlspecialchars($_GET['pilt']);
	}else echo "Pilti ei ole valitud";
	?>	
	</p>
<?php require_once('footer.html');?>