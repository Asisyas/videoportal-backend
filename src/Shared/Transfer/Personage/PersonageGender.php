<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: personage_gender.proto

namespace App\Shared\Transfer\Personage;

/**
 * Protobuf type <code>transfer.personage.PersonageGender</code>.
 */
class PersonageGender
{
    /**
     * Generated from protobuf enum <code>MALE = 0;</code>.
     */
    public const MALE = 0;
    /**
     * Generated from protobuf enum <code>FEMALE = 1;</code>.
     */
    public const FEMALE = 1;

    private static $valueToName = [
        self::MALE => 'MALE',
        self::FEMALE => 'FEMALE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new \UnexpectedValueException(\sprintf('Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__.'::'.strtoupper($name);
        if (!\defined($const)) {
            throw new \UnexpectedValueException(\sprintf('Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return \constant($const);
    }
}