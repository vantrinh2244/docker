<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/auth.proto

namespace Endpoints\Examples\Bookstore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request message for DeleteShelf method.
 * </pre>
 *
 * Protobuf type <code>endpoints.examples.bookstore.DeleteShelfRequest</code>
 */
class DeleteShelfRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The ID of the shelf to delete.
     * </pre>
     *
     * <code>int64 shelf = 1;</code>
     */
    private $shelf = 0;

    public function __construct() {
        \GPBMetadata\Protos\Auth::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The ID of the shelf to delete.
     * </pre>
     *
     * <code>int64 shelf = 1;</code>
     */
    public function getShelf()
    {
        return $this->shelf;
    }

    /**
     * <pre>
     * The ID of the shelf to delete.
     * </pre>
     *
     * <code>int64 shelf = 1;</code>
     */
    public function setShelf($var)
    {
        GPBUtil::checkInt64($var);
        $this->shelf = $var;
    }

}

