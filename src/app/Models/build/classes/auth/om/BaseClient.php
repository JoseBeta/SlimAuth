<?php


/**
 * Base class that represents a row from the 'client' table.
 *
 *
 *
 * @package    propel.generator.auth.om
 */
abstract class BaseClient extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        string
     */
    public $id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the surname field.
     * @var        string
     */
    protected $surname;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the tlf field.
     * @var        string
     */
    protected $tlf;

    /**
     * The value for the adress field.
     * @var        string
     */
    protected $adress;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the country_id field.
     * @var        string
     */
    protected $country_id;

    /**
     * The value for the card_data field.
     * @var        string
     */
    protected $card_data;

    /**
     * The value for the country_name field.
     * @var        string
     */
    protected $country_name;

    /**
     * The value for the social_id field.
     * @var        string
     */
    protected $social_id;

    /**
     * The value for the service field.
     * @var        string
     */
    protected $service;

    /**
     * The value for the token field.
     * @var        string
     */
    protected $token;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [surname] column value.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [tlf] column value.
     *
     * @return string
     */
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Get the [adress] column value.
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the [country_id] column value.
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Get the [card_data] column value.
     *
     * @return string
     */
    public function getCardData()
    {
        return $this->card_data;
    }

    /**
     * Get the [country_name] column value.
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->country_name;
    }

    /**
     * Get the [social_id] column value.
     *
     * @return string
     */
    public function getSocialId()
    {
        return $this->social_id;
    }

    /**
     * Get the [service] column value.
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Get the [token] column value.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ClientPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = ClientPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [surname] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setSurname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->surname !== $v) {
            $this->surname = $v;
            $this->modifiedColumns[] = ClientPeer::SURNAME;
        }


        return $this;
    } // setSurname()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = ClientPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [tlf] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setTlf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tlf !== $v) {
            $this->tlf = $v;
            $this->modifiedColumns[] = ClientPeer::TLF;
        }


        return $this;
    } // setTlf()

    /**
     * Set the value of [adress] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setAdress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adress !== $v) {
            $this->adress = $v;
            $this->modifiedColumns[] = ClientPeer::ADRESS;
        }


        return $this;
    } // setAdress()

    /**
     * Set the value of [city] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = ClientPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [country_id] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setCountryId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country_id !== $v) {
            $this->country_id = $v;
            $this->modifiedColumns[] = ClientPeer::COUNTRY_ID;
        }


        return $this;
    } // setCountryId()

    /**
     * Set the value of [card_data] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setCardData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->card_data !== $v) {
            $this->card_data = $v;
            $this->modifiedColumns[] = ClientPeer::CARD_DATA;
        }


        return $this;
    } // setCardData()

    /**
     * Set the value of [country_name] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setCountryName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country_name !== $v) {
            $this->country_name = $v;
            $this->modifiedColumns[] = ClientPeer::COUNTRY_NAME;
        }


        return $this;
    } // setCountryName()

    /**
     * Set the value of [social_id] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setSocialId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->social_id !== $v) {
            $this->social_id = $v;
            $this->modifiedColumns[] = ClientPeer::SOCIAL_ID;
        }


        return $this;
    } // setSocialId()

    /**
     * Set the value of [service] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service !== $v) {
            $this->service = $v;
            $this->modifiedColumns[] = ClientPeer::SERVICE;
        }


        return $this;
    } // setService()

    /**
     * Set the value of [token] column.
     *
     * @param string $v new value
     * @return Client The current object (for fluent API support)
     */
    public function setToken($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->token !== $v) {
            $this->token = $v;
            $this->modifiedColumns[] = ClientPeer::TOKEN;
        }


        return $this;
    } // setToken()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->surname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->tlf = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->adress = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->city = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->country_id = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->card_data = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->country_name = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->social_id = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->service = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->token = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 13; // 13 = ClientPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Client object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClientQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ClientPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ClientPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ClientPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(ClientPeer::SURNAME)) {
            $modifiedColumns[':p' . $index++]  = '`surname`';
        }
        if ($this->isColumnModified(ClientPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(ClientPeer::TLF)) {
            $modifiedColumns[':p' . $index++]  = '`tlf`';
        }
        if ($this->isColumnModified(ClientPeer::ADRESS)) {
            $modifiedColumns[':p' . $index++]  = '`adress`';
        }
        if ($this->isColumnModified(ClientPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(ClientPeer::COUNTRY_ID)) {
            $modifiedColumns[':p' . $index++]  = '`country_id`';
        }
        if ($this->isColumnModified(ClientPeer::CARD_DATA)) {
            $modifiedColumns[':p' . $index++]  = '`card_data`';
        }
        if ($this->isColumnModified(ClientPeer::COUNTRY_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`country_name`';
        }
        if ($this->isColumnModified(ClientPeer::SOCIAL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`social_id`';
        }
        if ($this->isColumnModified(ClientPeer::SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`service`';
        }
        if ($this->isColumnModified(ClientPeer::TOKEN)) {
            $modifiedColumns[':p' . $index++]  = '`token`';
        }

        $sql = sprintf(
            'INSERT INTO `client` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`surname`':
                        $stmt->bindValue($identifier, $this->surname, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`tlf`':
                        $stmt->bindValue($identifier, $this->tlf, PDO::PARAM_STR);
                        break;
                    case '`adress`':
                        $stmt->bindValue($identifier, $this->adress, PDO::PARAM_STR);
                        break;
                    case '`city`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`country_id`':
                        $stmt->bindValue($identifier, $this->country_id, PDO::PARAM_STR);
                        break;
                    case '`card_data`':
                        $stmt->bindValue($identifier, $this->card_data, PDO::PARAM_STR);
                        break;
                    case '`country_name`':
                        $stmt->bindValue($identifier, $this->country_name, PDO::PARAM_STR);
                        break;
                    case '`social_id`':
                        $stmt->bindValue($identifier, $this->social_id, PDO::PARAM_STR);
                        break;
                    case '`service`':
                        $stmt->bindValue($identifier, $this->service, PDO::PARAM_STR);
                        break;
                    case '`token`':
                        $stmt->bindValue($identifier, $this->token, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ClientPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ClientPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getSurname();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getTlf();
                break;
            case 5:
                return $this->getAdress();
                break;
            case 6:
                return $this->getCity();
                break;
            case 7:
                return $this->getCountryId();
                break;
            case 8:
                return $this->getCardData();
                break;
            case 9:
                return $this->getCountryName();
                break;
            case 10:
                return $this->getSocialId();
                break;
            case 11:
                return $this->getService();
                break;
            case 12:
                return $this->getToken();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Client'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Client'][$this->getPrimaryKey()] = true;
        $keys = ClientPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getSurname(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getTlf(),
            $keys[5] => $this->getAdress(),
            $keys[6] => $this->getCity(),
            $keys[7] => $this->getCountryId(),
            $keys[8] => $this->getCardData(),
            $keys[9] => $this->getCountryName(),
            $keys[10] => $this->getSocialId(),
            $keys[11] => $this->getService(),
            $keys[12] => $this->getToken(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ClientPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setSurname($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setTlf($value);
                break;
            case 5:
                $this->setAdress($value);
                break;
            case 6:
                $this->setCity($value);
                break;
            case 7:
                $this->setCountryId($value);
                break;
            case 8:
                $this->setCardData($value);
                break;
            case 9:
                $this->setCountryName($value);
                break;
            case 10:
                $this->setSocialId($value);
                break;
            case 11:
                $this->setService($value);
                break;
            case 12:
                $this->setToken($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ClientPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSurname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTlf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdress($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCity($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCountryId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCardData($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCountryName($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSocialId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setService($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setToken($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientPeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientPeer::ID)) $criteria->add(ClientPeer::ID, $this->id);
        if ($this->isColumnModified(ClientPeer::NAME)) $criteria->add(ClientPeer::NAME, $this->name);
        if ($this->isColumnModified(ClientPeer::SURNAME)) $criteria->add(ClientPeer::SURNAME, $this->surname);
        if ($this->isColumnModified(ClientPeer::EMAIL)) $criteria->add(ClientPeer::EMAIL, $this->email);
        if ($this->isColumnModified(ClientPeer::TLF)) $criteria->add(ClientPeer::TLF, $this->tlf);
        if ($this->isColumnModified(ClientPeer::ADRESS)) $criteria->add(ClientPeer::ADRESS, $this->adress);
        if ($this->isColumnModified(ClientPeer::CITY)) $criteria->add(ClientPeer::CITY, $this->city);
        if ($this->isColumnModified(ClientPeer::COUNTRY_ID)) $criteria->add(ClientPeer::COUNTRY_ID, $this->country_id);
        if ($this->isColumnModified(ClientPeer::CARD_DATA)) $criteria->add(ClientPeer::CARD_DATA, $this->card_data);
        if ($this->isColumnModified(ClientPeer::COUNTRY_NAME)) $criteria->add(ClientPeer::COUNTRY_NAME, $this->country_name);
        if ($this->isColumnModified(ClientPeer::SOCIAL_ID)) $criteria->add(ClientPeer::SOCIAL_ID, $this->social_id);
        if ($this->isColumnModified(ClientPeer::SERVICE)) $criteria->add(ClientPeer::SERVICE, $this->service);
        if ($this->isColumnModified(ClientPeer::TOKEN)) $criteria->add(ClientPeer::TOKEN, $this->token);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ClientPeer::DATABASE_NAME);
        $criteria->add(ClientPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Client (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setSurname($this->getSurname());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setTlf($this->getTlf());
        $copyObj->setAdress($this->getAdress());
        $copyObj->setCity($this->getCity());
        $copyObj->setCountryId($this->getCountryId());
        $copyObj->setCardData($this->getCardData());
        $copyObj->setCountryName($this->getCountryName());
        $copyObj->setSocialId($this->getSocialId());
        $copyObj->setService($this->getService());
        $copyObj->setToken($this->getToken());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Client Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ClientPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->surname = null;
        $this->email = null;
        $this->tlf = null;
        $this->adress = null;
        $this->city = null;
        $this->country_id = null;
        $this->card_data = null;
        $this->country_name = null;
        $this->social_id = null;
        $this->service = null;
        $this->token = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
