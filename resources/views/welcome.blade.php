@extends('base')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col text-light text-center">
                <h1 class="font-raleway">Anders Aagaard Schütt</h1>

                <p class="fs-3">PHP/Laravel Developer extraordinaire</p>
            </div>
        </div>
        <div class="container-fluid text-light">
            <div class="row gx-3">
                <div class="col-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h3 class="font-raleway">Quality</h3>
                        I pride myself on producing projects that not only work, but are actually legible to whoever
                        takes over in the future. Style specifications and conventions are my bread and butter.
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h3 class="font-raleway">Reasonable</h3>
                        "Reasonable", as in "can be reasoned about"; that's how all code should be, and so is mine.
                        No code is (nor should be) written without prior thought and good reason.
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h3 class="font-raleway">Dilligence</h3>
                        I have a strong sense of duty, am always on time, and determined to perform whatever task I'm
                        given, granted it isn't impossible.
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2">
                        If any of the above tickle your fancy, have a look at the
                        <a href="{{ route('cv') }}" class="text-white">CV</a> and
                        <a href="{{ route('contact') }}" class="text-white">Contact</a>
                        sections of this website.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light position-absolute bottom-0 w-100">
        <div class="p-3 text-center">
            <b>P.S:</b> If you're confused by the background, visit my
            <a href="https://github.com/bluesheep100">Github</a> :)
        </div>
    </footer>
@endsection
