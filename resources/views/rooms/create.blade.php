@extends('welcome')
@section('content')

    <div class="flex justify-center mt-5">
        <div class="card w-96 bg-base-100 shadow-xl" data-theme="light">
            <div class="card-body items-center text-center">
                <form action="{{ route('room.store') }}" method="post" >
                    @csrf
                    <div class="flex justify-center mb-5">
                        <a href="{{ route('room.index') }}" class="btn btn-success">Go Back</a>
                    </div>
                    {{-- form inputs(no_room,no_chairs)from room and input(movie) from movie --}}
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Room Number</span>
                        </label>
                        <input type="text" name="no_room" placeholder="Room Number" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Number of Chairs</span>
                        </label>
                        <input type="text" name="no_chairs" placeholder="Number of Chairs" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Movie</span>
                        </label>
                        <select name="movie" class="select select-bordered w-full max-w-xs">
                            <option value="">Select Movie</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>
                        {{-- q:the select not adding movie into index
                            a: because the name of the input is movie_id not movie
                            --}}
                    </div>


                    <div class="flex justify-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
