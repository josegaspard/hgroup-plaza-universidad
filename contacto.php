<?php
include("header.php");
include("menu.php");
?>

<div class="bg-gray-50 from-gray-50 to-white relative">
	<!-- Header Page -->
	<div class="relative bg-carso-black h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden">
		<div class="absolute inset-0 z-0">
			<img src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=2940&auto=format&fit=crop"
				alt="Contacto Plaza Universidad" class="w-full h-full object-cover opacity-40">
			<div class="absolute inset-0 bg-gradient-to-t from-carso-black/90 to-transparent"></div>
		</div>
		<div class="relative z-10 text-center px-6">
			<h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-4 italic">
				Contáct<span class="text-carso-brand">anos</span>
			</h1>
			<p class="text-xl text-gray-300 font-bold uppercase tracking-widest max-w-2xl mx-auto">
				Estamos aquí para escucharte
			</p>
		</div>
	</div>

	<div class="container mx-auto px-6 py-24 -mt-20 relative z-20">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-3xl shadow-2xl overflow-hidden">
			<!-- Form Section -->
			<div class="p-10 md:p-14">
				<h3 class="text-3xl font-black text-carso-black uppercase mb-2">Envíanos un mensaje</h3>
				<p class="text-gray-500 font-medium mb-8">Completa el formulario y nos pondremos en contacto contigo a
					la brevedad.</p>

				<form id="formulario" class="space-y-6">
					<div>
						<label
							class="block text-xs font-bold uppercase text-gray-500 mb-2 tracking-wider">Motivo</label>
						<select id="tipoMensaje" name="tipoMensaje"
							class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 font-bold text-gray-700 focus:outline-none focus:border-carso-brand focus:ring-1 focus:ring-carso-brand transition-all">
							<option value="">Elige una opción</option>
							<option value="1">Quejas y Sugerencias</option>
							<option value="2">Espacios Disponibles</option>
						</select>
					</div>

					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<div>
							<label
								class="block text-xs font-bold uppercase text-gray-500 mb-2 tracking-wider">Nombre</label>
							<input id="NombreContacto" name="NombreContacto" type="text"
								placeholder="Tu nombre completo"
								class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 font-bold text-gray-700 focus:outline-none focus:border-carso-brand focus:ring-1 focus:ring-carso-brand transition-all">
						</div>
						<div>
							<label
								class="block text-xs font-bold uppercase text-gray-500 mb-2 tracking-wider">Teléfono</label>
							<input id="TelefonoContacto" name="TelefonoContacto" type="text" maxlength="10"
								placeholder="10 dígitos"
								onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
								class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 font-bold text-gray-700 focus:outline-none focus:border-carso-brand focus:ring-1 focus:ring-carso-brand transition-all">
						</div>
					</div>

					<div>
						<label class="block text-xs font-bold uppercase text-gray-500 mb-2 tracking-wider">Correo
							Electrónico</label>
						<input id="EmailContacto" name="EmailContacto" type="email" placeholder="tucorreo@ejemplo.com"
							class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 font-bold text-gray-700 focus:outline-none focus:border-carso-brand focus:ring-1 focus:ring-carso-brand transition-all">
						<?php echo '<input id="EmailPlaza" name="EmailPlaza" type="hidden" value="' . emailCC($CentroComercial) . '">'; ?>
						<?php echo '<input id="NombrePlaza" name="NombrePlaza" type="hidden" value="' . nombreCC($CentroComercial) . '">'; ?>
					</div>

					<div>
						<label
							class="block text-xs font-bold uppercase text-gray-500 mb-2 tracking-wider">Mensaje</label>
						<textarea id="Mensaje" name="Mensaje" rows="4" placeholder="¿En qué podemos ayudarte?"
							class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 font-bold text-gray-700 focus:outline-none focus:border-carso-brand focus:ring-1 focus:ring-carso-brand transition-all resize-none"></textarea>
					</div>

					<button type="submit" id="form-submit"
						class="w-full bg-carso-brand text-white font-black uppercase tracking-widest py-5 rounded-xl text-sm hover:bg-carso-dark transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
						Enviar Mensaje
					</button>
				</form>
			</div>

			<!-- Map Section -->
			<div class="bg-gray-100 relative min-h-[400px] lg:min-h-full">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.9906145720797!2d-99.16838518509364!3d19.4128114868956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3f231d5af9%3A0xe71f9b6ca034935f!2sPlaza+Insurgentes!5e0!3m2!1ses-419!2smx!4v1560267596739!5m2!1ses-419!2smx"
					class="absolute inset-0 w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
include("modales.php");
?>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>