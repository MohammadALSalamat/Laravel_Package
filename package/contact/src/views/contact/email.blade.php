@component('mail::message')

From {{ $Name }}<br>

Message :<br>
{{ $Message }}

@component('mail::button',['url'=>''])
    button Text
@endcomponent

Thanks<br>
{{ Config('app.name') }}
@endcomponent
