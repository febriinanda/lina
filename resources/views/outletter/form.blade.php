<div class="form-group">
  {!! Form::label('from_who','From:', ['class' => 'control-label']) !!}
  {!! Form::text('from_who', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('to_who','To:', ['class' => 'control-label']) !!}
  {!! Form::text('to_who', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
