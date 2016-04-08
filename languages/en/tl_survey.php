<?php

$GLOBALS['TL_LANG']['tl_survey']['title']   = array('Title', 'Please enter the survey title.');
$GLOBALS['TL_LANG']['tl_survey']['author']   = array('Author', 'Please enter the author name.');
$GLOBALS['TL_LANG']['tl_survey']['description']   = array('Description', 'Please enter a survey description.');
$GLOBALS['TL_LANG']['tl_survey']['tstamp']   = array('Last change', 'Date and time of the last change.');
$GLOBALS['TL_LANG']['tl_survey']['language']    = array('Language', 'Please select the survey language.');
$GLOBALS['TL_LANG']['tl_survey']['introduction']     = array('Introduction', 'Please enter a survey introduction. The introduction will be shown on the start page of the survey.');
$GLOBALS['TL_LANG']['tl_survey']['finalsubmission']     = array('Final statement', 'Please enter a final statement. The final statement will be shown when the survey is finished.');
$GLOBALS['TL_LANG']['tl_survey']['online_start']      = array('Show from', 'Do not show the survey on the website before this day.');
$GLOBALS['TL_LANG']['tl_survey']['online_end']       = array('Show until', 'Do not show the page on the website after this day.');
$GLOBALS['TL_LANG']['tl_survey']['limit_groups']       = array('Limit members', 'Limit the access to selected member groups.');
$GLOBALS['TL_LANG']['tl_survey']['allowed_groups']       = array('Member groups', 'Choose the member groups that should be able to participate in the survey.');
$GLOBALS['TL_LANG']['tl_survey']['access']     = array('Survey access', 'Choose the appropriate access method for the survey.');
$GLOBALS['TL_LANG']['tl_survey']['access']['explanation']     = 'Please choose the appropriate access method for the survey.';
$GLOBALS['TL_LANG']['tl_survey']['access']['anon']     = array('Anonymized access','Everyone can participate in the survey, even more than once. Access is anonymized. Survey results cannot be tracked back to a participant.');
$GLOBALS['TL_LANG']['tl_survey']['access']['anoncode']     = array('Anonymized access with TAN code','Only participants with a valid TAN code can participate in the survey. A survey can be finished only once per TAN code. Access is anonymized. Survey result can be tracked back to each TAN.');
$GLOBALS['TL_LANG']['tl_survey']['access']['nonanoncode']     = array('Personalized access','Only participants with a valid frontend login can participate in the survey. A survey can be finished only once per participant. Survey results can be tracked back to each participant.');
$GLOBALS['TL_LANG']['tl_survey']['usecookie']     = array('Remember participants', 'Remembers a survey participant using a cookie.');
$GLOBALS['TL_LANG']['tl_survey']['show_title']     = array('Show survey title', 'Always show the survey title on top of the survey.');
$GLOBALS['TL_LANG']['tl_survey']['show_cancel']     = array('Show cancel', 'Always show an <strong>Exit this survey</strong> command on top of the survey.');
$GLOBALS['TL_LANG']['tl_survey']['allowback']     = array('Show "Previous" button', 'Shows a "Previous" button in the survey navigation to go back to the previous page.');
$GLOBALS['TL_LANG']['tl_survey']['immediate_start'] = array('Start survey immediately', 'Check this option if you want to show the form immediately.');
$GLOBALS['TL_LANG']['tl_survey']['jumpto']     = array('Redirect to page', 'Select a page to redirect the survey after it was finished.');

$GLOBALS['TL_LANG']['tl_survey']['new']    = array('New survey', 'Create a new survey');
$GLOBALS['TL_LANG']['tl_survey']['show']   = array('Survey details', 'Show the details of survey %s');
$GLOBALS['TL_LANG']['tl_survey']['edit']   = array('Edit survey', 'Edit survey ID %s');
$GLOBALS['TL_LANG']['tl_survey']['edit_']   = array('You cannot edit the survey', 'Survey ID %s is locked. Participant results already exist.');
$GLOBALS['TL_LANG']['tl_survey']['participants']   = array('Survey participants', 'Edit participants of survey ID %s');
$GLOBALS['TL_LANG']['tl_survey']['statistics']   = array('Statistics', 'Show statistics of survey ID %s');
$GLOBALS['TL_LANG']['tl_survey']['pintan']   = array('TAN codes', 'Create TAN codes for survey ID %s');
$GLOBALS['TL_LANG']['tl_survey']['copy']   = array('Duplicate survey', 'Duplicate survey ID %s');
$GLOBALS['TL_LANG']['tl_survey']['delete'] = array('Delete survey', 'Delete survey ID %s');

