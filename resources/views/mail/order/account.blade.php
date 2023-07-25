<x-mail::message>
# Invoice Paid

Thanks for the purchase

Here is the game account:

        Game: {{ $listing->game_name }}
        Username: {{ $listing->account_username }}
        Password: {{ $listing->account_password }}

@component('mail::button', ['url' => 'http://gaminglounge.test'])
Open Gaming Lounge
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
