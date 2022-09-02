<x-layout>

<h1>Formulario de creacion del post</h1>

<form action="{{route('post.store')}}" method="POST">
    @csrf
 <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre del Post</label>
    <input name='title' type="text" class="form-control"  rows="6" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Escribe tu post</label>
    <textarea name='body' class="form-control" rows="6" required></textarea>
  </div>
  <div>
    <button class="btn btn-primary" type="submit">CREAR POST</button>
  </div>
</form >


</x-layout>
