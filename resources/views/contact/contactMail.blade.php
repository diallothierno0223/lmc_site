@component('mail::message')
# Bonjour

vous avez recu un email de {{$data['name']}} et sont mail est {{$data['mail']}}
#voici le sujet:
{{$data['subject']}}
# voici le message:

{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
