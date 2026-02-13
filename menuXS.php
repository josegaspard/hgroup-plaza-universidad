<?php
	$redesSocialesCCXS = redesSocialesCCXS($CentroComercial);
	echo "
		<ul class=\"nav navbar-nav\">
			<li>
				<a href=\"index.php\" title=\"INICIO\">INICIO</a>
			</li>
			<li>
				<a href=\"directorio.php\" class=\"\" title=\"DIRECTORIO\">DIRECTORIO</a>
			</li>
			<li>
				<a href=\"mapa.php\" class=\"\" title=\"MAPA\">MAPA</a>
			</li>
			<li>
				<a href=\"eventosypromociones.php\" class=\"\" title=\"NOVEDADES\">NOVEDADES</a>
			</li>
			<li>
				<a href=\"contacto.php\" class=\"\" title=\"CONTACTO\">CONTACTO</a>
			</li>
		</ul>
		<div id=\"\" class=\"text-center divRedesSocialesXS\">
			".$redesSocialesCCXS."
		</div>
	";
?>