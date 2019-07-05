<?php

namespace RestApis\CryptoMarketData\Quotes;

use Common\Request;
use Common\Response;

class HistoricalData extends Request {

    protected $endpoint = '/quotes';
    protected $symbolId;

    /**
     * @param string $symbolId
     * @param int $timeStart
     * @param null|int $timeEnd
     * @param int $skip
     * @param int $limit
     * @return \stdClass
     */

    public function get($symbolId, $timeStart, $timeEnd = null, $skip = 0, $limit = 50)
    {
        $this->symbolId = $symbolId;

        $params = ['limit' => $limit, 'skip' => $skip, 'timeStart' => $timeStart];

        if(!is_null($timeEnd)) {
            $params['timeEnd'] = $timeEnd;
        }

        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->symbolId . '/history';
    }
}