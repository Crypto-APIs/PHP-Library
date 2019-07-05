<?php

namespace RestApis\CryptoMarketData\ExchangeRates;

use Common\Request;
use Common\Response;

class SpecificRate extends Request {

    protected $endpoint = '/exchange-rates';

    protected $baseAssetId;
    protected $quoteAssetId;

    /**
     * @param $baseAssetId
     * @param $quoteAssetId
     * @param null $timestamp
     * @return \stdClass
     */

    public function get($baseAssetId, $quoteAssetId, $timestamp = null)
    {
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
        return $this->endpoint . '/' . $this->baseAssetId . '/' . $this->quoteAssetId;
    }
}