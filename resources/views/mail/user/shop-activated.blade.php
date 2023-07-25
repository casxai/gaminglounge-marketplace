<x-mail::message>
# Congratulations

Your shop activation request is approved!

@component('mail::button', ['url' => url('http://gaminglounge.test/admin')])
Visit {{$shop->name}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
