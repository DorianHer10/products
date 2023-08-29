@extends('layout/template')

@section('title', 'Products')

@section('content')

<main>
    <div class="container">
        <h2>Listado productos</h2>

        <a href="{{url('products/create')}}" class="btn btn-primary">Nuevo</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Estatus</th>
                <th scope="col">Stock</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->name}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->status}}</td>
                    <td>{{$p->stock}}</td>
                    <td><a href="{{url('products/'.$p->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{url('products/'.$p->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </div>
</main>
    
@endsection