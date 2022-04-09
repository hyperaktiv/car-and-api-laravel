@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Update: {{ $car->name }}</h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <img 
                    src="{{ $car->image_path }}"
                    class="w-40 mb-8 shadow-xl"
                    height="160px" width="180px"
                />

                <input type="text" name="name" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $car->name }}">

                <input type="text" name="founded" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $car->founded }}">

                <input type="text" name="description" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" value="{{ $car->description }}">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold text-white">Submit</button>
            </div>
        </form>
    </div>

@endsection