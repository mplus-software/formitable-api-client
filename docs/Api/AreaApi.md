# Swagger\Client\AreaApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**areaGet**](AreaApi.md#areaget) | **GET** /api/v{version}/{restaurantUid}/areas | Get area list
[**areaGetById**](AreaApi.md#areagetbyid) | **GET** /api/v{version}/{restaurantUid}/areas/{areaId} | Get Area

# **areaGet**
> \Swagger\Client\Model\AreaViewModel[] areaGet($version, $restaurant_uid)

Get area list

Get the list of areas of the restaurant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->areaGet($version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\AreaViewModel[]**](../Model/AreaViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **areaGetById**
> \Swagger\Client\Model\AreaViewModel areaGetById($area_id, $version, $restaurant_uid)

Get Area

Get the details of a specific area.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area_id = 56; // int | 
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->areaGetById($area_id, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_id** | **int**|  |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\AreaViewModel**](../Model/AreaViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

