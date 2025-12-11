
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.2.3
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com 
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
<base href="../../" />
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>

		<style>
			/* Coloca este código en tu archivo CSS */
.placeholder-select:required:invalid {
    color: #6c757d; /* Color gris suave de Bootstrap (text-muted) */
}

/* Opcional: Asegura que las opciones reales tengan el color normal (negro) */
.placeholder-select option {
    color: #212529; /* Color de texto normal */
}
		</style>
<style>
/* contenedor */
.form-floating.col-lg-12.mb-4 { width: 100%; }

/* === SELECT2 (Metronic) === */
.select2-container { width: 100% !important; }

.select2-container .select2-selection--single.form-select,
.select2-container--bootstrap5 .select2-selection--single,
.select2-container--default .select2-selection--single {
  height: 45px !important;
  min-height: 45px !important;
  display: flex !important;
  align-items: center !important;
  padding: 0 12px !important;
}

/* texto */
.select2-container--bootstrap5 .select2-selection--single .select2-selection__rendered,
.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 45px !important;
  padding-left: 0 !important;
  padding-right: 24px !important;
}

/* flecha */
.select2-container--bootstrap5 .select2-selection--single .select2-selection__arrow,
.select2-container--default .select2-selection--single .select2-selection__arrow {
  height: 45px !important;
  top: 0 !important;
}

/* opcional: que el dropdown no se vea raro con padding */
.select2-container--bootstrap5 .select2-dropdown,
.select2-container--default .select2-dropdown {
  border-radius: .475rem;
}
</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}" style="background-color: #001d7e !important;">
					<!--begin::Header container-->
					<div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Header mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
						</div>
						<!--end::Header mobile toggle-->
						<!--begin::Logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-18">
							<a href="/dashboard">
								<img alt="Logo" src="/fotos/logomelo.png" class="h-25px d-sm-none" />
								<img alt="Logo" src="/fotos/logomelo.png" class="h-25px d-none d-sm-block" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper" >
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								<div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Inicio</span>
											
										</span>
										<!--end:Menu link-->										
									</div>
									<!--end:Menu item-->

									<!--begin:Menu item-->
									<div data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg me-0 me-lg-2">
										<!--begin:Menu link-->
										<a href="/guias/generadas" class="menu-link">
										<span >

											<span class="menu-title">Guias generadas</span>
											
										</span>
										</a>
										<!--end:Menu link-->										
									</div>
									<!--end:Menu item-->
									
									</div>
									<!--end:Menu item-->
								
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0" >
								
								<!--begin::User menu-->
								<div class="app-navbar-item ms-5" id="kt_header_user_menu_toggle" >
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										@php
    $avatar = Auth::user()->avatar
        ? asset('storage/avatars/' . Auth::user()->avatar)  // ruta donde guardaremos los avatares
        : asset('assets/media/avatars/300-13.jpg');         // avatar por defecto
@endphp

