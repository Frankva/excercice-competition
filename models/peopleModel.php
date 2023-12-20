<?php 

include_once "Model.php"; 

class PeopleModel extends Model
{
    public function insert_for_form(array $person): void
    {
        $sqlRequest = '
        ROLLBACK;
        START TRANSACTION;
        INSERT INTO emails (name) VALUES (?);
        INSERT INTO addresses (street, number, complement, locality, npa, country_id)
            VALUES (?, ?, ?, ?, ?, ?);
        INSERT INTO people (firstname, lastname, birthdate, mass, address_id,
                country_id, email_id) VALUES (?, ?, ?, ?, 
                    (SELECT MAX(address_id) FROM addresses), ?, (SELECT MAX(email_id) FROM emails));
        INSERT INTO people_register_competitions (person_id, competition_id) VALUES
            ((SELECT MAX(person_id) FROM people), (SELECT MAX(competition_id) FROM competitions));
        COMMIT;
        ';
        $param[0] = $person['email'];
        $param[1] = $person['street'];
        $param[2] = $person['number'];
        $param[3] = $person['complement'];
        $param[4] = $person['locality'];
        $param[5] = $person['npa'];
        $param[6] = $person['country'];
        $param[7] = $person['firstname'];
        $param[8] = $person['lastname'];
        $param[9] = $person['birthdate'];
        $param[10] = $person['mass'];
        $param[11] = $person['nationality'];
        $this->do_request($sqlRequest, $param);
    }

}


?>
