<?php
/**
 * @file
 * Contains \Drupal\likes\Form\LikesForm.
 */

namespace Drupal\likes\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class LikesForm extends FormBase {
  /**
   * {@inheritdoc}
   */

  public function getFormId() {
     return 'likes_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $uid = \Drupal::currentUser()->id();

    $path = \Drupal::request()->getpathInfo();

    $arg  = explode('/',$path);

    $nid  = $arg[3];

    if(is_numeric($nid)) {

    $count =  db_query('SELECT count(*)FROM user_likes WHERE uid = '.$uid.' and nid = '.$nid.'')->fetchField();

    $form['uid'] = array(
      '#type' => 'hidden',
      '#title' => t('user_id'),
      '#value' => $uid,
    );

    $form['nid'] = array(
      '#type' => 'hidden',
      '#title' => t('node_id'),
      '#value' => $nid,
    );

  if($count<=0) {

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Like'),
      '#background-color' => '#337ab7',
    );
  }
  else
  {
      $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Dislike'),
      '#background-color' => '#337ab7',
    );
  }
    return $form;
   }
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  if($form_state->getValue('submit')=="Dislike") {

    $num_deleted = db_delete('user_likes')
        ->condition('nid', $form_state->getValue('nid'))
        ->condition('uid', $form_state->getValue('uid'))
        ->execute();

      $like_count =  db_query('SELECT field_no_of_likes_value FROM node__field_no_of_likes WHERE entity_id = '.$form_state->getValue('nid'))->fetchField();

      $like_count =$like_count - 1;

      $query = \Drupal::database()->update('node__field_no_of_likes');

      $query->fields([
      'field_no_of_likes_value' =>$like_count,
      ]);

      $query->condition('entity_id',$form_state->getValue('nid'));

      $query->execute();

  }
  else
  {
      db_insert('user_likes')
        ->fields(array(
          'uid' => $form_state->getValue('uid'),
          'nid' => $form_state->getValue('nid'),
        ))->execute();

        $like_count =  db_query('SELECT field_no_of_likes_value FROM node__field_no_of_likes WHERE entity_id = '.$form_state->getValue('nid'))->fetchField();

       $like_count =$like_count + 1;

        $query = \Drupal::database()->update('node__field_no_of_likes');

        $query->fields([
        'field_no_of_likes_value' =>$like_count,
        ]);

        $query->condition('entity_id',$form_state->getValue('nid'));

        $query->execute();

        //drupal_set_message($like_count."-------successfully likes");
  }

  }

}
?>
