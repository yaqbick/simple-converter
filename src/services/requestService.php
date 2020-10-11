<?php

namespace App\Services;

class RequestService
{
    public function getJsonResponse($request)
    {
        $ch = curl_init();
        $agent = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36';
        curl_setopt($ch, CURLOPT_URL, $request);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
