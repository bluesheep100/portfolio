@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-title">Rubik's Cube</h5>
                    <a href="https://github.com/bluesheep100/rubikscube">https://github.com/bluesheep100/rubikscube</a>
                    <p>
                        This project was conceived (and developed) throughout an internship that required I live away
                        from my usual home, making me come home very late every day, and not having the usual freetime
                        activites available.<br>
                        This class <em>does not</em> fully work, due to some logical issues with what angle to "view" the
                        cube from, and how exactly to manage it. There are definitely many improvements, but I'm happy
                        with my attempt, given that it took about 2 weeks with 1-2 hours of daily work.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="card p-0 mt-0">
                    <img src="{{ asset('img/rubikscube_doturn.png') }}" class="img-fluid" alt="Picture of code">
                    <div class="content">
                        <h2 class="content-title">
                            The <code class="code">doTurn</code> method</h2>
                        <p>
                            This method does most of the heavy lifting in the RubiksCube class. Since it's a private
                            function, I decided to use a keyed array for the parameters, to have naming for them. This
                            is due to the whole solution being rather convoluted.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="card mt-0">
                    <h4>Parameters of <code class="code">doTurn</code></h4>
                    <h5>faces</h5>
                    <p>
                        This is a list of faces of the cube, identified by the color of the
                        middle square. In this example, it indicates that the appropriate squares be moved from the
                        red face to the yellow face, and squares from the yellow face be moved to the orange face,
                        etc.
                    </p>
                    <h5>exclude</h5>
                    <p>
                        The &quot;exclude&quot; parameter defines the face to <em>not</em> have a single column or row
                        rotated, but instead its entire face be turned.<br><br>
                        <small>
                            <strong>Note:</strong> At the time of writing, I can't remember why I named it this way.
                            It was likely because it &quot;excludes&quot; a face from the regular behavior of modifying
                            rows/columns.
                        </small>
                    </p>
                    <h5>invert</h5>
                    <p>
                        By default, all rotations are considered clockwise.<br>
                        If this parameter is set to <code class="code">true</code>, the rotation will be
                        counter-clockwise. This works very simply, by reversing the contents of the <code class="code">faces</code>
                        array.
                    </p>
                    <h5>index</h5>
                    <p>
                        This is the index on which to do the rotation. This can mean a row or a column, and the index
                        simply refers to where in the second-level array to move. The cube is a structure of 6 arrays,
                        each with 3 elements, each of which also contain 3 elements. If this parameter is set to
                        <code class="code">0</code>, the first column/row of the upper 6 arrays will be shifted.
                    </p>
                    <h5>rows (not shown)</h5>
                    <p>
                        This parameter (defaulting to false) is used to determine if the rotation is done on rows or
                        columns.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
