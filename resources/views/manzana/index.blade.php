<x-app-layout>
  <section class="container mx-auto">
    <a class="px-5 py-2 mt-10 inline-block font-bold text-white text-lg bg-black hover:bg-orange-500 transition-colors" href="{{route('manzana.create')}}">Insertar</a>
    <div>
      @foreach ($manzanas as $manzana)
          <div class="mt-10 gap-3 text-lg flex justify-center items-center flex-col shadow w-full md:w-1/3 py-2"> 
            <p>Tipo: {{$manzana->tipoManzana}}</p>
            <p>Precio: {{$manzana->precioKilo}}</p>
            <a  class="px-5 py-2 inline-block font-bold text-white  bg-black hover:bg-green-700 transition-colors" href="{{route('manzana.edit', $manzana)}}">Modificar</a>
            <div>
              <form action="{{route('eliminar', $manzana)}}" method="POST">
                @csrf
                @method('DELETE')
                <input class="px-5 py-2 inline-block font-bold text-white text-lg bg-black hover:bg-red-700 transition-colors" type="submit" value="Eliminar">
              </form>
            </div>
          </div>
      @endforeach
    </div>
  </section>
</x-app-layout>