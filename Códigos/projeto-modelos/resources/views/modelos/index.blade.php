@foreach($modelos as $modelo)
    {{ $modelo->modelo }} - {{ $modelo->status }}
@endforeach
