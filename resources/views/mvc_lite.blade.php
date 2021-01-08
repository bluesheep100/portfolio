@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <h5 class="card-title">MVC-lite</h5>
                    <a href="https://github.com/bluesheep100/mvc-lite">https://github.com/bluesheep100/mvc-lite</a>
                    <p>
                        This is a patchwork solution I came up with to solve the problem of being at a workplace where I
                        wasn't allowed to use any third-party libraries. It's not a good solution, by any means. This
                        was, however, an important part of my progress as a developer.
                    </p>
                    <h4>The Pros</h4>
                    <p>
                        Currently, the mvc-lite repo contains a small set of features, meant to uphold the most basic
                        functionality of an MVC application. It has the following features:
                    </p>
                    <ul>
                        <li>Basic Routing, missing a few security features</li>
                        <li>Basic database Models</li>
                        <li>A wrapper for PDO that took ~5 minutes to write</li>
                        <li>A Response object, to make it feel more like Laravel</li>
                    </ul>
                    <h4>What Are The Cons?</h4>
                    <ul>
                        <li>Missing security features, such as CSRF protection</li>
                        <li>Models are <em>very</em> basic, and only provide the most common functionality</li>
                        <li>Models require individual implementations of the <code class="code">create</code> and <code
                                class="code">update</code>
                            methods
                        </li>
                    </ul>
                    <p>
                        Because this was originally designed for use in 2-3 projects, I have no
                        intention of maintaining it, whatsoever. It frankly isn't worth the hassle, because I have the
                        ability to use Laravel, or a similar framework (such as Symfony, Slim3, CakePHP, Yii, etc.)
                        instead of having to re-invent the wheel.
                    </p>

                    <small>Note: <em>While this <strong>does</strong> use the <code class="code">vlucas/phpdotenv</code>
                            package, it
                            was the one exception, and can easily be substituted with a JSON file and 2-3 lines of PHP.</em></small>
                </div>
            </div>
        </div>
    </div>
@endsection
