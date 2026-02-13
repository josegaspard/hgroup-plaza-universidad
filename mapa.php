<?php
include("header.php");
include("menu.php");
?>

<div class="bg-gray-50 min-h-screen">
	<!-- Header Page -->
	<div class="relative bg-white h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden">
		<div class="absolute inset-0 z-0">
			<!-- STATIC PLACEHOLDER FOR BACKEND MAP SVG -->
			<img src="https://www.formato7.com/wp-content/uploads/2020/11/Plaza-americas-Xalapa.jpg"
				class="w-full h-full object-cover opacity-20 grayscale">
		</div>
		<div class="relative z-10 text-center px-6">
			<h1 class="text-5xl md:text-7xl font-black text-carso-black uppercase tracking-tighter mb-4 italic">
				Mapa <span class="text-carso-brand">Interactivo</span>
			</h1>
			<p class="text-xl text-gray-500 font-bold uppercase tracking-widest max-w-2xl mx-auto">
				Ubica tus tiendas favoritas fácilmente
			</p>
		</div>
	</div>

	<!-- Content -->
	<div class="container mx-auto px-6 py-24 -mt-20 relative z-20">
		<div class="bg-white rounded-3xl shadow-2xl p-8 mb-16 overflow-hidden">

			<!-- Controls -->
			<div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-8">
				<div class="flex gap-4">
					<button
						class="px-8 py-3 bg-carso-black text-white font-black text-xs uppercase rounded-full hover:bg-carso-brand transition-all shadow-lg active">Planta
						Baja</button>
					<button
						class="px-8 py-3 bg-gray-100 text-gray-500 font-black text-xs uppercase rounded-full hover:bg-gray-200 transition-all hover:text-carso-black">Planta
						Alta</button>
				</div>
				<div class="flex items-center gap-2 text-xs font-bold text-gray-400 uppercase tracking-widest">
					<span><i class="fas fa-search mr-2"></i>Haz zoom para ver detalles</span>
				</div>
			</div>

			<!-- Map Container -->
			<div
				class="relative w-full h-[600px] bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden flex items-center justify-center">

				<!-- SVG MAPA -->
				<div id="svg-container" class="w-full h-full p-4 relative">

					<?php
					// LOGICA BACKEND: 
					// 1. Recibir $_GET['local'] si viene desde "Ver en Mapa"
					// 2. Inyectar el SVG del mapa.
					// 3. Si hay 'local', inyectar JS para hacer highlight/zoom al ID correspondiente.
					
					/* EJEMPLO PHP:
					$localId = isset($_GET['local']) ? $_GET['local'] : null;
					echo renderMapSVG(); // Función backend que imprime el SVG
					if($localId) {
						echo "<script>HighlighStore('$localId');</script>";
					}
					*/

					// DEMO HTML PLACEHOLDER
					echo '<div class="absolute inset-0 flex items-center justify-center text-gray-400 font-bold uppercase tracking-widest p-10 flex-col gap-4">
                            <i class="fas fa-map-marked-alt text-6xl text-gray-200"></i>
                            <span>Mapa Interactivo (SVG)</span>
                            <span class="text-xs font-normal NormalCase text-gray-300">Se cargará desde el backend</span>
                          </div>';
					?>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- BACKEND LOGIC NOTE: This element handles AJAX/PHP data for modals if clicked on map -->
<div class="hidden">
	<?php
	// echo $informacionPublicidad = giroComercial($CentroComercial);
	?>
</div>

<?php
include("footer.php");
include("modales.php");
?>

<!-- Scripts -->
<script>
	// DEMO LOGIC: Read URL param 'local' to simulate highlight
	document.addEventListener('DOMContentLoaded', () => {
		const urlParams = new URLSearchParams(window.location.search);
		const localId = urlParams.get('local');

		if (localId) {
			console.log("Backend Logic: Highlight Store ID " + localId);
			// In production, this would act on the SVG element:
			// document.getElementById('local-' + localId).classList.add('active-store');

			// Simulation
			const container = document.getElementById('svg-container');
			const msg = document.createElement('div');
			msg.className = "absolute top-4 left-4 bg-carso-brand text-white px-6 py-3 rounded-xl shadow-xl font-bold uppercase text-xs z-50 animate-bounce";
			msg.innerHTML = `<i class="fas fa-map-pin mr-2"></i> Localizando Tienda #${localId}`;
			container.appendChild(msg);
		}
	});

	const tabs = document.querySelectorAll('button');
	tabs.forEach(tab => {
		tab.addEventListener('click', () => {
			tabs.forEach(t => {
				t.classList.remove('bg-carso-black', 'text-white');
				t.classList.add('bg-gray-100', 'text-gray-500');
			});
			tab.classList.remove('bg-gray-100', 'text-gray-500');
			tab.classList.add('bg-carso-black', 'text-white');
		});
	});
</script>