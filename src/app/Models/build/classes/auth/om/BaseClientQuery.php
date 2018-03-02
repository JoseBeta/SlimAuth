<?php


/**
 * Base class that represents a query for the 'client' table.
 *
 *
 *
 * @method ClientQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ClientQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ClientQuery orderBySurname($order = Criteria::ASC) Order by the surname column
 * @method ClientQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method ClientQuery orderByTlf($order = Criteria::ASC) Order by the tlf column
 * @method ClientQuery orderByAdress($order = Criteria::ASC) Order by the adress column
 * @method ClientQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method ClientQuery orderByCountryId($order = Criteria::ASC) Order by the country_id column
 * @method ClientQuery orderByCardData($order = Criteria::ASC) Order by the card_data column
 * @method ClientQuery orderByCountryName($order = Criteria::ASC) Order by the country_name column
 * @method ClientQuery orderBySocialId($order = Criteria::ASC) Order by the social_id column
 * @method ClientQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method ClientQuery orderByToken($order = Criteria::ASC) Order by the token column
 *
 * @method ClientQuery groupById() Group by the id column
 * @method ClientQuery groupByName() Group by the name column
 * @method ClientQuery groupBySurname() Group by the surname column
 * @method ClientQuery groupByEmail() Group by the email column
 * @method ClientQuery groupByTlf() Group by the tlf column
 * @method ClientQuery groupByAdress() Group by the adress column
 * @method ClientQuery groupByCity() Group by the city column
 * @method ClientQuery groupByCountryId() Group by the country_id column
 * @method ClientQuery groupByCardData() Group by the card_data column
 * @method ClientQuery groupByCountryName() Group by the country_name column
 * @method ClientQuery groupBySocialId() Group by the social_id column
 * @method ClientQuery groupByService() Group by the service column
 * @method ClientQuery groupByToken() Group by the token column
 *
 * @method ClientQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Client findOne(PropelPDO $con = null) Return the first Client matching the query
 * @method Client findOneOrCreate(PropelPDO $con = null) Return the first Client matching the query, or a new Client object populated from the query conditions when no match is found
 *
 * @method Client findOneByName(string $name) Return the first Client filtered by the name column
 * @method Client findOneBySurname(string $surname) Return the first Client filtered by the surname column
 * @method Client findOneByEmail(string $email) Return the first Client filtered by the email column
 * @method Client findOneByTlf(string $tlf) Return the first Client filtered by the tlf column
 * @method Client findOneByAdress(string $adress) Return the first Client filtered by the adress column
 * @method Client findOneByCity(string $city) Return the first Client filtered by the city column
 * @method Client findOneByCountryId(string $country_id) Return the first Client filtered by the country_id column
 * @method Client findOneByCardData(string $card_data) Return the first Client filtered by the card_data column
 * @method Client findOneByCountryName(string $country_name) Return the first Client filtered by the country_name column
 * @method Client findOneBySocialId(string $social_id) Return the first Client filtered by the social_id column
 * @method Client findOneByService(string $service) Return the first Client filtered by the service column
 * @method Client findOneByToken(string $token) Return the first Client filtered by the token column
 *
 * @method array findById(string $id) Return Client objects filtered by the id column
 * @method array findByName(string $name) Return Client objects filtered by the name column
 * @method array findBySurname(string $surname) Return Client objects filtered by the surname column
 * @method array findByEmail(string $email) Return Client objects filtered by the email column
 * @method array findByTlf(string $tlf) Return Client objects filtered by the tlf column
 * @method array findByAdress(string $adress) Return Client objects filtered by the adress column
 * @method array findByCity(string $city) Return Client objects filtered by the city column
 * @method array findByCountryId(string $country_id) Return Client objects filtered by the country_id column
 * @method array findByCardData(string $card_data) Return Client objects filtered by the card_data column
 * @method array findByCountryName(string $country_name) Return Client objects filtered by the country_name column
 * @method array findBySocialId(string $social_id) Return Client objects filtered by the social_id column
 * @method array findByService(string $service) Return Client objects filtered by the service column
 * @method array findByToken(string $token) Return Client objects filtered by the token column
 *
 * @package    propel.generator.auth.om
 */
