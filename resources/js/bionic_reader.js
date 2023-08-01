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
