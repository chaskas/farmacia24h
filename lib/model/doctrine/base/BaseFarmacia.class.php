<?php

/**
 * BaseFarmacia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property text $direccion
 * @property text $local
 * @property text $horario
 * @property integer $comuna_id
 * @property integer $cadena_id
 * @property Comuna $Comuna
 * @property Cadena $Cadena
 * @property Doctrine_Collection $Turnos
 * 
 * @method text                getDireccion() Returns the current record's "direccion" value
 * @method text                getLocal()     Returns the current record's "local" value
 * @method text                getHorario()   Returns the current record's "horario" value
 * @method integer             getComunaId()  Returns the current record's "comuna_id" value
 * @method integer             getCadenaId()  Returns the current record's "cadena_id" value
 * @method Comuna              getComuna()    Returns the current record's "Comuna" value
 * @method Cadena              getCadena()    Returns the current record's "Cadena" value
 * @method Doctrine_Collection getTurnos()    Returns the current record's "Turnos" collection
 * @method Farmacia            setDireccion() Sets the current record's "direccion" value
 * @method Farmacia            setLocal()     Sets the current record's "local" value
 * @method Farmacia            setHorario()   Sets the current record's "horario" value
 * @method Farmacia            setComunaId()  Sets the current record's "comuna_id" value
 * @method Farmacia            setCadenaId()  Sets the current record's "cadena_id" value
 * @method Farmacia            setComuna()    Sets the current record's "Comuna" value
 * @method Farmacia            setCadena()    Sets the current record's "Cadena" value
 * @method Farmacia            setTurnos()    Sets the current record's "Turnos" collection
 * 
 * @package    farmacia24h
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFarmacia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('farmacia');
        $this->hasColumn('direccion', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
        $this->hasColumn('local', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('horario', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('comuna_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('cadena_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Comuna', array(
             'local' => 'comuna_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Cadena', array(
             'local' => 'cadena_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Turno as Turnos', array(
             'local' => 'id',
             'foreign' => 'farmacia_id'));
    }
}