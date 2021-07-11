<?php
/**
 * Refund
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
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  Vismutx\KlarnaOrderManagementApiPhp
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Refund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'refund_id' => 'string',
        'refunded_amount' => 'int',
        'refunded_at' => '\DateTime',
        'description' => 'string',
        'order_lines' => '\Vismutx\KlarnaOrderManagementApiPhp\Model\OrderLine[]',
        'credit_invoice' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refund_id' => null,
        'refunded_amount' => 'int64',
        'refunded_at' => 'date-time',
        'description' => null,
        'order_lines' => null,
        'credit_invoice' => null
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
        'refund_id' => 'refund_id',
        'refunded_amount' => 'refunded_amount',
        'refunded_at' => 'refunded_at',
        'description' => 'description',
        'order_lines' => 'order_lines',
        'credit_invoice' => 'credit_invoice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'refund_id' => 'setRefundId',
        'refunded_amount' => 'setRefundedAmount',
        'refunded_at' => 'setRefundedAt',
        'description' => 'setDescription',
        'order_lines' => 'setOrderLines',
        'credit_invoice' => 'setCreditInvoice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'refund_id' => 'getRefundId',
        'refunded_amount' => 'getRefundedAmount',
        'refunded_at' => 'getRefundedAt',
        'description' => 'getDescription',
        'order_lines' => 'getOrderLines',
        'credit_invoice' => 'getCreditInvoice'
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
        $this->container['refund_id'] = isset($data['refund_id']) ? $data['refund_id'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['refunded_at'] = isset($data['refunded_at']) ? $data['refunded_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['credit_invoice'] = isset($data['credit_invoice']) ? $data['credit_invoice'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets refund_id
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string $refund_id The refund id. Generated when the refund is created.
     *
     * @return $this
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

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
     * @param int $refunded_amount Refunded amount in minor units.
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets refunded_at
     *
     * @return \DateTime
     */
    public function getRefundedAt()
    {
        return $this->container['refunded_at'];
    }

    /**
     * Sets refunded_at
     *
     * @param \DateTime $refunded_at The time of the refund. ISO 8601.
     *
     * @return $this
     */
    public function setRefundedAt($refunded_at)
    {
        $this->container['refunded_at'] = $refunded_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the refund shown to the customer. Max length is 255 characters.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param \Vismutx\KlarnaOrderManagementApiPhp\Model\OrderLine[] $order_lines Order lines for the refund shown to the customer. Optional but increases the customer experience. Maximum 1000 order lines.
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets credit_invoice
     *
     * @return bool
     */
    public function getCreditInvoice()
    {
        return $this->container['credit_invoice'];
    }

    /**
     * Sets credit_invoice
     *
     * @param bool $credit_invoice Only relevant for B2B Orders. If the flag is set to true for an order with B2B_invoice as payment method, the customer will receive the refund as a credit invoice.
     *
     * @return $this
     */
    public function setCreditInvoice($credit_invoice)
    {
        $this->container['credit_invoice'] = $credit_invoice;

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


