# Swagger\Client\TableApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tableGet**](TableApi.md#tableget) | **GET** /api/v{version}/{restaurantUid}/tables | Get table list
[**tableGetByAreaId**](TableApi.md#tablegetbyareaid) | **GET** /api/v{version}/{restaurantUid}/tables/area/{areaId} | Get area table list
[**tableGetById**](TableApi.md#tablegetbyid) | **GET** /api/v{version}/{restaurantUid}/tables/{tableId} | Get table

# **tableGet**
> \Swagger\Client\Model\TablePublicViewModel[] tableGet($version, $restaurant_uid)

Get table list

Get the list of active tables in the restaurant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->tableGet($version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\TablePublicViewModel[]**](../Model/TablePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetByAreaId**
> \Swagger\Client\Model\TablePublicViewModel[] tableGetByAreaId($area_id, $version, $restaurant_uid)

Get area table list

Get the list of active tables in the specified area.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area_id = 56; // int | The identifier of the area.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->tableGetByAreaId($area_id, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetByAreaId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_id** | **int**| The identifier of the area. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\TablePublicViewModel[]**](../Model/TablePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tableGetById**
> \Swagger\Client\Model\TablePublicViewModel tableGetById($table_id, $version, $restaurant_uid)

Get table

Get the details of a specific table.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$table_id = 56; // int | The identifier of the table
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->tableGetById($table_id, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->tableGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table_id** | **int**| The identifier of the table |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\TablePublicViewModel**](../Model/TablePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

