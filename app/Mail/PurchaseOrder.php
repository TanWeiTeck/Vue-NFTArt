<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Purchase;


class PurchaseOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The purchase instance.
     *
     * @var \App\Models\Purchase
     */

    public $purchase;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('tanwt08180@gmail.com')->view('admin.purchaseemail')->subject('New Purchase');
    }
}
