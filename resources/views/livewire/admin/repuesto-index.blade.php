<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un repuesto">
    </div>

    @if ($repuestos->count())    
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($repuestos as $repuesto)
                    <tr>
                        <td>{{$repuesto->id}}</td>
                        <td>{{$repuesto->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route("admin.repuestos.edit", $repuesto)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route("admin.repuestos.destroy", $repuesto)}}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>

        <div class="card-footer">
            {{$repuestos->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningun registro...</strong>
        </div>
    @endif
</div>
