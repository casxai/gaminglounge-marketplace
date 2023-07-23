<x-mail::message>
# Congratulations

Your shop activation request is approved!

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit {{$shop->name}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
