<?php
namespace Kofus\LibPhoneNumber;

return array(
    'view_helpers' => array(
        'invokables' => array(
            'phoneNumberFormat' => 'Kofus\LibPhoneNumber\View\Helper\PhoneNumberFormatHelper'
        )
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Kofus\LibPhoneNumber' => true
        ),
        'module_layouts' => array(
            'Kofus\LibPhoneNumber' => 'kofus/layout/admin'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    )
);


