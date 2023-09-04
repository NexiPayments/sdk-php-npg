<?php

namespace NexiSdk;

use NexiSdk\configuration\IConfiguration;

class HttpClientCurl
{

    private function generateCorrelationId() {
        return sprintf('%08x-%04x-%04x-%04x-%12x',
            mt_rand(0, 0xffffffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffffffffffff)
        );
    }

    public function executeHttpPost(
        IConfiguration $configuration,
        string $relativeApi,
        $requestBody
    ) {
        $correlationId = $this->generateCorrelationId();
        $payload = json_encode($requestBody);

        $apiUrl = $configuration->getGatewayBaseUrl() . $relativeApi;
        $headers = array(
            'Content-Type: application/json',
            'X-Api-Key: ' . $configuration->getApiKey(),
            'Correlation-Id: ' . $correlationId
        );
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        if (is_array($info)) {
            if ($info["http_code"] >= 400 && empty($result)) {
                throw new \NexiSdk\exceptions\InvalidHttpStatus("request " . $correlationId. " invalid http status code: " . $info["http_code"]);
            }
        }
        return $result;
    }

    public function executeHttpGet(
        IConfiguration $configuration,
        string $relativeApi,
        array $queryParams
    ) {
        $correlationId = $this->generateCorrelationId();
        $queryData = "";
        if (count($queryParams) > 0) {
            $queryData += "?" + \http_build_query($queryParams);
        }
        $apiUrl = $configuration->getGatewayBaseUrl() . $relativeApi . $queryData;
        $headers = array(
            'X-Api-Key: ' . $configuration->getApiKey(),
            'Correlation-Id: ' . $correlationId
        );
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        if (is_array($info)) {
            if ($info["http_code"] >= 400 && empty($result)) {
                throw new \NexiSdk\exceptions\InvalidHttpStatus("request " . $correlationId. " invalid http status code: " . $info["http_code"]);
            }
        }
        return $result;
    }
}
