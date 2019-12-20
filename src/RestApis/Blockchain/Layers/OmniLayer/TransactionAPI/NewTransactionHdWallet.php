<?php

namespace RestApis\Blockchain\Layers\OmniLayer\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class NewTransactionHdWallet extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $walletName string
     * @param $password string
     * @param $from string
     * @param $to string
     * @param $value double
     * @param $fee double
     * @param $propertyID integer
     * @param $locktime integer
     * @param $data string
     */

    public function create($network, $walletName, $password, $from, $to, $value, $fee, $propertyID, $locktime = null, $data = null)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => [
                    'walletName' => $walletName,
                    'password' => $password,
                    'from' => $from,
                    'to' => $to,
                    'value' => $value,
                    'fee' => $fee,
                    'propertyID' => $propertyID,
                    'locktime' => $locktime,
                    'data' => $data
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/hdwallet';
    }

}
