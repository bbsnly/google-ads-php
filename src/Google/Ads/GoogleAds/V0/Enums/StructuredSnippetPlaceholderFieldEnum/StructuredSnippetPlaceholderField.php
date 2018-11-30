<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/structured_snippet_placeholder_field.proto

namespace Google\Ads\GoogleAds\V0\Enums\StructuredSnippetPlaceholderFieldEnum;

/**
 * Possible values for Structured Snippet placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.StructuredSnippetPlaceholderFieldEnum.StructuredSnippetPlaceholderField</code>
 */
class StructuredSnippetPlaceholderField
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
     * Data Type: STRING. The category of snippet of your products/services.
     * Must match one of the predefined structured snippets headers exactly.
     * See
     * https://developers.google.com/adwords/api
     * /docs/appendix/structured-snippet-headers
     *
     * Generated from protobuf enum <code>HEADER = 2;</code>
     */
    const HEADER = 2;
    /**
     * Data Type: STRING_LIST. Text values that describe your products/services.
     * All text must be family safe. Special or non-ASCII characters are not
     * permitted. A snippet can be at most 25 characters.
     *
     * Generated from protobuf enum <code>SNIPPETS = 3;</code>
     */
    const SNIPPETS = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StructuredSnippetPlaceholderField::class, \Google\Ads\GoogleAds\V0\Enums\StructuredSnippetPlaceholderFieldEnum_StructuredSnippetPlaceholderField::class);

