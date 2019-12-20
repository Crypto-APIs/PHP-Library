<?php

namespace RestApis\Blockchain\ETC\ContractAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class DeploySmartContract extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $privateKey string
     * @param $fromAddress string
     * @param $gasPrice  int
     * @param $gasLimit int
     * @param $byteCode string
     * @return \stdClass
     */
    public function create($network, $privateKey, $fromAddress, $gasPrice, $gasLimit, $byteCode)
    {
        $this->network = $network;

        $params = [
            'privateKey' => $privateKey,
            'fromAddress' => $fromAddress,
            'gasPrice' => $gasPrice,
            'gasLimit' => $gasLimit,
            'byteCode' => $byteCode
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/contracts';
    }

}
