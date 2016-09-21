<?php namespace Eyeonline\Soufyane\Stage;

use PDO;

class Database {

    private $db;

    /**
     * Database constructor.
     * @param string $db_server
     * @param string $db_user
     * @param string $db_password
     * @param string $db_database
     * @param string $db_driver
     */
    public function __construct($db_server, $db_user, $db_password, $db_database, $db_driver) {

        $this->db = new PDO($db_driver . ":dbname=" . $db_database . ";host=" . $db_server, $db_user, $db_password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * CREATE, UPDATE, INSERT & DELETE queries
     * @param string $query The Query
     * @param array $params Params for the query
     */
    public function execute($query, array $params = []) {
        $stmt = $this->db->prepare($query);

        foreach ($params as $key => $param) {
            $stmt->bindParam($key, $param);
        }

        $stmt->execute();
    }

    /**
     * SELECT queries
     * @param string $query The Query
     * @param array $params Params for the query
     */
    public function select($query, array $params = []) {
        $stmt = $this->db->prepare($query);

        foreach ($params as $key => $param) {
            $stmt->bindParam($key, $param);
        }

        $stmt->execute();
        return $stmt->fetchAll();

    }

}