drop database if exists students;
create database students;
use students;
CREATE TABLE estudiantes (
  id               INT(5)  ,
  nombre       VARCHAR(20),
  apellido        VARCHAR(20),
  especialidad            VARCHAR(30)
 
  );

INSERT INTO estudiantes (id, nombre, apellido, especialidad)
  VALUES (10000, 'Scott', 'Smith', 'Informática');

INSERT INTO estudiantes (id, nombre, apellido, especialidad)
  VALUES (10001, 'Margaret', 'Mason', 'Historia');

INSERT INTO estudiantes (id, nombre, apellido, especialidad)
  VALUES (10002, 'Joanne', 'Junebug', 'Informática');

INSERT INTO estudiantes (id, nombre, apellido, especialidad)
  VALUES (10003, 'Manish', 'Murgratroid', 'Económicas');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES(10004, 'Patrick', 'Poll', 'Historia');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10005, 'Timothy', 'Taller', 'Historia');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10006, 'Barbara', 'Blues', 'Económicas');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10007, 'David', 'Dinsmore', 'Música');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10008, 'Ester', 'Elegant', 'Nutrición');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10009, 'Rose', 'Riznit', 'Música');

INSERT INTO estudiantes(id, nombre, apellido, especialidad)
  VALUES (10010, 'Rita', 'Razmataz', 'Nutrición');