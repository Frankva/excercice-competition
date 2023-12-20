<?php 

include_once "Model.php"; 

class CountriesModel extends Model
{

    private $table_name = 'countries';
    private $table_id = 'country_id';

    public function insert(array $country): void
    {
        $sqlRequest = 'INSERT INTO ' . $table_name .
            ' VALUES (?)';
        $param[0] = $country['name'];
        $this->do_request($sqlRequest, $param);
    }

    public function find_all(): array
    {
        $sqlRequest = 'SELECT country_id, name FROM countries;';
        return $this->do_request($sqlRequest);
    }

}


?>
