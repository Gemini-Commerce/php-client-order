<?php
/**
 * OrderTransactionType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderTransactionType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderTransactionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'UNKNOWN';

    public const AUTHORIZATION = 'AUTHORIZATION';

    public const CAPTURE = 'CAPTURE';

    public const SALE = 'SALE';

    public const REFUND = 'REFUND';

    public const VOID = 'VOID';

    public const FAILED = 'FAILED';

    public const PENDING = 'PENDING';

    public const FRAUD = 'FRAUD';

    public const NOOP = 'NOOP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::AUTHORIZATION,
            self::CAPTURE,
            self::SALE,
            self::REFUND,
            self::VOID,
            self::FAILED,
            self::PENDING,
            self::FRAUD,
            self::NOOP
        ];
    }
}


