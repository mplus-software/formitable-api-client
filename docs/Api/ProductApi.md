# Swagger\Client\ProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productTicketGetTickets**](ProductApi.md#productticketgettickets) | **GET** /api/v{version}/{restaurantUid}/product/ticket | Get tickets
[**productTicketGetVouchers**](ProductApi.md#productticketgetvouchers) | **GET** /api/v{version}/{restaurantUid}/product/voucher | Get gift vouchers

# **productTicketGetTickets**
> \Swagger\Client\Model\TicketProductViewModel[] productTicketGetTickets($restaurant_uid, $version)

Get tickets

Get the list of ticket products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->productTicketGetTickets($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productTicketGetTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\TicketProductViewModel[]**](../Model/TicketProductViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTicketGetVouchers**
> \Swagger\Client\Model\VoucherProductViewModel[] productTicketGetVouchers($restaurant_uid, $version)

Get gift vouchers

Get the list of gift vouchers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$restaurant_uid = "restaurant_uid_example"; // string | The unique identifier of the restaurant.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->productTicketGetVouchers($restaurant_uid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productTicketGetVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **restaurant_uid** | **string**| The unique identifier of the restaurant. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\VoucherProductViewModel[]**](../Model/VoucherProductViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

