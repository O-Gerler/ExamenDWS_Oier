<x-app-layout>
  <section class="container mx-auto">
    <a href="{{route('manzana.create')}}">Insertar</a>
    <div>
      @foreach ($manzanas as $manzana)
          <div class="border-2 border-black"> 
            <p>{{$manzana->tipoManzana}}</p>
            <p>{{$manzana->precioKilo}}</p>
            <a href="{{route('manzana.edit', $manzana)}}">Modificar</a>
            <div>
              <form action="{{route('eliminar', $manzana)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
              </form>
            </div>
          </div>
      @endforeach
    </div>
  </section>
</x-app-layout>