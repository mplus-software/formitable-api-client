# Swagger\Client\RestaurantApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appRestaurantSettings**](RestaurantApi.md#apprestaurantsettings) | **GET** /api/v{version}/restaurants/{restaurantUid}/appsettings | Gets app settings of the restaurant. This can only be called by Apps.
[**restaurantGet**](RestaurantApi.md#restaurantget) | **GET** /api/v{version}/restaurants | Get restaurant list
[**restaurantGetByUid**](RestaurantApi.md#restaurantgetbyuid) | **GET** /api/v{version}/restaurants/{restaurantUid} | Get restaurant
[**restaurantGetReviewSummary**](RestaurantApi.md#restaurantgetreviewsummary) | **GET** /api/v{version}/restaurants/{restaurantUid}/reviewsummary/{dateFrom} | Get reviews summary
[**restaurantGetReviews**](RestaurantApi.md#restaurantgetreviews) | **GET** /api/v{version}/restaurants/{restaurantUid}/reviews | Get reviews

# **appRestaurantSettings**
> \Swagger\Client\Model\RestaurantAppSettingsViewModel appRestaurantSettings($restaurant_uid, $version)

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
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->appRestaurantSettings($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->appRestaurantSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\RestaurantAppSettingsViewModel**](../Model/RestaurantAppSettingsViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGet**
> \Swagger\Client\Model\RestaurantViewModel[] restaurantGet($version)

Get restaurant list

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

[**\Swagger\Client\Model\RestaurantViewModel[]**](../Model/RestaurantViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGetByUid**
> \Swagger\Client\Model\RestaurantViewModel restaurantGetByUid($restaurant_uid, $version)

Get restaurant

Get restaurant by uid if you are authorized to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->restaurantGetByUid($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGetByUid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\RestaurantViewModel**](../Model/RestaurantViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGetReviewSummary**
> \Swagger\Client\Model\ReviewSummaryViewModel restaurantGetReviewSummary($restaurant_uid, $version, $date_from)

Get reviews summary

Get a summary of reviews for this restaurant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RestaurantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date to check the reviews from to create the summary. This parameter is optional.

try {
    $result = $apiInstance->restaurantGetReviewSummary($restaurant_uid, $version, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGetReviewSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |
 **date_from** | **\DateTime**| The date to check the reviews from to create the summary. This parameter is optional. | [optional]

### Return type

[**\Swagger\Client\Model\ReviewSummaryViewModel**](../Model/ReviewSummaryViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restaurantGetReviews**
> \Swagger\Client\Model\ReviewViewModel[] restaurantGetReviews($restaurant_uid, $version)

Get reviews

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
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->restaurantGetReviews($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantApi->restaurantGetReviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\ReviewViewModel[]**](../Model/ReviewViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