<img class="symbol symbol-circle symbol-35px symbol-md-40px"
     src="{{ $avatar }}"
     alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5"
     data-bs-toggle="modal"
     data-bs-target="#modalCambiarAvatar">
													<img alt="Logo" src="{{ $avatar }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
													</div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										
										
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="{{ route('logout') }}" class="menu-link px-5">Cerrar Sesión</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-6" style="background-color: #001d7e !important;">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
							<!--begin::Toolbar container-->
							<div class="d-flex flex-column flex-row-fluid">
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-center pt-1">
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold">
										<!--begin::Item-->
										<li class="breadcrumb-item text-white fw-bold lh-1">
											<a href="/dashboard" class="text-white text-hover-primary">
												<i class="ki-outline ki-home text-gray-700 fs-6"></i>
											</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-white fw-bold lh-1">Inicio</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Toolbar wrapper=-->
								<!--begin::Toolbar wrapper=-->
								<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-13 pb-6">
									<!--begin::Page title-->
									<div class="page-title me-5">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">Crear Guia
										<!--begin::Description-->
										<span class="page-desc text-gray-600 fw-semibold fs-6 pt-3"></span>
										<!--end::Description--></h1>
										<!--end::Title-->
									</div>
									<!--end::Page title-->
									
								</div>
								<!--end::Toolbar wrapper=-->
							</div>
							<!--end::Toolbar container=-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<!--begin::Content-->
								<div id="kt_app_content" class="app-content flex-column-fluid">
									<!--begin::Card-->
									<div class="card card-flush">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin:::Tabs-->
											<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
													</a>
												</li>
												<!--end:::Tab item-->
											
											
											
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
													<!--begin::Form-->
													<form id="form_envio" class="form" action="{{ route('envios.store') }}" method="POST">
    													@csrf
														<input type="hidden" name="print" id="print" value="0">
														<!--begin::Input group-->
														<div class="row fv-row mb-4">
															@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif
															<div class="col-md-7 mb-4">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="comercio" value="{{ $comercio->comercio ?? '' }}" placeholder="Nombre del comercio"/>
																<!--end::Input-->
															</div>
															<div class="col-md-5">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="direccion_recolecta" value="{{ $comercio->direccion ?? '' }}" placeholder="Direccion de recolecta"/>
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row fv-row mb-4">
															
															<div class="col-md-6 mb-4">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="destinatario" value="" placeholder="Destinatario"/>
																<!--end::Input-->
															</div>
															<div class="col-md-3 mb-4">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="telefono" value="" placeholder="Telefono"/>
																<!--end::Input-->
															</div>
															<div class="col-md-3">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="whatsapp" value="" placeholder="WhatsApp"/>
																<!--end::Input-->
															</div>
														</div>

														<!--begin::Input group-->
														<div class="row fv-row ">

														<div class="col-md-4 mb-4">
																<!--begin::Input-->
																
																<select name="tipo" id="tipo" class="form-control form-control-solid placeholder-select">
																	<option value="" disabled hidden>Seleccionar tipo</option>
																	<option value="Punto fijo" selected>Punto fijo</option>
																	<option value="Personalizado">Personalizado</option>
																	<option value="Personalizado departamental">Personalizado departamental</option>
																	<option value="Casillero">Casillero</option>
																</select>
																<!--end::Input-->
															</div>
															
															<div class="col-md-8 mb-4">
																<!-- Aquí se inyecta el campo según el tipo -->
																<div id="contenedor-direccion"></div>
															</div>
															
														</div>
														<!--end::Input group-->


														<!--begin::Input group-->
														<div class="row fv-row mb-4">
															
															
															<div class="col-md-6 mb-4">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" name="estado" value="" placeholder="Creado" readonly/>
																<!--end::Input-->
															</div>

															<div class="col-md-6">
																<!--begin::Input-->
																<input type="date" class="form-control form-control-solid" name="fecha_entrega" value="" placeholder="Fecha de entrega"/>
																<!--end::Input-->
															</div>
														</div>
														<!--end::Input group-->

														<div class="row fv-row mb-7">
															
															<div class="col-md-12">
																<!--begin::Input-->
																
																	<textarea name="nota" class="form-control form-control-solid" id="nota" cols="30" rows="4" placeholder="Nota"></textarea>
																<!--end::Input-->
															</div>
														</div>


														<!--begin::Input group-->
														<div class="row fv-row mb-4">
															
															<div class="col-md-8">
																
															</div>
															<div class="col-md-4">
															<div class="d-flex align-items-center"> 
																<label class="fs-6 fw-semibold form-label me-3 mb-0">
																	<span class="text-nowrap text-muted">Total a Cobrar: </span>
																</label>
																
																<input type="text" class="form-control form-control-solid" name="total" value="" placeholder="$0.00"/>
															</div>
														</div>
														</div>
														<!--end::Input group-->










													<div class="row py-5">
  <div class="col-12">
    <div class="d-flex flex-column flex-md-row justify-content-end gap-2">
      
      <a href="/dashboard" class="w-100 w-md-auto">
        <button type="button"
                data-kt-ecommerce-settings-type="cancel"
                class="btn btn-light w-100">
          Cancelar
        </button>
      </a>

      <button type="submit"
              class="btn btn-primary w-100 w-md-auto"
              onclick="document.getElementById('print').value='0'; document.getElementById('form_envio').target='_self';">
        Guardar
      </button>

      <button type="submit"
              class="btn btn-success w-100 w-md-auto"
              onclick="document.getElementById('print').value='1'; document.getElementById('form_envio').target='_blank';">
        Guardar e imprimir
      </button>

    </div>
  </div>
</div>
													</form>
													<!--end::Form-->
												</div>
											
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							<!--begin::Footer-->
							<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">{{ date('Y') }} &copy;</span>
									<a href="/dashboard" target="_blank" class="text-gray-800 text-hover-primary">Melo Express</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
						
								<!--end::Menu-->
							</div>
							<!--end::Footer-->
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->



		<!-- Modal para cambiar avatar -->
<div class="modal fade" id="modalCambiarAvatar" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Cambiar avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <form action="{{ route('perfil.avatar.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="mb-3 text-center">
            <img src="{{ $avatar }}"
                 alt="Avatar actual"
                 class="rounded-circle mb-3"
                 style="width: 100px; height: 100px; object-fit: cover;">
          </div>

          <div class="mb-3">
            <label for="avatar" class="form-label">Selecciona una imagen</label>
            <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*" required>
            <div class="form-text">Formatos permitidos: JPG, JPEG, PNG, WEBP. Máx: 2MB.</div>
          </div>

          @if ($errors->has('avatar'))
            <div class="alert alert-danger py-2">{{ $errors->first('avatar') }}</div>
          @endif

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar avatar</button>
        </div>
      </form>

    </div>
  </div>
</div>
	
		
		
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->
	
		
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/ecommerce/settings/settings.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

		<script>
document.addEventListener("DOMContentLoaded", function () {
    const tipo = document.getElementById("tipo");
    const contenedor = document.getElementById("contenedor-direccion");

    // Templates (Blade dentro de strings)
    const tplPuntoFijo = `
        <div class="form-floating col-lg-12" style="height: 45px;">
            <select class="form-select form-select-solid mi-selector" data-control="select2" name="punto" id="punto">
                <option value="" style="height: 45px;"> </option>
                @foreach ($puntos as $punto)
                    <option value="{{ $punto->id }}">{{ $punto->punto }}</option>
                @endforeach
            </select>
            
            <br>
        </div>
    `;

    const tplCasillero = `
        <div class="form-floating col-lg-12">
            <select class="form-select form-select-solid" name="agencia" id="agencia" aria-label="Floating label select example">
                @foreach($agencias as $agencia)
                    <option value="{{ $agencia->nombre }}">{{ $agencia->nombre }}</option>
                @endforeach
            </select>
           
        </div>
    `;

    const tplPersonalizado = `
        <div class="form-floating col-lg-12">
            <input type="text" class="form-control form-control-solid" name="direccionp" id="direccionp" placeholder="Dirección" value="" />
            <label for="direccionp" style="padding-left: 25px;">Dirección</label>
        </div>
    `;

    function renderCampoDireccion() {
        const valor = (tipo.value || "").trim();

        if (valor === "Punto fijo") {
            contenedor.innerHTML = tplPuntoFijo;
            // Si estás usando Select2 de Metronic
            initSelect2("#punto");
        } else if (valor === "Casillero") {
            contenedor.innerHTML = tplCasillero;
            initSelect2("#agencia");
        } else if (valor === "Personalizado" || valor === "Personalizado departamental") {
            contenedor.innerHTML = tplPersonalizado;
        } else {
            contenedor.innerHTML = ""; // nada si no ha elegido
        }
    }

    function initSelect2(selector) {
        // Metronic suele exponer jQuery. Si no existe, no hace nada.
        if (window.jQuery && jQuery().select2) {
            const $el = jQuery(selector);
            // Evita doble init
            if ($el.length && !$el.hasClass("select2-hidden-accessible")) {
                $el.select2({ dropdownParent: $el.closest('form') });
            }
        }
    }

    // Evento change
    tipo.addEventListener("change", renderCampoDireccion);

    // Por si viene preseleccionado (editar)
    renderCampoDireccion();
});
</script>


<script>
  (function () {
    const form = document.getElementById('form_envio');
    const printInput = document.getElementById('print');

    form.addEventListener('submit', function () {
      // Si fue "Guardar e imprimir"
      if (printInput && printInput.value === '1') {
        // Espera un poquito para no interferir con el submit
        setTimeout(() => {
          form.reset();

          // Si tienes contenedores dinámicos (como tu #contenedor-direccion)
          const cont = document.getElementById('contenedor-direccion');
          if (cont) cont.innerHTML = '';

          // Regresa el hidden a 0 por seguridad
          printInput.value = '0';

          // Si quieres volver a valor por defecto en selects:
          const tipo = document.getElementById('tipo');
          if (tipo) tipo.selectedIndex = 0; // o el índice que quieras
        }, 50);
      }
    });
  })();
</script>

	</body>
	<!--end::Body-->
</html>