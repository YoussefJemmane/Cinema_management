{{-- edit room table inspire from create --}}
@extends('welcome')
@section('content')

    <div class="m-5 flex justify-center">
        <div class="card w-96 bg-base-100 shadow-xl" data-theme='light'>
            <div class="card-body items-center text-center">
                <h2 class="card-title
            ">
                    Edit Room
                </h2>
                <form action="{{ route('room.update', $room->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text
                        ">Room Number</span>
                        </label>
                        <input type="text" name="no_room" placeholder="Room Number" class="input input-bordered"
                            value="{{ $room->no_room }}">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text

">Number of Chairs</span>

                        </label>
                        <input type="text" name="no_chairs" placeholder="Number of Chairs" class="input input-bordered"
                            value="{{ $room->no_chairs }}">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ">Movie</span>
                        </label>
                        <select value="{{ $room->movies->id }}"  name="movie" class="select select-bordered w-full max-w-xs">
                            <option value="">Select Movie</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="flex justify-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