$GLOBALS['TL_LANG']['tl_survey']['skipEmpty'] = array('Skip empty fields', 'Hide empty fields in the e-mail.');
$GLOBALS['TL_LANG']['tl_survey']['sendConfirmationMail'] = array('Send confirmation via e-mail', 'If you choose this option, a confirmation will be sent via e-mail to the sender of the form.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailRecipientField'] = array('Form field containing e-mail of recipient', 'Choose the form field in which the user enters his e-mail address or a field containing the e-mail address as value.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailRecipient'] = array('Recipient', 'Please enter one or more recipient e-mail addresses if e-mail address is not defined by a form field or if you want e-mail to be sent to additional recipients. Separate multiple addresses with comma.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailSender'] = array('Sender', 'Please enter e-mail address to be used as sender.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailReplyto'] = array('Reply to', 'Please enter one or more e-mail addresses if replies to this e-mail should not be sent to sender address. Separate multiple addresses with comma.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailSubject'] = array('Subject', 'Please enter the subject of confirmation mail. If you do not enter a subject, the probability increases that the e-mail is identified as SPAM.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailText'] = array('Text of confirmation mail', 'Please enter the text of confirmation mail. You can use standard insert tags and tags like form::NAME_OF_FORMFIELD .');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailTemplate'] = array('HTML-template for confirmation mail', 'If confirmation mail should be sent as HTML mail, please choose your HTML-template from file system.');
$GLOBALS['TL_LANG']['tl_survey']['addConfirmationMailAttachments'] = array('Add attachments to confirmation e-mail', 'You can select files that will be sent as attachments to the confirmation e-mail.');
$GLOBALS['TL_LANG']['tl_survey']['confirmationMailAttachments'] = array('Attachments', 'Pleae choose files to attach.');
$GLOBALS['TL_LANG']['tl_survey']['addFormattedMailAttachments'] = array('Add attachments to e-mail', 'You can select files that will be sent as attachments to the e-mail.');
$GLOBALS['TL_LANG']['tl_survey']['formattedMailAttachments'] = array('Attachments', 'Pleae choose files to attach.');
$GLOBALS['TL_LANG']['tl_survey']['sendFormattedMail'] = array('Send form data via e-mail (formatted text or html)', 'The text of mail can be defined using insert tags. Mail can be sent as HTML mail.');
$GLOBALS['TL_LANG']['tl_survey']['formattedMailText'] = array('Text of mail', 'Please enter the text of mail. You can use standard insert tags and tags like form::NAME_OF_FORMFIELD .');
$GLOBALS['TL_LANG']['tl_survey']['formattedMailTemplate'] = array('HTML-template for mail', 'If mail should be sent as HTML mail, please choose your HTML-template from file system.');

/**
* Legends
*/
$GLOBALS['TL_LANG']['tl_survey']['head_legend']    = 'Head settings';
$GLOBALS['TL_LANG']['tl_survey']['title_legend']    = 'Title and description';
$GLOBALS['TL_LANG']['tl_survey']['activation_legend']    = 'Activation';
$GLOBALS['TL_LANG']['tl_survey']['access_legend']    = 'Access';
$GLOBALS['TL_LANG']['tl_survey']['texts_legend']    = 'Statements';
$GLOBALS['TL_LANG']['tl_survey']['misc_legend']    = 'General settings';
$GLOBALS['TL_LANG']['tl_survey']['sendformattedmail_legend'] = 'Send via e-mail';
$GLOBALS['TL_LANG']['tl_survey']['sendconfirmationmail_legend'] = 'Send confirmation via e-mail';

?>
