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
                    <div class="bg-white p-3 rounded-2" id="output-container">

                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col bg-white rounded-2 p-3">--}}

{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <script>
        document.getElementById('bionic-form').addEventListener('submit', function (e) {
            e.preventDefault();
            let textarea = this.querySelector('#text');
            let outputBox = document.getElementById('output-container');

            fetch(location.origin + '/bionic', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({text: textarea.value})
            }).then(async (res) => {
                outputBox.innerHTML = (await res.json()).output;
                outputBox.parentElement.classList.remove('d-none');
            }).catch(() => {
                outputBox.innerHTML = '<span class="text-danger">An error occurred, please try again.<span>';
            });
        });
    </script>
@endsection
