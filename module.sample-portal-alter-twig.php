<?php

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'sample-portal-alter-twig/1.0.0', array(
    // Identification
    'label' => 'Sample portal (twig alteration)',
    'category' => 'Portal',
    // Setup
    'dependencies' => array(
        'itop-portal-base/1.0.0'
    ),
    'mandatory' => false,
    'visible' => true,
    // Components
    'datamodel' => array(
    ),
    'webservice' => array(
    //'webservices.sample-portal-alter-twig.php',
    ),
    'dictionary' => array(
    //'fr.dict.sample-portal-alter-twig.php',
    ),
    'data.struct' => array(
    //'data.struct.sample-portal-alter-twig.xml',
    ),
    'data.sample' => array(
    //'data.sample.sample-portal-alter-twig.xml',
    ),
    // Documentation
    'doc.manual_setup' => '',
    'doc.more_information' => '',
    // Default settings
    'settings' => array(
    ),
    )
);
?>
