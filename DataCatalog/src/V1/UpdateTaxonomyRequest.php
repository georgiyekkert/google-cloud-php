<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateTaxonomy][google.cloud.datacatalog.v1.PolicyTagManager.UpdateTaxonomy].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateTaxonomyRequest</code>
 */
class UpdateTaxonomyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The taxonomy to update. Only description, display_name, and activated
     * policy types can be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
     */
    private $taxonomy = null;
    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\Taxonomy $taxonomy
     *           The taxonomy to update. Only description, display_name, and activated
     *           policy types can be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource. For the `FieldMask` definition,
     *           see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *           If not set, defaults to all of the fields that are allowed to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The taxonomy to update. Only description, display_name, and activated
     * policy types can be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
     * @return \Google\Cloud\DataCatalog\V1\Taxonomy|null
     */
    public function getTaxonomy()
    {
        return isset($this->taxonomy) ? $this->taxonomy : null;
    }

    public function hasTaxonomy()
    {
        return isset($this->taxonomy);
    }

    public function clearTaxonomy()
    {
        unset($this->taxonomy);
    }

    /**
     * The taxonomy to update. Only description, display_name, and activated
     * policy types can be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\Taxonomy $var
     * @return $this
     */
    public function setTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\Taxonomy::class);
        $this->taxonomy = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If not set, defaults to all of the fields that are allowed to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

