@extends('base')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row my-4">
                <div class="col-6">
                    <div class="bg-white p-3 rounded-2">
                        <form action="#" method="post" id="bionic-form">
                            <label for="text" class="form-label">Text to make bionic</label>
                            <textarea name="text" id="text" cols="30" rows="20" class="form-control"
                                      placeholder="Put some text here!"></textarea>
                            <button type="submit" class="btn btn-success mt-3">Go!</button>
                        </form>
                    </div>
                </div>
                <div class="d-none col-6">
                    <div class="bg-white p-3 rounded-2">
                        <p id="output-container"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bionic_reader.js') }}"></script>
@endsection
