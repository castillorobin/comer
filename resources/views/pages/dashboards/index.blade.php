
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
		<title>Melo Express</title>
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
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root" >
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page" >
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
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" >
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-6" style="background-color: #001d7e !important;">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start" >
							<!--begin::Toolbar container-->
							<div class="d-flex flex-column flex-row-fluid">
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-center pt-1">
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold">
										<!--begin::Item-->
										<li class="breadcrumb-item text-white fw-bold lh-1">
											<a href="index.html" class="text-white text-hover-primary">
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
								<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-13 pb-6" >
									<!--begin::Page title-->
									<div class="page-title me-5">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">Hola, {{ Auth::user()->name }}
										<!--begin::Description-->
										
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
									<!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Misc Widget 1-->
											<div class="row mb-5 mb-xl-8 g-5 g-xl-8">
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Card-->
													<a class="card flex-column justfiy-content-start align-items-start text-start w-100 text-gray-800 text-hover-primary p-10" href="/guias/inicio">
														<i class="ki-outline ki-gift fs-2tx mb-5 ms-n1 text-gray-500"></i>
														<span class="fs-4 fw-bold">Crear Guia</span>
													</a>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Card-->
													<a class="card flex-column justfiy-content-start align-items-start text-start w-100 text-gray-800 text-hover-primary p-10" href="/guias/mistickets">
														<i class="ki-outline ki-technology-2 fs-2tx mb-5 ms-n1 text-gray-500"></i>
														<span class="fs-4 fw-bold">Mis Tickets</span>
													</a>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Card-->
													<a class="card flex-column justfiy-content-start align-items-start text-start w-100 text-gray-800 text-hover-primary p-10" href="/guias/notificaciones">
														<i class="ki-outline ki-fingerprint-scanning fs-2tx mb-5 ms-n1 text-gray-500"></i>
														<span class="fs-4 fw-bold">Notificaciones</span>
													</a>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<!--begin::Card-->
													<a class="card flex-column justfiy-content-start align-items-start text-start w-100 text-gray-800 text-hover-primary p-10" href="/guias/destinos">
														<i class="ki-outline ki-abstract-26 fs-2tx mb-5 ms-n1 text-gray-500"></i>
														<span class="fs-4 fw-bold">Destinos</span>
													</a>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-12 text-center">
													<!--begin::Card-->
													<a class="card flex-column w-100 text-gray-800 text-hover-primary p-10" href="/guias/redevo">
														<i class="ki-outline ki-basket fs-2tx mb-5 ms-n1 text-gray-500"></i>
														<span class="fs-4 fw-bold">Reenvios y Devoluciones</span>
													</a>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												
											</div>
											<!--end::Misc Widget 1-->
											
											
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 ps-xl-12">
											<!--begin::Engage widget 1-->
											<div class=""  dir="ltr">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-center ">
													
													<div class="m-0">
														
														<div class="row ">


															<!--Inicio::Fila-->		
															

															<div class="col-sm-6 col-xl-3 mb-xl-10 " style="margin-bottom: 20px;">
																<!--begin::Card widget 2-->
																<div class="card h-lg-100">
																	<!--begin::Body-->
																	<div class="card-body d-flex justify-content-between align-items-start flex-column">         
																		<!--begin::Icon--> 
																		<div class="m-0">
																			
																			<img src="/fotos/cajas.png" alt="" style="width: 50px; height: 50px;">  
																			
																			
																					
																		</div>                           
																		<!--end::Icon-->

																		<!--begin::Section--> 
																		<div class="d-flex flex-column my-7">
																			<!--begin::Number-->           
																			<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span> 
																			<!--end::Number--> 

																			<!--begin::Follower-->
																			<div class="m-0">
																									<span class="fw-semibold fs-6 text-gray-500">
																						Hoy                  
																						</span>  
																				
																			</div>       
																			<!--end::Follower--> 
																		</div>  
																		<!--end::Section-->          
																		
																		<!--begin::Badge--> 
																		<span style="font-size: 14px; font-weight:bolder;">
																			Total, de envios
																		</span>  
																		<!--end::Badge-->                              
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card widget 2-->

															</div>







															<div class="col-sm-6 col-xl-3 mb-xl-10" style="margin-bottom: 20px;">
																<!--begin::Card widget 2-->
																<div class="card h-lg-100">
																	<!--begin::Body-->
																	<div class="card-body d-flex justify-content-between align-items-start flex-column">         
																		<!--begin::Icon--> 
																		<div class="m-0">
																			<i class="far fa-calendar-check" style="font-size: 30px;"></i>                    
																					
																		</div>                           
																		<!--end::Icon-->

																		<!--begin::Section--> 
																		<div class="d-flex flex-column my-7">
																			<!--begin::Number-->           
																			<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">963</span> 
																			<!--end::Number--> 

																			<!--begin::Follower-->
																			<div class="m-0">
																									<span class="fw-semibold fs-6 text-gray-500">
																						Hoy                  
																						</span>  
																				
																			</div>       
																			<!--end::Follower--> 
																		</div>  
																		<span class="badge badge-light-success fs-base">							
																			Entregados
																		</span>                          
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card widget 2-->

															</div>








															<div class="col-sm-6 col-xl-3 mb-xl-10" style="margin-bottom: 20px;">
																<!--begin::Card widget 2-->
																<div class="card h-lg-100">
																	<!--begin::Body-->
																	<div class="card-body d-flex justify-content-between align-items-start flex-column">         
																		<!--begin::Icon--> 
																		<div class="m-0">
																			<img src="/fotos/noentregado.png" alt="" style="width: 50px; height: 50px;">                 
																					
																		</div>                           
																		<!--end::Icon-->

																		<!--begin::Section--> 
																		<div class="d-flex flex-column my-7">
																			<!--begin::Number-->           
																			<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">452</span> 
																			<!--end::Number--> 

																			<!--begin::Follower-->
																			<div class="m-0">
																									<span class="fw-semibold fs-6 text-gray-500">
																						Hoy                  
																						</span>  
																				
																			</div>       
																			<!--end::Follower--> 
																		</div>  
																		<span class="badge badge-light-danger fs-base">							
																			No entregados
																		</span>                          
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card widget 2-->

															</div>







															<div class="col-sm-6 col-xl-3 mb-xl-10" style="margin-bottom: 20px;">
																<!--begin::Card widget 2-->
																<div class="card h-lg-100">
																	<!--begin::Body-->
																	<div class="card-body d-flex justify-content-between align-items-start flex-column">         
																		<!--begin::Icon--> 
																		<div class="m-0">
																			<i class="fas fa-map-marked-alt" style="font-size: 30px;"></i>                  
																					
																		</div>                           
																		<!--end::Icon-->

																		<!--begin::Section--> 
																		<div class="d-flex flex-column my-7">
																			<!--begin::Number-->           
																			<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">289</span> 
																			<!--end::Number--> 

																			<!--begin::Follower-->
																			<div class="m-0">
																									<span class="fw-semibold fs-6 text-gray-500">
																						Hoy                  
																						</span>  
																				
																			</div>       
																			<!--end::Follower--> 
																		</div>  
																		<span class="badge badge-light-warning fs-base">							
																			En ruta
																		</span>                          
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card widget 2-->

															</div>









															<!--Fin::Fila-->
															
														</div>



														<div class="row">
															
														
														
														<div class="mb-12">
        
