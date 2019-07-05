<?php

namespace RestApis\CryptoMarketData\Trades;

use Common\Request;
use Common\Response;

class LatestDataBySymbol extends Request {

    protected $endpoint = '/trades';
    protected $symbolId;

    /**
     * @param $symbolId
     * @param int $skip
     * @param int $limit
     * @return \stdClass
     */

    public function get($symbolId, $skip = 0, $limit = 50)
    {
        $this->symbolId = $symbolId;

        $params = ['limit' => $limit, 'skip' => $skip];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->symbolId . '/latest';
    }
}