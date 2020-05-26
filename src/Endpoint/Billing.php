<?php

namespace UDX\Zoom\Endpoint;

use UDX\Zoom\Http\Request;

/**
 * Class Users
 * @package UDX\Zoom\Endpoint
 */
class Billing extends Request {

    /**
     * Users constructor.
     * @param $apiKey
     * @param $apiSecret
     */
    public function __construct($apiKey, $apiSecret) {
        parent::__construct($apiKey, $apiSecret);
    }

    /**
     * getPlanInfo
     *
     * @param array $query
     * @return array|mixed
     */
    public function getPlan( string $accountID ) {
        return $this->get( "accounts/{accountId}/plans" );
    }

    /**
     * updatePlan
     *
     * @param array|null $data
     * @return array|mixed
     */
    public function updatePlan( string $accountID, array $query = [] ) {
        return $this->put( "/accounts/{accountId}/plans/base", $query );
    }
    
}