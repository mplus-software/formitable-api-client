# AreaViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The identifier of the area. | [optional] 
**pos_id** | **string** | The external reference of the Point of Sale system | [optional] 
**name** | **string** | The (internal) name of the area. Use the FT.Public.Api.ViewModels.AreaViewModel.DisplayName property to show the localized area name to guests. | [optional] 
**display_name** | **map[string,string]** | A localized list of displaynames of the area to show to guests. Two letter ISO language (nl/en) code. | [optional] 
**priority** | **int** | The order in which the areas are filled and shown to the guest. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

