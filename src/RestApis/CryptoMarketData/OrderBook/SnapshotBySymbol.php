<?php

namespace RestApis\CryptoMarketData\OrderBook;

use Common\Request;
use Common\Response;

class SnapshotBySymbol extends Request
{
    protected $endpoint = '/order-book';

    protected $symbolId;

    /**
     * @param $symbolId string
     * @return \stdClass
     */
    public function get($symbolId)
    {
        $this->symbolId = $symbolId;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    /**
     * @return string
     */
    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->symbolId . '/snapshot';
    }
}
