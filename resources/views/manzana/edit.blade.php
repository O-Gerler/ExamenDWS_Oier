<x-app-layout>
  <section class="container mx-auto">
    <a href="{{route('manzana.index')}}">Volver</a>
    <form action="{{route('manzana.update', $manzana)}}" method="POST">
      @csrf
      @method('PUT')
      <div>
        <label for="">Tipo manzana</label>
        <input type="text" value="{{$manzana->tipoManzana}}" name="tipoManzana">
      </div>
      <div>
        <label for="">Precio Kilo</label>
        <input type="number" value="{{$manzana->precioKilo}}" name="precioKilo">
      </div>
      <input type="submit" value="Enviar" id="">
    </form>
  </section>
</x-app-layout>