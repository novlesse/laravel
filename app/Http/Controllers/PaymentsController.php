<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    // // NOTIFICATIONS
    // public function store()
    // {
    //     // Notification::send(request()->user(), new PaymentReceived());

    //     request()->user()->notify(new PaymentReceived(900));

    //     return redirect('payments/create');
    // }

    public function store() {
        ProductPurchased::dispatch('toy');
    }
}
