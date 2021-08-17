@extends('layouts.app')

@section('content')

<h1 class="text-center text-4xl">Jeux</h1>
<div class="flex flex-row flex-wrap">
    @if($games->count() > 0)

    @foreach($games as $games)
    
    <div data-id='{{$games->id}}' class="m-2 w-1/4 lg:w-2/12 md:w-1/5 data_order"><img src="{{ $games->image }}" alt="" class=" ">
    <h2><a href="{{ route('games.defis', ['id' => $games->id]) }}"> {{ $games->titre }} </a></h2>
    </div>
    @endforeach

    @else
    <span>aucun jeux</span>
    @endif
</div>
@endsection