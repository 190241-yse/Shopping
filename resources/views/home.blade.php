@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">

    @if (isset($items))
    @foreach ($items as $item)
    <div class="col-md-4 mb-2">

      <p>
        {{ $item->name }}
      </p>
      <p class="row justify-content-center">
        <img src="{{ asset('images/now_printing.jpg') }}" alt="" width="200">
      </p>

      <p class="row justify-content-center">
        <a href="" class="btn btn-outline-primary">{{ __('Add Cart') }}</a>
      </p>
    </div>
    @endforeach
    @endif

  </div>
</div>
@endsection