<!-- Doctor First Name Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_first_name', 'Doctor First Name:') !!}
    <p>{{ $medicalAppointment->doctor_first_name }}</p>
</div>

<!-- Doctor Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_last_name', 'Doctor Last Name:') !!}
    <p>{{ $medicalAppointment->doctor_last_name }}</p>
</div>

<!-- Doctor Specialization Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_specialization', 'Doctor Specialization:') !!}
    <p>{{ $medicalAppointment->doctor_specialization }}</p>
</div>

<!-- Appointment Start Field -->
<div class="col-sm-12">
    {!! Form::label('appointment_start', 'Appointment Start:') !!}
    <p>{{ $medicalAppointment->appointment_start }}</p>
</div>

<!-- Appointment End Field -->
<div class="col-sm-12">
    {!! Form::label('appointment_end', 'Appointment End:') !!}
    <p>{{ $medicalAppointment->appointment_end }}</p>
</div>

