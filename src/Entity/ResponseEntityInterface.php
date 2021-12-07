<?php

namespace Drupal\doktor\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Response entities.
 *
 * @ingroup doktor
 */
interface ResponseEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Response name.
   *
   * @return string
   *   Name of the Response.
   */
  public function getName();

  /**
   * Sets the Response name.
   *
   * @param string $name
   *   The Response name.
   *
   * @return \Drupal\doktor\Entity\ResponseEntityInterface
   *   The called Response entity.
   */
  public function setName($name);

  /**
   * Gets the Response creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Response.
   */
  public function getCreatedTime();

  /**
   * Sets the Response creation timestamp.
   *
   * @param int $timestamp
   *   The Response creation timestamp.
   *
   * @return \Drupal\doktor\Entity\ResponseEntityInterface
   *   The called Response entity.
   */
  public function setCreatedTime($timestamp);

}
