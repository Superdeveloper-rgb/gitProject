<?php
$daysecs = 24 * 60 * 60;

function longDate($timestamp) {
    return date("l F jS Y", $timestamp);
}
echo $templateS;
echo longDate(time() - 52 * 24 * 60 * 60);
echo $templateE;