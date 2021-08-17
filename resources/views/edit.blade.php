@extends('layouts.app')

@section('content')

<h1 class="text-4xl text-center py-8">update defis</h1>
<form action="/edit" method="POST" class="flex items-center justify-center">
    @csrf
    <input  type="hidden" name="id" value="{{$data['id']}}"> <br>
    <div class="px-4"><input class="border-gray-600 border-2 bg-gray-50" type="text" name="defi" value="{{$data['defi']}}"></div> <br> <br>
    <button type="submit" class="border-gray-500 border-2 bg-gray-50 ">update</button>
</form>
@endsection