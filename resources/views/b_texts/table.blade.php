<table class="table table-responsive" id="bTexts-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Text</th>
        <th>Textable Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bTexts as $bText)
        <tr>
            <td>{!! $bText->id !!}</td>
            <td>{!! $bText->text !!}</td>
            <td>{!! $bText->textable_id !!}</td>
            <td>
                <form action="/btexts/delete_text/{{ $bText->id }}/{{$block_id}}" method="POST">
                    <div class='btn-group'>
                        <a href="/btexts/edit_text/{{ $bText->id }}/{{ $block_id }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {{ csrf_field() }}
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>