
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
		<title>Mis Tickets</title>
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

<style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .dataTables_filter {
            display: none;
        }

       
/*
        #kt_ecommerce_report_shipping_table_previous{
            display: none;
        }
        #kt_ecommerce_report_shipping_table_next{
            display: none;
        }
            */
    </style>

	</head>

	
<script>
    function doSearch()

{

const tableReg = document.getElementById('kt_ecommerce_report_shipping_table');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

    // Si el td tiene la clase "noSearch" no se busca en su cntenido

    if (tableReg.rows[i].classList.contains("noSearch")) {

        continue;

    }



    let found = false;

    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

    // Recorremos todas las celdas

    for (let j = 0; j < cellsOfRow.length && !found; j++) {

        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

        // Buscamos el texto en el contenido de la celda

        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

            found = true;

            total++;

        }

    }

    if (found) {

        tableReg.rows[i].style.display = '';

    } else {

       

        tableReg.rows[i].style.display = 'none';

    }

}



// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

    lastTR.classList.add("hide");

} else if (total) {

    td.innerHTML="";

} else {

    lastTR.classList.add("red");

    td.innerHTML="";

}

}
</script>
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
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
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
								<img alt="Logo" src="assets/media/logos/demo34-small.svg" class="h-25px d-sm-none" />
								<img alt="Logo" src="assets/media/logos/demo34.png" class="h-25px d-none d-sm-block" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--begin::Menu-->
								<div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-title">Inicio</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
											<!--begin:Dashboards menu-->
											<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
											
											</div>
											<!--end:Dashboards menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									
									</div>
									<!--end:Menu item-->
								
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								
								<!--begin::User menu-->
								<div class="app-navbar-item ms-5" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img class="symbol symbol-circle symbol-35px symbol-md-40px" src="assets/media/avatars/300-13.jpg" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-13.jpg" />
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
					<div id="kt_app_toolbar" class="app-toolbar py-6">
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
										<h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-0">Mis Tickets
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
					<div class="app-container  container-xxl ">
            
            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">
    
            <!--begin::Form-->
