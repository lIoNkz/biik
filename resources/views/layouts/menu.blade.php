<li class="{{ Request::is('blocks*') ? 'active' : '' }}">
    <a href="{!! route('blocks.index') !!}"><i class="fa fa-edit"></i><span>Блоки</span></a>
</li>
<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

