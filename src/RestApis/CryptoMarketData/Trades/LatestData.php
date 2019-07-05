<?php

namespace RestApis\CryptoMarketData\Trades;

use Common\Request;
use Common\Response;

class LatestData extends Request {

    protected $endpoint = '/trades/latest';

    /**
     * @param int $limit
     * @return \stdClass
     */

    public function get($limit = 50)
    {
        $params = ['limit' => $limit];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }
}