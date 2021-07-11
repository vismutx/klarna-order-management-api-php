<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vismutx\KlarnaOrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Order Managment API
 *
 * API to handle order lifecycle
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vismutx\KlarnaOrderManagementApiPhp\Model;

use \ArrayAccess;
use \Vismutx\KlarnaOrderManagementApiPhp\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  Vismutx\KlarnaOrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
        'status' => 'string',
        'fraud_status' => 'string',
        'order_amount' => 'int',
        'original_order_amount' => 'int',
        'captured_amount' => 'int',
        'refunded_amount' => 'int',
        'remaining_authorized_amount' => 'int',
        'purchase_currency' => 'string',
        'locale' => 'string',
        'order_lines' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\OrderLine[]',
        'merchant_reference1' => 'string',
        'merchant_reference2' => 'string',
        'klarna_reference' => 'string',
        'customer' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\Customer',
        'billing_address' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\Address',
        'shipping_address' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\Address',
        'created_at' => '\DateTime',
        'purchase_country' => 'string',
        'expires_at' => '\DateTime',
        'captures' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\Capture[]',
        'refunds' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\Refund[]',
        'merchant_data' => 'string',
        'initial_payment_method' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\InitialPaymentMethodDto',
        'selected_shipping_option' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\SelectedShippingOptionDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
        'status' => null,
        'fraud_status' => null,
        'order_amount' => 'int64',
        'original_order_amount' => 'int64',
        'captured_amount' => 'int64',
        'refunded_amount' => 'int64',
        'remaining_authorized_amount' => 'int64',
        'purchase_currency' => null,
        'locale' => null,
        'order_lines' => null,
        'merchant_reference1' => null,
        'merchant_reference2' => null,
        'klarna_reference' => null,
        'customer' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'created_at' => 'date-time',
        'purchase_country' => null,
        'expires_at' => 'date-time',
        'captures' => null,
        'refunds' => null,
        'merchant_data' => null,
        'initial_payment_method' => null,
        'selected_shipping_option' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'order_id',
        'status' => 'status',
        'fraud_status' => 'fraud_status',
        'order_amount' => 'order_amount',
        'original_order_amount' => 'original_order_amount',
        'captured_amount' => 'captured_amount',
        'refunded_amount' => 'refunded_amount',
        'remaining_authorized_amount' => 'remaining_authorized_amount',
        'purchase_currency' => 'purchase_currency',
        'locale' => 'locale',
        'order_lines' => 'order_lines',
        'merchant_reference1' => 'merchant_reference1',
        'merchant_reference2' => 'merchant_reference2',
        'klarna_reference' => 'klarna_reference',
        'customer' => 'customer',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'created_at' => 'created_at',
        'purchase_country' => 'purchase_country',
        'expires_at' => 'expires_at',
        'captures' => 'captures',
        'refunds' => 'refunds',
        'merchant_data' => 'merchant_data',
        'initial_payment_method' => 'initial_payment_method',
        'selected_shipping_option' => 'selected_shipping_option'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'status' => 'setStatus',
        'fraud_status' => 'setFraudStatus',
        'order_amount' => 'setOrderAmount',
        'original_order_amount' => 'setOriginalOrderAmount',
        'captured_amount' => 'setCapturedAmount',
        'refunded_amount' => 'setRefundedAmount',
        'remaining_authorized_amount' => 'setRemainingAuthorizedAmount',
        'purchase_currency' => 'setPurchaseCurrency',
        'locale' => 'setLocale',
        'order_lines' => 'setOrderLines',
        'merchant_reference1' => 'setMerchantReference1',
        'merchant_reference2' => 'setMerchantReference2',
        'klarna_reference' => 'setKlarnaReference',
        'customer' => 'setCustomer',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'created_at' => 'setCreatedAt',
        'purchase_country' => 'setPurchaseCountry',
        'expires_at' => 'setExpiresAt',
        'captures' => 'setCaptures',
        'refunds' => 'setRefunds',
        'merchant_data' => 'setMerchantData',
        'initial_payment_method' => 'setInitialPaymentMethod',
        'selected_shipping_option' => 'setSelectedShippingOption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'status' => 'getStatus',
        'fraud_status' => 'getFraudStatus',
        'order_amount' => 'getOrderAmount',
        'original_order_amount' => 'getOriginalOrderAmount',
        'captured_amount' => 'getCapturedAmount',
        'refunded_amount' => 'getRefundedAmount',
        'remaining_authorized_amount' => 'getRemainingAuthorizedAmount',
        'purchase_currency' => 'getPurchaseCurrency',
        'locale' => 'getLocale',
        'order_lines' => 'getOrderLines',
        'merchant_reference1' => 'getMerchantReference1',
        'merchant_reference2' => 'getMerchantReference2',
        'klarna_reference' => 'getKlarnaReference',
        'customer' => 'getCustomer',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'created_at' => 'getCreatedAt',
        'purchase_country' => 'getPurchaseCountry',
        'expires_at' => 'getExpiresAt',
        'captures' => 'getCaptures',
        'refunds' => 'getRefunds',
        'merchant_data' => 'getMerchantData',
        'initial_payment_method' => 'getInitialPaymentMethod',
        'selected_shipping_option' => 'getSelectedShippingOption'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_AUTHORIZED = 'AUTHORIZED';
    const STATUS_PART_CAPTURED = 'PART_CAPTURED';
    const STATUS_CAPTURED = 'CAPTURED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORIZED,
            self::STATUS_PART_CAPTURED,
            self::STATUS_CAPTURED,
            self::STATUS_CANCELLED,
            self::STATUS_EXPIRED,
            self::STATUS_CLOSED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fraud_status'] = isset($data['fraud_status']) ? $data['fraud_status'] : null;
        $this->container['order_amount'] = isset($data['order_amount']) ? $data['order_amount'] : null;
        $this->container['original_order_amount'] = isset($data['original_order_amount']) ? $data['original_order_amount'] : null;
        $this->container['captured_amount'] = isset($data['captured_amount']) ? $data['captured_amount'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['remaining_authorized_amount'] = isset($data['remaining_authorized_amount']) ? $data['remaining_authorized_amount'] : null;
        $this->container['purchase_currency'] = isset($data['purchase_currency']) ? $data['purchase_currency'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['merchant_reference1'] = isset($data['merchant_reference1']) ? $data['merchant_reference1'] : null;
        $this->container['merchant_reference2'] = isset($data['merchant_reference2']) ? $data['merchant_reference2'] : null;
        $this->container['klarna_reference'] = isset($data['klarna_reference']) ? $data['klarna_reference'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['purchase_country'] = isset($data['purchase_country']) ? $data['purchase_country'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['captures'] = isset($data['captures']) ? $data['captures'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['merchant_data'] = isset($data['merchant_data']) ? $data['merchant_data'] : null;
        $this->container['initial_payment_method'] = isset($data['initial_payment_method']) ? $data['initial_payment_method'] : null;
        $this->container['selected_shipping_option'] = isset($data['selected_shipping_option']) ? $data['selected_shipping_option'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The unique order ID. Cannot be longer than 255 characters.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The order status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fraud_status
     *
     * @return string
     */
    public function getFraudStatus()
    {
        return $this->container['fraud_status'];
    }

    /**
     * Sets fraud_status
     *
     * @param string $fraud_status Fraud status for the order. Either ACCEPTED, PENDING or REJECTED.
     *
     * @return $this
     */
    public function setFraudStatus($fraud_status)
    {
        $this->container['fraud_status'] = $fraud_status;

        return $this;
    }

    /**
     * Gets order_amount
     *
     * @return int
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount
     *
     * @param int $order_amount The order amount in minor units. That is the smallest currency unit available such as cent or penny.
     *
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {
        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets original_order_amount
     *
     * @return int
     */
    public function getOriginalOrderAmount()
    {
        return $this->container['original_order_amount'];
    }

    /**
     * Sets original_order_amount
     *
     * @param int $original_order_amount The original order amount. In minor units.
     *
     * @return $this
     */
    public function setOriginalOrderAmount($original_order_amount)
    {
        $this->container['original_order_amount'] = $original_order_amount;

        return $this;
    }

    /**
     * Gets captured_amount
     *
     * @return int
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     *
     * @param int $captured_amount The total amount of all captures. In minor units.
     *
     * @return $this
     */
    public function setCapturedAmount($captured_amount)
    {
        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return int
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param int $refunded_amount The total amount of refunded for this order. In minor units.
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets remaining_authorized_amount
     *
     * @return int
     */
    public function getRemainingAuthorizedAmount()
    {
        return $this->container['remaining_authorized_amount'];
    }

    /**
     * Sets remaining_authorized_amount
     *
     * @param int $remaining_authorized_amount The remaining authorized amount for this order. To increase the `remaining_authorized_amount` the `order_amount` needs to be increased.
     *
     * @return $this
     */
    public function setRemainingAuthorizedAmount($remaining_authorized_amount)
    {
        $this->container['remaining_authorized_amount'] = $remaining_authorized_amount;

        return $this;
    }

    /**
     * Gets purchase_currency
     *
     * @return string
     */
    public function getPurchaseCurrency()
    {
        return $this->container['purchase_currency'];
    }

    /**
     * Sets purchase_currency
     *
     * @param string $purchase_currency The currency for this order. Specified in ISO 4217 format.
     *
     * @return $this
     */
    public function setPurchaseCurrency($purchase_currency)
    {
        $this->container['purchase_currency'] = $purchase_currency;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The customers locale. Specified according to RFC 1766.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\OrderLine[] $order_lines An array of order_line objects. Each line represents one item in the cart.
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets merchant_reference1
     *
     * @return string
     */
    public function getMerchantReference1()
    {
        return $this->container['merchant_reference1'];
    }

    /**
     * Sets merchant_reference1
     *
     * @param string $merchant_reference1 The order number that the merchant should assign to the order. This is how a customer would reference the purchase they made. If supplied, it is labeled as the Order Number within post purchase communications as well as the Klarna App.
     *
     * @return $this
     */
    public function setMerchantReference1($merchant_reference1)
    {
        $this->container['merchant_reference1'] = $merchant_reference1;

        return $this;
    }

    /**
     * Gets merchant_reference2
     *
     * @return string
     */
    public function getMerchantReference2()
    {
        return $this->container['merchant_reference2'];
    }

    /**
     * Sets merchant_reference2
     *
     * @param string $merchant_reference2 Can be used to store your internal reference to the order. This is generally an internal reference number that merchants use as alternate identifier that matches their internal ERP or Order Management system.
     *
     * @return $this
     */
    public function setMerchantReference2($merchant_reference2)
    {
        $this->container['merchant_reference2'] = $merchant_reference2;

        return $this;
    }

    /**
     * Gets klarna_reference
     *
     * @return string
     */
    public function getKlarnaReference()
    {
        return $this->container['klarna_reference'];
    }

    /**
     * Sets klarna_reference
     *
     * @param string $klarna_reference A Klarna generated reference that is shorter than the Klarna Order Id and is used as a customer friendly reference. It is most often used as a reference when Klarna is communicating with the customer with regard to payment statuses.
     *
     * @return $this
     */
    public function setKlarnaReference($klarna_reference)
    {
        $this->container['klarna_reference'] = $klarna_reference;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\Customer $customer Information about the customer placing the order.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\Address $billing_address Customer billing address.
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\Address $shipping_address Customer shipping address.
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The time for the purchase. Formatted according to ISO 8601.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets purchase_country
     *
     * @return string
     */
    public function getPurchaseCountry()
    {
        return $this->container['purchase_country'];
    }

    /**
     * Sets purchase_country
     *
     * @param string $purchase_country The purchase country. Formatted according to ISO 3166-1 alpha-2.
     *
     * @return $this
     */
    public function setPurchaseCountry($purchase_country)
    {
        $this->container['purchase_country'] = $purchase_country;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at Order expiration time. The order can only be captured until this time. Formatted according to ISO 8601.
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets captures
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Capture[]
     */
    public function getCaptures()
    {
        return $this->container['captures'];
    }

    /**
     * Sets captures
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\Capture[] $captures List of captures for this order.
     *
     * @return $this
     */
    public function setCaptures($captures)
    {
        $this->container['captures'] = $captures;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\Refund[]
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\Refund[] $refunds List of refunds for this order.
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return string
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param string $merchant_data Text field for storing data about the order. Set at order creation.
     *
     * @return $this
     */
    public function setMerchantData($merchant_data)
    {
        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }

    /**
     * Gets initial_payment_method
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\InitialPaymentMethodDto
     */
    public function getInitialPaymentMethod()
    {
        return $this->container['initial_payment_method'];
    }

    /**
     * Sets initial_payment_method
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\InitialPaymentMethodDto $initial_payment_method Initial payment method for this order
     *
     * @return $this
     */
    public function setInitialPaymentMethod($initial_payment_method)
    {
        $this->container['initial_payment_method'] = $initial_payment_method;

        return $this;
    }

    /**
     * Gets selected_shipping_option
     *
     * @return \Vismutx\KlarnaOrderManagementApiPhp\Model\SelectedShippingOptionDto
     */
    public function getSelectedShippingOption()
    {
        return $this->container['selected_shipping_option'];
    }

    /**
     * Sets selected_shipping_option
     *
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\SelectedShippingOptionDto $selected_shipping_option The shipping option selected by the user.
     *
     * @return $this
     */
    public function setSelectedShippingOption($selected_shipping_option)
    {
        $this->container['selected_shipping_option'] = $selected_shipping_option;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


