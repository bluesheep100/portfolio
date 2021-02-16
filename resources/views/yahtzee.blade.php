@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @unless (session()->has('yahtzee'))
                        <form action="{{ route('yahtzee_create') }}" method="POST">
                            <button type="submit" class="btn btn-primary">
                                Start a game
                            </button>
                        </form>
                    @else
                        <!-- Add a Yahtzee board here -->
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
