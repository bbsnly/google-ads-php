<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/criterion_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\CriterionTypeEnum;

/**
 * Enum describing possible criterion types.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.CriterionTypeEnum.CriterionType</code>
 */
class CriterionType
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
     * Keyword. e.g. 'mars cruise'.
     *
     * Generated from protobuf enum <code>KEYWORD = 2;</code>
     */
    const KEYWORD = 2;
    /**
     * Placement, aka Website. e.g. 'www.flowers4sale.com'
     *
     * Generated from protobuf enum <code>PLACEMENT = 3;</code>
     */
    const PLACEMENT = 3;
    /**
     * Devices to target.
     *
     * Generated from protobuf enum <code>DEVICE = 6;</code>
     */
    const DEVICE = 6;
    /**
     * Locations to target.
     *
     * Generated from protobuf enum <code>LOCATION = 7;</code>
     */
    const LOCATION = 7;
    /**
     * Listing groups to target.
     *
     * Generated from protobuf enum <code>LISTING_GROUP = 8;</code>
     */
    const LISTING_GROUP = 8;
    /**
     * Ad Schedule.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE = 9;</code>
     */
    const AD_SCHEDULE = 9;
    /**
     * Age range.
     *
     * Generated from protobuf enum <code>AGE_RANGE = 10;</code>
     */
    const AGE_RANGE = 10;
    /**
     * Gender.
     *
     * Generated from protobuf enum <code>GENDER = 11;</code>
     */
    const GENDER = 11;
    /**
     * Income Range.
     *
     * Generated from protobuf enum <code>INCOME_RANGE = 12;</code>
     */
    const INCOME_RANGE = 12;
    /**
     * Parental status.
     *
     * Generated from protobuf enum <code>PARENTAL_STATUS = 13;</code>
     */
    const PARENTAL_STATUS = 13;
    /**
     * YouTube Video.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO = 14;</code>
     */
    const YOUTUBE_VIDEO = 14;
    /**
     * YouTube Channel.
     *
     * Generated from protobuf enum <code>YOUTUBE_CHANNEL = 15;</code>
     */
    const YOUTUBE_CHANNEL = 15;
    /**
     * User list.
     *
     * Generated from protobuf enum <code>USER_LIST = 16;</code>
     */
    const USER_LIST = 16;
    /**
     * Proximity.
     *
     * Generated from protobuf enum <code>PROXIMITY = 17;</code>
     */
    const PROXIMITY = 17;
    /**
     * A topic target on the display network (e.g. "Pets & Animals").
     *
     * Generated from protobuf enum <code>TOPIC = 18;</code>
     */
    const TOPIC = 18;
    /**
     * Listing scope to target.
     *
     * Generated from protobuf enum <code>LISTING_SCOPE = 19;</code>
     */
    const LISTING_SCOPE = 19;
    /**
     * Language.
     *
     * Generated from protobuf enum <code>LANGUAGE = 20;</code>
     */
    const LANGUAGE = 20;
    /**
     * IpBlock.
     *
     * Generated from protobuf enum <code>IP_BLOCK = 21;</code>
     */
    const IP_BLOCK = 21;
    /**
     * Content Label for category exclusion.
     *
     * Generated from protobuf enum <code>CONTENT_LABEL = 22;</code>
     */
    const CONTENT_LABEL = 22;
    /**
     * Carrier.
     *
     * Generated from protobuf enum <code>CARRIER = 23;</code>
     */
    const CARRIER = 23;
    /**
     * A category the user is interested in.
     *
     * Generated from protobuf enum <code>USER_INTEREST = 24;</code>
     */
    const USER_INTEREST = 24;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CriterionType::class, \Google\Ads\GoogleAds\V0\Enums\CriterionTypeEnum_CriterionType::class);

