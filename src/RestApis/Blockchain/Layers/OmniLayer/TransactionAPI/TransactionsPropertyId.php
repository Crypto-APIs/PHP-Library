<?php

namespace RestApis\Blockchain\Layers\OmniLayer\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class TransactionsPropertyId extends Common {

    protected $network;
    protected $propertyId;

    /**
     * @param $network string
     * @param $propertyId integer
     * @param int $index
     * @param int $limit
     * @return \stdClass
     */

    public function get($network, $propertyId, $index = 0, $limit = 50)
    {
        $this->network = $network;
        $this->propertyId = $propertyId;

        $params = [
            'index' => $index,
            'limit' => $limit
        ];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/propertyid/' . $this->propertyId;
    }

}
