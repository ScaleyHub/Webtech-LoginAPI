<!-- Doctor First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_first_name', 'Doctor First Name:') !!}
    {!! Form::text('doctor_first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doctor Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_last_name', 'Doctor Last Name:') !!}
    {!! Form::text('doctor_last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Doctor Specialization Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_specialization', 'Doctor Specialization:') !!}
    {!! Form::text('doctor_specialization', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Appointment Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_start', 'Appointment Start:') !!}
    {!! Form::text('appointment_start', null, ['class' => 'form-control','id'=>'appointment_start']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#appointment_start').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Appointment End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appointment_end', 'Appointment End:') !!}
    {!! Form::text('appointment_end', null, ['class' => 'form-control','id'=>'appointment_end']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#appointment_end').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush