<?php

namespace Ibexa\Bundle\Core\Imagine;

use Ibexa\Core\FieldType\Image\Value as ImageValue;

interface PlaceholderProvider
{
    /**
     * Provides a placeholder image path for a given Image FieldType value.
     *
     * @param \Ibexa\Core\FieldType\Image\Value $value
     * @param array $options
     * @return string Path to placeholder
     */
    public function getPlaceholder(ImageValue $value, array $options = []): string;
}
