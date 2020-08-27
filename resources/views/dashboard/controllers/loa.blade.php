@extends('layouts.dashboard')

@section('title')
LOA Request
@endsection

@section('content')
<div class="container-fluid" style="background-color:#F0F0F0;">
    <br />
    <h2 class="text-center">New LOA Request</h2>
    <br />
    <p class="text-center">Once submitted please allow up to 48 hours for approval. If approved you will recieve an
        email indicating as such.</p>
    <br />
</div>
<br />
<div class="container">
    {!! Form::open(['action' => 'ControllerDash@SubmitLoaRequest']) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('start_date', 'Starting Date of LOA') !!}
        <div class="input-group date" id="datetimepickerend" data-target-input="nearest">
            {!! Form::text('start_date', null, ['placeholder' => 'MM/DD/YYYY', 'class' => 'form-control datetimepicker-input', 'data-target' => '#datetimepickerend']) !!}
            <div class="input-group-append" data-target="#datetimepickerstart" data-toggle="datetimepickerstart">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        {!! Form::label('end_date', 'Ending Date of LOA') !!}
        <div class="input-group date" id="datetimepickerend" data-target-input="nearest">
            {!! Form::text('end_date', null, ['placeholder' => 'MM/DD/YYYY', 'class' => 'form-control datetimepicker-input', 'data-target' => '#datetimepickerend']) !!}
            <div class="input-group-append" data-target="#datetimepickerend" data-toggle="datetimepickerend">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('reason', 'Reason for LOA') !!}
            {!! Form::textArea('reason', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <button class="btn btn-success" type="submit">Submit LOA</button>
        <a class="btn btn-danger" href="/dashboard/controllers">Cancel</a>
        {!! Form::close() !!}
</div>

<script type="text/javascript">
    $(function () {
            $('#datetimepickerstart').datetimepicker({
                format: 'L'
            });

            $('#datetimepickerend').datetimepicker({
                format: 'L'
            });
        });
</script>
@endsection