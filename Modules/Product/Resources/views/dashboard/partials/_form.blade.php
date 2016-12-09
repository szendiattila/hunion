<div class="form-group">
    {{ Form::label('name', 'Termék neve') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Termék megnevezése...', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('intro', 'Termék rövid leírás') }}
    {{ Form::textarea('intro', null, ['class' => 'form-control', 'placeholder' => 'Rövid leírás...', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Termék leírás') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Részletes leírás...', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('image', 'Termék kép') }}
    {{ Form::file('image', ['class' => 'form-control fileinput-control', 'data-show-upload' => 'false']) }}
</div>

<div class="form-group">
    {{ Form::submit($submitButton, ['class' => 'form-control btn btn-primary']) }}
    <a class="btn btn-danger form-control" href="{{ url('dashboard/product') }}">Mégse</a>
</div>

{{ Form::close() }}