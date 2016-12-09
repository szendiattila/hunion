@include('partials.dashboard.tinymce')

<div class="form-group">
    {{ Form::label('name', 'Név') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Név...']) }}
</div>

<div class="form-group">
    {{ Form::label('product_id', 'Termék') }}
    {{ Form::select('product_id', $products, null, ['class' => 'form-control', 'placeholder' => 'Válassz terméket...']) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'E-mail cím') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail...']) }}
</div>

<div class="form-group">
    {{ Form::label('order', 'Ajánlatkérés') }}
    {{ Form::textarea('order', null, ['class' => 'form-control', 'placeholder' => 'Ajánlatkérés tartalma...']) }}
</div>

<div class="form-group">
    {{ Form::submit('Elküld', ['class' => 'form-control btn btn-primary']) }}
    <a class="btn btn-danger form-control" href="{{ url('/dashboard/order') }}">Mégse</a>
</div>

{{ Form::close() }}

@include('dashboard::_errors')
