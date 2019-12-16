<?php

namespace RestApis\TradingApis\ExchangeAccounts;

use Common\Request;
use Common\Response;

class Account extends Request {

    protected $endpoint = '/trading/exchange-accounts';

    /**
     * @param $exchange_id string
     * @param $exchange_api_key string
     * @param $exchange_secret string
     * @param $exchange_password string
     * @param $exchange_uid string
     * @return \stdClass
     */
    public function create($exchange_id, $exchange_api_key, $exchange_secret = null, $exchange_password = null, $exchange_uid = null)
    {
        $params = [
            'url' => $this->getEndPoint(),
            'exchangeId' => $exchange_id,
            'exchangeApiKey' => $exchange_api_key
        ];

        if(!is_null($exchange_secret)) {
            $params['exchangeSecret'] = $exchange_secret;
        }

        if(!is_null($exchange_password)) {
            $params['exchangePassword'] = $exchange_password;
        }

        if(!is_null($exchange_uid)) {
            $params['exchangeUid'] = $exchange_uid;
        }

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

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
     * @return \stdClass
     */
    public function get($account_id)
    {
        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ],
            $this->getEndPoint() . '/' . $account_id)
        ))->get();
    }

    /**
     * @param $account_id string
     * @param $exchange_id string
     * @param $exchange_api_key string
     * @param $exchange_secret string
     * @param $exchange_password string
     * @param $exchange_uid string
     * @return \stdClass
     */
    public function update($account_id, $exchange_id = null, $exchange_api_key = null, $exchange_secret = null, $exchange_password = null, $exchange_uid = null)
    {
        $params = [];

        if(!is_null($exchange_id)) {
            $params['exchangeId'] = $exchange_id;
        }

        if(!is_null($exchange_api_key)) {
            $params['exchangeApiKey'] = $exchange_api_key;
        }

        if(!is_null($exchange_secret)) {
            $params['exchangeSecret'] = $exchange_secret;
        }

        if(!is_null($exchange_password)) {
            $params['exchangePassword'] = $exchange_password;
        }

        if(!is_null($exchange_uid)) {
            $params['exchangeUid'] = $exchange_uid;
        }

        return (new Response(
            $this->request([
                'method' => 'PATCH',
                'params' => $params
            ],$this->getEndPoint() . '/' . $account_id)
        ))->get();
    }

    /**
     * @param $account_id string
     * @param $exchange_id string
     * @param $exchange_api_key string
     * @param $exchange_secret string
     * @param $exchange_password string
     * @param $exchange_uid string
     * @return \stdClass
     */
    public function replace($account_id, $exchange_id, $exchange_api_key, $exchange_secret = null, $exchange_password = null, $exchange_uid = null)
    {
        $params = [
            'exchangeId' => $exchange_id,
            'exchangeApiKey' => $exchange_api_key
        ];

        if(!is_null($exchange_secret)) {
            $params['exchangeSecret'] = $exchange_secret;
        }

        if(!is_null($exchange_password)) {
            $params['exchangePassword'] = $exchange_password;
        }

        if(!is_null($exchange_uid)) {
            $params['exchangeUid'] = $exchange_uid;
        }


        return (new Response(
            $this->request([
                'method' => 'PUT',
                'params' => $params
            ],$this->getEndPoint() . '/' . $account_id)
        ))->get();
    }

    /**
     * @param $account_id string
     * @return \stdClass
     */
    public function delete($account_id)
    {
        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
                'params' => $params
            ],
                $this->getEndPoint() . '/' . $account_id)
        ))->get();
    }
}