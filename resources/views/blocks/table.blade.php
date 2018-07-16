<table class="table table-responsive" id="blocks-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
        <th>Link</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blocks as $block)
        <tr>
            <td>{!! $block->id !!}</td>
            <td>{!! $block->title !!}</td>
            <td>{!! $block->link !!}</td>
            <td>
                {!! Form::open(['route' => ['blocks.destroy', $block->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('blocks.show', [$block->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('blocks.edit', [$block->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('show_texts', [$block->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-text-width"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>