<x-mail::message>
# Invoice Paid

    Thanks for the purchase

    Here is your receipt

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Fee</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{ $order->listing->game_name }}</td>
                <td>${{ $order->listing->price }}</td>
                <td>${{ $order->listing->price * 0.05 }}</td>
            </tr>
            <tr>
                <td colspan="3">Total: {{ $order->total_amount }}</td>
            </tr>
        </tbody>
    </table>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
