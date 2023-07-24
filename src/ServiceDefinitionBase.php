<?php

namespace Drupal\services;

use Drupal\Core\Plugin\ContextAwarePluginTrait;
use Drupal\Core\Plugin\PluginBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;

/**
 * Class \Drupal\services\ServiceDefinitionBase.
 */
abstract class ServiceDefinitionBase extends PluginBase implements ServiceDefinitionInterface {
  use ContextAwarePluginTrait;

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    return $this->pluginDefinition['title'];
  }

  /**
   * {@inheritdoc}
   */
  public function getCategory() {
    return $this->pluginDefinition['category'];
  }

  /**
   * {@inheritdoc}
   */
  public function getPath() {
    return $this->pluginDefinition['path'];
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->pluginDefinition['description'];
  }

  /**
   * {@inheritdoc}
   */
  public function supportsTranslation() {
    return $this->pluginDefinition['translatable'];
  }

  /**
   * {@inheritdoc}
   */
  public function getMethods() {
    return $this->pluginDefinition['methods'];
  }

  /**
   * {@inheritdoc}
   */
  public function getArguments() {
    return $this->pluginDefinition['arguments'];
  }

  /**
   * {@inheritdoc}
   */
  public function processRoute(Route $route) {
    $route->addRequirements(['_access' => 'TRUE']);
  }

  /**
   * {@inheritdoc}
   */
  public function processResponse(Response $response) {}

}
