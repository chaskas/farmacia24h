<?php

/**
 * BaseRegion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $numero
 * @property text $nombre
 * @property Doctrine_Collection $Comunas
 * 
 * @method integer             getNumero()  Returns the current record's "numero" value
 * @method text                getNombre()  Returns the current record's "nombre" value
 * @method Doctrine_Collection getComunas() Returns the current record's "Comunas" collection
 * @method Region              setNumero()  Sets the current record's "numero" value
 * @method Region              setNombre()  Sets the current record's "nombre" value
 * @method Region              setComunas() Sets the current record's "Comunas" collection
 * 
 * @package    farmacia24h
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo [at] webdevel [dot] cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('region');
        $this->hasColumn('numero', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nombre', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comuna as Comunas', array(
             'local' => 'id',
             'foreign' => 'region_id'));
    }
}