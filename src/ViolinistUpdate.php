<?php

namespace eiriksm\ViolinistMessages;

class ViolinistUpdate {

  /**
   * @var string
   */
  private $name;

  /**
   * @var string
   */
  private $currentVersion;

  /**
   * @var string
   */
  private $newVersion;

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getCurrentVersion() {
    return $this->currentVersion;
  }

  /**
   * @param string $currentVersion
   */
  public function setCurrentVersion($currentVersion) {
    $this->currentVersion = $currentVersion;
  }

  /**
   * @return string
   */
  public function getNewVersion() {
    return $this->newVersion;
  }

  /**
   * @param string $newVersion
   */
  public function setNewVersion($newVersion) {
    $this->newVersion = $newVersion;
  }

  /**
   * @param array $item
   *
   * @return \eiriksm\ViolinistMessages\ViolinistUpdate
   */
  public static function fromLegacyFormat(array $item) {
    $update = new ViolinistUpdate();
    $update->setName($item[0]);
    $update->setCurrentVersion($item[1]);
    $update->setNewVersion($item[2]);
    return $update;
  }
}