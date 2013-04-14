<?php

/**
 * Turno form base class.
 *
 * @method Turno getObject() Returns the current form's model object
 *
 * @package    farmacia24h
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTurnoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'dia'         => new sfWidgetFormInputText(),
      'mes'         => new sfWidgetFormInputText(),
      'comuna_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'), 'add_empty' => false)),
      'farmacia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Farmacia'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'dia'         => new sfValidatorInteger(),
      'mes'         => new sfValidatorInteger(),
      'comuna_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'))),
      'farmacia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Farmacia'))),
    ));

    $this->widgetSchema->setNameFormat('turno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turno';
  }

}
