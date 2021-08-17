@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center">
<h1 class="text-center text-4xl py-4">{{ $defis->titre }}</h1>
<img src="{{ $defis->image }}" alt="" class="w-1/2">

    <h2 class="text-4xl py-4">Description</h2>
    <div>{{ $defis->description }}</div>
    <h2 class="text-4xl py-4">defis</h2>
</div>  

    @forelse($defis->defis as $defi)

    <div class="px-8">{{ $defi->defi }}

    <a class="border-gray-600 border-2 bg-gray-50" href="/delete_defi?id={{$defi->id}}&idgames={{$defis->id}}">retirer</a>
    <a class="border-gray-600 border-2 bg-gray-50" href={{"edit/".$defi['id']}}>modifier</a>
    </div>

    @empty
    <span>aucun defis pour ce jeux</span>
    @endforelse

    <h2 class="text-center text-4xl py-4">Ajouter un nouveau defi</h2>


    <form method="POST" action="{{ route('games.create') }}" class="pb-12">
    @csrf
    <div class="px-8 pb-2"><input type="text" name="defi" class="border-gray-600 border-2">: le defi</div>
    <div class="px-8 pb-2"><input type="hidden" value="{{$defis->id}}" name="games_id"></div>
    <div class="px-8 pb-2"><button type="submit" class="border-gray-500 border-2 bg-gray-50 ">Ajouter un defi</button></div>
    </form>
@endsection