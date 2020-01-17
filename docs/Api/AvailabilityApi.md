# Swagger\Client\AvailabilityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilityGetAvailabilityForDays**](AvailabilityApi.md#availabilitygetavailabilityfordays) | **GET** /api/v{version}/{restaurantUid}/availability/days/{from}/{days}/{numberOfPeople}/{language} | Get days availability
[**availabilityGetAvailabilityForMonth**](AvailabilityApi.md#availabilitygetavailabilityformonth) | **GET** /api/v{version}/{restaurantUid}/availability/month/{month}/{year}/{numberOfPeople}/{language} | Get availability of month
[**availabilityGetFirstDateTime**](AvailabilityApi.md#availabilitygetfirstdatetime) | **GET** /api/v{version}/{restaurantUid}/availability/first/{numberOfPeople}/{language} | Get first available date
[**availabilityGetOpenTimesForDay**](AvailabilityApi.md#availabilitygetopentimesforday) | **GET** /api/v{version}/{restaurantUid}/availability/open/{date} | Get opening times
[**availabilityGetTimesForDay**](AvailabilityApi.md#availabilitygettimesforday) | **GET** /api/v{version}/{restaurantUid}/availability/day/{date}/{numberOfPeople}/{language} | Get times of a day
[**availabilityIsAvailable**](AvailabilityApi.md#availabilityisavailable) | **GET** /api/v{version}/{restaurantUid}/availability/available/{dateTime}/{numberOfPeople} | Verify availability

# **availabilityGetAvailabilityForDays**
> \Swagger\Client\Model\BookingDateViewModel[] availabilityGetAvailabilityForDays($restaurant_uid, $from, $days, $number_of_people, $language, $version, $product_uid)

Get days availability

Get availability for the requested number of days for the requested number of people

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start day (yyyy-mm-dd)
$days = 56; // int | The number of days, should be between 1-42
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$product_uid = "product_uid_example"; // string | Optional. The ticket product identifier. If specified, returns availability for this product.

try {
    $result = $apiInstance->availabilityGetAvailabilityForDays($restaurant_uid, $from, $days, $number_of_people, $language, $version, $product_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetAvailabilityForDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **from** | **\DateTime**| The start day (yyyy-mm-dd) |
 **days** | **int**| The number of days, should be between 1-42 |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **product_uid** | **string**| Optional. The ticket product identifier. If specified, returns availability for this product. | [optional]

### Return type

[**\Swagger\Client\Model\BookingDateViewModel[]**](../Model/BookingDateViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetAvailabilityForMonth**
> \Swagger\Client\Model\BookingDateViewModel[] availabilityGetAvailabilityForMonth($restaurant_uid, $month, $year, $number_of_people, $language, $version, $product_uid)

Get availability of month

Get availability for a complete month for the requested number of people

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$month = 56; // int | The month number (1-12)
$year = 56; // int | The year
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$product_uid = "product_uid_example"; // string | Optional. The ticket product identifier. If specified, returns availability for this product.

try {
    $result = $apiInstance->availabilityGetAvailabilityForMonth($restaurant_uid, $month, $year, $number_of_people, $language, $version, $product_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetAvailabilityForMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **month** | **int**| The month number (1-12) |
 **year** | **int**| The year |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **product_uid** | **string**| Optional. The ticket product identifier. If specified, returns availability for this product. | [optional]

### Return type

[**\Swagger\Client\Model\BookingDateViewModel[]**](../Model/BookingDateViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetFirstDateTime**
> \Swagger\Client\Model\BookingTimePublic availabilityGetFirstDateTime($restaurant_uid, $number_of_people, $language, $version, $product_uid)

Get first available date

Get the first date available for the requested number of people

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$product_uid = "product_uid_example"; // string | Optional. The ticket product identifier. If specified, returns availability for this product.

try {
    $result = $apiInstance->availabilityGetFirstDateTime($restaurant_uid, $number_of_people, $language, $version, $product_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetFirstDateTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **product_uid** | **string**| Optional. The ticket product identifier. If specified, returns availability for this product. | [optional]

### Return type

[**\Swagger\Client\Model\BookingTimePublic**](../Model/BookingTimePublic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetOpenTimesForDay**
> \Swagger\Client\Model\ShiftViewModel[] availabilityGetOpenTimesForDay($restaurant_uid, $date, $version, $product_uid)

Get opening times

Get the opening times of the restaurant for a given day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The day (yyyy-mm-dd)
$version = "version_example"; // string | 
$product_uid = "product_uid_example"; // string | Optional. The ticket product identifier. If specified, returns when this product is available.

try {
    $result = $apiInstance->availabilityGetOpenTimesForDay($restaurant_uid, $date, $version, $product_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetOpenTimesForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **date** | **\DateTime**| The day (yyyy-mm-dd) |
 **version** | **string**|  |
 **product_uid** | **string**| Optional. The ticket product identifier. If specified, returns when this product is available. | [optional]

### Return type

[**\Swagger\Client\Model\ShiftViewModel[]**](../Model/ShiftViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetTimesForDay**
> \Swagger\Client\Model\BookingTimePublic[] availabilityGetTimesForDay($restaurant_uid, $date, $number_of_people, $language, $version, $product_uid)

Get times of a day

Get the times available for the requested number of people

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The day of the booking (yyyy-mm-dd)
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$product_uid = "product_uid_example"; // string | Optional. The ticket product identifier. If specified, returns availability for this product.

try {
    $result = $apiInstance->availabilityGetTimesForDay($restaurant_uid, $date, $number_of_people, $language, $version, $product_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetTimesForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **date** | **\DateTime**| The day of the booking (yyyy-mm-dd) |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **product_uid** | **string**| Optional. The ticket product identifier. If specified, returns availability for this product. | [optional]

### Return type

[**\Swagger\Client\Model\BookingTimePublic[]**](../Model/BookingTimePublic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityIsAvailable**
> bool availabilityIsAvailable($restaurant_uid, $date_time, $number_of_people, $version)

Verify availability

Verify that a booking time is available for the number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time of the booking (yyy-mm-ddTHH:mm)
$number_of_people = 56; // int | The number of people that the booking consists of
$version = "version_example"; // string | 

try {
    $result = $apiInstance->availabilityIsAvailable($restaurant_uid, $date_time, $number_of_people, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityIsAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **date_time** | **\DateTime**| The date and time of the booking (yyy-mm-ddTHH:mm) |
 **number_of_people** | **int**| The number of people that the booking consists of |
 **version** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

