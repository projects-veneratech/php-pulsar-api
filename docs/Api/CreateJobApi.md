# Swagger\Client\CreateJobApi

All URIs are relative to *https://apispulsarcloud.veneratech.com/apibroker*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createJob**](CreateJobApi.md#createJob) | **POST** /{account_id}/{api_key}/CreateJob | Post the content&#39;s URL for analysis.


# **createJob**
> \Swagger\Client\Model\CreateJobResponse createJob($account_id, $api_key, $jobdata)

Post the content's URL for analysis.

The public url of the media content stored in AWS S3 storage when posted, the pulsar system creates a job for analysis of the content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CreateJobApi();
$account_id = 56; // int | Pulsar Cloud - Account ID of the user
$api_key = "api_key_example"; // string | Pulsar Cloud - API KEY of the user
$jobdata = new \Swagger\Client\Model\Jobdata(); // \Swagger\Client\Model\Jobdata | Body parameters structure.

try {
    $result = $api_instance->createJob($account_id, $api_key, $jobdata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateJobApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Pulsar Cloud - Account ID of the user |
 **api_key** | **string**| Pulsar Cloud - API KEY of the user |
 **jobdata** | [**\Swagger\Client\Model\Jobdata**](../Model/\Swagger\Client\Model\Jobdata.md)| Body parameters structure. |

### Return type

[**\Swagger\Client\Model\CreateJobResponse**](../Model/CreateJobResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

