<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EntryGroup Metadata.
 * An EntryGroup resource represents a logical grouping of zero or more
 * Data Catalog [Entry][google.cloud.datacatalog.v1.Entry] resources.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.EntryGroup</code>
 */
class EntryGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the entry group in URL format. Example:
     * `projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}`
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A short name to identify the entry group, for example,
     * "analytics data - jan 2011". Default value is an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Entry group description, which can consist of several sentences or
     * paragraphs that describe entry group contents. Default value is an empty
     * string.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Output only. Timestamps about this EntryGroup. Default value is empty timestamps.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps data_catalog_timestamps = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $data_catalog_timestamps = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the entry group in URL format. Example:
     *           `projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}`
     *           Note: The entry group itself and its child resources might not be
     *           stored in the location specified in its name.
     *     @type string $display_name
     *           A short name to identify the entry group, for example,
     *           "analytics data - jan 2011". Default value is an empty string.
     *     @type string $description
     *           Entry group description, which can consist of several sentences or
     *           paragraphs that describe entry group contents. Default value is an empty
     *           string.
     *     @type \Google\Cloud\DataCatalog\V1\SystemTimestamps $data_catalog_timestamps
     *           Output only. Timestamps about this EntryGroup. Default value is empty timestamps.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the entry group in URL format. Example:
     * `projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}`
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the entry group in URL format. Example:
     * `projects/{project_id}/locations/{location}/entryGroups/{entry_group_id}`
     * Note: The entry group itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A short name to identify the entry group, for example,
     * "analytics data - jan 2011". Default value is an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A short name to identify the entry group, for example,
     * "analytics data - jan 2011". Default value is an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Entry group description, which can consist of several sentences or
     * paragraphs that describe entry group contents. Default value is an empty
     * string.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Entry group description, which can consist of several sentences or
     * paragraphs that describe entry group contents. Default value is an empty
     * string.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Timestamps about this EntryGroup. Default value is empty timestamps.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps data_catalog_timestamps = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DataCatalog\V1\SystemTimestamps|null
     */
    public function getDataCatalogTimestamps()
    {
        return isset($this->data_catalog_timestamps) ? $this->data_catalog_timestamps : null;
    }

    public function hasDataCatalogTimestamps()
    {
        return isset($this->data_catalog_timestamps);
    }

    public function clearDataCatalogTimestamps()
    {
        unset($this->data_catalog_timestamps);
    }

    /**
     * Output only. Timestamps about this EntryGroup. Default value is empty timestamps.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps data_catalog_timestamps = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DataCatalog\V1\SystemTimestamps $var
     * @return $this
     */
    public function setDataCatalogTimestamps($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\SystemTimestamps::class);
        $this->data_catalog_timestamps = $var;

        return $this;
    }

}