<form action="#">
    <!--begin::Card-->
    <div class="card mb-7">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Compact form-->
            <div class="d-flex align-items-center">
                <!--begin::Input group-->
                <div class="position-relative w-md-400px me-md-2">
                    <i class="ki-outline ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"></i>
                    <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Buscar ticket" id="searchTerm" onkeyup="doSearch()" />
                </div>
                <!--end::Input group-->

                <!--begin:Action-->
                
                <!--end:Action-->
            </div>
            <!--end::Compact form-->

            <!--begin::Advance form-->
            <div class="collapse" id="kt_advanced_search_form">
                <!--begin::Separator-->
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <!--end::Separator-->

                <!--begin::Row-->
                <div class="row g-8 mb-8">
                    <!--begin::Col-->
                    <div class="col-xxl-7">
                        <label class="fs-6 form-label fw-bold text-gray-900">Tags</label>
                        <tags class="tagify  form-control form-control form-control-solid" tabindex="-1">
                    <tag title="products" contenteditable="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="products"><x title="" tabindex="-1" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span autocapitalize="false" autocorrect="off" spellcheck="false" class="tagify__tag-text">products</span></div></tag><tag title="users" contenteditable="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="users"><x title="" tabindex="-1" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span autocapitalize="false" autocorrect="off" spellcheck="false" class="tagify__tag-text">users</span></div></tag><tag title="events" contenteditable="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="events"><x title="" tabindex="-1" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span autocapitalize="false" autocorrect="off" spellcheck="false" class="tagify__tag-text">events</span></div></tag><span contenteditable="" data-can-editable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" autocapitalize="false" autocorrect="off" aria-autocomplete="both" aria-multiline="false"></span>
                ​
        </tags><input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" tabindex="-1">   
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xxl-5">
                        <!--begin::Row-->
                        <div class="row g-8">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <label class="fs-6 form-label fw-bold text-gray-900">Team Type</label>                    
                                <!--begin::Select-->
                                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="In Progress" data-hide-search="true" data-select2-id="select2-data-1-3rkp" tabindex="-1" aria-hidden="true" data-kt-initialized="1">                    
                                    <option value=""></option>
                                    <option value="1">Not started</option>
                                    <option value="2" selected="" data-select2-id="select2-data-3-j96w">In Progress</option>
                                    <option value="3">Done</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-2-eyd5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-s8v3-container" aria-controls="select2-s8v3-container"><span class="select2-selection__rendered" id="select2-s8v3-container" role="textbox" aria-readonly="true" title="In Progress">In Progress</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                                <!--end::Select-->   
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6 ">
                                <label class="fs-6 form-label fw-bold text-gray-900">Select Group</label>

                                <!--begin::Radio group-->
                                <div class="nav-group nav-group-fluid">       
                                    <!--begin::Option-->     
                                    <label>     
                                        <input type="radio" class="btn-check" name="type" value="has" checked="checked">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">
                                            All
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->          
                                    <label>  
                                        <input type="radio" class="btn-check" name="type" value="users">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">
                                            Users
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->        
                                    <label>    
                                        <input type="radio" class="btn-check" name="type" value="orders">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">
                                            Orders
                                        </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row g-8">
                    <!--begin::Col-->
                    <div class="col-xxl-7">
                        <!--begin::Row-->
                        <div class="row g-8">
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <label class="fs-6 form-label fw-bold text-gray-900">Min. Amount</label>
                                <!--begin::Dialer-->
                                <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">

                                    <!--begin::Decrease control-->
                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                        <i class="ki-outline ki-minus-circle fs-1"></i>                                    </button>
                                    <!--end::Decrease control-->

                                    <!--begin::Input control-->
                                    <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="" value="$50">
                                    <!--end::Input control-->

                                    <!--begin::Increase control-->
                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                        <i class="ki-outline ki-plus-circle fs-1"></i>                                    </button>
                                    <!--end::Increase control-->
                                </div>
                                <!--end::Dialer-->         
                            </div>
                            <!--end::Col-->
                            
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <label class="fs-6 form-label fw-bold text-gray-900">Max. Amount</label>
                                <!--begin::Dialer-->
                                <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">

                                    <!--begin::Decrease control-->
                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                        <i class="ki-outline ki-minus-circle fs-1"></i>                                    </button>
                                    <!--end::Decrease control-->

                                    <!--begin::Input control-->
                                    <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="" value="$100">
                                    <!--end::Input control-->

                                    <!--begin::Increase control-->
                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                        <i class="ki-outline ki-plus-circle fs-1"></i>                                    </button>
                                    <!--end::Increase control-->
                                </div>
                                <!--end::Dialer-->  
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <label class="fs-6 form-label fw-bold text-gray-900">Team Size</label>
                                <input type="text" class="form-control form-control form-control-solid" name="city">
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->                         
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xxl-5">
                        <!--begin::Row-->
                        <div class="row g-8">
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <label class="fs-6 form-label fw-bold text-gray-900">Category</label>
                                        
                                <!--begin::Select-->
                                <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="In Progress" data-hide-search="true" data-select2-id="select2-data-4-x721" tabindex="-1" aria-hidden="true" data-kt-initialized="1">                    
                                    <option value=""></option>
                                    <option value="1">Not started</option>
                                    <option value="2" selected="" data-select2-id="select2-data-6-p92e">Select</option>
                                    <option value="3">Done</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-5-vt7l" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-25hu-container" aria-controls="select2-25hu-container"><span class="select2-selection__rendered" id="select2-25hu-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                                <!--end::Select-->     
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <label class="fs-6 form-label fw-bold text-gray-900">Status</label> 

                                <div class="form-check form-switch form-check-custom form-check-solid mt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked">
                                    <label class="form-check-label" for="flexSwitchChecked">
                                        Active
                                    </label>
                                </div>  
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Advance form--> 
        </div>
        <!--end::Card body--> 
    </div>
    <!--end::Card-->
</form>
<!--end::Form-->


<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack pb-7">
    <!--begin::Title-->
    <div class="d-flex flex-wrap align-items-center my-1">
                    <h3 class="fw-bold me-5 my-1">
                {{ count($ticketpago) }} Tickets encontrados
           
            </h3> 
            </div>
    <!--end::Title-->

    <!--begin::Controls--> 
   
        <!--begin::Tab nav-->
        
        <!--end::Tab nav-->

        <!--begin::Actions-->
     <div class="d-flex flex-column flex-md-row gap-3 align-items-stretch justify-content-md-end my-0 w-100 ">

  <form action="/envios/filtrarticket" method="GET" class="w-100 w-md-auto">
    <div class="input-group w-100 w-md-300px">
      <input class="form-control"
             placeholder="Rango"
             id="kt_ecommerce_report_shipping_daterangepicker"
             name="rango" />
      <button type="submit" class="btn btn-primary">Filtrar</button>
    </div>
  </form>

