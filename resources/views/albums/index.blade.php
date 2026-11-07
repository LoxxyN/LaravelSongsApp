@extends('Layout')
@section('title', 'Все альбомы')

@section('content')
<section>
    <div style="display: flex; gap: 20px">
        @foreach($songs as $song)
            <div>
                <img style="border-bottom: 1px solid black;" alt="Обложка {{ $song->album->title}}" src="{{ asset('storage') }}/{{ $song->album->img }}" height="200" width="200" />
                <h2 style="font-size: 20px; font-weight: 600; text-align: center">{{ $song->album->title }}</h2>
                <h3 style="font-size: 16px; color: #4b0600">{{ $song->album->artist }}</h3>
            </div>
            <div>
                <h3>song-list</h3>
                <ul>
                    @foreach($song as $s)
                        <li>{{ $s }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
@endsection
