<div class="row">
    <div class="input-field col s12">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'validate']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'materialize-textarea']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s6">
        {!! Form::label('published_at', 'Publish on:') !!}
        {{--<input type="date" class="datepicker" name="published_at" >--}}
        {!! Form::input('date', 'published_at', date('d F, Y'), ['class' => 'datepicker']) !!}
    </div>
</div>


<div class="row">
    <div class="input-field col s12">
        {!! Form::button($submitButtonText, ['class' => 'waves-effect waves-light btn-large col s6 offset-s3', 'type' => 'submit']) !!}
    </div>
</div>