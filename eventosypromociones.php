<!DOCTYPE html>
<html>
	<head>
		<?php
			include ("header.php");
		?>
	</head>
	<body>
		<?php
			echo facebookIni();
		?>
		<div id="bodyID">
			<div class="grales">
				<?php
					include ("logos-top.php");
				?>
			</div>
			<div class="container" id="containerbody2">

			<div id="titulos-gral" class="row mb-5 grales">
					<div class="col-md-6">
						<h1 class="txtTitulo container">Eventos y Promociones</h1>
					</div>
				</div>

				<div id="publicaciones">
				<?php
					$publicaciones = publicaciones($CentroComercial);
					echo $publicaciones;
				?>
				</div>
				<hr>
				<div class="col-md-4">
					<div class="fb-page" data-href="<?php echo facebook($CentroComercial); ?>" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo facebook($CentroComercial); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo facebook($CentroComercial); ?>">Faceboook <?php echo nombreCC($CentroComercial); ?></a></blockquote></div>
				</div>
				<div class="col-md-4">
					<a class="twitter-timeline" data-lang="es" data-height="500" href="<?php echo twitter($CentroComercial); ?>">Tweets <?php echo nombreCC($CentroComercial); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="col-md-4">
					<iframe width="320" height="440" src="https://www.instagram.com/plazainsurgentes/embed/" frameborder="0"></iframe>
				</div>
				<script>
					$(document).ready(function () {
						$('.publicidad').on("click", function (e) {
							var _href = this.href;
							var _url = _href;
							e.preventDefault();
							$('#miModalContenidoPublicidad').load(_url, function () {
								$('#miModalPublicidad').modal({
								}, 'show');
							});
							return false;
						});
					});
				</script>
				<div id="menuHorizontal" class="clearfix">
					<?php
						include ("menu.php");
					?>
				</div>
			</div>
		</div>
		<br>
		<footer id="footerID">
			<div class="container">
				<?php
					include ("footer.php");
				?>
			</div>
		</footer>
		<?php
			include ("modales.php");
		?>
	</body>
</html>