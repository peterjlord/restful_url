<?php

$plugin = array(
  'label' => t('Urls'),
  'resource' => 'urls',
  'name' => 'urls__1_0',
  'entity_type' => 'node',
  'bundle' => 'url',
  'description' => t('Export the url content type with "cookie" authentication.'),
  'class' => 'RestfulExampleUrlsResource',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
);
