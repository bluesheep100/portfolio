<?php

namespace App\Support;

class BionicReading
{
    public function convert(string $input): string
    {
        $words = explode(' ', $input);
        $output = [];

        foreach ($words as $word) {
            $depth = strlen($word) / 2;
            $depth = max($depth, 1);

            if (strlen($word) < 5) {
                $depth = round($depth, 0, PHP_ROUND_HALF_DOWN);
            } else {
                $depth = round($depth);
            }

            $output[] = preg_replace(sprintf('/^(.{%s})/', $depth), '<b>$1</b>', $word);
        }

        return implode(' ', $output);
    }
}
