<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tienda') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class = "row">
                    @foreach ($productos as $producto)
                        <div class = "col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('default_product.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$producto->nombre}}</h4>
                                    <p class="card-text">{{$producto->descripcion}}</p>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary" wire:click="add({{$producto->id}})">
                                    Agregar al Carrito</button>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>