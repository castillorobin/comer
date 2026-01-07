
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
		<title>Destinos</title>
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
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
	
<style>

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







                            <!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-lg-5">
									<!--begin::Menu- wrapper-->
									<div id="btnNotifs"
										class="btn btn-icon btn-custom btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
										data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
										data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom"
									>
										<i class="ki-outline ki-calendar fs-1" ></i>

										

										@if($noLeidas > 0)
										<span id="notifBadge" class="position-absolute top-25 translate-middle badge badge-circle badge-danger" >
											{{ $noLeidas > 99 ? '99+' : $noLeidas }}
										</span>
										@endif
									</div>



									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-color: rgb(212, 212, 212);">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6" style="font-weight: bolder;">Notificaciones
											<span class="fs-8 opacity-75 ps-3">{{ count($notis) }}</span></h3>
											<!--end::Title-->
											<!--begin::Tabs-->
											<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
												<li class="nav-item">
													<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Detalle</a>
												</li>
												
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
                                                    @foreach($notis as $noti)

                                                    @if($noti->tipo == 'atraso')

                                                    <div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																
																<span class="symbol-label">
																	<i class="fas fa-frown fs-2 text-muted"></i>
																</span>
																
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="/guias/notificaciones" class="fs-6 text-gray-800 text-hover-danger fw-bold">¡Atraso!</a>
																<div class="text-gray-500 fs-7">{{ $noti->ruta->punto ?? 'Sin punto' }}</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">{{ $noti->created_at->format('H:i') }}</span>
														<!--end::Label-->
													</div>

                                                    @endif

                                                    @if($noti->tipo == 'llegado')

                                                    <div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label">
																	 <i class="fas fa-flag-checkered text-muted" style="font-size: 22px;"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="/guias/notificaciones" class="fs-6 text-gray-800 text-hover-success fw-bold">¡Hemos llegado!</a>
																<div class="text-gray-500 fs-7">{{ $noti->ruta->punto ?? 'Sin punto' }}</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">{{ $noti->created_at->format('H:i') }}</span>
														<!--end::Label-->
													</div>

                                                    @endif


                                                    @if($noti->tipo == 'por_llegar')

                                                    <div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label" style="color: gray;">
																	 <i class="fas fa-shipping-fast text-muted" style="font-size: 22px;"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="/guias/notificaciones" class="fs-6 text-gray-800 text-hover-warning fw-bold">¡Por llegar!</a>
																<div class="text-gray-500 fs-7">{{ $noti->ruta->punto ?? 'Sin punto' }}</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">{{ $noti->created_at->format('H:i') }}</span>
														<!--end::Label-->
													</div>

                                                    @endif




													
                                                    @endforeach
													<!--end::Item-->


													
												
												</div>
												<!--end::Items-->
												<div class="py-3 text-center border-top">
													<a href="/guias/notificaciones" class="btn btn-color-gray-600 btn-active-color-primary">Ver todas 
													<i class="ki-outline ki-arrow-right fs-5"></i></a>
													</div>
											</div>
											<!--end::Tab panel-->
											
											
											<!--end::Tab panel-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::Notifications-->







								
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
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" style="min-height: 100vh;"	> 
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
										<h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">Destinos
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
					<div class="app-container  container-xxl ">
            
            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">
    
            <!--begin::Products-->
<div class="card card-flush">
   <!--begin::Card header-->
 <!--begin::Card header-->
<div class="card-header align-items-center py-5 gap-2 gap-md-5 flex-wrap">
    <!--begin::Card title-->
    <div class="card-title w-100 w-md-auto">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1 w-100">
            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
            <input id="searchGuia" type="text"
                   class="form-control form-control-solid w-100 w-md-250px ps-12"
                   placeholder="Buscar destino...">
        </div>
        <!--end::Search-->
    </div>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar w-100 w-md-auto flex-row-fluid justify-content-end gap-2 gap-md-5">
        
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<div id="kt_ecommerce_sales_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">











<div id="kt_activity_today" class="card-body p-0 tab-pane fade active show" role="tabpanel" aria-labelledby="kt_activity_today_tab">





