
    <h1>{{$title}}</h1>

    <ul>
        @forelse ($songs as $song)
            <li>
            {{ $song->id }} - {{ $song->titulo }} -  {{ $song->duracion }} minutos - {{ $song->artists->name }}
            </li>
        @empty
            <li>No hay canciones.</li>
        @endforelse
    </ul>


