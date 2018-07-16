<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $bText->id !!}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{!! $bText->text !!}</p>
</div>

<!-- Textable Id Field -->
<div class="form-group">
    {!! Form::label('textable_id', 'Textable Id:') !!}
    <p>{!! $bText->textable_id !!}</p>
</div>

<!-- Textable Type Field -->
<div class="form-group">
    {!! Form::label('textable_type', 'Textable Type:') !!}
    <p>{!! $bText->textable_type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $bText->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $bText->updated_at !!}</p>
</div>

