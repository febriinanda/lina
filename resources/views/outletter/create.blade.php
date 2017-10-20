@extends('template')

@section('main')
<div id="siswa">
  <h2>Surat Keluar</h2>
  {!! Form::open(['url' => 'outletter']) !!}
  @include('outletter.form', ['submitButtonText' => 'Request Number'])
  {!! Form::close() !!}
</div>
@stop

@section('footer')
@include('footer')
@stop
