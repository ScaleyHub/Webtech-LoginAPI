<div class="table-responsive">
    <table class="table" id="medicalAppointments-table">
        <thead>
            <tr>
                <th>Doctor First Name</th>
        <th>Doctor Last Name</th>
        <th>Doctor Specialization</th>
        <th>Appointment Start</th>
        <th>Appointment End</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicalAppointments as $medicalAppointment)
            <tr>
                <td>{{ $medicalAppointment->doctor_first_name }}</td>
            <td>{{ $medicalAppointment->doctor_last_name }}</td>
            <td>{{ $medicalAppointment->doctor_specialization }}</td>
            <td>{{ $medicalAppointment->appointment_start }}</td>
            <td>{{ $medicalAppointment->appointment_end }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['medicalAppointments.destroy', $medicalAppointment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('medicalAppointments.show', [$medicalAppointment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('medicalAppointments.edit', [$medicalAppointment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
