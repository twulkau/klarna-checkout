# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Unique order ID that will be used for the entire lifecycle of the order. (max 255 characters) | [optional] 
**name** | **string** | The merchant name (max 255 characters). | [optional] 
**purchase_country** | **string** | purchase country of the merchant&#39;s store. The format to be used is ISO 3166 alpha-2. Eg: GB, SE, DE, US, etc.   Note: purchase country and currency need to match the defined merchant configuration. For global configuration read this https://developers.klarna.com/documentation/klarna-checkout/kco-global/ | 
**purchase_currency** | **string** | purchase currency of the merchant&#39;s store. The format to be used is ISO 4217. Eg: USD, EUR, SEK, GBP, etc.  Note: purchase country and currency need to match the defined merchant configuration. For global configuration read this https://developers.klarna.com/documentation/klarna-checkout/kco-global/ | 
**locale** | **string** | Used to define the language and region of the customer. RFC 1766 customer&#39;s locale. | 
**status** | **string** | The current status of the order. The status will be ‘incomplete’ until the customer has been successfully authorized. | [optional] 
**billing_address** | [**\Klarna\Model\Address**](Address.md) | Provide the billing address of the customer, if you have collected already. If not, then Klarna will collect the details inside the Klarna Checkout iFrame before authorization. The billing address is the &#39;home address&#39; where the credit cards and bank accounts are registered under the customer&#39;s name.  Note: Once the customer has provided any data in the checkout iframe, updates to this object will be ignored (without generating an error). | [optional] 
**shipping_address** | [**\Klarna\Model\Address**](Address.md) | Provide the shipping address of the customer, if you have collected already. Unless the customer has explicitly chosen to enter a separate shipping address, this is a clone of billing_address. The customer has the possibility of changing the shipping address inside the Klarna checkout. You will be notified about the change either through the merchant URLs that you provide or through Javascript callbacks. | [optional] 
**order_amount** | **int** | \&quot;Total amount of the order including tax and any available discounts. The value should be in non-negative minor units.  Example: 25 Euros should be 2500.\&quot; | 
**order_tax_amount** | **int** | Total tax amount of the order. The value should be in non-negative minor units.  Example: 25 Euros should be 2500. | 
**order_lines** | [**\Klarna\Model\OrderLine[]**](OrderLine.md) | An array containing list of line items that are part of this order. Maximum of 1000 line items could be processed in a single order. | 
**customer** | [**\Klarna\Model\Customer**](Customer.md) | Object to provide the details of the customer making the payment. | [optional] 
**merchant_urls** | [**\Klarna\Model\MerchantUrls**](MerchantUrls.md) | Used to send in the different merchant URLs that Klarna needs at different stages of the process.  Note: it should be HTTPS. Also, it can have {checkout.order.id}, {checkout.order.url} and/or {checkout.order.uri} and KCO will replace it accordingly. | 
**html_snippet** | **string** | The HTML snippet that is used to render the checkout in an iframe. | [optional] 
**merchant_reference1** | **string** | Used for storing merchant&#39;s internal order number or other reference. If set, will be shown on the confirmation page as \&quot;order number\&quot; . The value is also available in the settlement files. (max 255 characters). Example: \&quot;45aa52f387871e3a210645d4\&quot; | [optional] 
**merchant_reference2** | **string** | Used for storing merchant&#39;s internal order number or other reference. The value is available in the settlement files. (max 255 characters). Example: \&quot;45aa52f387871e3a210645d4\&quot; | [optional] 
**started_at** | [**\DateTime**](\DateTime.md) | ISO 8601 datetime. The date and time when the order has been created. The format will be as follows: \&quot;yyyy-mm-ddThh:mm:ssZ\&quot; | [optional] 
**completed_at** | [**\DateTime**](\DateTime.md) | ISO 8601 datetime. The date and time when the order has been completed. The format will be as follows: \&quot;yyyy-mm-ddThh:mm:ssZ\&quot; | [optional] 
**last_modified_at** | [**\DateTime**](\DateTime.md) | ISO 8601 datetime. The date and time when the order was last modified. The format will be as follows: \&quot;yyyy-mm-ddThh:mm:ssZ\&quot; | [optional] 
**options** | [**\Klarna\Model\Options**](Options.md) | Customization options for the order. | [optional] 
**attachment** | [**\Klarna\Model\Attachment**](Attachment.md) | Extra Merchant Data (additional information) required for additional risk check. The required parameters will be described in the appendix of contract agreement. | [optional] 
**external_payment_methods** | [**\Klarna\Model\PaymentProvider[]**](PaymentProvider.md) | List of external payment methods that will be displayed as part of payment methods in the checkout. | [optional] 
**external_checkouts** | [**\Klarna\Model\PaymentProvider[]**](PaymentProvider.md) | List of external checkouts that will be displayed as part of payment methods in the checkout. | [optional] 
**shipping_countries** | **string[]** | List of allowed shipping countries for this order in ISO-3166 alpha-2 format.  If specified, the customer will be able to change the shipping country in the checkout and you will be notified through ‘address_update’ callback or the ‘shipping_address_change’ javascript event.   If not specified then the default value will be the purchase country.  Example: look at billing_countries example. | [optional] 
**shipping_options** | [**\Klarna\Model\ShippingOption[]**](ShippingOption.md) | A list of shipping options available for this order. | [optional] 
**merchant_data** | **string** | Pass through field to send any information about the order to be used later for reference while retrieving the order details (max 6000 characters). | [optional] 
**gui** | [**\Klarna\Model\Gui**](Gui.md) | The gui object. | [optional] 
**merchant_requested** | [**\Klarna\Model\MerchantRequested**](MerchantRequested.md) | Provides information about the state of the fields requested by the merchant. | [optional] 
**selected_shipping_option** | [**\Klarna\Model\ShippingOption**](ShippingOption.md) | Current shipping options selected by the customer. | [optional] 
**recurring** | **bool** | Indicates whether this purchase will create a token that can be used by the merchant to create recurring purchases. This must be enabled for the merchant to use. Default: false  Depending on specified country, recurring could be used for the following payment methods: Pay Later, Direct Debit, Card. | [optional] [default to false]
**recurring_token** | **string** | Token to be used when creating recurring orders. | [optional] 
**recurring_description** | **string** | Description to be added to the recurring order. | [optional] 
**billing_countries** | **string[]** | List of allowed billing countries for this order. If specified, the customer will be able to change the billing country in the checkout and you will be notified through ‘country_change’ callback or the ‘billing_address_change’ javascript event. If not specified then the default value will be the purchase country.  Example: [\&quot;AD\&quot;, \&quot;AE\&quot;, \&quot;AG\&quot;, \&quot;AI\&quot;, \&quot;AL\&quot;, \&quot;AM\&quot;, \&quot;AQ\&quot;, \&quot;AR\&quot;, \&quot;AS\&quot;, \&quot;AT\&quot;, \&quot;AU\&quot;, \&quot;AW\&quot;, \&quot;AX\&quot;, \&quot;AZ\&quot;, \&quot;BA\&quot;, \&quot;BB\&quot;, \&quot;BD\&quot;, \&quot;BE\&quot;, \&quot;BF\&quot;, \&quot;BG\&quot;, \&quot;BH\&quot;, \&quot;BJ\&quot;, \&quot;BL\&quot;, \&quot;BM\&quot;, \&quot;BN\&quot;, \&quot;BO\&quot;, \&quot;BQ\&quot;, \&quot;BR\&quot;, \&quot;BS\&quot;, \&quot;BT\&quot;, \&quot;BW\&quot;, \&quot;BY\&quot;, \&quot;BZ\&quot;, \&quot;CA\&quot;, \&quot;CF\&quot;, \&quot;CH\&quot;, \&quot;CI\&quot;, \&quot;CK\&quot;, \&quot;CL\&quot;, \&quot;CM\&quot;, \&quot;CN\&quot;, \&quot;CO\&quot;, \&quot;CR\&quot;, \&quot;CU\&quot;, \&quot;CV\&quot;, \&quot;CW\&quot;, \&quot;CX\&quot;, \&quot;CY\&quot;, \&quot;CZ\&quot;, \&quot;DE\&quot;, \&quot;DJ\&quot;, \&quot;DK\&quot;, \&quot;DM\&quot;, \&quot;DO\&quot;, \&quot;DZ\&quot;, \&quot;EC\&quot;, \&quot;EE\&quot;, \&quot;EG\&quot;, \&quot;ER\&quot;, \&quot;ES\&quot;, \&quot;ET\&quot;, \&quot;FI\&quot;, \&quot;FJ\&quot;, \&quot;FK\&quot;, \&quot;FM\&quot;, \&quot;FO\&quot;, \&quot;FR\&quot;, \&quot;GA\&quot;, \&quot;GB\&quot;, \&quot;GD\&quot;, \&quot;GE\&quot;, \&quot;GF\&quot;, \&quot;GG\&quot;, \&quot;GH\&quot;, \&quot;GI\&quot;, \&quot;GL\&quot;, \&quot;GM\&quot;, \&quot;GN\&quot;, \&quot;GP\&quot;, \&quot;GR\&quot;, \&quot;GS\&quot;, \&quot;GT\&quot;, \&quot;GU\&quot;, \&quot;GY\&quot;, \&quot;HK\&quot;, \&quot;HN\&quot;, \&quot;HR\&quot;, \&quot;HU\&quot;, \&quot;ID\&quot;, \&quot;IE\&quot;, \&quot;IL\&quot;, \&quot;IM\&quot;, \&quot;IN\&quot;, \&quot;IS\&quot;, \&quot;IT\&quot;, \&quot;JE\&quot;, \&quot;JM\&quot;, \&quot;JO\&quot;, \&quot;JP\&quot;, \&quot;KE\&quot;, \&quot;KG\&quot;, \&quot;KI\&quot;, \&quot;KM\&quot;, \&quot;KN\&quot;, \&quot;KR\&quot;, \&quot;KW\&quot;, \&quot;KY\&quot;, \&quot;KZ\&quot;, \&quot;LA\&quot;, \&quot;LA\&quot;, \&quot;LB\&quot;, \&quot;LC\&quot;, \&quot;LI\&quot;, \&quot;LK\&quot;, \&quot;LR\&quot;, \&quot;LS\&quot;, \&quot;LT\&quot;, \&quot;LU\&quot;, \&quot;LV\&quot;, \&quot;MA\&quot;, \&quot;MC\&quot;, \&quot;MD\&quot;, \&quot;ME\&quot;, \&quot;MF\&quot;, \&quot;MG\&quot;, \&quot;MH\&quot;, \&quot;MK\&quot;, \&quot;MK\&quot;, \&quot;ML\&quot;, \&quot;MM\&quot;, \&quot;MN\&quot;, \&quot;MO\&quot;, \&quot;MP\&quot;, \&quot;MQ\&quot;, \&quot;MR\&quot;, \&quot;MT\&quot;, \&quot;MU\&quot;, \&quot;MV\&quot;, \&quot;MW\&quot;, \&quot;MX\&quot;, \&quot;MY\&quot;, \&quot;MZ\&quot;, \&quot;NA\&quot;, \&quot;NC\&quot;, \&quot;NE\&quot;, \&quot;NF\&quot;, \&quot;NG\&quot;, \&quot;NI\&quot;, \&quot;NL\&quot;, \&quot;NO\&quot;, \&quot;NP\&quot;, \&quot;NR\&quot;, \&quot;NU\&quot;, \&quot;NZ\&quot;, \&quot;OM\&quot;, \&quot;PA\&quot;, \&quot;PE\&quot;, \&quot;PF\&quot;, \&quot;PG\&quot;, \&quot;PH\&quot;, \&quot;PK\&quot;, \&quot;PL\&quot;, \&quot;PM\&quot;, \&quot;PR\&quot;, \&quot;PS\&quot;, \&quot;PT\&quot;, \&quot;PW\&quot;, \&quot;PY\&quot;, \&quot;QA\&quot;, \&quot;RE\&quot;, \&quot;RO\&quot;, \&quot;RS\&quot;, \&quot;RU\&quot;, \&quot;RW\&quot;, \&quot;SA\&quot;, \&quot;SB\&quot;, \&quot;SC\&quot;, \&quot;SE\&quot;, \&quot;SG\&quot;, \&quot;SH\&quot;, \&quot;SI\&quot;, \&quot;SJ\&quot;, \&quot;SK\&quot;, \&quot;SL\&quot;, \&quot;SM\&quot;, \&quot;SN\&quot;, \&quot;SR\&quot;, \&quot;ST\&quot;, \&quot;SV\&quot;, \&quot;SX\&quot;, \&quot;SZ\&quot;, \&quot;TC\&quot;, \&quot;TF\&quot;, \&quot;TG\&quot;, \&quot;TH\&quot;, \&quot;TJ\&quot;, \&quot;TK\&quot;, \&quot;TL\&quot;, \&quot;TO\&quot;, \&quot;TR\&quot;, \&quot;TT\&quot;, \&quot;TV\&quot;, \&quot;TW\&quot;, \&quot;TZ\&quot;, \&quot;UA\&quot;, \&quot;UG\&quot;, \&quot;UM\&quot;, \&quot;US\&quot;, \&quot;UY\&quot;, \&quot;UZ\&quot;, \&quot;VA\&quot;, \&quot;VC\&quot;, \&quot;VG\&quot;, \&quot;VI\&quot;, \&quot;VN\&quot;, \&quot;VU\&quot;, \&quot;WF\&quot;, \&quot;WS\&quot;, \&quot;XK\&quot;, \&quot;YT\&quot;, \&quot;ZA\&quot;, \&quot;ZM\&quot;, \&quot;ZW\&quot;]\&quot; | [optional] 
**tags** | **string[]** | \&quot;Extra information added to the order.  Example: [\&quot;dangerous_goods\&quot;, \&quot;bulky\&quot;] | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

