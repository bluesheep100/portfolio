@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @unless (session()->has('yahtzee'))
                        <form action="{{ route('yahtzee_create') }}" method="POST">
                            @csrf
                            <p>Select the amount of players, and click here to create a new sheet.</p>
                            <div class="form-group">
                                <input type="number"
                                       name="player_count"
                                       class="form-control w-50 @error('player_count') is-invalid @enderror"
                                       min="1"
                                       max="6"
                                       value="1"
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Start
                            </button>
                        </form>
                    @else
                        <form action="{{ route('yahtzee_delete') }}" method="post">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">
                                Delete sheet
                            </button>
                        </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
