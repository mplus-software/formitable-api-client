# Swagger\Client\AvailabilityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilityGetAvailabilityForDays**](AvailabilityApi.md#availabilitygetavailabilityfordays) | **GET** /api/v{version}/{restaurantUid}/availability/days/{from}/{days}/{numberOfPeople}/{language} | Get day availability
[**availabilityGetAvailabilityForMonth**](AvailabilityApi.md#availabilitygetavailabilityformonth) | **GET** /api/v{version}/{restaurantUid}/availability/month/{month}/{year}/{numberOfPeople}/{language} | Get month availability
[**availabilityGetFirstDateTime**](AvailabilityApi.md#availabilitygetfirstdatetime) | **GET** /api/v{version}/{restaurantUid}/availability/first/{numberOfPeople}/{language} | Get first availability
[**availabilityGetOpenTimesForDay**](AvailabilityApi.md#availabilitygetopentimesforday) | **GET** /api/v{version}/{restaurantUid}/availability/open/{date} | Get open times
[**availabilityGetTimesForDay**](AvailabilityApi.md#availabilitygettimesforday) | **GET** /api/v{version}/{restaurantUid}/availability/day/{date}/{numberOfPeople}/{language} | Get times for a day
[**availabilityIsAvailable**](AvailabilityApi.md#availabilityisavailable) | **GET** /api/v{version}/{restaurantUid}/availability/available/{dateTime}/{numberOfPeople} | Verify availability

# **availabilityGetAvailabilityForDays**
> \Swagger\Client\Model\BookingDatePublicViewModel[] availabilityGetAvailabilityForDays($from, $days, $number_of_people, $language, $version, $restaurant_uid)

Get day availability

Get availability for the requested number of days for the requested number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start day (yyyy-mm-dd)
$days = 56; // int | The number of days, should be between 1-42
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityGetAvailabilityForDays($from, $days, $number_of_people, $language, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetAvailabilityForDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The start day (yyyy-mm-dd) |
 **days** | **int**| The number of days, should be between 1-42 |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingDatePublicViewModel[]**](../Model/BookingDatePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetAvailabilityForMonth**
> \Swagger\Client\Model\BookingDatePublicViewModel[] availabilityGetAvailabilityForMonth($month, $year, $number_of_people, $language, $version, $restaurant_uid)

Get month availability

Get availability for a complete month for the requested number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$month = 56; // int | The month number (1-12)
$year = 56; // int | The year
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityGetAvailabilityForMonth($month, $year, $number_of_people, $language, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetAvailabilityForMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **int**| The month number (1-12) |
 **year** | **int**| The year |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingDatePublicViewModel[]**](../Model/BookingDatePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetFirstDateTime**
> \Swagger\Client\Model\BookingTimePublic availabilityGetFirstDateTime($number_of_people, $language, $version, $restaurant_uid)

Get first availability

Get the first date available for the requested number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityGetFirstDateTime($number_of_people, $language, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetFirstDateTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingTimePublic**](../Model/BookingTimePublic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetOpenTimesForDay**
> \Swagger\Client\Model\ShiftPublicViewModel[] availabilityGetOpenTimesForDay($date, $version, $restaurant_uid)

Get open times

Get the opening times of the restaurant for a given day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The day (yyyy-mm-dd)
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityGetOpenTimesForDay($date, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetOpenTimesForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The day (yyyy-mm-dd) |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\ShiftPublicViewModel[]**](../Model/ShiftPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityGetTimesForDay**
> \Swagger\Client\Model\BookingTimePublic[] availabilityGetTimesForDay($date, $number_of_people, $language, $version, $restaurant_uid)

Get times for a day

Get the times available for the requested number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The day of the booking (yyyy-mm-dd)
$number_of_people = 56; // int | The number of people that the booking consists of.
$language = "language_example"; // string | The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl)
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityGetTimesForDay($date, $number_of_people, $language, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityGetTimesForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The day of the booking (yyyy-mm-dd) |
 **number_of_people** | **int**| The number of people that the booking consists of. |
 **language** | **string**| The language of the information returned. Two letter ISO language code. Currently supported: English (en), Dutch (nl) |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingTimePublic[]**](../Model/BookingTimePublic.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availabilityIsAvailable**
> bool availabilityIsAvailable($date_time, $number_of_people, $version, $restaurant_uid)

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
$date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time of the booking (yyy-mm-ddTHH:mm)
$number_of_people = 56; // int | The number of people that the booking consists of
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->availabilityIsAvailable($date_time, $number_of_people, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityIsAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_time** | **\DateTime**| The date and time of the booking (yyy-mm-ddTHH:mm) |
 **number_of_people** | **int**| The number of people that the booking consists of |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

