<?php

namespace RestApis\CryptoMarketData\ExchangeRates;

use Common\Request;
use Common\Response;

class AllCurrentRatesInExchange extends Request {

    protected $endpoint = '/exchange-rates/exchange';

    protected $exchangeId;
    protected $baseAssetId;

    /**
     * @param $exchangeId
     * @param $baseAssetId
     * @param int $skip
     * @param int $limit
     * @param null $timestamp
     * @return \stdClass
     */

    public function get($exchangeId, $baseAssetId, $skip = 0, $limit = 50, $timestamp = null)
    {
        $this->exchangeId = $exchangeId;
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
        return $this->endpoint . '/' . $this->exchangeId . '/' . $this->baseAssetId;
    }
}