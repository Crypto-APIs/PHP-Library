<?php

namespace RestApis\Blockchain\ETH\TokenAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;
use RestApis\Blockchain\ETH\Snippets\TokenTypeInterface;

class TokenTransactionsByAddress extends Common {

    protected $network;
    protected $address;

    /**
     * @param $network
     * @param $address
     * @param int $limit
     * @param TokenTypeInterface|null $type
     * @return \stdClass
     * @throws \Exception
     */

    public function get($network, $address, $limit = 50, TokenTypeInterface $type = null)
    {
        $this->network = $network;
        $this->address = $address;

        $params = [];
        if(!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if(!is_null($type)) {
            $params['type'] = $type->get();
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
        return $this->endpoint . '/' . $this->network . '/tokens/address/'. $this->address . '/transfers';
    }

}