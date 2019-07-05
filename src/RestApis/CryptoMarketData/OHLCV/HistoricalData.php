<?php

namespace RestApis\CryptoMarketData\OHLCV;

use Common\Request;
use Common\Response;

class HistoricalData extends Request {

    protected $endpoint = '/ohlcv/history';

    protected $symbolId;

    /**
     * @param $symbolId
     * @param $periodId
     * @param $timePeriodStart
     * @param null $timePeriodEnd
     * @param int $skip
     * @param int $limit
     * @return \stdClass
     */

    public function get($symbolId, $periodId, $timePeriodStart, $timePeriodEnd = null, $skip = 0, $limit = 50)
    {
        $this->symbolId = $symbolId;
        $params = ['period_id' => $periodId, 'timePeriodStart' => $timePeriodStart, 'skip' => $skip, 'limit' => $limit];

        if(!is_null($timePeriodEnd)) {
            $params['timePeriodEnd'] = $timePeriodEnd;
        }

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