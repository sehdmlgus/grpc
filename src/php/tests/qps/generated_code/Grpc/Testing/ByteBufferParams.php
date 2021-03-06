<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/payloads.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.testing.ByteBufferParams</code>
 */
class ByteBufferParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 req_size = 1;</code>
     */
    private $req_size = 0;
    /**
     * Generated from protobuf field <code>int32 resp_size = 2;</code>
     */
    private $resp_size = 0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Payloads::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 req_size = 1;</code>
     * @return int
     */
    public function getReqSize()
    {
        return $this->req_size;
    }

    /**
     * Generated from protobuf field <code>int32 req_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReqSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->req_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 resp_size = 2;</code>
     * @return int
     */
    public function getRespSize()
    {
        return $this->resp_size;
    }

    /**
     * Generated from protobuf field <code>int32 resp_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRespSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->resp_size = $var;

        return $this;
    }

}

