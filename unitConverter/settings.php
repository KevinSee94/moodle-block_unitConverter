<?php
$settings->add(new admin_setting_heading(
            'headerconfig',
            get_string('headerconfig', 'block_unitConverter'),
            get_string('descconfig', 'block_unitConverter')
        ));
 
$settings->add(new admin_setting_configcheckbox(
            'unitConverter/Allow_HTML',
            get_string('labelallowhtml', 'block_unitConverter'),
            get_string('descallowhtml', 'block_unitConverter'),
            '0'
        ));
?>