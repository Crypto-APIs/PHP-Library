<?php

namespace RestApis\CryptoMarketData\OHLCV;

use Common\Request;
use Common\Response;

class LatestData extends Request {

    protected $endpoint = '/ohlcv/latest';

    protected $symbolId;

    /**
     * @param $symbolId
     * @param $periodId
     * @param int $limit
     * @return \stdClass
     */

    public function get($symbolId, $periodId, $limit = 50)
    {
        $this->symbolId = $symbolId;
        $params = ['period_id' => $periodId, 'limit' => $limit];
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
    protected function getEndPoint() {
        return $this->endpoint . '/' . $this->symbolId;
    }
}