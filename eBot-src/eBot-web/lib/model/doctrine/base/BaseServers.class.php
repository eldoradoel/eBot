<?php

/**
 * BaseServers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property varchar $ip
 * @property varchar $rcon
 * @property varchar $hostname
 * @property varchar $tv_ip
 * @property Doctrine_Collection $Matchs
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method varchar             getIp()       Returns the current record's "ip" value
 * @method varchar             getRcon()     Returns the current record's "rcon" value
 * @method varchar             getHostname() Returns the current record's "hostname" value
 * @method varchar             getTvIp()     Returns the current record's "tv_ip" value
 * @method Doctrine_Collection getMatchs()   Returns the current record's "Matchs" collection
 * @method Servers             setId()       Sets the current record's "id" value
 * @method Servers             setIp()       Sets the current record's "ip" value
 * @method Servers             setRcon()     Sets the current record's "rcon" value
 * @method Servers             setHostname() Sets the current record's "hostname" value
 * @method Servers             setTvIp()     Sets the current record's "tv_ip" value
 * @method Servers             setMatchs()   Sets the current record's "Matchs" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseServers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('servers');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('ip', 'varchar', 50, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('rcon', 'varchar', 50, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('hostname', 'varchar', 100, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('tv_ip', 'varchar', 100, array(
             'type' => 'varchar',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Matchs', array(
             'local' => 'id',
             'foreign' => 'server_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}