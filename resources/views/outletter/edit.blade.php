@extends('template')

@section('main')
<div id="siswa">
  <h2>Edit Siswa</h2>
  {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['SiswaController@update', $siswa->id]]) !!}
  @include('siswa.form', ['submitButtonText' => 'Update Siswa'])
  <!-- <input name="_method" type="hidden" value="PATCH" /> -->
  {!! Form::close() !!}
</div>
@stop

@section('footer')
@include('footer')
@stop
