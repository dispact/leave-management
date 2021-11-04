@component('mail::message')
# Congratulations

Your leave request has been approved.

Type: {{ $leave->leave_type->name }}

@if($leave->duration->isMultipleDayType())
Start Date: {{ $leave->getStartDate() }}

End Date:: {{ $leave->getEndDate() }}
@else
Date: {{ $leave->getStartDate() }} 

Time: {{ $leave->getStartTime() }} - {{ $leave->getEndTime() }}
@endif

@component('mail::button', ['url' => 'http://127.0.0.1:8000/leaves'])
View Leaves
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
