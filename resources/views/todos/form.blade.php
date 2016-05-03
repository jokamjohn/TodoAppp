<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name','Name', [ 'class' => 'col-md-4 control-label']) !!}
    {!! Form::text('name',null, [ 'class' => 'form-control', 'placeholder' => 'Name of Todo']) !!}
    @if ($errors->has('name'))
        <span class="help-block"><strong>{{ $errors->first('name') }}</strong> </span>
    @endif
</div>

<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
    {!! Form::label('text','Text', [ 'class' => 'col-md-4 control-label']) !!}
    {!! Form::textarea('text',null, [ 'class' => 'form-control', 'placeholder' => 'Todo Text']) !!}
    @if ($errors->has('text'))
        <span class="help-block"><strong>{{ $errors->first('text') }}</strong> </span>
    @endif
</div>
