<?php

namespace PcLocations_001;

use PcLocations_001\PinkCrab\Form_Fields\Field_Parser;
use PcLocations_001\PinkCrab\Form_Fields\Label_Config;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Select;
use PcLocations_001\PinkCrab\Form_Fields\Abstract_Field;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Raw_HTML;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Textarea;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Text;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Email;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Radio;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Range;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Hidden;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Number;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Password;
use PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date_Time;
require_once \dirname(__DIR__, 1) . '/vendor/autoload.php';
// Helper functions.
function println(string $string) : void
{
    print "{$string} <br>";
}
function hr()
{
    print '<hr>';
}
function print_code(string $html) : void
{
    print '<p><pre style="white-space: pre-wrap;
    white-space: -moz-pre-wrap;
    white-space: -pre-wrap;
    white-space: -o-pre-wrap;
    word-wrap: break-word;
	background: #ffebf9;
	padding: 9px 9px 15px;
	color: #000000c7;
	font-size: 10px;
	tab-size: 0;
	scroll-behavior: smooth;
	overflow: overlay;">
	<code>' . \htmlspecialchars($html, \ENT_QUOTES) . '</pre></code></p>';
}
function heading(string $string) : void
{
    print "<p style='color: #732a5d; font-family: sans-serif;  font-weight: bold; margin-bottom: 5px;'><strong>{$string}</strong></p>";
}
function get_option($key, $val)
{
    return $val;
}
print '<style> 
label{
    display: inline-flex;
    font-size: 12px;
    color: #58000f;
    flex-direction: column;
    flex-grow: 1;
}
</style>';
/**
 * Text Inputs
 *
 * Text, Password
 */
