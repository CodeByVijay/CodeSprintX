<?php

namespace App\Helpers;

class ColorHelper
{
    /**
     * Darkens a hex color by a given factor.
     *
     * @param string $hex The hex color code (e.g., '#CD1EEB').
     * @param float $factor The factor to darken by (0.1 = 10% darker, 0.2 = 20% darker, etc.).
     * @return string The new, darker hex color code.
     */
    public static function darken(string $hex, float $factor = 0.2): string
    {
        $hex = ltrim($hex, '#');

        if (strlen($hex) == 3) {
            $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
        }

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2)); // <-- CORRECTED
        $b = hexdec(substr($hex, 4, 2)); // <-- CORRECTED

        $r = max(0, floor($r * (1 - $factor)));
        $g = max(0, floor($g * (1 - $factor)));
        $b = max(0, floor($b * (1 - $factor)));

        return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT)
             . str_pad(dechex($g), 2, '0', STR_PAD_LEFT)
             . str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
    }
}
