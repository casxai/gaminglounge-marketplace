<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\Listings;
use Illuminate\Bus\Queueable;
use App\Mail\AccountDetailsEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendAccountDetailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $listingId;
    protected $buyerEmail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $listingId, $buyerEmail)
    {
        $this->listingId = $listingId;
        $this->buyerEmail = $buyerEmail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Get the order associated with the listing
        $order = Order::where('listing_id', $this->listingId)->first();

        // Check if the order is found
        if ($order) {

            // Send the account details email to the buyer using the order's listing details
            $listing = $order->listing;
            Mail::to($this->buyerEmail)->send(new AccountDetailsEmail($listing));
        } else {
            // Handle the case when the order is not found
            // You can log an error, send a notification, or take any other appropriate action
            return redirect()->route('home')->withMessage('Sending game account failed!');
        }
    }
}
