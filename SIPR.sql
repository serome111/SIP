CREATE TABLE cardtype(
cardtype_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
state INT(2) NOT NULL, #ESTADO 0 NO PAGO, ESTADO 1,QUIERE DECIR QUE PAGO, EL DOS QUE PAGO Y SE REGISTRO, 3 QUE ES EL ADMINISTADOR, ..
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE parents( #datos de padres o acudiente
parents_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(45) NULL,                                  #Nombre
lastname VARCHAR(255) NULL,                              #apellidos
cardtype_id INTEGER UNSIGNED NOT NULL,                  #tipo de documento
email VARCHAR(110) NULL,                                #correo electronico
phone INT(100) NOT NULL,                                #telefono
fixedphone INT(100) NULL,                               #telefono fijo
cardid VARCHAR(100) NULL,                               #numero de identificacion
parent VARCHAR(100),
-- date_of_birth TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, #Fecha de nacimiento
gender enum('male','female'),                          #Genero
state INT(5) NOT NULL,                                 #Nombre
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #Nombre
);


CREATE TABLE users( #estudiante del prescolar
user_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(80) NULL,                                 #Nombre
lastname VARCHAR(255) NULL,                             #apellidos
cardid VARCHAR(100) NOT NULL UNIQUE,                   #numero de identificacion
date_of_birth TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, #Fecha de nacimiento
state INT(3) NOT NULL,                                 #estado activo inactivo, orto.
gender enum('male','female'),                          #Genero
cardtype_id INTEGER UNSIGNED NOT NULL,                 #tipo de documento
factorRh enum('O negativo','O positivo','A negativo','A positivo','B negativo','B positivo','AB negativo','AB positivo'), # tipo de sangre
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #fecha de creacion
);

CREATE TABLE specialist( #especialista encargado o medico encargado
specialist_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NULL,                                 #nombre del especialista
email VARCHAR(110) NULL,                               #correo electronico
phone INT(100) NOT NULL,                                #telefono
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #fecha de creacion
);

CREATE TABLE charge_specialist( #cargos que tiene el medico
charge_specialist_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
charge_name VARCHAR(100) NULL, # dentista ,oftanmologo, etc...
specialist_id BIGINT UNSIGNED NOT NULL,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #fecha de creacion
);

CREATE TABLE users_specialist(
users_specialist_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
user_id BIGINT UNSIGNED NOT NULL,
specialist_id BIGINT UNSIGNED NOT NULL,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #fecha de creacion
);

CREATE TABLE users_parents(
users_parents_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
user_id BIGINT UNSIGNED NOT NULL,
parents_id BIGINT UNSIGNED NOT NULL,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #fecha de creacion
);
CREATE TABLE allergies(
allergies_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(45) NULL,                                 #Nombre clinico o nombre relacionado
description TEXT NULL,                                 #Descripcion de la alergia.
user_id BIGINT UNSIGNED NOT NULL,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #Nombre
);
CREATE TABLE specialcare( #tratos especiales por alergias u otros factores
specialcare_id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(45) NULL,
description TEXT NULL,
user_id BIGINT UNSIGNED NOT NULL,
state INT(3) NOT NULL DEFAULT 0,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP #Nombre
);

-- ALTER TABLE parents
-- ADD
#valores de tipos de documento
INSERT INTO cardtype (cardtype_id, name, state, create_at) VALUES
(1, 'tarjeta de identidad', 1, '2021-02-23 20:51:01'),
(2, 'cédula de ciudadania', 1, '2021-02-23 20:51:11');


#Insertar dos valores en una tabla PUNTO A
INSERT INTO users (user_id, name, lastname, cardid, cardtype_id, date_of_birth, state, gender, factorRh, create_at) VALUES
(1, 'pepito', 'last', '98071119083', 1, '2021-02-24', 1, 'male', 'O positivo', '2021-02-24 07:20:31'),
(2, 'pepita', 'last', '18071190184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32');


#punto B
INSERT INTO parents (parents_id, name, lastname, cardtype_id, email, phone, fixedphone, cardid, parent, gender, state, create_at) VALUES
(1,'Sr.pepe', 'last', '2', 'serome111@gmail.com', '2147483647', '8715116', '1075297729', 'Padre del niño', 'male', '1', CURRENT_TIMESTAMP),
(2,'Sra.pepa', 'lastp', '2', 'pepa@gmail.com', '2147483647', '8715116', '1075297728', 'vecino', 'female', '1', CURRENT_TIMESTAMP);

INSERT INTO `users_parents` (`users_parents_id`, `user_id`, `parents_id`, `create_at`) VALUES
(NULL, '1', '1', CURRENT_TIMESTAMP), #usuario pepito ahora tiene un acudiente
(NULL, '1', '2', CURRENT_TIMESTAMP),#usuario pepito ahora tiene dos acudiente
(NULL, '2', '1', CURRENT_TIMESTAMP),
(NULL, '2', '2', CURRENT_TIMESTAMP);

#Punto C

#Datos para funcionamiento de este item
#MENOR CON SINTOMAS
INSERT INTO users (user_id, name, lastname, cardid, cardtype_id, date_of_birth, state, gender, factorRh, create_at) VALUES
(3, 'jordy', 'enpx', '98071119055', 1, '2019-02-24', 1, 'male', 'O positivo', '2021-02-24 07:20:31');
#papa del niño o acudiente
INSERT INTO parents (parents_id, name, lastname, cardtype_id, email, phone, fixedphone, cardid, parent, gender, state, create_at) VALUES
(3,'Sr.changuito', 'last', '1', 'serome111@gmail.com', '2147483631', '8715116', '1075298888', 'Tio del niño', 'male', '1', CURRENT_TIMESTAMP);
# Doctores registrados
INSERT INTO specialist (specialist_id, name, email, phone, create_at) VALUES
(1, 'doctor house', 'doctorhouse@gmail.com', 2147483647, '2021-02-23 20:56:50'),
(2, 'Doctor chapatin', 'chapatin@gmail.com', 2147453647, '2021-02-23 20:57:40');
#cargo de los doctores
INSERT INTO `charge_specialist` (`charge_specialist_id`, `charge_name`, `specialist_id`, `create_at`) VALUES
(1, 'Odontologo', 1, '2021-02-23 21:41:47'),
(2, 'Neurologo', 1, '2021-02-23 21:41:47'),
(3, 'Hematólogo', 2, '2021-02-23 21:42:57');
#medicos encargados de niños
INSERT INTO users_specialist(users_specialist_id, user_id, specialist_id, create_at) VALUES
(1, 3, 2, '2021-02-23 22:07:43'),
(2, 3, 1, '2021-02-23 22:09:31');

# CONSULTA DE MEDICOS TRATANDES DE MENORES
SELECT u.name AS 'NOMBRE',u.lastname AS 'APELLIDOS', sp.name AS 'DOCTOR' FROM `users_specialist` AS rlusp
JOIN users AS u
ON rlusp.user_id = u.user_id
JOIN specialist AS sp
ON rlusp.specialist_id = sp.specialist_id;



# CONSULTA MAS DATOS IMPORTANTES
SELECT u.name AS 'NOMBRE',u.lastname AS 'APELLIDOS',u.cardid AS 'REGISTRO DE NACIMIENTO', sp.name AS 'DOCTOR', sp.phone AS 'NUMERO DEL DOCTOR' FROM `users_specialist` AS rlusp
JOIN users AS u
ON rlusp.user_id = u.user_id
JOIN specialist AS sp
ON rlusp.specialist_id = sp.specialist_id


# insert de 520 niños
INSERT INTO users (user_id, name, lastname, cardid, cardtype_id, date_of_birth, state, gender, factorRh, create_at) VALUES
(4, 'juanito', 'last', '18071191996', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 08:20:32'),
(5, 'juanita', 'last', '98071190185', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 08:20:32'),
(6, 'feplipe', 'last', '98071190186', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 09:20:32'),
(7, 'fabian', 'last', '98071190187', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 10:20:32'),
(8, 'peña', 'last', '98071190188', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 11:20:32'),
(9, 'paisa', 'last', '98071190189', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:20:32'),
(10, 'alex', 'last', '98071190190', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:21:32'),
(11, 'david', 'last', '98071119091', 1, '2021-02-23', 1, 'male', 'O positivo', '2021-02-23 12:22:32'),
(12, 'juan', 'last', '98071190192', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:23:32'),
(13, 'bradpid', 'last', '98071190193', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:24:32'),
(14, 'morganfriman', 'last', '98071190194', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:25:32'),
(15, 'jeriga', 'last', '98071190195', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:26:32'),
(16, 'aguja', 'last', '98071190196', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:20:33'),
(17, 'oso', 'last', '98071190197', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:25:32'),
(18, 'perro', 'last', '98071190198', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:26:32'),
(19, 'gato', 'last', '98071190199', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:27:32'),
(20, 'mauricio', 'last', '98171190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:28:32'),
(21, 'alexander', 'last', '98271119083', 1, '2021-02-23', 1, 'male', 'O positivo', '2021-02-23 12:28:52'),
(22, 'camila', 'last', '98371190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:29:32'),
(23, 'daniela', 'last', '98471190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:30:32'),
(24, 'daniela', 'last', '98571190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:31:32'),
(25, 'flor', 'last', '980711170184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:32:40'),
(26, 'gimena', 'last', '980717190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:33:32'),
(27, 'yesica', 'last', '780717190184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:33:35'),
(28, 'javier', 'last', '78071197184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:33:36'),
(29, 'nicolas', 'last', '78071177784', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:33:37'),
(30, 'laura', 'last', '780711901111', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:33:37'),
(31, 'macerla', 'last', '78071249066', 1, '2021-02-23', 1, 'male', 'O positivo', '2021-02-23 12:34:32'),
(32, 'jakiechan', 'last', '78071230184', 1, '2021-02-23', 1, 'female', 'O positivo', '2021-02-23 12:35:32'),
(33, 'auronguilson', 'last', '78021193184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(34, 'wilson', 'last', '78072220184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(35, 'toncruz', 'last', '78071290184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(36, 'magmaier', 'last', '78072190184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(37, 'michael jakson', 'last', '78071190184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(38, 'fredy', 'mercury', '18070000184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(39, 'dario', 'Gomez', '18071195184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(40, 'espinosa', 'paz', '18071155184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(41, 'vicente fernandez', 'last', '98072229083', 1, '2021-02-24', 1, 'male', 'O positivo', '2021-02-24 07:20:31'),
(42, 'sebastian yatra', 'last', '18055190184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(43, 'euripides', 'triana', '18071190084', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(44, 'jorge', 'eliecer', '18071190100', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(45, 'daft', 'Punk', '10071190184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(46, 'nicolas', 'mosquera', '99045690181', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(47, 'emmanuel', 'last', '19775690182', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(48, 'manuel', 'medrano', '19325692183', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-24 07:20:32'),
(49, 'lisa', 'last', '19345690184', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-26 07:20:32'),
(50, 'maguie', 'last', '19345690185', 1, '2021-02-24', 1, 'female', 'O positivo', '2021-02-25 07:20:32');


#Consula
SELECT user_id,name,create_at FROM users Order by (create_at) ASC LIMIT 28


#algunas referencias usadas
#https://www.w3schools.com/sql/sql

#Después de creada la base de datos proceda a:
#	a.	Mediante una consulta SQL inserte 2 registros en la tabla que corresponda a los menores.
#	b.	Mediante un archivo plano subir 2 registros para cada menor insertado en el punto anterior de los cuidadores (total 4 registros)
#	c.	Realice una consulta de selección que liste los médicos tratantes de cada menor.
#	d.	Mediante una sentencia SQL seleccione 28 niños (los primeros registrados en el preescolar)
#	y modifique la fecha de nacimiento de los menores de edad
#	dejando 1 cada día del mes de febrero acuerdo con la fecha de ingreso al preescolar.


