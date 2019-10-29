
    <h1>{{$title}}</h1>

    <ul>
        @forelse ($songs as $song)
            <li>
            {{ $song->id }} - {{ $song->titulo }} -  {{ $song->duracion }} minutos -
            <a href="{{route('artista', $song->artistazo->id)}}">{{ $song->artistazo->nombre }}</a> 
            </li>
        @empty
            <li>No hay canciones.</li>
        @endforelse
    </ul>


