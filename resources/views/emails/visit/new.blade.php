@extends('layouts.email')

@section('content')
    <p>Dear {!! $visit->name !!},</p>

    <p>You visitor application has been successfully submitted and is being considered. If you have any questions or
        concerns, please email the DATM at <a href="mailto:datm@vzdc.org">datm@vzdc.org</a>.</p>

    <p>Best regards,</p>
    <p>ZDC Visiting Staff</p>
@endsection
