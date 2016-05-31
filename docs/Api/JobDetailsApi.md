# Swagger\Client\JobDetailsApi

All URIs are relative to *https://apispulsarcloud.veneratech.com/apibroker*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobDetails**](JobDetailsApi.md#jobDetails) | **GET** /{account_id}/{api_key}/JobDetails | Get the details such as state, status, startdatetime, enddatetime, error count, warning count.


# **jobDetails**
> \Swagger\Client\Model\JobDetails jobDetails($account_id, $api_key, $job_id_list)

Get the details such as state, status, startdatetime, enddatetime, error count, warning count.

The details describes the state, status, startdatetime, enddatetime, number of errors, number of warnings, with detailed message briefing the analysis of content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JobDetailsApi();
$account_id = 56; // int | Pulsar Cloud - Account ID of the user
$api_key = "api_key_example"; // string | Pulsar Cloud - API KEY of the user
$job_id_list = "job_id_list_example"; // string | Comma separated string of valid integer job ids provided in response to CreateJob API.

try {
    $result = $api_instance->jobDetails($account_id, $api_key, $job_id_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDetailsApi->jobDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Pulsar Cloud - Account ID of the user |
 **api_key** | **string**| Pulsar Cloud - API KEY of the user |
 **job_id_list** | **string**| Comma separated string of valid integer job ids provided in response to CreateJob API. |

### Return type

[**\Swagger\Client\Model\JobDetails**](../Model/JobDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

