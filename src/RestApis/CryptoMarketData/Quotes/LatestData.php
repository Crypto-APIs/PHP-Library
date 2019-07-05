<?php

namespace RestApis\CryptoMarketData\Quotes;

use Common\Request;
use Common\Response;

class LatestData extends Request {

    protected $endpoint = '/quotes/latest';

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