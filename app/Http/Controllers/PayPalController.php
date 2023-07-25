<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Listings;
use App\Mail\AccountDetailsEmail;
use App\Jobs\SendAccountDetailsEmail;
use App\Jobs\SendAccountDetailsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PayPalController extends Controller
{

    public function handlePayment($orderId)
    {


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $checkoutData = $this->checkoutData($orderId);

        $response = $provider->createOrder($checkoutData);

        return redirect($response['links'][1]['href']);
        // dd($response);

    }
    private function checkoutData($listingId)
    {

    $listing = Listings::findOrFail($listingId);

            $purchaseUnits[] = [
                'reference_id' => uniqid(),
                'amount' => [
                    'currency_code' => 'USD',
                    'value' => $listing->price
                ],

            ];
        return [
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => route('paypal.success', $listing),
                'cancel_url' => route('paypal.cancel'),
            ],
            'purchase_units' => $purchaseUnits,
        ];

    }
        public function paymentCancel($response)
    {
        return redirect()
            ->route('home')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function paymentSuccess(Request $request, $listingId)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $checkoutData = $this->checkoutData($listingId);

        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            // Get the listing details (assuming you have a Listing model)
            $listing = Listings::find($listingId);

            // Retrieve the buyer's email from the users table using the order's user ID
            $order = Order::where('listing_id', $listingId)->first();

                if ($order) {
                    $buyerEmail = $order->user->email; // Assuming the User model has an 'email' attribute
                } else {
                    // Handle the case when the order is not found
                    return redirect()->route('home')->withMessage('Order not found! Something went wrong!');
                }

                    if ($listing && $buyerEmail) {

                    // Update order's is_paid status
                    $order->is_paid = 1;

                    $order->save();

                    // Send account details email using the job queue
                    SendAccountDetailsJob::dispatch($listing->id, $buyerEmail);

                    return redirect()->route('home')->with('success','Payment Successful');

                    } else {
                        // Handle the case when $listing or $buyerEmail is not found
                        return redirect()->route('home')->with('danger','Listing or Buyer Email not found! Something went wrong!');
                    }
        }
      dd($checkoutData);
    }

}

//    send mail
//    Mail::to($order->user->email)->send(new OrderPaid($order));

