@extends('welcome')
@section('content')
<div class="m-5 flex justify-center">
    <div class="card w-96 bg-base-100 shadow-xl" data-theme='light'>
        <div class="card-body items-center text-center">
          <h2 class="card-title">
            The Room : {{ $room->no_room }} Have {{ $room->no_chairs }}
          </h2>
          <p>This movie is Playing {{ $room->movies->title }} </p>
          <a href="{{ route('movie.show',$room->movies->id) }}" class="btn btn-success">Go to the movie</a>
          </div>
        </div>
      </div>


</div>
@endsection
