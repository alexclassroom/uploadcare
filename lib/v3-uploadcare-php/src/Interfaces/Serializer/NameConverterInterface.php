<?php

namespace Uploadcare\Interfaces\Serializer;

interface NameConverterInterface
{
    /**
     * Converts `attributeName` to `attribute_name`.
     *
     * @param string $property
     *
     * @return string
     */
    public function normalize($property);

    /**
     * Converts `attribute_name` to `attributeName`.
     *
     * @param string $property
     *
     * @return string
     */
    public function denormalize($property);
}
