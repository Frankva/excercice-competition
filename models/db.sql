DROP DATABASE IF EXISTS competition20231218;
CREATE DATABASE competition20231218;
USE competition20231218;
CREATE TABLE countries(
    country_id bigint auto_increment primary key,
    name varchar(255)
);
CREATE TABLE addresses(
    address_id bigint auto_increment primary key,
    street varchar(255),
    number varchar(255),
    complement varchar(255),
    locality varchar(255),
    npa varchar(255),
    country_id bigint,
    foreign key (country_id) REFERENCES countries (country_id)
);
CREATE TABLE emails(
    email_id bigint auto_increment primary key,
    name varchar(255)
);
CREATE TABLE  people(
    person_id bigint auto_increment primary key,
    firstname varchar(255),
    lastname varchar(255),
    birthdate date,
    mass int,
    address_id bigint,
    country_id bigint,
    email_id bigint,
    foreign key (address_id) REFERENCES addresses (address_id),
    foreign key (country_id) REFERENCES countries (country_id),
    foreign key (email_id) REFERENCES emails (email_id)
);
CREATE TABLE competitions(
    competition_id bigint auto_increment primary key,
    name varchar(255),
    date date
);
CREATE TABLE people_register_competitions(
    person_register_competition_id bigint auto_increment primary key,
    person_id bigint,
    competition_id bigint,
    foreign key (person_id) REFERENCES people (person_id),
    foreign key (competition_id) REFERENCES competitions (competition_id)
);
