@extends('products.layout')

@section('content')




    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{ route('products.create') }}"> Crear</a>
            </div>

            <div class="col-lg-2">
                <h3><strong>Noticias</strong></h3>
            </div>

            <div class="col-lg-9 margin-tb">
            <div class="pull-right">
                <a class="btn btn-outline-primary" href="{{ route('admin.users.index') }}"> Atrás</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


   
    <table class="table table-dark">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Imagen</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td class=""><img src="{{asset('image/'.$product->image)}}" width="15%" alt="" class="rounded"></td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                {{csrf_field()}}
                @method('DELETE')
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                   
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection

