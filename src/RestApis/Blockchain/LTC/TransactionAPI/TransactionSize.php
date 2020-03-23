<?php


namespace RestApis\Blockchain\LTC\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\LTC\Common;
use RestApis\Blockchain\LTC\Snippets\Fee;
use RestApis\Blockchain\LTC\Snippets\Input;
use RestApis\Blockchain\LTC\Snippets\Output;

class TransactionSize extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $inputs Input
     * @param $outputs Output
     * @param $fee Fee
     * @param $data string
     * @param $locktime integer
     * @return \stdClass
     */

    public function calculate($network, Input $inputs, Output $outputs, Fee $fee = null, $locktime = null, $data = null)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'inputs' => $inputs->get(),
                    'outputs' => $outputs->get(),
                    'fee' => $fee ? $fee->get() : $fee,
                    'data' => $data,
                    'locktime' => $locktime,
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/size';
    }
}
