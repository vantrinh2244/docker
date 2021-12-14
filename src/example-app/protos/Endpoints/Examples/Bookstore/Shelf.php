<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/auth.proto

namespace Endpoints\Examples\Bookstore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A shelf resource.
 * </pre>
 *
 * Protobuf type <code>endpoints.examples.bookstore.Shelf</code>
 */
class Shelf extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A unique shelf id.
     * </pre>
     *
     * <code>int64 id = 1;</code>
     */
    private $id = 0;
    /**
     * <pre>
     * A theme of the shelf (fiction, poetry, etc).
     * </pre>
     *
     * <code>string theme = 2;</code>
     */
    private $theme = '';

    public function __construct() {
        \GPBMetadata\Protos\Auth::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A unique shelf id.
     * </pre>
     *
     * <code>int64 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <pre>
     * A unique shelf id.
     * </pre>
     *
     * <code>int64 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;
    }

    /**
     * <pre>
     * A theme of the shelf (fiction, poetry, etc).
     * </pre>
     *
     * <code>string theme = 2;</code>
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * <pre>
     * A theme of the shelf (fiction, poetry, etc).
     * </pre>
     *
     * <code>string theme = 2;</code>
     */
    public function setTheme($var)
    {
        GPBUtil::checkString($var, True);
        $this->theme = $var;
    }

}

