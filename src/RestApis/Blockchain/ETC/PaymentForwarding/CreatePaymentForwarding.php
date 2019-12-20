<?php

namespace RestApis\Blockchain\ETC\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class CreatePaymentForwarding extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $confirmations int
     * @param $callbackUrl string
     * @param $password string
     * @param null|int $gasPrice
     * @param null|int $gasLimit
     * @return \stdClass
     */

    public function createWithPassword($network, $fromAddress, $toAddress, $confirmations, $callbackUrl, $password, $gasPrice = null, $gasLimit = null)
    {
        $this->network = $network;

        $params = [
            'from' => $fromAddress,
            'to' => $toAddress,
            'callback' => $callbackUrl,
            'password' => $password,
            'confirmations' => $confirmations
        ];

        if(!is_null($gasPrice)) {
            $params['gasPrice'] = $gasPrice;
        }

        if(!is_null($gasLimit)) {
            $params['gasLimit'] = $gasLimit;
        }


        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ])
        ))->get();
    }

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $confirmations int
     * @param $callbackUrl string
     * @param $privateKey string
     * @param null|int $gasPrice
     * @param null|int $gasLimit
     * @return \stdClass
     */
    public function createWithPrivateKey($network, $fromAddress, $toAddress, $confirmations, $callbackUrl, $privateKey, $gasPrice = null, $gasLimit = null)
    {
        $this->network = $network;

        $params = [
            'from' => $fromAddress,
            'to' => $toAddress,
            'callback' => $callbackUrl,
            'privateKey' => $privateKey,
            'confirmations' => $confirmations
        ];

        if(!is_null($gasPrice)) {
            $params['gasPrice'] = $gasPrice;
        }

        if(!is_null($gasLimit)) {
            $params['gasLimit'] = $gasLimit;
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
