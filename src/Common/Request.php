<?php
namespace Common;

use GuzzleHttp\Client;

abstract class Request {

    /**
     * @var $apiKey string
     * @var $apiVersion integer
     */
    protected $apiKey;
    protected $apiVersion;

    /**
     * Request constructor.
     * @param $apiKey string
     * @param $apiVersion integer
     */
    public function __construct($apiKey, $apiVersion)
    {
        $this->apiVersion = $apiVersion;
        $this->apiKey = $apiKey;
    }

    /**
     * @param array $options
     * @param null $url
     * @return mixed
     * @throws \Exception
     */
    protected function request($options = [], $url = null, $disableQuery = false) {

        $endpoint = $this->getEndPoint();
        if(!is_null($url)) {
            $endpoint = $url;
        }

        $client = new Client();

        $query = http_build_query($options['params']);
        if($disableQuery === true) {
            $query = '';
        }

        try {
            $res = $client->{$options['method']}('https://api.cryptoapis.io/v' . $this->apiVersion . $endpoint . '?' . $query, [
                    'headers' => ['X-API-Key' => $this->apiKey],
                    'Content-Type' => 'application/json',
                    'json' => $options['params']
                ]
            );
            $response = \GuzzleHttp\json_decode($res->getBody()->read($res->getBody()->getSize()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
        return $response;
    }

    /**
     * @return string
     */
    protected function getEndPoint() {
        return $this->endpoint;
    }
}