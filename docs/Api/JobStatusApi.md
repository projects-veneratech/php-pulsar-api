# Swagger\Client\JobStatusApi

All URIs are relative to *https://apispulsarcloud.veneratech.com/apibroker*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobStatus**](JobStatusApi.md#jobStatus) | **GET** /{account_id}/{api_key}/JobStatus | Get the state and status of job.


# **jobStatus**
> \Swagger\Client\Model\JobStatus jobStatus($account_id, $api_key, $job_id_list)

Get the state and status of job.

The status is the percentage defining how much analysis is completed. The state defines whether the job is running, completed, or waiting(queued). jobstatus (-1) for jobs in completed state means that the content analysis failed. jobstatus (100) means the content analysis was done till the end of file. jobstatus between (0) and (100) for jobs in completed state means the file was aborted either by user or by application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\JobStatusApi();
$account_id = 56; // int | Pulsar Cloud - Account ID of the user
$api_key = "api_key_example"; // string | Pulsar Cloud - API KEY of the user
$job_id_list = "job_id_list_example"; // string | Comma separated string of valid integer job ids provided in response to CreateJob API.

try {
    $result = $api_instance->jobStatus($account_id, $api_key, $job_id_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobStatusApi->jobStatus: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JobStatus**](../Model/JobStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

