# Swagger\Client\ConfigurationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configForDay**](ConfigurationApi.md#configforday) | **GET** /api/v{version}/{restaurantUid}/configuration/day/{date} | Get configuration of a day
[**configForDayAndPeople**](ConfigurationApi.md#configfordayandpeople) | **GET** /api/v{version}/{restaurantUid}/configuration/{dateTime}/{numberOfPeople} | Get configuration
[**configsBatch**](ConfigurationApi.md#configsbatch) | **POST** /api/v{version}/{restaurantUid}/configuration/batch | Get batch of configurations
[**configsForMonth**](ConfigurationApi.md#configsformonth) | **GET** /api/v{version}/{restaurantUid}/configuration/month/{year}/{month} | Get configuration of month

# **configForDay**
> \Swagger\Client\Model\Configuration configForDay($restaurant_uid, $date, $version)

Get configuration of a day

Get configuration of a day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date
$version = "version_example"; // string | 

try {
    $result = $apiInstance->configForDay($restaurant_uid, $date, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configForDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **date** | **\DateTime**| The date |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configForDayAndPeople**
> \Swagger\Client\Model\Configuration configForDayAndPeople($restaurant_uid, $date_time, $number_of_people, $version)

Get configuration

Get configuration of the day and for the specified number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date and time of the booking (yyyy-mm-ddTHH:mm)
$number_of_people = 56; // int | The number of people that the booking consists of
$version = "version_example"; // string | 

try {
    $result = $apiInstance->configForDayAndPeople($restaurant_uid, $date_time, $number_of_people, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configForDayAndPeople: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **date_time** | **\DateTime**| The date and time of the booking (yyyy-mm-ddTHH:mm) |
 **number_of_people** | **int**| The number of people that the booking consists of |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configsBatch**
> map[string,\Swagger\Client\Model\Configuration] configsBatch($restaurant_uid, $version, $body)

Get batch of configurations

Get configuration of the day and for the specified number of people.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 
$body = new \Swagger\Client\Model\map(); // map[string,int[]] | A list of dates and party sizes in the form of {"YYYY-MM-dd": [1,2,3]}

try {
    $result = $apiInstance->configsBatch($restaurant_uid, $version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |
 **body** | [**map[string,int[]]**](../Model/map.md)| A list of dates and party sizes in the form of {&quot;YYYY-MM-dd&quot;: [1,2,3]} | [optional]

### Return type

[**map[string,\Swagger\Client\Model\Configuration]**](../Model/Configuration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configsForMonth**
> \Swagger\Client\Model\Configuration[] configsForMonth($restaurant_uid, $year, $month, $version)

Get configuration of month

Get configuration of the month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$year = 56; // int | The year
$month = 56; // int | The month
$version = "version_example"; // string | 

try {
    $result = $apiInstance->configsForMonth($restaurant_uid, $year, $month, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configsForMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **year** | **int**| The year |
 **month** | **int**| The month |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

