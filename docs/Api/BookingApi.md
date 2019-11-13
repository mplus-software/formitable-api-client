# Swagger\Client\BookingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookingCancel**](BookingApi.md#bookingcancel) | **DELETE** /api/v{version}/{restaurantUid}/booking/{uid} | Cancel booking
[**bookingCheckIn**](BookingApi.md#bookingcheckin) | **PUT** /api/v{version}/{restaurantUid}/booking/checkin/{uid} | Check-in guest
[**bookingCheckOut**](BookingApi.md#bookingcheckout) | **PUT** /api/v{version}/{restaurantUid}/booking/checkout/{uid} | Check-out guest
[**bookingCreate**](BookingApi.md#bookingcreate) | **POST** /api/v{version}/{restaurantUid}/booking | Create booking
[**bookingCreateMessage**](BookingApi.md#bookingcreatemessage) | **POST** /api/v{version}/{restaurantUid}/booking/{uid}/message | Create message
[**bookingCreateMessageToUser**](BookingApi.md#bookingcreatemessagetouser) | **POST** /api/v{version}/{restaurantUid}/booking/{uid}/messagetouser | Create message to user
[**bookingGetActivity**](BookingApi.md#bookinggetactivity) | **GET** /api/v{version}/{restaurantUid}/booking/{uid}/activity | Get booking activity
[**bookingGetByUid**](BookingApi.md#bookinggetbyuid) | **GET** /api/v{version}/{restaurantUid}/booking/{uid} | Get booking
[**bookingGetFutureBookings**](BookingApi.md#bookinggetfuturebookings) | **GET** /api/v{version}/{restaurantUid}/booking/{from}/{days} | Get future bookings
[**bookingGetMessages**](BookingApi.md#bookinggetmessages) | **GET** /api/v{version}/{restaurantUid}/booking/{uid}/message | Get booking messages
[**bookingUpdate**](BookingApi.md#bookingupdate) | **PUT** /api/v{version}/{restaurantUid}/booking/{uid} | Change booking

# **bookingCancel**
> bookingCancel($uid, $version, $restaurant_uid)

Cancel booking

Cancels the booking. When a booking cannot be canceled due to the cancellation policy of the restaurant; a 500 status is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $apiInstance->bookingCancel($uid, $version, $restaurant_uid);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCheckIn**
> \Swagger\Client\Model\BookingPublicViewModel bookingCheckIn($uid, $version, $restaurant_uid)

Check-in guest

Check-in a booking to notify that the guest has entered the restaurant. Call this method again to undo the check-in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingCheckIn($uid, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCheckOut**
> \Swagger\Client\Model\BookingPublicViewModel bookingCheckOut($uid, $version, $restaurant_uid)

Check-out guest

Check-out a booking to notify that the guest has leaved the restaurant. Call this method again to undo the check-out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingCheckOut($uid, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCheckOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreate**
> \Swagger\Client\Model\BookingPublicViewModel bookingCreate($version, $restaurant_uid, $body)

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
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 
$body = new \Swagger\Client\Model\BookingCreatePublicViewModel(); // \Swagger\Client\Model\BookingCreatePublicViewModel | The information of the restaurant.

try {
    $result = $apiInstance->bookingCreate($version, $restaurant_uid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |
 **body** | [**\Swagger\Client\Model\BookingCreatePublicViewModel**](../Model/BookingCreatePublicViewModel.md)| The information of the restaurant. | [optional]

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreateMessage**
> \Swagger\Client\Model\MessagePublicViewModel bookingCreateMessage($uid, $version, $restaurant_uid, $body)

Create message

Create a new user message that will be send to the restaurant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 
$body = new \Swagger\Client\Model\MessageCreatePublicViewModel(); // \Swagger\Client\Model\MessageCreatePublicViewModel | The message the user wants to send.

try {
    $result = $apiInstance->bookingCreateMessage($uid, $version, $restaurant_uid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreateMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |
 **body** | [**\Swagger\Client\Model\MessageCreatePublicViewModel**](../Model/MessageCreatePublicViewModel.md)| The message the user wants to send. | [optional]

### Return type

[**\Swagger\Client\Model\MessagePublicViewModel**](../Model/MessagePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingCreateMessageToUser**
> \Swagger\Client\Model\MessagePublicViewModel bookingCreateMessageToUser($uid, $version, $restaurant_uid, $body)

Create message to user

Create a new message from restaurant to user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 
$body = new \Swagger\Client\Model\MessageCreatePublicViewModel(); // \Swagger\Client\Model\MessageCreatePublicViewModel | The message you want to send to the user.

try {
    $result = $apiInstance->bookingCreateMessageToUser($uid, $version, $restaurant_uid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingCreateMessageToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |
 **body** | [**\Swagger\Client\Model\MessageCreatePublicViewModel**](../Model/MessageCreatePublicViewModel.md)| The message you want to send to the user. | [optional]

### Return type

[**\Swagger\Client\Model\MessagePublicViewModel**](../Model/MessagePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetActivity**
> \Swagger\Client\Model\BookingActivityPublicViewModel[] bookingGetActivity($uid, $version, $restaurant_uid)

Get booking activity

Get a list of activities that occurred for this booking.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingGetActivity($uid, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingActivityPublicViewModel[]**](../Model/BookingActivityPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetByUid**
> \Swagger\Client\Model\BookingPublicViewModel bookingGetByUid($uid, $version, $restaurant_uid)

Get booking

Get information about a specific booking.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingGetByUid($uid, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetByUid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetFutureBookings**
> \Swagger\Client\Model\BookingPublicViewModel[] bookingGetFutureBookings($from, $days, $version, $restaurant_uid)

Get future bookings

Get the list of future bookings in the given period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The first day of the selected period (yyyy-mm-dd). Should be equal or later than today.
$days = 56; // int | The number of days of the period, should be between 1-31
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingGetFutureBookings($from, $days, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetFutureBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The first day of the selected period (yyyy-mm-dd). Should be equal or later than today. |
 **days** | **int**| The number of days of the period, should be between 1-31 |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel[]**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingGetMessages**
> \Swagger\Client\Model\MessagePublicViewModel[] bookingGetMessages($uid, $version, $restaurant_uid)

Get booking messages

Get a list of messages from guest to restaurant and vice versa for this booking.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 

try {
    $result = $apiInstance->bookingGetMessages($uid, $version, $restaurant_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingGetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |

### Return type

[**\Swagger\Client\Model\MessagePublicViewModel[]**](../Model/MessagePublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookingUpdate**
> \Swagger\Client\Model\BookingPublicViewModel bookingUpdate($uid, $version, $restaurant_uid, $body)

Change booking

Update the details of a booking. Only specify the properties that need to change. Not specifying a property (or set it to null) will keep the current value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | The unique identifier of the booking.
$version = "version_example"; // string | 
$restaurant_uid = "restaurant_uid_example"; // string | 
$body = new \Swagger\Client\Model\BookingUpdatePublicViewModel(); // \Swagger\Client\Model\BookingUpdatePublicViewModel | The new details of the booking.

try {
    $result = $apiInstance->bookingUpdate($uid, $version, $restaurant_uid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->bookingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The unique identifier of the booking. |
 **version** | **string**|  |
 **restaurant_uid** | **string**|  |
 **body** | [**\Swagger\Client\Model\BookingUpdatePublicViewModel**](../Model/BookingUpdatePublicViewModel.md)| The new details of the booking. | [optional]

### Return type

[**\Swagger\Client\Model\BookingPublicViewModel**](../Model/BookingPublicViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

