<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    <textarea name="text" style="width: 100%; min-height: 400px;">
    	@if(isset($bText->text)){{ $bText->text }}@endif
    </textarea>
</div>
<!-- Textable Id Field -->
<div class="form-group col-sm-6">
   	<input type="hidden" name="textable_id" value="{{ $block_id }}">
</div>

<!-- Textable Type Field -->
<div class="form-group col-sm-6">
   	<input type="hidden" name="textable_type" value="App\Models\Block">
    
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="/blocks/show_texts/{{ $block_id }}" class="btn btn-default">Cancel</a>
</div>
