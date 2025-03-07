<?php
namespace ccxt;
use \ccxt\Precise;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once __DIR__ . '/test_shared_methods.php';

function test_borrow_rate($exchange, $skipped_properties, $method, $entry, $requested_code) {
    $format = array(
        'info' => array(),
        'currency' => 'USDT',
        'timestamp' => 1638230400000,
        'datetime' => '2021-11-30T00:00:00.000Z',
        'rate' => $exchange->parse_number('0.0006'),
        'period' => 86400000,
    );
    assert_structure($exchange, $skipped_properties, $method, $entry, $format);
    assert_timestamp_and_datetime($exchange, $skipped_properties, $method, $entry);
    assert_currency_code($exchange, $skipped_properties, $method, $entry, $entry['currency'], $requested_code);
    //
    // assert (borrowRate['period'] === 86400000 || borrowRate['period'] === 3600000) // Milliseconds in an hour or a day
    assert_greater($exchange, $skipped_properties, $method, $entry, 'period', '0');
    assert_greater($exchange, $skipped_properties, $method, $entry, 'rate', '0');
}
