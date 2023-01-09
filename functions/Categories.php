<?php

require '../config/Database.php';

class Categories extends Database {

    protected $tableName = "categories";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * getAllCategories a function to get all the data from the catagories table
     *
     * @return array return the value of all the catagories
     */
    public function getAllCategories(){
        $query = "SELECT * FROM $this->tableName";

        $item = $this->connection->prepare($query);
        $item->execute();

        return $item->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * getAllCategoriesDesc a function to get all the data from the catagories table in the database in an descending order
     *
     * @return array return the value of all the catagories from A to Z (Descending order)
     */
    public function getAllCategoriesDesc(){
        $query = "SELECT * FROM $this->tableName ORDER BY Name DESC";

        $item = $this->connection->prepare($query);
        $item->execute();

        return $item->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * getAllCategoriesAsc a function to get all the data from the categories table in the database in an ascending order
     *
     * @return array returns the value of all the categories in the database in an ascending order
     */
    public function getAllCategoriesAsc(){
        $query = "SELECT * FROM $this->tableName ORDER BY Name ASC";

        $item = $this->connection->prepare($query);
        $item->execute();

        return $item->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * insertCategory inserts a category into the database
     *
     * @param  string $Name the name of the category
     * @return void
     */
    public function insertCategory($Name){
        $query = "INSERT INTO $this->tableName ( Name ) VALUES ( :Name )";

        $item = $this->connection->prepare($query);
        $item->bindParam('Name', $Name, PDO::PARAM_STR);

        $item->execute();
    }

    /**
     * updateCategory updates the name of category
     *
     * @param  string $Name the value of what the name should be
     * @param  int $id id of the category
     * @return void
     */
    public function updateCategory($Name, $id){
        $query = "UPDATE $this->tableName SET Name = :Name WHERE id = :id";

        $item = $this->connection->prepare($query);
        $item->bindParam('Name', $Name, PDO::PARAM_STR);
        $item->bindParam('id', $id, PDO::PARAM_INT);

        $item->execute();
    }
}
