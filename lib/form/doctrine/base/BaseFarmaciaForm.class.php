<?php

/**
 * Farmacia form base class.
 *
 * @method Farmacia getObject() Returns the current form's model object
 *
 * @package    farmacia24h
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFarmaciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'direccion' => new sfWidgetFormInputText(),
      'local'     => new sfWidgetFormInputText(),
      'horario'   => new sfWidgetFormInputText(),
      'comuna_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'), 'add_empty' => false)),
      'cadena_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cadena'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'direccion' => new sfValidatorPass(),
      'local'     => new sfValidatorPass(array('required' => false)),
      'horario'   => new sfValidatorPass(array('required' => false)),
      'comuna_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'))),
      'cadena_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cadena'))),
    ));

    $this->widgetSchema->setNameFormat('farmacia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Farmacia';
  }

}
