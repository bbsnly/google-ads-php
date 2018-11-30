<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An image ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.ImageAdInfo</code>
 */
class ImageAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     */
    private $pixel_width = null;
    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     */
    private $pixel_height = null;
    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     */
    private $image_url = null;
    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     */
    private $preview_pixel_width = null;
    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     */
    private $preview_pixel_height = null;
    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     */
    private $preview_image_url = null;
    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     */
    private $mime_type = 0;
    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     */
    private $name = null;
    protected $image;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $pixel_width
     *           Width in pixels of the full size image.
     *     @type \Google\Protobuf\Int64Value $pixel_height
     *           Height in pixels of the full size image.
     *     @type \Google\Protobuf\StringValue $image_url
     *           URL of the full size image.
     *     @type \Google\Protobuf\Int64Value $preview_pixel_width
     *           Width in pixels of the preview size image.
     *     @type \Google\Protobuf\Int64Value $preview_pixel_height
     *           Height in pixels of the preview size image.
     *     @type \Google\Protobuf\StringValue $preview_image_url
     *           URL of the preview size image.
     *     @type int $mime_type
     *           The mime type of the image.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the image. If the image was created from a MediaFile, this is
     *           the MediaFile's name. If the image was created from bytes, this is empty.
     *     @type \Google\Protobuf\StringValue $media_file
     *           The MediaFile resource to use for the image.
     *     @type \Google\Protobuf\BytesValue $data
     *           Raw image data as bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPixelWidth()
    {
        return $this->pixel_width;
    }

    /**
     * Width in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_width = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPixelWidth($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->pixel_width = $var;

        return $this;
    }

    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPixelHeight()
    {
        return $this->pixel_height;
    }

    /**
     * Height in pixels of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value pixel_height = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPixelHeight($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->pixel_height = $var;

        return $this;
    }

    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * URL of the full size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue image_url = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPreviewPixelWidth()
    {
        return $this->preview_pixel_width;
    }

    /**
     * Width in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_width = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPreviewPixelWidth($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->preview_pixel_width = $var;

        return $this;
    }

    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPreviewPixelHeight()
    {
        return $this->preview_pixel_height;
    }

    /**
     * Height in pixels of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value preview_pixel_height = 8;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPreviewPixelHeight($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->preview_pixel_height = $var;

        return $this;
    }

    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPreviewImageUrl()
    {
        return $this->preview_image_url;
    }

    /**
     * URL of the preview size image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue preview_image_url = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPreviewImageUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->preview_image_url = $var;

        return $this;
    }

    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     * @return int
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * The mime type of the image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.MimeTypeEnum.MimeType mime_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\MimeTypeEnum_MimeType::class);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the image. If the image was created from a MediaFile, this is
     * the MediaFile's name. If the image was created from bytes, this is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMediaFile()
    {
        return $this->readOneof(1);
    }

    /**
     * The MediaFile resource to use for the image.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue media_file = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMediaFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @return \Google\Protobuf\BytesValue
     */
    public function getData()
    {
        return $this->readOneof(2);
    }

    /**
     * Raw image data as bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.BytesValue data = 2;</code>
     * @param \Google\Protobuf\BytesValue $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BytesValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->whichOneof("image");
    }

}

