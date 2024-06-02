CREATE DATABASE hotels;
USE hotels;

CREATE TABLE client (id_client int primary key, cin varchar(10), nom varchar(15), prenom varchar(15), login varchar(30), motPasse varchar(25));
CREATE TABLE typehotel(id_type int primary key, nombre_etoile varchar(10));
CREATE TABLE hotel(id_hotel int primary key, titre varchar(15), adresse varchar(30), prix_par_nuit varchar(15), id_type int, nombre_de_places int);
CREATE TABLE reservation(id_reserv int primary key, id_hotel int, id_client int, date_debut_sejour date, date_fin_sejour date);

ALTER TABLE client MODIFY id_client int AUTO_INCREMENT;
ALTER TABLE typehotel MODIFY id_type int AUTO_INCREMENT;
ALTER TABLE hotel MODIFY id_hotel int AUTO_INCREMENT;
ALTER TABLE reservation MODIFY id_reserv int AUTO_INCREMENT;

ALTER TABLE hotel 
ADD FOREIGN KEY (id_type) REFERENCES typehotel(id_type);
ALTER TABLE reservation 
ADD FOREIGN KEY (id_hotel) REFERENCES hotel(id_hotel);
ALTER TABLE reservation
ADD FOREIGN KEY (id_client) REFERENCES client(id_client);



