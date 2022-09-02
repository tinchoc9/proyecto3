<x-layout>


    <div>

            <div class="card-body">
                <h1 class="card-title">Post Publicados</h1>

            </div>
        @foreach ($posts as $post)
            <div class="card" style="width: 100%;">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="{{ route('post.edit', $post) }}" class="btn btn-primary">Editar Post</a>

                    <form action="{{ route('post.delete', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Borrar Post</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">

        <button type="button" class="btn btn-primary">modificar</button>
        <button type="button" class="btn btn-danger">eliminar</button>
      </div>

</x-layout>