@foreach($destinos as $destino)
    {{-- Agregamos la clase 'notif-item' y el atributo 'data-search' con el nombre del punto --}}
    <div class="row notif-item" 
         style="font-size: 14px;" 
         data-search="{{ $destino->ruta->punto ?? 'Sin punto' }}">
         
        <div class="col-md-1" style="margin-top: 50px;">
            <a href="{{ route('envios.compartirdestinos', $destino->id) }}"
               class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1"
               target="_blank"
               title="Compartir guía por WhatsApp">
                <i class="fas fa-share-square" style="font-size: 22px;"></i>
            </a>
        </div>
        
        <div class="col-md-6">
            <div class="d-flex flex-stack mb-6">
                <div class="d-flex flex-column align-items-start me-3">
                    <div class="d-flex flex-column">
                        <div class="text-center mb-1">
                            <span class="fs-6 text-gray-800 text-hover-primary fw-bold me-2">
                                {{ $destino->ruta->punto ?? 'Sin punto' }}
                            </span>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="mb-1">
                                <br>
                                <span style="font-weight: bolder;"> Hora de llegada:</span> 
                                <span style="font-size: 16px; color: #000000; font-weight: bolder;"> {{ $destino->hora_llegada_ampm }}</span>
                                <br>
                                <span style="font-weight: bolder;"> Hora de retirada:</span> 
                                <span style="font-size: 16px; color: #000000; font-weight: bolder;">{{ $destino->hora_retirada_ampm }}</span>
                                <br>
                                <span style="font-weight: bolder;"> Lugar de entrega:</span> 
                                <span class="text-muted"> {{ $destino->lugar_entrega }}</span>
                                <br>
                                <p></p>
                                <span style="font-weight: bolder;"> Dias de entrega:</span> <br> 
                                <span style="font-size: 20px;" class="text-muted">{{ $destino->dias }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach





            
        </div>

            
        </div>
        <!--end::Timeline details-->

		<div class="w-100 text-end" style="margin-top: 15px;">
			<a href="/dashboard">
  <button class="btn btn-secondary">Cerrar</button>
  </a>
</div>
    </div>
    <!--end::Timeline content--> 

	
</div>
<!--end::Timeline item-->
   
    



 </div>
<!--end::Timeline-->          






  
  


<div id="" class="row">

<!--end::Table-->    </div>

    <!--end::Card body-->
</div>
<!--end::Products-->        
    </div>
<!--end::Content-->	

                      
            
                         

                                    
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">

    

            <!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">{{ date('Y') }} &copy;</span>
    <a href="/dashboard" target="_blank" class="text-gray-800 text-hover-primary">Melo Express</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->

<!--end::Menu-->    </div>
<!--end::Footer-->                            </div>
            <!--end:::Main-->

            
                            </div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
		
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->

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
	















<div class="modal fade" id="modalZoomFoto" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body p-0">
        <div class="d-flex justify-content-center align-items-center bg-light" style="min-height: 60vh;">
          <img id="zoomFotoImg" src="" alt="Zoom" class="img-fluid"
               style="max-height: 80vh; width:auto;">
        </div>
      </div>
    </div>
  </div>
</div>












	
		 
        <!--begin::Javascript-->
					<script>
					var hostUrl = "assets/";
					</script>	

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                        <!--end::Vendors Javascript-->
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="assets/js/custom/utilities/search/horizontal.js"></script>
                            <script src="assets/js/custom/apps/projects/users/users.js"></script>
                            <script src="assets/js/widgets.bundle.js"></script>
                            <script src="assets/js/custom/widgets.js"></script>
                            <script src="assets/js/custom/apps/chat/chat.js"></script>
                            <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="assets/js/custom/utilities/modals/new-target.js"></script>
                            <script src="assets/js/custom/utilities/modals/users-search.js"></script>

							    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->

		<script>
document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('searchGuia');
    if (!input) return;

    const norm = (s) => (s || '')
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '') // Quita acentos
        .trim();

    input.addEventListener('input', () => {
        const q = norm(input.value);
        // Buscamos los items cada vez o los guardamos en una variable
        const items = document.querySelectorAll('.notif-item');

        items.forEach(el => {
            const hay = norm(el.dataset.search);
            // Si el texto del input está incluido en el data-search, se muestra
            el.style.display = hay.includes(q) ? '' : 'none';
        });
    });
});
</script>




<script>
document.addEventListener('DOMContentLoaded', () => {
  const modalEl = document.getElementById('modalZoomFoto');
  const imgZoom = document.getElementById('zoomFotoImg');
  if (!modalEl || !imgZoom) return;

  modalEl.addEventListener('show.bs.modal', (event) => {
    const trigger = event.relatedTarget;
    const src = trigger?.getAttribute('data-src');
    if (src) imgZoom.src = src;
  });

  modalEl.addEventListener('hidden.bs.modal', () => {
    imgZoom.src = '';
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnNotifs');

  btn?.addEventListener('click', async () => {
    console.log('click notifs'); // <- si no aparece, no está entrando

    try {
      const res = await fetch("{{ route('notificaciones.marcarLeidas') }}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}",
          "Accept": "application/json"
        }
      });

      const data = await res.json();
      console.log('respuesta:', data);

      if (data.ok) {
        document.getElementById('notifBadge')?.remove();
      }
    } catch (e) {
      console.error('error fetch:', e);
    }
  });
});
</script>



	</body>
	<!--end::Body-->
</html>