<?php

/**
 * Return number as long as its clamped between min and max
 * @param $min float|int
 * @param $max float|int
 * @param $current float|int
 * @return float|int
 */
function clamp($min, $max, $current)
{
	return max($min, min($max, $current));
}
