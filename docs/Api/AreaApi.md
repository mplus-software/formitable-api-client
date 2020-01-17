# Swagger\Client\AreaApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**areaGet**](AreaApi.md#areaget) | **GET** /api/v{version}/{restaurantUid}/areas | Get the list of areas of the restaurant
[**areaGetById**](AreaApi.md#areagetbyid) | **GET** /api/v{version}/{restaurantUid}/areas/{areaId} | Get the details of a specific area

# **areaGet**
> \Swagger\Client\Model\AreaViewModel[] areaGet($restaurant_uid, $version)

Get the list of areas of the restaurant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->areaGet($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\AreaViewModel[]**](../Model/AreaViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **areaGetById**
> \Swagger\Client\Model\AreaViewModel areaGetById($restaurant_uid, $area_id, $version)

Get the details of a specific area

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$area_id = 56; // int | 
$version = "version_example"; // string | 

try {
    $result = $apiInstance->areaGetById($restaurant_uid, $area_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **area_id** | **int**|  |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\AreaViewModel**](../Model/AreaViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

