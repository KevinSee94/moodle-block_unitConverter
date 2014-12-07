<?php
//According to Moodle tutorial, this file will:
//load base moodle API and any necessary third party modules
//loads the necesary course object and globals, performs necessary access control,
//and loads our form and branches execution appropriately based on our form state.

require_once('../../config.php');
require_once('unitConverter_form.php');
 
global $DB, $OUTPUT, $PAGE;
 
// Check for all required variables.
$courseid = required_param('courseid', PARAM_INT);
 
 
if (!$course = $DB->get_record('course', array('id' => $courseid))) {
    print_error('invalidcourse', 'block_unitConverter', $courseid);
}
 
require_login($course);

$PAGE->set_url('/blocks/unitConverter/view.php', array('id' => $courseid));
$PAGE->set_pagelayout('standard');
$PAGE->set_heading(get_string('edithtml', 'block_unitConverter'));
 
$unitConverter = new unitConverter_form();

//Form State Control
if($unitConverter->is_cancelled()) {
    // Cancelled forms redirect to the course main page.
    $courseurl = new moodle_url('/course/view.php', array('id' => $id));
    redirect($courseurl);
} else if ($unitConverter->get_data()) {
    // We need to add code to appropriately act on and store the submitted data
    // but for now we will just redirect back to the course main page.
    $courseurl = new moodle_url('/course/view.php', array('id' => $courseid));
    redirect($courseurl);
} else {
    // form didn't validate or this is the first display
    $site = get_site();
    echo $OUTPUT->header();
    $unitConverter->display();
    echo $OUTPUT->footer();
}

echo $OUTPUT->header();
$unitConverter->display();
echo $OUTPUT->footer();
 
$unitConverter->display();
?>