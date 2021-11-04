@component('mail::message')
# New Leave Request!

{{ $leave->user->name }} has put in a request for {{ $leave->leave_type->name }} time. 

@component('mail::button', ['url' => 'http://127.0.0.1:8000/approvals'])
View the Request
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
