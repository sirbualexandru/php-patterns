<?php

namespace Service;

interface Formatter
{
    public function format(array $data): string;
}