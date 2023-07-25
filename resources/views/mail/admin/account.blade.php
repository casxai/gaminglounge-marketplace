<x-mail::message>
# Invoice Paid

    Thanks for the purchase

    Here is the game acount:

    <table class="table">
        <thead>
            <tr>
                <th>Game: </th>
                <th>Username: </th>
                <th>Password: </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{ $listing->game_name }}</td>
                <td>{{ $listing->account_username }}</td>
                <td>{{ $listing->account_password }}</td>
            </tr>
        </tbody>
    </table>

    @component('mail::button', ['url' => url('http://gaminglounge.test')])
   Open Gaming Lounge
    @endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
