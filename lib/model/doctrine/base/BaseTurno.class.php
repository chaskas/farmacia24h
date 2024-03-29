<?php

/**
 * BaseTurno
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $dia
 * @property integer $mes
 * @property integer $comuna_id
 * @property integer $farmacia_id
 * @property Comuna $Comuna
 * @property Farmacia $Farmacia
 * 
 * @method integer  getDia()         Returns the current record's "dia" value
 * @method integer  getMes()         Returns the current record's "mes" value
 * @method integer  getComunaId()    Returns the current record's "comuna_id" value
 * @method integer  getFarmaciaId()  Returns the current record's "farmacia_id" value
 * @method Comuna   getComuna()      Returns the current record's "Comuna" value
 * @method Farmacia getFarmacia()    Returns the current record's "Farmacia" value
 * @method Turno    setDia()         Sets the current record's "dia" value
 * @method Turno    setMes()         Sets the current record's "mes" value
 * @method Turno    setComunaId()    Sets the current record's "comuna_id" value
 * @method Turno    setFarmaciaId()  Sets the current record's "farmacia_id" value
 * @method Turno    setComuna()      Sets the current record's "Comuna" value
 * @method Turno    setFarmacia()    Sets the current record's "Farmacia" value
 * 
 * @package    farmacia24h
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTurno extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('turno');
        $this->hasColumn('dia', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('mes', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('comuna_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('farmacia_id', 'integer', null, array(
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

        $this->hasOne('Farmacia', array(
             'local' => 'farmacia_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}