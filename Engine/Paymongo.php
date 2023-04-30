<?php

use Paymongo\PaymongoClient;

class Paymongo
{


    public function __construct(){

    }

    public function initialize(): PaymongoClient
    {
        return new PaymongoClient(API_KEY);
    }


}