<?php

namespace Drupal\prosite_champ_devis\EventSubscriber;

use Drupal\Core\Session\AccountProxyInterface;
use Drupal\hook_event_dispatcher\Event\Form\FormAlterEvent;
use Drupal\hook_event_dispatcher\HookEventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class AlterNodeFormSubscriber
 *
 * @package Drupal\prosite_champ_devis\EventSubscriber
 */
class AlterNodeFormSubscriber implements EventSubscriberInterface {


  /**
   * @param \Drupal\hook_event_dispatcher\Event\Form\FormAlterEvent $event
   */
  public function alterForm(FormAlterEvent $event) {

       /*
     * Récupère le rôle de l'utilisateur courrant , le formulaire et l'état
     * du formulaire
     */
    $form = $event->getFormState();
    $buildInfo = $form->getBuildInfo();
    if ('node_form' === $buildInfo['base_form_id']){
      $buildInfo['callback_object']->getEntity()->status->value  = 1;
    }
  }

  /**
   * @return array
   * of event
   */
  public static function getSubscribedEvents() {
    return [
      HookEventDispatcherInterface::FORM_ALTER => 'alterForm',
    ];
  }

}
