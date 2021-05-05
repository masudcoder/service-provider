<?php
/**
 * Created by PhpStorm.
 * User: ts-masud.masuduzzama
 * Date: 2021-05-05
 * Time: 12:13
 */

namespace App\Billing;


class ProcessOnlinePayment
{

    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function processCreditCard($info) {

        //call any api to make payment buy credit card.

        return [
            'currency' => $this->currency,
            'amount' => $info['amount']
        ];
    }

}