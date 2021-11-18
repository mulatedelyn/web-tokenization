<li class="nav-item">
    <a href="{{ route('enrollments.index') }}"
       class="nav-link {{ Request::is('enrollments*') ? 'active' : '' }}">
        <p>Enrollments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