<div style="float:right">
                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" >
                                        <i class="ki-duotone ki-exit-up fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Exportar Reporte</button>
                                            <!--begin::Menu-->
                                    
                                         <div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                        <!--begin::Menu item
                                     
                                        -->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <form action="/guias/reporteticketexcel/" method="GET">

                                                
                                     

                                            <button type="submit" class="btn btn-outline-primary"  >Exportar a Excel</button>

                                            </form >
                                        </div>
                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                               <form action="/guias/reporteticketpdf" method="GET" target="_blank">

                                                
                                       

                                            <button type="submit" class="btn btn-outline-primary"  >Exportar a PDF</button>

                                            </form >
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </div>

</div>
        <!--end::Actions-->
    </div>
    <!--end::Controls-->

<!--end::Toolbar-->

<!--begin::Tab Content-->
<div class="tab-content">
 

    <!--begin::Tab pane-->
    <div id="kt_project_users_table_pane" class="tab-pane fade active show" role="tabpanel">
        <!--begin::Card-->
<div class="card card-flush ">
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <div id="kt_project_users_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive">
			<table id="kt_ecommerce_report_shipping_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable" style="width: 100%;">
                <thead class="fs-7 text-gray-500 text-uppercase">
                    <tr>
						<th class="min-w-100px dt-orderable-asc dt-orderable-desc " data-dt-column="0" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">ID Ticket</span><span class="dt-column-order" role="button" aria-label="Manager: Activate to sort" tabindex="0"></span></div>
						</th>
					
						<th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Fecha</span><span class="dt-column-order" role="button" aria-label="Date: Activate to sort" tabindex="0"></span></div>
						</th>
					
						<th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Estado</span><span class="dt-column-order" role="button" aria-label="Amount: Activate to sort" tabindex="0"></span></div>
						</th>
					
						<th class="min-w-100px dt-orderable-asc dt-orderable-desc " style="text-align: right;" data-dt-column="3" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Accion</span><span class="dt-column-order" role="button" aria-label="Status: Activate to sort" tabindex="0"></span></div>
						</th>
					
						
					
					</tr>
                </thead>
                <tbody class="fs-6 text-gray-500">
				@foreach($ticketpago as $ticket)
				<tr>
                            <td >
                                <!--begin::User-->
                                
									<!--begin::Wrapper-->
									
										<a href="/guias/misenvios/{{ $ticket->codigo }}" class="text-gray-500 text-hover-primary mb-1">{{ $ticket->codigo }}</a>
										
									
									<!--end::Wrapper-->
                                                        
                                <!--end::User-->
                            </td>

                            <td class="text-center">{{ $ticket->created_at->format('d/m/Y') }}</td>
                            
                           <td class="text-center">
  <span class="badge fw-bold px-4 py-3
    {{ $ticket->estado === 'Pagado' ? 'badge-light-success' : 'badge-light-danger' }}">
    {{ $ticket->estado }}
  </span>
</td>

                            <td style="text-align: right;"	>
                                <a href="#" class="btn btn-light btn-sm">Ver</a>
                            </td>
                        </tr>
				@endforeach

				</tbody>
            <tfoot></tfoot></table>
			</div>
			<div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
			</div>
			<div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
			<div class="dt-paging paging_simple_numbers">
			<nav aria-label="pagination">
			
			
			
			</nav></div></div></div><div class="dt-autosize" style="width: 100%; height: 0px;">
			
			</div>
			
			</div>
			<div class="w-100 text-end" style="margin-top: 15px;">
			<a href="/dashboard">
  <button class="btn btn-secondary">Cerrar</button>
  </a>
</div>
            <!--end::Table-->
			
        </div>
        <!--end::Table container-->    
    </div>
    <!--end::Card body-->
</div>  
<!--end::Card-->    </div>
    <!--end::Tab pane-->
</div>
<!--end::Tab Content-->        
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->

                                    
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

		

	</body>
	<!--end::Body-->
</html>