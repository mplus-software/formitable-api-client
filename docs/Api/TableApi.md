# Swagger\Client\TableApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tableGet**](TableApi.md#tableget) | **GET** /api/v{version}/{restaurantUid}/tables | Get the list of active tables in the restaurant
[**tableGetByAreaId**](TableApi.md#tablegetbyareaid) | **GET** /api/v{version}/{restaurantUid}/tables/area/{areaId} | Get the list of active tables in the specified area
[**tableGetById**](TableApi.md#tablegetbyid) | **GET** /api/v{version}/{restaurantUid}/tables/{tableId} | Get the details of a specific table

# **tableGet**
> \Swagger\Client\Model\TableViewModel[] tableGet($restaurant_uid, $version)

Get the list of active tables in the restaurant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->tableGet($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\TableViewModel[]**](../Model/TableViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetByAreaId**
> \Swagger\Client\Model\TableViewModel[] tableGetByAreaId($restaurant_uid, $area_id, $version)

Get the list of active tables in the specified area

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$area_id = 56; // int | The identifier of the area.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->tableGetByAreaId($restaurant_uid, $area_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetByAreaId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **area_id** | **int**| The identifier of the area. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\TableViewModel[]**](../Model/TableViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetById**
> \Swagger\Client\Model\TableViewModel tableGetById($restaurant_uid, $table_id, $version)

Get the details of a specific table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$table_id = 56; // int | The identifier of the table
$version = "version_example"; // string | 

try {
    $result = $apiInstance->tableGetById($restaurant_uid, $table_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **table_id** | **int**| The identifier of the table |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\TableViewModel**](../Model/TableViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

