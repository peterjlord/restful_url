<?php

/**
 * @file
 * Contains RestfulExampleArticlesResource__1_1.
 */

class RestfulExampleUrlsResource__1_1 extends RestfulExampleUrlsResource {
  /**
   * Overrides RestfulExampleArticlesResource::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();
    unset($public_fields['self']);

    $public_fields['options'] = array(
      'property' => 'field_options',
    );
    $public_fields['url'] = array(
      'property' => 'field_url',
    );
    $public_fields['random-int'] = array(
      'callback' => 'static::randomNumber',
    );
    return $public_fields;
  }
  public static function randomNumber($wrapper) {
    return mt_rand();
  }
}

