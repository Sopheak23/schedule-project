
<li class="nav-item {{ Request::is('buildings*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('buildings.index') !!}"><i class="nav-icon icon-cursor"></i><span>Buildings</span></a>
</li>
{{--<li class="nav-item {{ Request::is('rooms*') ? 'active' : '' }}">--}}
{{--    <a class="nav-link" href="{!! route('rooms.index') !!}"><i class="nav-icon icon-cursor"></i><span>Rooms</span></a>--}}
{{--</li>--}}
{{--<li class="nav-item {{ Request::is('floors*') ? 'active' : '' }}">--}}
{{--    <a class="nav-link" href="{!! route('floors.index') !!}"><i class="nav-icon icon-cursor"></i><span>Floors</span></a>--}}
{{--</li>--}}

