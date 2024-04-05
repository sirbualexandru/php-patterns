<?php

namespace Controller;

use Service\FormatterFactory;

class ArrayFormatterController
{
    /**
     * @param $format
     * @return string
     */
    public function handle($format)
    {
        $formatterFactory = new FormatterFactory();
        $formatter = $formatterFactory->getFormatter($format);

        return  $formatter->format([
            'data1',
            'data2',
            'key' => 'value',
        ]);

    }
}