<?php
 	$enviar = true;

	if(empty($cp) || empty($estado) || empty($ciudad) || empty($fracc) || empty($calle) || empty($numext) || empty($tel)){?>
		<script type="text/javascript">
			alert("*No dejes campos vacios*");
		</script>
		<?php
		$enviar = false;
	}

	if(empty($numint)){
		$numint = '';
	}
?>