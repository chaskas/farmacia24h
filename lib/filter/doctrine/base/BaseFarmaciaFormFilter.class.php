<?php

/**
 * Farmacia filter form base class.
 *
 * @package    farmacia24h
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFarmaciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'direccion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'local'     => new sfWidgetFormFilterInput(),
      'horario'   => new sfWidgetFormFilterInput(),
      'comuna_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'), 'add_empty' => true)),
      'cadena_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cadena'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'direccion' => new sfValidatorPass(array('required' => false)),
      'local'     => new sfValidatorPass(array('required' => false)),
      'horario'   => new sfValidatorPass(array('required' => false)),
      'comuna_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comuna'), 'column' => 'id')),
      'cadena_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cadena'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('farmacia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Farmacia';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'direccion' => 'Text',
      'local'     => 'Text',
      'horario'   => 'Text',
      'comuna_id' => 'ForeignKey',
      'cadena_id' => 'ForeignKey',
    );
  }
}
