# Swagger\Client\RestaurantApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appRestaurantSettings**](RestaurantApi.md#apprestaurantsettings) | **GET** /api/v{version}/restaurants/{restaurantUid}/appsettings | Get app settings
[**restaurantGet**](RestaurantApi.md#restaurantget) | **GET** /api/v{version}/restaurants | Restaurant list
[**restaurantGetByUid**](RestaurantApi.md#restaurantgetbyuid) | **GET** /api/v{version}/restaurants/{restaurantUid} | Get restaurant
[**restaurantGetReviews**](RestaurantApi.md#restaurantgetreviews) | **GET** /api/v{version}/restaurants/{restaurantUid}/reviews | Restaurant reviews list

# **appRestaurantSettings**
> \Swagger\Client\Model\RestaurantAppSettingsViewModel appRestaurantSettings($version, $restaurant_uid)

Get app settings

Gets app settings of the restaurant. This can only be called by Apps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->appRestaurantSettings($version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->appRestaurantSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\RestaurantAppSettingsViewModel**](../Model/RestaurantAppSettingsViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGet**
> \Swagger\Client\Model\RestaurantPublicViewModel[] restaurantGet($version)

Restaurant list

Get the list of restaurants you are authorized to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 

try {
    $result = $apiInstance->restaurantGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\RestaurantPublicViewModel[]**](../Model/RestaurantPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGetByUid**
> \Swagger\Client\Model\RestaurantPublicViewModel restaurantGetByUid($version, $restaurant_uid)

Get restaurant

Get restaurant by unique identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->restaurantGetByUid($version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGetByUid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\RestaurantPublicViewModel**](../Model/RestaurantPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGetReviews**
> \Swagger\Client\Model\ReviewPublicViewModel[] restaurantGetReviews($version, $restaurant_uid)

Restaurant reviews list

Get a list of reviews for this restaurant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->restaurantGetReviews($version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGetReviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\ReviewPublicViewModel[]**](../Model/ReviewPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

