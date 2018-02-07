<?php

function clamp($min, $max, $current)
{
	return max($min, min($max, $current))
}
