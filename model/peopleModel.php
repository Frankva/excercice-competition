<?php 
class peopleModel {
    private const HOST = "localhost"; 
    private const DB_NAME = "competition20231218";
    private const USER = "root";
    private const PASSWORD = "";
    private $db = NULL;
    
    public function __construct()
    {
        try {
            $this->db = new PDO(
                sprintf("mysql:host=%s;dbname=%s", self::HOST, self::DB_NAME), 
                self::USER, self::PASSWORD
            );
        }
        catch(Exception $e) { 
            die($e->getMessage());
        }
    }

    public function do_request(string $sqlRequest, array $param=[]) {
        $request = $this->db->prepare($txt);
        $request->execute($param);
        return $request->fetchAll();
    }

}


?>
