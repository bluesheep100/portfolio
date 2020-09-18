@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="card">
                    <h5 class="card-title">My Portfolio</h5>
                    <p>
                        This is the website you're currently on! I decided on making this when I discovered <a href="https://www.gethalfmoon.com/">Halfmoon</a>,
                        because I was so impressed by its simplicity and ease of use, that I simply <strong>had</strong> to try it out.<br>
                        Halfmoon also includes some <i>wonderful</i> features right out of the box, such as native dark mode support. (just try pressing Shift+d)
                    </p>
                    <p>
                        As mentioned, the frontend uses Halfmoon for styling, and the backend is running <a href="https://laravel.com/">Laravel</a> 8.2, which is only natural,
                        because Laravel is my favorite framework. I love it for its logical structure, easy-to-use boilerplates and CLI tools.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
