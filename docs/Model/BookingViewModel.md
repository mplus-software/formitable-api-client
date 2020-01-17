# BookingViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | The unique identifier of the booking. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date and time the booking was created in the timezone of the restaurant. | [optional] 
**booking_date_time** | [**\DateTime**](\DateTime.md) | The date and time of the booking in the timezone of the restaurant. | [optional] 
**booking_duration** | **int** | The duration of the booking in minutes. | [optional] 
**check_in_date_time** | [**\DateTime**](\DateTime.md) | The date and time the guest has checked in in the timezone of the restaurant. | [optional] 
**number_of_people** | **int** | The number of people that the booking consists of. | [optional] 
**company_name** | **string** | The name of the company of the person making the reservation. | [optional] 
**title** | **string** | The gender of the person making the reservation. Values: MALE, FEMALE, FAMILY, NONE. | [optional] 
**first_name** | **string** | The first name of the person making the reservation. | [optional] 
**last_name** | **string** | The last name of the person making the reservation. | [optional] 
**telephone** | **string** | The telephone number of the person making the reservation. | [optional] 
**email** | **string** | The email address of the person making the reservation. | [optional] 
**comments** | **string** | The comments/remarks of the person making the reservation. | [optional] 
**culture** | **string** | The two letter ISO culture the booking was created in. | [optional] 
**company** | **bool** | {true} if this booking was created for a company; otherwise, {false}. | [optional] 
**newsletter** | **bool** | {true} if user has accepted marketing updates from restaurant; otherwise, {false}. | [optional] 
**status** | **string** | The status of the booking. Values: CREATED, ACCEPTED, CANCELLED, FAILED, EXPIRED | [optional] 
**color** | **string** | The color for this booking, only visible for the restaurant. | [optional] 
**pre_paid_amount** | **double** | The amount that was prepaid for ticket bookings. | [optional] 
**source** | **string** | The source of the reservation. | [optional] 
**external_reference_id** | **string** | The external reference ID of the reservation, based on the source. | [optional] 
**option_expires** | [**\DateTime**](\DateTime.md) | If the booking is an option, this property indicates when the option expires. A booking must also have status CREATED to still be an option. | [optional] 
**tickets** | [**\Swagger\Client\Model\TicketViewModel[]**](TicketViewModel.md) | The list of tickets that have been (pre)paid for this booking. | [optional] 
**payments** | [**\Swagger\Client\Model\OrderPaymentPublicViewModel[]**](OrderPaymentPublicViewModel.md) |  | [optional] 
**tables** | [**\Swagger\Client\Model\TableListViewModel[]**](TableListViewModel.md) | The list of tables that are assigned to this booking. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

