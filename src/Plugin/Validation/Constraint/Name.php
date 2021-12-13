<?php

namespace Drupal\doktor\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the submitted value is a valid name.
 *
 * @Constraint(
 *   id = "Name",
 *   label = @Translation("Name", context = "Validation"),
 *   type = "string"
 * )
 */
class Name extends Constraint {

  /**
   *  The message that will be shown if the value is not a name.
   */
   public $notValid = '%value is not valid';

}

