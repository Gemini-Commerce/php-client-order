<?php
/**
 * OrderRefundAmountCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Order
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * order Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Order\Model;
use \GeminiCommerce\Order\ObjectSerializer;

/**
 * OrderRefundAmountCode Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Order
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderRefundAmountCode
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const ORDERED = 'ORDERED';

    public const SHIPPING = 'SHIPPING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ORDERED,
            self::SHIPPING
        ];
    }
}


