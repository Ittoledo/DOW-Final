@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido,') }} {{ Auth::user()->name }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <p class="center">¡Bienvenido a la farmacia Chimbarongo!</p> 
                        <a class="btn btn-outline-secondary" href="/shop">Comprar</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection
