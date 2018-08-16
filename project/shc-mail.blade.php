@component('mail::message')
# Nytt inlägg i {{ $thread->channel->name }}

Nytt inlägg från {{$thread->creator->name}}

@component('mail::button', ['url' => url($path)])
Läs inlägget
@endcomponent

Mvh,<br>
{{ config('app.name') }}

@endcomponent
