@extends('gen')

@section('content')
<div class="title">
    {{ $aboutname }}
    @if ($age >= 18)
        <i class="fa fa-check" style="color:green;"></i>
    @endif
</div>
@stop