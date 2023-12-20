<?php 

abstract class Model {

    protected $db;
    private $table_name;
    private $table_id;
    
    public function __construct()
    {
        $env = parse_ini_file('.env');
        $HOST = $env['HOST'];
        $DB_NAME =$env['DB_NAME'];
        $USER = $env['USER'];
        $PASSWORD = $env['PASSWORD'];
        try {
            $this->db = new PDO(
                sprintf("mysql:host=%s;dbname=%s", $HOST, $DB_NAME), 
                $USER, $PASSWORD
            );
        }
        catch(Exception $e) { 
            die($e->getMessage());
        }
    }

    protected function do_request(string $sqlRequest, array $param=[]) {
        $request = $this->db->prepare($sqlRequest);
        $request->execute($param);
        return $request->fetchAll();
    }

    public function find(int $id): array
    {
        $sqlRequest = 'SELECT * FROM '. $this->table_name . 
            ' WHERE ' . $this->table_id . ' = ?';
        $param[0] = $id;
        $this->do_request($sqlRequest, $param);

    }


}


?>
