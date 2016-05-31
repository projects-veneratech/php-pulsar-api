# Swagger\Client\GetReportPathApi

All URIs are relative to *https://apispulsarcloud.veneratech.com/apibroker*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReportPath**](GetReportPathApi.md#getReportPath) | **GET** /{account_id}/{api_key}/GetReportPath | Get the analysis/job report link.


# **getReportPath**
> \Swagger\Client\Model\GetReportPath getReportPath($account_id, $api_key, $job_id_list)

Get the analysis/job report link.

The output of job is a pulsar system generated report. The report can be downloaded via S3 URL provided in response to this API. The job is refered by job id provided in response to CreateJob

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GetReportPathApi();
$account_id = 56; // int | Pulsar Cloud - Account ID of the user
$api_key = "api_key_example"; // string | Pulsar Cloud - API KEY of the user
$job_id_list = "job_id_list_example"; // string | Comma separated string of valid integer job ids provided in response to CreateJob API.

try {
    $result = $api_instance->getReportPath($account_id, $api_key, $job_id_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetReportPathApi->getReportPath: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetReportPath**](../Model/GetReportPath.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

