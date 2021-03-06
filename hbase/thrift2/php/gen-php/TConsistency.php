<?php
/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * Specify Consistency:
 *  - STRONG means reads only from primary region
 *  - TIMELINE means reads might return values from secondary region replicas
 */
final class TConsistency
{
    const STRONG = 1;

    const TIMELINE = 2;

    static public $__names = array(
        1 => 'STRONG',
        2 => 'TIMELINE',
    );
}

