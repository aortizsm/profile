<?php
defined('MOODLE_INTERNAL') || die();

/**
 *
 * @package    block
 * @subpackage nuntiusprofile
 * @copyright  2020 Alberto Ortiz
 * @author     Alberto Ortiz <aortizsm@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$capabilities = array(
    'block/nuntiusprofile:myaddinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ),
    'block/nuntiusprofile:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
);
