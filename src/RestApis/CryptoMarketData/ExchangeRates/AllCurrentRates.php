<?php

namespace RestApis\CryptoMarketData\ExchangeRates;

use Common\Request;
use Common\Response;

class AllCurrentRates extends Request {

    protected $endpoint = '/exchange-rates';

    protected $baseAssetId;

    /**
     * @param $baseAssetId
     * @param int $skip
     * @param int $limit
     * @param null $timestamp
     * @return \stdClass
     */

    public function get($baseAssetId, $skip = 0, $limit = 50, $timestamp = null)
    {
        $this->baseAssetId = $baseAssetId;
        $params = ['skip' => $skip, 'limit' => $limit];
        if(!is_null($timestamp)) {
            $params['timestamp'] = $timestamp;
        }

        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint() {
        return $this->endpoint . '/' . $this->baseAssetId;
    }
}