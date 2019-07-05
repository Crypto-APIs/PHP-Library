<?php

namespace RestApis\CryptoMarketData\ExchangeRates;

use Common\Request;
use Common\Response;

class SpecificRateInExchange extends Request {

    protected $endpoint = '/exchange-rates/exchange';

    protected $exchangeId;
    protected $baseAssetId;
    protected $quoteAssetId;

    /**
     * @param $exchangeId
     * @param $baseAssetId
     * @param $quoteAssetId
     * @param null $timestamp
     * @return \stdClass
     */

    public function get($exchangeId,$baseAssetId, $quoteAssetId, $timestamp = null)
    {
        $this->exchangeId = $exchangeId;
        $this->baseAssetId = $baseAssetId;
        $this->quoteAssetId = $quoteAssetId;
        $params = [];
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
        return $this->endpoint . '/' . $this->exchangeId . '/' . $this->baseAssetId . '/' . $this->quoteAssetId;
    }
}