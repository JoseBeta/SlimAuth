<?php



/**
 * This class defines the structure of the 'client' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.auth.map
 */
class ClientTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'auth.map.ClientTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('client');
        $this->setPhpName('Client');
        $this->setClassname('Client');
        $this->setPackage('auth');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'BIGINT', true, 11, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 100, null);
        $this->addColumn('surname', 'Surname', 'VARCHAR', false, 200, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('tlf', 'Tlf', 'VARCHAR', false, 20, null);
        $this->addColumn('adress', 'Adress', 'VARCHAR', false, 255, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 255, null);
        $this->addColumn('country_id', 'CountryId', 'BIGINT', false, 11, null);
        $this->addColumn('card_data', 'CardData', 'VARCHAR', false, 255, null);
        $this->addColumn('country_name', 'CountryName', 'VARCHAR', false, 80, null);
        $this->addColumn('social_id', 'SocialId', 'VARCHAR', false, 100, null);
        $this->addColumn('service', 'Service', 'VARCHAR', false, 20, null);
        $this->addColumn('token', 'Token', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ClientTableMap
