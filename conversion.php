<?php

require('type.php');

function len($from, $to, $value)
{
    global $meter;
    $tometer = $value * floatval($meter[$from]);
    $frommeter = $tometer / floatval($meter[$to]);
    echo json_encode(round($frommeter, 4));
}

function volume($from, $to, $value)
{
    global $liter;
    $toliter = $value * floatval($liter[$from]);
    $fromliter = $toliter / floatval($liter[$to]);
    echo json_encode(round($fromliter, 4));
}

function mass($from, $to, $value)
{
    global $kg;
    $tokg = $value * floatval($kg[$from]);
    $fromkg = $tokg / floatval($kg[$to]);
    echo json_encode(round($fromkg, 4));
}

function speed($from, $to, $value)
{
    global $kmph;
    $tokmph = $value * floatval($kmph[$from]);
    $fromkmph = $tokmph / floatval($kmph[$to]);
    echo json_encode(round($fromkmph, 4));
}

function area($from, $to, $value)
{
    global $squareMeter;
    $tosquareMeter = $value * floatval($squareMeter[$from]);
    $fromsquareMeter = $tosquareMeter / floatval($squareMeter[$to]);
    echo json_encode(round($fromsquareMeter, 4));
}

function currency($from, $to, $value)
{
    global $inr;
    $toinr = $value * floatval($inr[$from]);
    $frominr = $toinr / floatval($inr[$to]);
    echo json_encode(round($frominr, 4));
}

function temperature($from, $to, $value)
{
    switch ($from) {
        case 'Kelvin':
            $tocelsius = $value - 273.15;
            break;

        case 'Fahrenheit':
            $tocelsius = ($value - 32) * 5 / 9;
            break;

        case 'Rankine':
            $tocelsius = ($value - 491.67) * 5 / 9;
            break;

        case 'Celsius':
            $tocelsius = $value;
            break;
    }

    switch ($to) {
        case 'Kelvin':
            $fromcelsius = $tocelsius + 273.15;
            break;

        case 'Fahrenheit':
            $fromcelsius = ($tocelsius * 9 / 5) + 32;
            break;

        case 'Rankine':
            $fromcelsius = ($tocelsius + 273.15) * 9 / 5;
            break;

        case 'Celsius':
            $fromcelsius = $tocelsius;
            break;
    }
    echo json_encode(round($fromcelsius, 4));
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST)) {
        $type = $_POST['type'];
        $from = $_POST['opt1'];
        $to = $_POST['opt2'];
        $value = $_POST['input'];

        switch ($type) {
            case 'length':
                len($from, $to, $value);
                break;

            case 'volume':
                volume($from, $to, $value);
                break;

            case 'mass':
                mass($from, $to, $value);
                break;

            case 'speed':
                speed($from, $to, $value);
                break;

            case 'temperature':
                temperature($from, $to, $value);
                break;

            case 'area':
                area($from, $to, $value);
                break;

            case 'currency':
                currency($from, $to, $value);
                break;
        }
    }
}
