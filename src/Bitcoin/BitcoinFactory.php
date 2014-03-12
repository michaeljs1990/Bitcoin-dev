<?php

namespace Bitcoin;

class BitcoinFactory
{
    public static function create($password, $user, $ip)
    {
        $rpc = new JsonRPCClient("http://{$user}:{$password}@{$ip}/");
        return new Bitcoin($rpc);
    }
}
