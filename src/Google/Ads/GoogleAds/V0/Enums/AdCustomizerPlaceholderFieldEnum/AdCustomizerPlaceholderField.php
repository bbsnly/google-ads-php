<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/ad_customizer_placeholder_field.proto

namespace Google\Ads\GoogleAds\V0\Enums\AdCustomizerPlaceholderFieldEnum;

/**
 * Possible values for Ad Customizers placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.AdCustomizerPlaceholderFieldEnum.AdCustomizerPlaceholderField</code>
 */
class AdCustomizerPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: INT64. Integer value to be inserted.
     *
     * Generated from protobuf enum <code>INTEGER = 2;</code>
     */
    const INTEGER = 2;
    /**
     * Data Type: STRING. Price value to be inserted.
     *
     * Generated from protobuf enum <code>PRICE = 3;</code>
     */
    const PRICE = 3;
    /**
     * Data Type: DATE_TIME. Date value to be inserted.
     *
     * Generated from protobuf enum <code>DATE = 4;</code>
     */
    const DATE = 4;
    /**
     * Data Type: STRING. String value to be inserted.
     *
     * Generated from protobuf enum <code>STRING = 5;</code>
     */
    const STRING = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdCustomizerPlaceholderField::class, \Google\Ads\GoogleAds\V0\Enums\AdCustomizerPlaceholderFieldEnum_AdCustomizerPlaceholderField::class);

