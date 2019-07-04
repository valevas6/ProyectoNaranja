<?php

namespace Drupal\text_generator\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class TextGeneratorForm extends ConfigFormBase{
  public function getFormId(){
    return 'text_generator_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    $form = parent:: buildForm ($form, $form_state);

    $config= $this->config('text_generator.settings');

    $form['page_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Page title for text generator'),
      '#description' => $this->t('Add title here'),
      '#default_value' => $config->get('text_generator.title'),
    ];
    $form['text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Source text for generation'),
      '#description' => $this->t('Write one sentence per line. These sentence will be used to generate dummy text'),
      '#default_value' => $config->get('text_generator.text'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state){
    $config = $this->config('text_generator.settings');
    $config->set('text_generator.title', $form_state->getValue('page_title'));
    $config->set('text_generator.text', $form_state->getValue('text'));
    $config->save();

    return parent::submitForm($form, $form_state);
  }

  protected function getEditableConfigNames(){
    return[
       'text_generator.settings'
    ];
  }
}
