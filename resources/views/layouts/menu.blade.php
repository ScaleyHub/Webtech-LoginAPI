<li class="nav-item">
    <a href="{{ route('medicalAppointments.index') }}"
       class="nav-link {{ Request::is('medicalAppointments*') ? 'active' : '' }}">
        <p>Medical Appointments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


