<?php

namespace RestApis\Blockchain\BCH\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\BCH\Common;
use RestApis\Blockchain\BCH\Snippets\Fee;
use RestApis\Blockchain\BCH\Snippets\Input;
use RestApis\Blockchain\BCH\Snippets\Output;

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