<!--begin::Table widget 6-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">			
            <span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
			
            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="/metronic8/demo31/?page=apps/ecommerce/catalog/add-product" class="btn btn-sm btn-light">Add Product</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body">       
        <!--begin::Nav-->             
        <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                            <!--begin::Item--> 
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <!--begin::Link--> 
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true" role="tab">
                        <!--begin::Icon-->
                        <div class="nav-icon mb-3">        
                            <i class="ki-outline ki-truck fs-1"></i>                                                                                                                                                                     
                        </div>
                        <!--end::Icon-->
                        
                        <!--begin::Title-->
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Van                        </span> 
                        <!--end::Title-->
                        
                        <!--begin::Bullet-->
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        <!--end::Bullet-->
                    </a>
                    <!--end::Link-->
                </li>
                <!--end::Item--> 
                            <!--begin::Item--> 
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <!--begin::Link--> 
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2" aria-selected="false" tabindex="-1" role="tab">
                        <!--begin::Icon-->
                        <div class="nav-icon mb-3">        
                            <i class="ki-outline ki-bus fs-1"></i>                                                                                                                                                                     
                        </div>
                        <!--end::Icon-->
                        
                        <!--begin::Title-->
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Train                        </span> 
                        <!--end::Title-->
                        
                        <!--begin::Bullet-->
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        <!--end::Bullet-->
                    </a>
                    <!--end::Link-->
                </li>
                <!--end::Item--> 
                            <!--begin::Item--> 
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <!--begin::Link--> 
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        " data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3" aria-selected="false" tabindex="-1" role="tab">
                        <!--begin::Icon-->
                        <div class="nav-icon mb-3">        
                            <i class="ki-outline ki-logistic fs-1"></i>                                                                                                                                                                     
                        </div>
                        <!--end::Icon-->
                        
                        <!--begin::Title-->
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Drone                        </span> 
                        <!--end::Title-->
                        
                        <!--begin::Bullet-->
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        <!--end::Bullet-->
                    </a>
                    <!--end::Link-->
                </li>
                <!--end::Item--> 
                        
        </ul>             
        <!--end::Nav-->

        <!--begin::Tab Content-->
        <div class="tab-content">
                                            <!--begin::Tap pane-->
                <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1" role="tabpanel">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">                                    
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>                                     
                                    <th class="p-0 w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-1.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-2.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-12.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-11.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label ">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-13.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_stats_widget_6_tab_2" role="tabpanel">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">                                    
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>                                     
                                    <th class="p-0 w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-11.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label ">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-13.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-1.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-2.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-12.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_stats_widget_6_tab_3" role="tabpanel">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">                                    
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>                                     
                                    <th class="p-0 w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-1.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-11.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label ">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-13.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-12.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                                    <tr>                            
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">                                                   
                                                    <img src="/metronic8/demo31/assets/media/avatars/300-2.jpg" class="" alt="">                                                    
                                                </div>
                                                
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>                                
                                        </td>

                                        <td>
                                            <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                            <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                        </td>                                   

                                        <td>
                                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                            <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                        </td>
                                        
                                        <td>
                                            <div class="rating">
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                                    <div class="rating-label checked">
                                                        <i class="ki-solid ki-star fs-6"></i>                                                    </div>
                                                                                            </div>
                                            
                                            <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                        </td>                            

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>                                            </a>
                                        </td>
                                    </tr>                        
                                                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Tap pane-->
                    </div>
        <!--end::Tab Content-->        
    </div>
    <!--end: Card Body-->
</div>
<!--end::Table widget 6-->    </div>
														
														
														</div>











													</div>
													<!--begin::Action-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 1-->
											
											<!--begin::Tables Widget 5-->
											
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 5-->
											<!--begin::Row-->
											<div class="row g-5 g-xl-8">
												<!--begin::Col-->
												
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-6">
													<!--begin::Mixed Widget 8-->
													<div class="card h-xl-100 mb-xl-8">
														<!--begin::Body-->
														<div class="card-body">
															
														
															<!--end:Stats-->
															
															<!--end:Team-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Mixed Widget 8-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							<!--begin::Footer-->
							<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2026&copy;</span>
									<a href="https://appmeloexpress.com" target="_blank" class="text-gray-800 text-hover-primary">Melo Express</a>
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


		<!--begin::Modals-->
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
	
	
		
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>