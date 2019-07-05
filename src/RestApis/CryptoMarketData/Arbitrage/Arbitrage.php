<?php

namespace RestApis\CryptoMarketData\Arbitrage;

use Common\Request;
use Common\Response;

class Arbitrage extends Request {

    protected $endpoint = '/arbitrage-rest';

    /**
     * @param int $skip
     * @param int $limit
     * @return \stdClass
     */

    public function get($skip = 0, $limit = 50)
    {
        $params = ['limit' => $limit, 'slip' => $skip];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }
}