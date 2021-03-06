<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/auth.proto

namespace Endpoints\Examples\Bookstore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response to ListShelves call.
 * </pre>
 *
 * Protobuf type <code>endpoints.examples.bookstore.ListShelvesResponse</code>
 */
class ListShelvesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Shelves in the bookstore.
     * </pre>
     *
     * <code>repeated .endpoints.examples.bookstore.Shelf shelves = 1;</code>
     */
    private $shelves;

    public function __construct() {
        \GPBMetadata\Protos\Auth::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Shelves in the bookstore.
     * </pre>
     *
     * <code>repeated .endpoints.examples.bookstore.Shelf shelves = 1;</code>
     */
    public function getShelves()
    {
        return $this->shelves;
    }

    /**
     * <pre>
     * Shelves in the bookstore.
     * </pre>
     *
     * <code>repeated .endpoints.examples.bookstore.Shelf shelves = 1;</code>
     */
    public function setShelves(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Endpoints\Examples\Bookstore\Shelf::class);
        $this->shelves = $var;
    }

}

