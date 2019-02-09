<?php

/*
 * @copyright  Helmut Schottmüller 2005-2018 <http://github.com/hschottm>
 * @author     Helmut Schottmüller (hschottm)
 * @package    contao-survey
 * @license    LGPL-3.0+, CC-BY-NC-3.0
 * @see	      https://github.com/hschottm/survey_ce
 */

use LinkingYou\SurveyBundle\ContentSurvey;
use LinkingYou\SurveyBundle\FormConstantSumQuestion;
use LinkingYou\SurveyBundle\FormMatrixQuestion;
use LinkingYou\SurveyBundle\FormMultipleChoiceQuestion;
use LinkingYou\SurveyBundle\FormOpenEndedQuestion;
use LinkingYou\SurveyBundle\SurveyPINTAN;
use LinkingYou\SurveyBundle\SurveyResultDetails;
use LinkingYou\SurveyBundle\SurveyQuestionOpenended;
use LinkingYou\SurveyBundle\SurveyQuestionMultiplechoice;
use LinkingYou\SurveyBundle\SurveyQuestionMatrix;
use LinkingYou\SurveyBundle\SurveyQuestionConstantsum;

/*
 * Add survey element
 */
array_insert($GLOBALS['TL_CTE']['includes'], 2, [
    'survey' => ContentSurvey::class,
]);

/*
* Add frontend widgets
*/

/*
 * FRONT END MODULES
 */

/*
 * BACK END FORM FIELDS
 */
array_insert($GLOBALS['BE_MOD'], 3, [
    'surveys' => [
            'survey' => [
                    'tables' => [
                            'tl_survey', 'tl_survey_page', 'tl_survey_question', 'tl_survey_participant', 'tl_survey_pin_tan',
                        ],
                    'scale' => ['tl_survey_question', 'addScale'],
                    'export' => [SurveyResultDetails::class, 'exportResults'],
                    'createtan' => [SurveyPINTAN::class, 'createTAN'],
                    'exporttan' => [SurveyPINTAN::class, 'exportTAN'],
                    'cumulated' => [SurveyResultDetails::class, 'showCumulated'],
                    'details' => [SurveyResultDetails::class, 'showDetails'],
                ],
            'scale' => [
                    'tables' => [
                            'tl_survey_scale_folder', 'tl_survey_scale',
                        ],
                    'icon' => 'bundles/hschottmsurvey/images/scale.png',
                ],
        ],
]);

if (TL_MODE === 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/hschottmsurvey/css/survey.css|static';
}

$GLOBALS['BE_MOD']['surveys']['survey']['exportraw'] = [SurveyResultDetails::class, 'exportResultsRaw'];

$GLOBALS['TL_SVY']['openended'] = FormOpenEndedQuestion::class;
$GLOBALS['TL_SVY']['multiplechoice'] = FormMultipleChoiceQuestion::class;
$GLOBALS['TL_SVY']['matrix'] = FormMatrixQuestion::class;
$GLOBALS['TL_SVY']['constantsum'] = FormConstantSumQuestion::class;

$GLOBALS['TL_SVY']['q_openended'] = SurveyQuestionOpenended::class;
$GLOBALS['TL_SVY']['q_multiplechoice'] = SurveyQuestionMultiplechoice::class;
$GLOBALS['TL_SVY']['q_matrix'] = SurveyQuestionMatrix::class;
$GLOBALS['TL_SVY']['q_constantsum'] = SurveyQuestionConstantsum::class;

/*
 * Set the member URL parameter as url keyword
 */
$GLOBALS['TL_CONFIG']['urlKeywords'] .= (\strlen(trim($GLOBALS['TL_CONFIG']['urlKeywords'])) ? ',' : '').'code';
