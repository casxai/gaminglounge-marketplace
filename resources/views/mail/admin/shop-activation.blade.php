<x-mail::message>
# Activate Seller Request

Please activate seller, here are the details:

Shop Owner: {{ ucwords($shop->owner->name) }}

Shop Name: {{$shop->name}}<br>
Shop Description: {{$shop->description}}<br>



@component('mail::button', ['url' => url('http://gaminglounge.test/admin')])
Manage Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
