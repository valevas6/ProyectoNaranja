<?php

namespace Drupal\text_generator\Controller;

class TextGeneratorController{
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('<h1>Rest API usage</h1>
      <p> Typically, you expose entities as REST resources either to build a decoupled Drupal site, to let a native mobile iOS/Android app talk consume/feed a Drupal site, or to integrate with some web service. The most common use case: interacting with entities. For REST resources exposing entities, the Entity Access API determines whether entities can be interacted with. For example, users must have the access content permission to be able to GET a Node entity (view it), and the create article contentpermission to be able to POST an article Node (create it). By default, the REST module supports json and xml. If you install cores HAL module, you can also enable the hal_json format. By installing additional modules, you can get access to more formats — see Serialization API for details. </p>
      <h1>What is REST?</h1>
      <p>Web Services make it possible for other applications to read and update information on your site via the Web. REST is one of a number of different ways of making Web Services available on your site. In contrast to other techniques such as SOAP or XML-RPC, REST encourages developers to rely on HTTP methods (such as GET and POST) to operate on resources (data managed by Drupal).
      If you are new to REST, you can find out more about HTTP methods, and other REST topics such as media types, and hypermedia, in the More info on REST section.</p>'),
    );
  }
}

