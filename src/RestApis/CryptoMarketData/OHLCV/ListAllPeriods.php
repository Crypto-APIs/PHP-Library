<?php

namespace RestApis\CryptoMarketData\OHLCV;

use Common\Request;
use Common\Response;

class ListAllPeriods extends Request {

    protected $endpoint = '/ohlcv/periods';

    /**
     * @return \stdClass
     */
    public function get()
    {
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => []
            ])
        ))->get();
    }
}