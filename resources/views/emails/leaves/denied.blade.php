@component('mail::message')
# Denied

Unfortunately, your request for time off has been denied. 

@component('mail::button', ['url' => 'http://127.0.0.1:8000/leaves'])
View Leaves
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
