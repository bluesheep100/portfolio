@extends('base')

@section('content')
    <article class="container">
        <div class="row my-4">
            <section class="col text-light text-center">
                <h1 class="font-raleway">Anders Aagaard Schütt</h1>

                <p class="fs-3">PHP/Laravel Developer extraordinaire</p>
            </section>
        </div>
        <div class="container-fluid text-light">
            <div class="row gx-0 gx-lg-3">
                <section class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h2 class="font-raleway">Quality</h2>
                        <p>
                            I pride myself on producing projects that not only work, but are actually legible to whoever
                            takes over in the future. Style specifications and conventions are my bread and butter.
                        </p>
                    </div>
                </section>
                <section class="col-12 col-lg-4 mb-3 mb-lg-0">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h2 class="font-raleway">Reasoning</h2>
                        <p>
                            "Reasonable", as in "can be reasoned about"; that's how all code should be, and so is mine.
                            No code is (nor should be) written without prior thought and good reason.
                        </p>
                    </div>
                </section>
                <section class="col-12 col-lg-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2 h-100">
                        <h2 class="font-raleway">Dilligence</h2>
                        <p>
                            I have a strong sense of duty, am always on time, and determined to perform whatever task
                            I'm
                            given, granted it isn't impossible.
                        </p>
                    </div>
                </section>
            </div>

            <div class="row justify-content-center mt-3">
                <section class="col-12 col-lg-4">
                    <div class="p-3 bg-dark bg-opacity-50 rounded-2">
                        <p>
                            If any of the above tickle your fancy, have a look at the
                            <a href="{{ route('cv') }}" class="text-white">CV</a> and
                            <a href="{{ route('contact') }}" class="text-white">Contact</a>
                            sections of this website.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </article>
@endsection
