<?php
$urlInmuebles = urlInmuebles($CentroComercial);
echo "
	<nav id=\"header\" class=\"navbar navbar-default navbar-fixed-top  visible-lg\">
		<div class=\"container visible-lg\">
            <div class=\"row justify-content-center\">
				<div class=\"col-md-4\"></div>
				<div class=\"col-md-4 text-center\">
					<a class=\"navbar-brand img-responsive enlace-logo-top-carso\" href=\"".$urlInmuebles."\" target=\"_blanck\"><img class=\"logoMenu img-responsive logotipo-carso-top\" src=\"logos/logo_InmueblesCarso.png\" /></a>
				</div>
				<div class=\"col-md-4\">
                    <a class=\"navbar-brand img-responsive enlace-logotipo-plaza\" href=\"/\"><img class=\"logoMenu img-responsive\" src=\"images/logo.png\" /></a>
                </div>
			</div>
		</div>
	</nav>

	<nav id=\"header\" class=\"navbar navbar-default navbar-fixed-top visible-md visible-sm\">
		<div class=\"container visible-md visible-sm\">
            <div class=\"row justify-content-center\">
				<div class=\"col-6 text-center\">
					<a class=\"navbar-brand img-responsive enlace-logo-top-carso\" href=\"".$urlInmuebles."\" target=\"_blanck\"><img class=\"logoMenu img-responsive logotipo-carso-top\" src=\"logos/logo_InmueblesCarso.png\" /></a>
				</div>
				<div class=\"col-6\">
                    <a class=\"navbar-brand img-responsive enlace-logotipo-plaza\" href=\"/\"><img class=\"logoMenu img-responsive\" src=\"images/logo.png\" /></a>
                </div>
			</div>
		</div>
	</nav>

	<nav id=\"header\" class=\"navbar navbar-default navbar-fixed-top  visible-xs\">
		<div class=\"container-fluid\">
			<div class=\"navbar-header\">
				<div>
					<button id=\"btnMenuXS\" type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
						<img class=\"btnMenuXS\" src=\"logos/btnMenu.png\" />  <span class=\"caret\"></span>
					</button>
				</div>
				<div>
				</div>
				<div class=\"col-xs-8\">
					<a class=\"navbar-brand \" href=\"/\">
						<img class=\"logoMenuXS img-responsive\" src=\"images/logo.png\" />
					</a>
				</div>
			</div>
			<div class=\"collapse navbar-collapse menu2\" id=\"myNavbar\">
			";
				include("menuXS.php");
				echo "
			</div>
		</div>
	</nav>
";
?>