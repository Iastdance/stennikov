@extends('layouts.app')

@section('content')
@foreach($brand as $item)
    <p>{{ $item->name }}</p>
@endforeach
@endsection
