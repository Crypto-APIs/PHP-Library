<?php

namespace RestApis\Blockchain\LTC\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\LTC\Common;
use RestApis\Blockchain\LTC\Snippets\Fee;
use RestApis\Blockchain\LTC\Snippets\Input;
use RestApis\Blockchain\LTC\Snippets\Output;

class CreatePaymentForwarding extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $walletName string
     * @param $password string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $confirmations integer
     * @param $callbackUrl string
     * @param $fee double
     * @return \stdClass
     */

    public function create($network, $walletName, $password, $fromAddress, $toAddress, $confirmations, $callbackUrl, $fee = null)
    {
        $this->network = $network;

        $params = [
            'from' => $fromAddress,
            'to' => $toAddress,
            'callback' => $callbackUrl,
            'wallet' => $walletName,
            'password' => $password,
            'confirmations' => $confirmations
        ];

        if(!is_null($fee)) {
            $params['fee'] = $fee;
        }
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/payments';
    }

}