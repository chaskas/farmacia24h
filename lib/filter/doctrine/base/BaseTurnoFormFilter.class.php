<?php

/**
 * Turno filter form base class.
 *
 * @package    farmacia24h
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTurnoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dia'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mes'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comuna_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comuna'), 'add_empty' => true)),
      'farmacia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Farmacia'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'dia'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mes'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comuna_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comuna'), 'column' => 'id')),
      'farmacia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Farmacia'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('turno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Turno';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'dia'         => 'Number',
      'mes'         => 'Number',
      'comuna_id'   => 'ForeignKey',
      'farmacia_id' => 'ForeignKey',
    );
  }
}
