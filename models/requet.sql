ROLLBACK;
START TRANSACTION;
INSERT INTO emails (name) VALUES (?);
INSERT INTO addresses (street, number, complement, locality, npa, country_id)
VALUES (?, ?, ?, ?, ?, ?);
INSERT INTO people (firstname, lastname, brithday, mass, address_id,
    country_id, email_id) VALUES (?, ?, ?, ?, 
    (SELECT MAX(*) FROM addresses), ?, (SELECT MAX(*) FROM emails));
INSERT INTO people_register_competitons (person_id, competition_id) VALUES
((SELECT MAX(*) FROM people), (SELECT MAX(*) FROM competitions));
COMMIT;
