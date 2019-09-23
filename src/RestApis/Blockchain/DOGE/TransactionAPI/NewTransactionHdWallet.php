<?php

namespace RestApis\Blockchain\DOGE\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;
use RestApis\Blockchain\DOGE\Snippets\Fee;
use RestApis\Blockchain\DOGE\Snippets\Output;

class NewTransactionHdWallet extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $walletName string
     * @param $password string
     * @param Output $outputs
     * @param Fee $fee
     * @param int $locktime
     * @return \stdClass
     */

    public function create($network, $walletName, $password, Output $outputs, Fee $fee, $locktime = 0)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'walletName' => $walletName,
                    'password' => $password,
                    'outputs' => $outputs->get(),
                    'fee' => $fee->get(),
                    'locktime' => $locktime
                ]
            ],null, true)
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/hdwallet';
    }

}
