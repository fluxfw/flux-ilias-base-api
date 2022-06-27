<?php

namespace FluxIliasBaseApi\Adapter\Object;

use JsonSerializable;
use LogicException;

class CustomObjectType implements ObjectType, JsonSerializable
{

    /**
     * @var static[]
     */
    private static array $cases;


    private function __construct(
        private readonly string $_value
    ) {

    }


    public static function factory(string $value) : ObjectType
    {
        return DefaultObjectType::tryFrom($value) ?? static::new(
                $value
            );
    }


    private static function new(
        string $value
    ) : static {
        static::$cases ??= [];

        return (static::$cases[$value] ??= new static(
            $value
        ));
    }


    public function __debugInfo() : ?array
    {
        return [
            "value" => $this->value
        ];
    }


    public final function __get(string $key) : string
    {
        switch ($key) {
            case "value":
                return $this->_value;

            default:
                throw new LogicException("Can't get " . $key);
        }
    }


    public final function __set(string $key, mixed $value) : void
    {
        throw new LogicException("Can't set");
    }


    public function jsonSerialize() : string
    {
        return $this->value;
    }
}