abstract class BaseClientQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'auth', $modelName = 'Client', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientQuery) {
            return $criteria;
        }
        $query = new ClientQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Client|Client[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Client A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Client A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `surname`, `email`, `tlf`, `adress`, `city`, `country_id`, `card_data`, `country_name`, `social_id`, `service`, `token` FROM `client` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Client();
            $obj->hydrate($row);
            ClientPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Client|Client[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Client[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ClientPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ClientPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE surname = 'fooValue'
     * $query->filterBySurname('%fooValue%'); // WHERE surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $surname)) {
                $surname = str_replace('*', '%', $surname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::SURNAME, $surname, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the tlf column
     *
     * Example usage:
     * <code>
     * $query->filterByTlf('fooValue');   // WHERE tlf = 'fooValue'
     * $query->filterByTlf('%fooValue%'); // WHERE tlf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tlf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByTlf($tlf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tlf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tlf)) {
                $tlf = str_replace('*', '%', $tlf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::TLF, $tlf, $comparison);
    }

    /**
     * Filter the query on the adress column
     *
     * Example usage:
     * <code>
     * $query->filterByAdress('fooValue');   // WHERE adress = 'fooValue'
     * $query->filterByAdress('%fooValue%'); // WHERE adress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByAdress($adress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adress)) {
                $adress = str_replace('*', '%', $adress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::ADRESS, $adress, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCountryId(1234); // WHERE country_id = 1234
     * $query->filterByCountryId(array(12, 34)); // WHERE country_id IN (12, 34)
     * $query->filterByCountryId(array('min' => 12)); // WHERE country_id >= 12
     * $query->filterByCountryId(array('max' => 12)); // WHERE country_id <= 12
     * </code>
     *
     * @param     mixed $countryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByCountryId($countryId = null, $comparison = null)
    {
        if (is_array($countryId)) {
            $useMinMax = false;
            if (isset($countryId['min'])) {
                $this->addUsingAlias(ClientPeer::COUNTRY_ID, $countryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countryId['max'])) {
                $this->addUsingAlias(ClientPeer::COUNTRY_ID, $countryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPeer::COUNTRY_ID, $countryId, $comparison);
    }

    /**
     * Filter the query on the card_data column
     *
     * Example usage:
     * <code>
     * $query->filterByCardData('fooValue');   // WHERE card_data = 'fooValue'
     * $query->filterByCardData('%fooValue%'); // WHERE card_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByCardData($cardData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cardData)) {
                $cardData = str_replace('*', '%', $cardData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::CARD_DATA, $cardData, $comparison);
    }

    /**
     * Filter the query on the country_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCountryName('fooValue');   // WHERE country_name = 'fooValue'
     * $query->filterByCountryName('%fooValue%'); // WHERE country_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countryName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByCountryName($countryName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countryName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countryName)) {
                $countryName = str_replace('*', '%', $countryName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::COUNTRY_NAME, $countryName, $comparison);
    }

    /**
     * Filter the query on the social_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySocialId('fooValue');   // WHERE social_id = 'fooValue'
     * $query->filterBySocialId('%fooValue%'); // WHERE social_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socialId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterBySocialId($socialId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socialId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socialId)) {
                $socialId = str_replace('*', '%', $socialId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::SOCIAL_ID, $socialId, $comparison);
    }

    /**
     * Filter the query on the service column
     *
     * Example usage:
     * <code>
     * $query->filterByService('fooValue');   // WHERE service = 'fooValue'
     * $query->filterByService('%fooValue%'); // WHERE service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $service The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByService($service = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($service)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $service)) {
                $service = str_replace('*', '%', $service);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::SERVICE, $service, $comparison);
    }

    /**
     * Filter the query on the token column
     *
     * Example usage:
     * <code>
     * $query->filterByToken('fooValue');   // WHERE token = 'fooValue'
     * $query->filterByToken('%fooValue%'); // WHERE token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $token The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function filterByToken($token = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($token)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $token)) {
                $token = str_replace('*', '%', $token);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPeer::TOKEN, $token, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Client $client Object to remove from the list of results
     *
     * @return ClientQuery The current query, for fluid interface
     */
    public function prune($client = null)
    {
        if ($client) {
            $this->addUsingAlias(ClientPeer::ID, $client->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
