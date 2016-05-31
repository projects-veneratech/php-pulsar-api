# Swagger\Client\CancelJobApi

All URIs are relative to *https://apispulsarcloud.veneratech.com/apibroker*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJob**](CancelJobApi.md#cancelJob) | **POST** /{account_id}/{api_key}/CancelJob | Cancel the ongoing analysis of content.


# **cancelJob**
> \Swagger\Client\Model\CancelJobResponse cancelJob($account_id, $api_key, $job_list)

Cancel the ongoing analysis of content.

The analysis of content is refered by unique job id provided in response to CreateJob API. This API can be used to cancel such analysis with a condition that the analysis has not been completed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CancelJobApi();
$account_id = 56; // int | Pulsar Cloud - Account ID of the user
$api_key = "api_key_example"; // string | Pulsar Cloud - API KEY of the user
$job_list = new \Swagger\Client\Model\JobList(); // \Swagger\Client\Model\JobList | Body parameters structure.

try {
    $result = $api_instance->cancelJob($account_id, $api_key, $job_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancelJobApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Pulsar Cloud - Account ID of the user |
 **api_key** | **string**| Pulsar Cloud - API KEY of the user |
 **job_list** | [**\Swagger\Client\Model\JobList**](../Model/\Swagger\Client\Model\JobList.md)| Body parameters structure. |

### Return type

[**\Swagger\Client\Model\CancelJobResponse**](../Model/CancelJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

