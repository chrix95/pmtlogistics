@extends('layouts.app')
@section('content')
  <main-component></main-component>
  {{-- <p>Date: <input type="text" id="datepicker"></p> --}}
@endsection
@section('javascript')
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
  </script>
@endsection