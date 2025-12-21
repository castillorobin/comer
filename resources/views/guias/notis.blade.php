<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
																<div class="text-gray-500 fs-7">Phase 1 development</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">1 hr</span>
														<!--end::Label-->
													</div>














@foreach($notificaciones as $notificacion)

  <div class="notif-item"
       data-search="{{ mb_strtolower($notificacion->ruta->punto ?? '', 'UTF-8') }}">

    @if($notificacion->tipo == 'atraso')
      <div class="timeline timeline-border-dashed">
        <div class="timeline-item">
          <div class="timeline-line"></div>

          <div class="timeline-icon">
            <i class="fas fa-frown" style="font-size: 22px;"></i>

      
          </div>

          <div class="timeline-content mb-10 mt-n1">
            <div class="pe-3 mb-5">
              <div class="fs-5 fw-semibold mb-2">
                <span class="badge badge-light-danger" style="padding: 10px 20px;">¡Atraso!</span>
              </div>

              <div class="d-flex align-items-center mt-1 fs-6">
                <div class="text-muted me-2 fs-7">
                  Hora: {{ $notificacion->created_at->format('H:i') }}
                </div>
              </div>
            </div>

            <div class="overflow-auto pb-5">
              <div class="align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">
                  {{ $notificacion->ruta->punto ?? 'Sin punto' }}
                </a>

                <div class="min-w-175px mt-3">
                  Hora aproximada de llegada: {{ $notificacion->horallegada_hm }}<br>
                  Nota: {{ $notificacion->nota }}
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    @elseif($notificacion->tipo == 'llegado')
      <div class="timeline timeline-border-dashed">
        <div class="timeline-item">
          <div class="timeline-line"></div>

          <div class="timeline-icon">
            <i class="fas fa-flag-checkered" style="font-size: 22px;"></i>
          </div>

          <div class="timeline-content mb-10 mt-n1">
            <div class="pe-3 mb-5">
              <div class="fs-5 fw-semibold mb-2">
                <span class="badge badge-light-success" style="padding: 10px 20px;">¡Hemos llegado!</span>
              </div>

              <div class="d-flex align-items-center mt-1 fs-6">
                <div class="text-muted me-2 fs-7">
                  Hora: {{ $notificacion->created_at->format('H:i') }}
                </div>
              </div>
            </div>

            <div class="overflow-auto pb-5">
              <div class="align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">
                  {{ $notificacion->ruta->punto ?? 'Sin punto' }}
                </a>

                <div class="min-w-175px mt-3">
                  Hora de llegada: {{ $notificacion->horallegada_hm }} <br>
                  Hora de retirada: {{ $notificacion->horasalida_hm }} <br>
                  Tipo de carro: {{ $notificacion->tipocarro }} <br>
                  Placa: {{ $notificacion->placa }} <br>
                  Color: {{ $notificacion->color }} <br>
                  Punto de referencia: {{ $notificacion->nota }}
                </div>
<br>

@php
  $baseStorage = 'https://meloexpresspuntofijo.site/storage/';
@endphp



      @if($notificacion->foto1 || $notificacion->foto2 || $notificacion->foto3)
  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7 flex-wrap gap-3">

    @if($notificacion->foto1)
      <img
        class="rounded w-150px js-zoom-img"
        style="cursor: zoom-in; object-fit: cover;"
        src="{{ $baseStorage.$notificacion->foto1 }}"
        data-src="{{ $baseStorage.$notificacion->foto1 }}"
        data-bs-toggle="modal"
        data-bs-target="#modalZoomFoto"
        alt="foto1"
      >
    @endif

    @if($notificacion->foto2)
      <img
        class="rounded w-150px js-zoom-img"
        style="cursor: zoom-in; object-fit: cover;"
        src="{{ $baseStorage.$notificacion->foto2 }}"
        data-src="{{ $baseStorage.$notificacion->foto2 }}"
        data-bs-toggle="modal"
        data-bs-target="#modalZoomFoto"
        alt="foto2"
      >
    @endif

    @if($notificacion->foto3)
      <img
        class="rounded w-150px js-zoom-img"
        style="cursor: zoom-in; object-fit: cover;"
        src="{{ $baseStorage.$notificacion->foto3 }}"
        data-src="{{ $baseStorage.$notificacion->foto3 }}"
        data-bs-toggle="modal"
        data-bs-target="#modalZoomFoto"
        alt="foto3"
      >
    @endif

  </div>
@endif





              </div>
            </div>

          </div>
        </div>
      </div>

    @elseif($notificacion->tipo == 'por_llegar')
      <div class="timeline timeline-border-dashed">
        <div class="timeline-item">
          <div class="timeline-line"></div>

          <div class="timeline-icon">
            <i class="fas fa-shipping-fast" style="font-size: 22px;"></i>
          </div>

          <div class="timeline-content mb-10 mt-n1">
            <div class="pe-3 mb-5">
              <div class="fs-5 fw-semibold mb-2">
                <span class="badge badge-light-warning" style="padding: 10px 20px;">¡Por llegar!</span>
              </div>

              <div class="d-flex align-items-center mt-1 fs-6">
                <div class="text-muted me-2 fs-7">
                  Hora: {{ $notificacion->created_at->format('H:i') }}
                </div>
              </div>
            </div>

            <div class="overflow-auto pb-5">
              <div class="align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                <a href="#" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">
                  {{ $notificacion->ruta->punto ?? 'Sin punto' }}
                </a>

                <div class="min-w-175px mt-3">
                Avísale a tu cliente que ya estamos por llegar al punto. <br>
                
                  @if($notificacion->nota != '')
                  Nota: {{ $notificacion->nota }}
                  @endif
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    @endif

  </div>

@endforeach