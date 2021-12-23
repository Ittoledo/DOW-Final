
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <input type="number"
                            id="v{{$item->id}}"
                            wire:change='update({{$item->id}}, $("#v" + {{$item->id}}).val())"'
                             class="form-control" value="{{$item->quantity}}">
                        </td>
                        <td>
                            <button wire:click="delete_item({{$item->id}})" type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Total: ${{\Cart::session(auth()->id())->getTotal() }}</h3>
    </div>