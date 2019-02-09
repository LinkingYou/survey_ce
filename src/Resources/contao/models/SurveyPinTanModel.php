<?php

/*
 * @copyright  Helmut Schottmüller 2005-2018 <http://github.com/hschottm>
 * @author     Helmut Schottmüller (hschottm)
 * @package    contao-survey
 * @license    LGPL-3.0+, CC-BY-NC-3.0
 * @see	      https://github.com/hschottm/survey_ce
 */

namespace LinkingYou\SurveyBundle;

use Contao\Model;

class SurveyPinTanModel extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected static $strTable = 'tl_survey_pin_tan';
}

class_alias(SurveyPinTanModel::class, 'SurveyPinTanModel');
