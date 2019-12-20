<?php


namespace RestApis\Blockchain\Layers\OmniLayer\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class CreateTransaction extends Common
{
    protected $network;

    /**
     * @param $network string
     * @param $from string
     * @param $to string
     * @param $value double
     * @param $fee double
     * @param $propertyID integer
     * @param $locktime integer
     * @param $data string
     */

    public function create($network, $from, $to, $value, $fee, $propertyID, $locktime = null, $data = null)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => [
                    'from' => $from,
                    'to' => $to,
                    'value' => $value,
                    'fee' => $fee,
                    'propertyID' => $propertyID,
                    'locktime' => $locktime,
                    'data' => $data
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/create';
    }
}
