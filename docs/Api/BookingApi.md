# Swagger\Client\BookingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingCancel**](BookingApi.md#bookingcancel) | **DELETE** /api/v{version}/{restaurantUid}/booking/{uid} | Cancel booking
[**bookingCheckIn**](BookingApi.md#bookingcheckin) | **PUT** /api/v{version}/{restaurantUid}/booking/checkin/{uid} | Check-in booking
[**bookingCheckOut**](BookingApi.md#bookingcheckout) | **PUT** /api/v{version}/{restaurantUid}/booking/checkout/{uid} | Check-out booking
[**bookingCreate**](BookingApi.md#bookingcreate) | **POST** /api/v{version}/{restaurantUid}/booking | Create booking
[**bookingCreateMessage**](BookingApi.md#bookingcreatemessage) | **POST** /api/v{version}/{restaurantUid}/booking/{uid}/message | Create user message
[**bookingCreateMessageToUser**](BookingApi.md#bookingcreatemessagetouser) | **POST** /api/v{version}/{restaurantUid}/booking/{uid}/messagetouser | Create restaurant message
[**bookingGetBookingByExternalReferenceId**](BookingApi.md#bookinggetbookingbyexternalreferenceid) | **GET** /api/v{version}/{restaurantUid}/booking/external/{source}/{externalReferenceId} | Get a booking using the external source and reference ID.
[**bookingGetByUid**](BookingApi.md#bookinggetbyuid) | **GET** /api/v{version}/{restaurantUid}/booking/{uid} | Get booking
[**bookingGetFutureBookings**](BookingApi.md#bookinggetfuturebookings) | **GET** /api/v{version}/{restaurantUid}/booking/{from}/{days} | Get future bookings
[**bookingGetMessages**](BookingApi.md#bookinggetmessages) | **GET** /api/v{version}/{restaurantUid}/booking/{uid}/message | Get messages of booking
[**bookingUpdate**](BookingApi.md#bookingupdate) | **PUT** /api/v{version}/{restaurantUid}/booking/{uid} | Update booking

# **bookingCancel**
> bookingCancel($restaurant_uid, $uid, $version)

Cancel booking

Cancels the booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 

try {
    $apiInstance->bookingCancel($restaurant_uid, $uid, $version);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCheckIn**
> \Swagger\Client\Model\BookingViewModel bookingCheckIn($restaurant_uid, $uid, $version)

Check-in booking

Check-in a booking to notify that the guest has entered the restaurant. Call this method again to undo the check-in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->bookingCheckIn($restaurant_uid, $uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCheckOut**
> \Swagger\Client\Model\BookingViewModel bookingCheckOut($restaurant_uid, $uid, $version, $body)

Check-out booking

Check-out a booking to notify that the guest has left the restaurant. Call this method again to undo the check-out

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\PosOrderData(); // \Swagger\Client\Model\PosOrderData | Optional order info from POS.

try {
    $result = $apiInstance->bookingCheckOut($restaurant_uid, $uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCheckOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **body** | [**\Swagger\Client\Model\PosOrderData**](../Model/PosOrderData.md)| Optional order info from POS. | [optional]

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreate**
> \Swagger\Client\Model\BookingViewModel bookingCreate($restaurant_uid, $version, $body)

Create booking

Create a new booking for the restaurant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\BookingCreateViewModel(); // \Swagger\Client\Model\BookingCreateViewModel | The information of the restaurant.

try {
    $result = $apiInstance->bookingCreate($restaurant_uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |
 **body** | [**\Swagger\Client\Model\BookingCreateViewModel**](../Model/BookingCreateViewModel.md)| The information of the restaurant. | [optional]

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreateMessage**
> \Swagger\Client\Model\MessageViewModel bookingCreateMessage($restaurant_uid, $uid, $version, $body)

Create user message

Create a new user message for the restaurant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\MessageCreateViewModel(); // \Swagger\Client\Model\MessageCreateViewModel | The message the user wants to send.

try {
    $result = $apiInstance->bookingCreateMessage($restaurant_uid, $uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreateMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **body** | [**\Swagger\Client\Model\MessageCreateViewModel**](../Model/MessageCreateViewModel.md)| The message the user wants to send. | [optional]

### Return type

[**\Swagger\Client\Model\MessageViewModel**](../Model/MessageViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreateMessageToUser**
> \Swagger\Client\Model\MessageViewModel bookingCreateMessageToUser($restaurant_uid, $uid, $version, $body)

Create restaurant message

Create a new message from restaurant to user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\MessageCreateViewModel(); // \Swagger\Client\Model\MessageCreateViewModel | The message you want to send to the user.

try {
    $result = $apiInstance->bookingCreateMessageToUser($restaurant_uid, $uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreateMessageToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **body** | [**\Swagger\Client\Model\MessageCreateViewModel**](../Model/MessageCreateViewModel.md)| The message you want to send to the user. | [optional]

### Return type

[**\Swagger\Client\Model\MessageViewModel**](../Model/MessageViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetBookingByExternalReferenceId**
> \Swagger\Client\Model\BookingViewModel bookingGetBookingByExternalReferenceId($restaurant_uid, $source, $external_reference_id, $version)

Get a booking using the external source and reference ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$source = "source_example"; // string | The name of the external system.
$external_reference_id = "external_reference_id_example"; // string | The identifier of the booking in the external system.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->bookingGetBookingByExternalReferenceId($restaurant_uid, $source, $external_reference_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetBookingByExternalReferenceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **source** | **string**| The name of the external system. |
 **external_reference_id** | **string**| The identifier of the booking in the external system. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetByUid**
> \Swagger\Client\Model\BookingViewModel bookingGetByUid($restaurant_uid, $uid, $version)

Get booking

Get information about a specific booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->bookingGetByUid($restaurant_uid, $uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetByUid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetFutureBookings**
> \Swagger\Client\Model\BookingViewModel[] bookingGetFutureBookings($restaurant_uid, $from, $days, $version)

Get future bookings

Get the list of future bookings in the given period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The first day of the selected period (yyyy-mm-dd). Should be equal or later than today.
$days = 56; // int | The number of days of the period, should be between 1-31
$version = "version_example"; // string | 

try {
    $result = $apiInstance->bookingGetFutureBookings($restaurant_uid, $from, $days, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetFutureBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **from** | **\DateTime**| The first day of the selected period (yyyy-mm-dd). Should be equal or later than today. |
 **days** | **int**| The number of days of the period, should be between 1-31 |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingViewModel[]**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetMessages**
> \Swagger\Client\Model\MessageViewModel[] bookingGetMessages($restaurant_uid, $uid, $version)

Get messages of booking

Get a list of messages that occurred for this booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->bookingGetMessages($restaurant_uid, $uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\MessageViewModel[]**](../Model/MessageViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingUpdate**
> \Swagger\Client\Model\BookingViewModel bookingUpdate($restaurant_uid, $uid, $version, $body)

Update booking

Update the details of a booking. Only specify the properties that need to change. Not specifying a property (or set it to null) will keep the current value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\BookingUpdateViewModel(); // \Swagger\Client\Model\BookingUpdateViewModel | The new details of the booking.

try {
    $result = $apiInstance->bookingUpdate($restaurant_uid, $uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **body** | [**\Swagger\Client\Model\BookingUpdateViewModel**](../Model/BookingUpdateViewModel.md)| The new details of the booking. | [optional]

### Return type

[**\Swagger\Client\Model\BookingViewModel**](../Model/BookingViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

