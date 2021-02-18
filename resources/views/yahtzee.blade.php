@extends('layout.app')

@section('content')
    <style>
        .yahtzee-num-label {
            margin-top: 2.5rem;
        }

        .yahtzee-cb-label {
            margin-top: 1rem;
            margin-bottom: 0;
        }
    </style>
    <div class="container-fluid">
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
                        <form action="{{ route('yahtzee_update') }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-1 mr-10">
                                    <h6>#</h6>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Ones</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Twos</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Threes</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Fours</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Fives</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Sixes</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Chance</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Three of a kind</label>
                                    </div>
                                    <div class="form-group yahtzee-num-label">
                                        <label>Four of a kind</label>
                                    </div>
                                    <div class="form-group yahtzee-cb-label">
                                        <label>Full House</label>
                                    </div>
                                    <div class="form-group yahtzee-cb-label">
                                        <label>Small Straight</label>
                                    </div>
                                    <div class="form-group yahtzee-cb-label">
                                        <label>Large Straight</label>
                                    </div>
                                    <div class="form-group yahtzee-cb-label">
                                        <label>Yahtzee</label>
                                    </div>
                                </div>
                                @foreach ($yahtzee->getPlayers() as $i => $player)
                                    <div class="col mr-10">
                                        <h6>Player {{ $i + 1 }}</h6>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][ones]"
                                                   id="ones_{{ $i }}" class="form-control" value="{{ $player['upper']['ones'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][twos]"
                                                   id="twos_{{ $i }}" class="form-control" value="{{ $player['upper']['twos'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][threes]"
                                                   id="threes_{{ $i }}" class="form-control" value="{{ $player['upper']['threes'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][fours]"
                                                   id="fours_{{ $i }}" class="form-control" value="{{ $player['upper']['fours'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][fives]"
                                                   id="fives_{{ $i }}" class="form-control" value="{{ $player['upper']['fives'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][upper][sixes]"
                                                   id="sixes_{{ $i }}" class="form-control" value="{{ $player['upper']['sixes'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][lower][chance]"
                                                   class="form-control" id="chance_{{ $i }}" value="{{ $player['lower']['chance'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][lower][three_kind]"
                                                   class="form-control" id="three_kind_{{ $i }}" value="{{ $player['lower']['three_kind'] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="players[{{ $i }}][lower][four_kind]"
                                                   class="form-control" id="four_kind_{{ $i }}" value="{{ $player['lower']['four_kind'] }}">
                                        </div>
                                        <div class="custom-checkbox mb-20">
                                            <input type="checkbox" name="players[{{ $i }}][lower][full_house]"
                                                   id="full_house_{{ $i }}" value="25" @if($player['lower']['full_house']) checked @endif>
                                            <label class="blank" for="full_house_{{ $i }}"></label>
                                        </div>
                                        <div class="custom-checkbox mb-20">
                                            <input type="checkbox" name="players[{{ $i }}][lower][small_straight]"
                                                   id="small_straight_{{ $i }}" value="40" @if($player['lower']['small_straight']) checked @endif>
                                            <label class="blank" for="small_straight_{{ $i }}"></label>
                                        </div>
                                        <div class="custom-checkbox mb-20">
                                            <input type="checkbox" name="players[{{ $i }}][lower][large_straight]"
                                                   id="large_straight_{{ $i }}" value="50" @if($player['lower']['large_straight']) checked @endif>
                                            <label class="blank" for="large_straight_{{ $i }}"></label>
                                        </div>
                                        <div class="custom-checkbox mb-20">
                                            <input type="checkbox" name="players[{{ $i }}][lower][yahtzee]"
                                                   id="yahtzee_{{ $i }}" value="50" @if($player['lower']['yahtzee']) checked @endif>
                                            <label class="blank" for="yahtzee_{{ $i }}"></label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mb-10">
                                Save
                            </button>
                        </form>
                        <form action="{{ route('yahtzee_delete') }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?');">
                                Delete sheet
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
