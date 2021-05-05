<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Billing\ProcessOnlinePayment;


class ExampleServiceProviderController extends Controller
{
    //

     function processBilling(ProcessOnlinePayment $payment) {
        $result = $payment->processCreditCard(['amount'=>101, 'name'=> 'John Doe', 'card_number' => '213123XXX']);
        var_dump($result);
    }
}
