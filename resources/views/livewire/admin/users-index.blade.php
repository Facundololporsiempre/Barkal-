<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                @can('admin.users.edit')
                                    <a class="btn btn-primary" href="{{route("admin.users.edit", $user)}}">Editar</a>
                                @endcan
                                </td>
                                {{-- <td width="10px">
                                    <form action="{{route("admin.users.destroy", $user)}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
