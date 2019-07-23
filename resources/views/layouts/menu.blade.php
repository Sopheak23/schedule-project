
<li class="nav-item {{ Request::is('buildings*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('buildings.index') !!}"><i class="nav-icon icon-cursor"></i><span>Buildings</span></a>
</li>
<li class="nav-item {{ Request::is('classes*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('ShowAllCreateClass') !!}"><i class="nav-icon icon-cursor"></i><span>Classes</span></a>
</li>
<li class="nav-item {{ Request::is('department*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('departments.index') !!}"><i class="nav-icon icon-cursor"></i><span>Departments</span></a>
</li>
<li class="nav-item {{ Request::is('faculty*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('faculties.index') !!}"><i class="nav-icon icon-cursor"></i><span>Faculties</span></a>
</li>
<li class="nav-item {{ Request::is('professor*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('professors.index') !!}"><i class="nav-icon icon-cursor"></i><span>Professors</span></a>
</li>
<li class="nav-item {{ Request::is('subject*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('subjects.index') !!}"><i class="nav-icon icon-cursor"></i><span>Subjects</span></a>
</li>
{{--<li class="nav-item {{ Request::is('rooms*') ? 'active' : '' }}">--}}
{{--    <a class="nav-link" href="{!! route('rooms.index') !!}"><i class="nav-icon icon-cursor"></i><span>Rooms</span></a>--}}
{{--</li>--}}
{{--<li class="nav-item {{ Request::is('floors*') ? 'active' : '' }}">--}}
{{--    <a class="nav-link" href="{!! route('floors.index') !!}"><i class="nav-icon icon-cursor"></i><span>Floors</span></a>--}}
{{--</li>--}}

