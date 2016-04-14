
	<h3>Valiku tulemus</h3>
	<p>
	<?php
	if (isset($_POST['pilt']) && !empty($_POST['pilt'])){
	echo 'Kasutaja valis pildi nr: '. htmlspecialchars($_POST['pilt']);
	}else echo "Pilti ei ole valitud";
	?>	
	</p>