print '<h2>Text Inputs</h2>';
\PcLocations_001\heading('Basic Text');
$basic_text = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Text::create('basic_text')->label('Basic Text');
$basic_text->render();
\PcLocations_001\print_code($basic_text->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Comprehensive Text');
$basic_number = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Text::create('comprehensive_text')->label(' <-- Comprehensive Text Label')->placeholder('Please enter your value')->class('some classes')->attribute('data-nonce', 'some-value')->read_only()->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT | \PcLocations_001\PinkCrab\Form_Fields\Label_Config::LINKED_LABEL)->disabled();
$basic_number->render();
\PcLocations_001\print_code($basic_number->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Password');
$password = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Password::create('password')->label('Password')->autocomplete('password');
$password->render();
\PcLocations_001\print_code($password->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Email (Single)');
$email_single = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Email::create('email_single')->label('Email Single');
$email_single->render();
\PcLocations_001\print_code($email_single->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Email (Multiple)');
$email_multiple = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Email::create('email_multiple')->label('Email Multiple')->multiple()->autocomplete();
$email_multiple->render();
\PcLocations_001\print_code($email_multiple->as_string());
\PcLocations_001\hr();
/**
 * Number Inputs
 *
 * number & range
 */
print '<h2>Number Inputs</h2>';
\PcLocations_001\heading('Basic Number');
$basic_number = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Number::create('basic_number')->label('Basic Number');
$basic_number->render();
\PcLocations_001\print_code($basic_number->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Comprehensive Number');
$comp_number = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Number::create('comprehensive_number')->label('Comprehensive Number Label')->placeholder('Please enter your value')->class('some classes')->current(420)->min(10)->max(420)->step(20)->attribute('data-nonce', 'some-value')->read_only()->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT)->disabled();
$comp_number->render();
\PcLocations_001\print_code($comp_number->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Range Input');
$number_range = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Range::create('number_range')->label('Basic Number')->min(10)->max(420)->step(20);
$number_range->render();
\PcLocations_001\print_code($number_range->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Range Input with Hash Marks');
$number_range_hash = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Range::create('number_range_with_hash')->label('Range Input with Hash Marks')->min(0)->max(100)->step(10)->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::BEFORE_INPUT)->options(array('0' => '0%', '10' => '', '20' => '20%', '30' => '', '40' => '40%', '50' => '', '60' => '60%', '70' => '', '80' => '80%', '90' => '', '100' => '100%'));
$number_range_hash->render();
\PcLocations_001\print_code($number_range_hash->as_string());
\PcLocations_001\hr();
/**
 * Date Inputs
 *
 */
print '<h2>Date Inputs</h2>';
\PcLocations_001\heading('Basic Date');
$basic_date = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date::create('basic_date');
$basic_date->render();
\PcLocations_001\print_code($basic_date->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Comprehensive Date');
$comp_date = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date::create('comprehensive_date')->label('Comprehensive Date Label')->class('some classes')->min('1983-12-25')->max('2025-12-25')->pattern('\\d{4}-\\d{2}-\\d{2}')->attribute('data-nonce', 'some-value')->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT)->show_label();
$comp_date->render();
\PcLocations_001\print_code($comp_date->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Basic Date-Time');
$basic_date_time = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Date_Time::create('basic_date_time');
$basic_date_time->render();
\PcLocations_001\print_code($basic_date_time->as_string());
\PcLocations_001\hr();
/**
 * Checkbox
 */
print '<h2>Checkbox Inputs</h2>';
\PcLocations_001\heading('Basic Checkbox');
$basic_checkbox = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox::create('basic_checkbox')->label('Basic Checkbox')->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT | \PcLocations_001\PinkCrab\Form_Fields\Label_Config::LINKED_LABEL);
$basic_checkbox->render();
\PcLocations_001\print_code($basic_checkbox->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Checked Checkbox');
$checked_checkbox = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox::create('checked_checkbox')->label('Checked Checkbox')->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::BEFORE_INPUT | \PcLocations_001\PinkCrab\Form_Fields\Label_Config::LINKED_LABEL)->checked(\true === (bool) 1);
$checked_checkbox->render();
\PcLocations_001\print_code($checked_checkbox->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Checkbox Collection');
$collection_checkbox1 = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox::create('collection_checkbox[opt1]')->label('Option 1')->show_label()->checked(\true === (bool) 1);
$collection_checkbox2 = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox::create('collection_checkbox[opt2]')->label('Option 2')->show_label()->checked(\true === (bool) 1);
$collection_checkbox3 = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Checkbox::create('collection_checkbox[opt3]')->label('Option 3')->show_label()->checked(\false);
$collection_checkbox1->render();
$collection_checkbox2->render();
$collection_checkbox3->render();
\PcLocations_001\print_code($collection_checkbox1->as_string() . \PHP_EOL . $collection_checkbox2->as_string() . \PHP_EOL . $collection_checkbox3->as_string());
\PcLocations_001\hr();
/**
 * Hidden Input
 */
print '<h2>Radio</h2>';
\PcLocations_001\heading('Hidden Field');
$hidden_field = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Hidden::create('hidden')->current('val')->set_attributes(array('key1' => 'Value1', 'key2' => 'Value2'));
$hidden_field->render();
\PcLocations_001\print_code($hidden_field->as_string());
\PcLocations_001\hr();
/**
 * Radio Inputs
 */
print '<h2>Radio</h2>';
\PcLocations_001\heading('Basic Radio');
$basic_radio = \PcLocations_001\PinkCrab\Form_Fields\Fields\Input_Radio::create('basic_radio')->current('jane')->options(array('sam' => 'Sam', 'jane' => 'Jane'))->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::LINKED_LABEL | \PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT);
$basic_radio->render();
\PcLocations_001\print_code($basic_radio->as_string());
\PcLocations_001\hr();
/**
 * Textarea
 */
print '<h2>Select</h2>';
\PcLocations_001\heading('Basic Textarea');
$basic_textarea = \PcLocations_001\PinkCrab\Form_Fields\Fields\Textarea::create('basic_textarea');
$basic_textarea->render();
\PcLocations_001\print_code($basic_textarea->as_string());
\PcLocations_001\heading('Detailed Textarea');
$detailed_textarea = \PcLocations_001\PinkCrab\Form_Fields\Fields\Textarea::create('detailed_textarea')->columns(80)->rows(10)->autocomplete('words')->current('Once upon a time.....')->label('Textareas are great')->show_label();
$detailed_textarea->render();
\PcLocations_001\print_code($detailed_textarea->as_string());
/**
 * Select
 */
print '<h2>Select</h2>';
\PcLocations_001\heading('Basic Select');
$basic_select = \PcLocations_001\PinkCrab\Form_Fields\Fields\Select::create('basic_select')->options(array('a' => 'Alpha', 'b' => 'Bravo'));
$basic_select->render();
\PcLocations_001\print_code($basic_select->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Comprehensive Select');
$comprehensive_select = \PcLocations_001\PinkCrab\Form_Fields\Fields\Select::create('comprehensive_select')->label('Comprehensive Select(LABEL)')->class('some classes')->attribute('data-nonce', 'some-value')->read_only()->show_label()->label_position(\PcLocations_001\PinkCrab\Form_Fields\Label_Config::AFTER_INPUT | \PcLocations_001\PinkCrab\Form_Fields\Label_Config::LINKED_LABEL)->options(array('key1' => 'Value No.1', 'Key2' => 'Value No.2', 'key3' => 'Value No.3', 'key4' => 'Value No.4', 'key5' => 'Value No.5', 'key6' => 'Value No.6'))->current('key1')->placeholder('Please select');
// Add class to label
$comprehensive_select->label_config()->classes('label-class');
$comprehensive_select->render();
\PcLocations_001\print_code($comprehensive_select->as_string());
\PcLocations_001\heading('Select with Option Groups');
$grouped_select = \PcLocations_001\PinkCrab\Form_Fields\Fields\Select::create('select_with_groups')->label('Select with Option Groups')->options(array('a' => 'Alpha', 'b' => 'Bravo', 'Group 1' => array('c' => 'Charlie', 'd' => 'Delta'), 'Group 2' => array('e' => 'Echo', 'f' => 'Foxtrot')));
$grouped_select->render();
\PcLocations_001\print_code($grouped_select->as_string());
\PcLocations_001\hr();
\PcLocations_001\heading('Multi Select');
$multi_select = \PcLocations_001\PinkCrab\Form_Fields\Fields\Select::create('multi_select')->label('Multi Select')->options(array('a' => 'Alpha', 'b' => 'Bravo', 'c' => 'Charlie', 'd' => 'Delta', 'e' => 'Echo', 'f' => 'Foxtrot'))->multiple()->current(array('a', 'b'));
$multi_select->render();
\PcLocations_001\print_code($multi_select->as_string());
\PcLocations_001\hr();
/**
 * Raw HTML
 */
print '<h2>Raw HTML</h2>';
\PcLocations_001\heading('Free Form Colour Picker');
$html = \PcLocations_001\PinkCrab\Form_Fields\Fields\Raw_HTML::create('free-form')->content(function (\PcLocations_001\PinkCrab\Form_Fields\Abstract_Field $field) {
    return '<input type="color" name="' . $field->get_key() . '" id="' . $field->get_key() . '"><br><span>Pick your tone</span>';
});
$html->render();
\PcLocations_001\print_code($html->as_string());
\PcLocations_001\hr();
