@if ($errors->any())
    <div class="alert alert-danger text-red-800">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif