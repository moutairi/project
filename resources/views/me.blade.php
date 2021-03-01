@extends('layouts.app')
@section('content')
<?php
$name='soufia'
?>
    @for($i=0;$i< 5; $i++)
    @if(5>2)
    Hi again
    @else
    bye
    @endif
    @endfor
    @empty($name)
        It's empty
    @endempty
    <h4>
        {{$name}}
    </h4>

@endsection