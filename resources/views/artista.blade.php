
    <h1>{{$artista->nombre}}</h1>

    <ul>
        @forelse ($artista->songs as $song)
            <li>
            {{ $song->id }} - {{ $song->titulo }} -  {{ $song->duracion }} minutos -
           
            </li>
        @empty
            <li>No hay canciones.</li>
        @endforelse
    </ul>

    


