<?php

namespace Spatie\LaravelData\Transformers;

use Spatie\LaravelData\Support\DataProperty;

class EnumTransformer implements Transformer
{
    public function transform(DataProperty $property, mixed $value): string|int
    {
        /** @var \BackedEnum $value */
        return $value->value;
    }
}
