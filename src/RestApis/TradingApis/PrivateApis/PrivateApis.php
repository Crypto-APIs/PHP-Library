<?php

namespace RestApis\TradingApis\PrivateApis;

use Common\Request;
use Common\Response;

class PrivateApis extends Request {

    protected $endpoint = '/trading/private-apis';


    /**
     * @return \stdClass
     */
    public function listAll()
    {
        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }


    /**
     * @param $account_id string
     * @param array $parameters
     * @return \stdClass
     */
    public function getBalance($account_id,  $parameters = [])
    {
        $params = [
            'params' => $parameters
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/balance')
        ))->get();
    }

    /**
     * @param string $account_id
     * @return \stdClass
     */
    public function getSymbols($account_id)
    {
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => []
            ],
                $this->getEndPoint() . '/' . $account_id . '/symbols')
        ))->get();
    }

    /**
     * @param string $account_id
     * @param string $code
     * @param array $parameters
     * @return \stdClass
     */
    public function getDepositAddress($account_id, $code, $parameters = [])
    {
        $params = [
            'params' => $parameters
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/depositAddress/' . $code)
        ))->get();
    }

    /**
     * @param $account_id
     * @param null|string $symbol
     * @param null|int $since
     * @param int|null $limit
     * @param array $parameters
     * @return \stdClass
     */
    public function getMyTrades($account_id, $symbol = null, $since = null, $limit = null, $parameters = [])
    {
        $params = [
            'params' => $parameters
        ];

        if(!is_null($symbol)) {
            $params['symbol'] = $symbol;
        }

        if(!is_null($since)) {
            $params['since'] = $since;
        }

        if(!is_null($limit)) {
            $params['limit'] = $limit;
        }

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/myTrades')
        ))->get();
    }

    /**
     * @param $account_id string
     * @return \stdClass
     */
    public function getOpenOrders($account_id)
    {
        $params = [];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/openOrders')
        ))->get();
    }


    /**
     * @param $account_id string
     * @param $symbol string
     * @param $type string
     * @param $side string
     * @param $amount float
     * @param $price float
     * @param $parameters array
     * @return \stdClass
     */
    public function createOrder($account_id, $symbol, $type, $side, $amount, $price, $parameters = [])
    {
        $params = [
            'symbol' => $symbol,
            'type' => $type,
            'side' => $side,
            'amount' => $amount,
            'price' => $price,
            'parameters' => $parameters
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/createOrder')
        ))->get();
    }


    /**
     * @param $account_id string
     * @param $id string
     * @param $symbol string
     * @param array $parameters
     * @return \stdClass
     */
    public function cancelOrder($account_id, $id, $symbol = null, $parameters = [])
    {
        $params = [
            'id' => $id,
            'params' => $parameters
        ];

        if(!is_null($symbol)) {
            $params['symbol'] = $symbol;
        }

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/cancelOrder')
        ))->get();
    }

    /**
     * @param $account_id string
     * @param $code string
     * @param $amount float
     * @param $address string
     * @param $tag string
     * @param $parameters array
     * @return \stdClass
     */
    public function withdraw($account_id, $code, $amount, $address, $tag = null, $parameters = [])
    {
        $params = [
            'code' => $code,
            'amount' => $amount,
            'address' => $address,
            'params' => $parameters
        ];

        if(!is_null($tag)) {
            $params['tag'] = $tag;
        }

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id . '/withdraw')
        ))->get();
    }


}