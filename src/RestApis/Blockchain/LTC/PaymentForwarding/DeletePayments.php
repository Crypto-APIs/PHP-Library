<?php

namespace RestApis\Blockchain\LTC\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class DeletePayments extends Common {

    protected $network;
    protected $paymentUuid;

    /**
     * @param $network string
     * @param $paymentUuid string
     * @return \stdClass
     */

    public function delete($network, $paymentUuid)
    {
        $this->network = $network;
        $this->paymentUuid = $paymentUuid;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
                'params' => $params
            ])
        ))->get();
    }


    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/payments/' . $this->paymentUuid;
    }
}