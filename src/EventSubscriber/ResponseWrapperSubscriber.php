<?php

namespace Drupal\news_legacy_feeds\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ResponseWrapperSubscriber implements EventSubscriberInterface {

  public static function getSubscribedEvents() {
    return [];
    // // The priority -10 ensures this runs after most default system operations.
    // return [
    //   KernelEvents::RESPONSE => ['onResponse', -10],
    // ];
  }

  public function onResponse(ResponseEvent $event) {
    $response = $event->getResponse();

//     if ($response->headers->get('Content-Type') === 'application/json') {
//       $data = json_decode($response->getContent(), true);
//       $wrappedData = ['terms' => $data];
//       $response->setContent(json_encode($wrappedData));
//       $event->setResponse($response);
//     }
  }

}
