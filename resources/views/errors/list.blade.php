@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="chip red accent-4 white-text">
            {{$error}}
            <i class="material-icons">close</i>
        </div>
    @endforeach
@endif