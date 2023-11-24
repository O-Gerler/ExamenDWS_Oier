<x-app-layout>
  <section class="container mx-auto">
    <a href="{{route('manzana.index')}}">Volver</a>
    <form action="{{route('manzana.store')}}" method="POST">
      @csrf
      <div>
        <label for="">Tipo manzana</label>
        <input type="text" name="tipoManzana">
      </div>
      <div>
        <label for="">Precio Kilo</label>
        <input type="number" name="precioKilo">
      </div>
      <input type="submit" value="Enviar" id="">
    </form>
  </section>
</x-app-layout>