@extends('layout/template')

@section('title', 'Editar Producto')

@section('content')

<main>
    <div class="container">
        <h2>Editar producto</h2>

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ( $errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
    
          </div>
        @endif
        
        <form action="{{url('products/'.$product->id)}}" method="POST">
            @method("PUT")
            @csrf

            <div class="container">
                <div class="mb-3 row">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                </div>
                <div class="mb-3 row">
                    <label for="price">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{old('price')}}">
                </div>
                <div class="mb-3 row">
                    <label for="status">Estatus</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{$product->status}}">
                </div>
                <div class="mb-3 row">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{old('stock')}}">
                </div>
    
                <a href="{{url('products')}}" class="btn btn-primary" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-sucess">Guardar</button>
            </div>
            
           
        
        </form>

    </div>
</main>
    
@endsection