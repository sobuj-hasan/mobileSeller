@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <ol class="text-danger">{{ $error }}</ol>
        @endforeach
    </ul>
@endif
