@extends('layouts.app')

@section('content')


 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sobre nosotros') }}</div>

                <div class="card-body">
                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif

                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                          <div class="u-layout-row">
                            <div class="u-size-36">
                              <div class="u-layout-row">
                                <div class="u-align-center-xs u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-top-xs u-container-layout-1">
                                    <p class="u-custom-font u-heading-font u-text u-text-grey-30 u-text-2">Esta Pagina corresponde a farmacia de Chimbarongo.</p>
                                    
                                    <h5 class="u-text u-text-1">Sobre la pagina</h5>
                                    <p class="u-custom-font u-heading-font u-text u-text-grey-30 u-text-2">La finalidad de la pagina, es dar la posibilitar la compra de medicamentos forma de remota, para facilitar la adquisicion de medicamentos sin receta.</p>
                                    <h5 class="u-text u-text-1">Sobre el negocio</h5>
                                    <p class="u-custom-font u-heading-font u-text u-text-grey-30 u-text-2">Nuestro equipo, se preocupa día a día de ofrecerte las mejores ofertas de los productos de marcas más reconocidas, revisando y negociando con nuestros proveedores nuestro precios de compra para así poder ofrecerte siempre el precio más bajo y accesible. por eso todos los productos que ves en nuestra web, no requieren receta medica y avalados por nuestr@s farmacéutic@s, velando para que la farmacia tengan una garantía de calidad con las que nos sentimos a gusto, tanto como el empleado como el cliente.</p>
                                    <h5 class="u-text u-text-1">Sobre Preguntas y contactos.</h5>
                                    <p class="u-custom-font u-heading-font u-text u-text-grey-30 u-text-2">También nuestro equipo de farmacéutic@s está a tu disposición para cualquier consulta que puedas tener sobre un producto o medicamento. Dudas por ejemplo sobre posología o sobre cómo guiarte mejor en la elección de tu compra. Puedes ponerte en contacto al 9 54 56 40 05 o al email atencionalcliente@farmaciaChimbarongo.cl.</p>
                                
                                
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="u-size-24">
                              <div class="u-layout-col">
                                <div class="u-align-center u-container-style u-image u-layout-cell u-size-60 u-image-1" data-image-width="1600" data-image-height="1067">
                                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                                    <div class="u-image u-image-circle u-image-2" data-image-width="1620" data-image-height="1080"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" >
                            <label for="w3review" class="col-md-4 col-form-label text-md-right">{{ __('Mensaje') }}</label>

                            <div class="col-md-6" >
                              <textarea id="w3review" name="w3review" rows="4" cols="50">
                                
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Footer -->
      <footer class="page-footer font-small blue pt-4">
          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
              <!-- Grid column -->
              <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h5 class="text-uppercase">Farmacia Chimbarongo</h5>
                <p>"Lo Mismo pero mas barato"</p>
        
              </div>
              <!-- Grid column -->
        
              <hr class="clearfix w-100 d-md-none pb-3">
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Redes Sociales</h5>
        
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Instagram</a>
                  </li>
                  <li>
                    <a href="#!">FaceBook</a>
                  </li>
                  <li>
                    <a href="#!">Twitter</a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/watch?v=mCdA4bJAGGk">Youtube</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Legal</h5>
        
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Cookies</a>
                  </li>
                  <li>
                    <a href="#!">Privacidad</a>
                  </li>
                  <li>
                    <a href="#!">Empleo</a>
                  </li>
                  <li>
                    <a href="#!">Contactos</a>
                  </li>
                </ul>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href=""> FarmaciaChinbarongo.com</a>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
      </div>
    </div>  
  </div>    
</div>  
@endsection