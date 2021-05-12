<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [RestoreDatabase][google.spanner.admin.database.v1.DatabaseAdmin.RestoreDatabase].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.RestoreDatabaseRequest</code>
 */
class RestoreDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the instance in which to create the
     * restored database. This instance must be in the same project and
     * have the same instance configuration as the instance containing
     * the source backup. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The id of the database to create and restore to. This
     * database must not already exist. The `database_id` appended to
     * `parent` forms the full database name of the form
     * `projects/<project>/instances/<instance>/databases/<database_id>`.
     *
     * Generated from protobuf field <code>string database_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database_id = '';
    /**
     * Optional. An encryption configuration describing the encryption type and
     * key resources in Cloud KMS used to encrypt/decrypt the database to restore
     * to. If this field is not specified, the restored database will use the same
     * encryption configuration as the backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encryption_config = null;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the instance in which to create the
     *           restored database. This instance must be in the same project and
     *           have the same instance configuration as the instance containing
     *           the source backup. Values are of the form
     *           `projects/<project>/instances/<instance>`.
     *     @type string $database_id
     *           Required. The id of the database to create and restore to. This
     *           database must not already exist. The `database_id` appended to
     *           `parent` forms the full database name of the form
     *           `projects/<project>/instances/<instance>/databases/<database_id>`.
     *     @type string $backup
     *           Name of the backup from which to restore.  Values are of the form
     *           `projects/<project>/instances/<instance>/backups/<backup>`.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseEncryptionConfig $encryption_config
     *           Optional. An encryption configuration describing the encryption type and
     *           key resources in Cloud KMS used to encrypt/decrypt the database to restore
     *           to. If this field is not specified, the restored database will use the same
     *           encryption configuration as the backup by default, namely
     *           [encryption_type][google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig.encryption_type]
     *           = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the instance in which to create the
     * restored database. This instance must be in the same project and
     * have the same instance configuration as the instance containing
     * the source backup. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the instance in which to create the
     * restored database. This instance must be in the same project and
     * have the same instance configuration as the instance containing
     * the source backup. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The id of the database to create and restore to. This
     * database must not already exist. The `database_id` appended to
     * `parent` forms the full database name of the form
     * `projects/<project>/instances/<instance>/databases/<database_id>`.
     *
     * Generated from protobuf field <code>string database_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->database_id;
    }

    /**
     * Required. The id of the database to create and restore to. This
     * database must not already exist. The `database_id` appended to
     * `parent` forms the full database name of the form
     * `projects/<project>/instances/<instance>/databases/<database_id>`.
     *
     * Generated from protobuf field <code>string database_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_id = $var;

        return $this;
    }

    /**
     * Name of the backup from which to restore.  Values are of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackup()
    {
        return $this->readOneof(3);
    }

    public function hasBackup()
    {
        return $this->hasOneof(3);
    }

    /**
     * Name of the backup from which to restore.  Values are of the form
     * `projects/<project>/instances/<instance>/backups/<backup>`.
     *
     * Generated from protobuf field <code>string backup = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. An encryption configuration describing the encryption type and
     * key resources in Cloud KMS used to encrypt/decrypt the database to restore
     * to. If this field is not specified, the restored database will use the same
     * encryption configuration as the backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseEncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return isset($this->encryption_config) ? $this->encryption_config : null;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. An encryption configuration describing the encryption type and
     * key resources in Cloud KMS used to encrypt/decrypt the database to restore
     * to. If this field is not specified, the restored database will use the same
     * encryption configuration as the backup by default, namely
     * [encryption_type][google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig.encryption_type]
     * = `USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.RestoreDatabaseEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseEncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseEncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

