







CREATE TABLE datosusuario (
  idusuario varchar(30)  NOT NULL,
  cedula int(11) NOT NULL,
  nombre varchar(30)  NOT NULL,
  apellido varchar(30)  NOT NULL,
  sangre varchar(30)  NOT NULL,
  direccion varchar(30)  NOT NULL,
  correo varchar(30)  NOT NULL,
  telefono varchar(30)  NOT NULL,
  fecha varchar(30)  NOT NULL,
  sexo varchar(30)  NOT NULL,
  regimensubsidiario varchar(30)  NOT NULL,
  cita int(11) NOT NULL
) ENGINE=InnoDB ;



INSERT INTO datosusuario (idusuario, cedula, nombre, apellido, sangre, direccion, correo, telefono, fecha, sexo, regimensubsidiario, cita) VALUES
('ana', 10, 'ana', 'leal', 'A', '22', '1@h.com', '1@h.com', '0001-01-01', 'Femenino', 'IPS', 6),
('alonso', 12, 'alonso', 'gutierrez', 'A+', '1', '1@h.com', '1@h.com', '0001-01-01', 'Femenino', 'IPS', 3),
('silvestre', 1015, 'silvestre', 'vela', 'O-', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'sisben', 0),
('sharifa', 1035, 'sharifa', 'geissler', 'O+', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'femenino', 'sisben', 0),
('arne', 1045, 'arne', 'denman', 'A', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'ips', 0),
('haylie', 1065, 'naylie', 'saller', 'A-', '11', 'correo@hotmail.com', '222 222 2222', '1', 'femenino', 'sisben', 2),
('manli', 1066, 'manli', 'oppenheimer', 'B+', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'ips', 0),
('latif', 1067, 'latif', 'aaldenberg', 'B-', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'ips', 0),
('josepe', 1068, 'josepe', 'sands', 'AB+', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'sisben', 0),
('sigmund', 1069, 'sigmund', 'langlois', 'AB-', 'calle 1', 'correo@hotmail.com', '222 222 2222', '1', 'masculino', 'ips', 0),





CREATE TABLE horarios (
  id int(11) NOT NULL,
  horas varchar(20)  NOT NULL,
  paciente varchar(30)  NOT NULL,
  doctor varchar(30)  NOT NULL
) ENGINE=InnoDB;



INSERT INTO horarios (id, horas, paciente, doctor) VALUES
(1, '7:00 A.M-7:20 A.M', '', 'maria'),
(2, '7:20 A.M-7:40 A.M', 'haylie', 'maria'),
(3, '7:40 A.M-8:00 A.M', 'alonso', 'maria'),
(4, '8:00 A.M-8:20 A.M', '', 'maria'),
(5, '8:20 A.M-8:40 A.M', 'paco', 'maria'),
(6, '8:40 A.M-9:00 A.M', 'ana', 'maria'),
(7, '9:00 A.M-9:20 A.M', '', 'maria'),
(8, '9:20 A.M-9:40 A.M', '', 'maria'),
(9, '9:40 A.M-10:00 A.M', '', 'maria'),
(10, '10:00 A.M-10:20 A.M', '', 'maria'),
(11, '10:20 A.M-10:40 A.M', '', 'maria'),
(12, '10:40 A.M-11:00 A.M', '', 'maria'),
(13, '11:00 A.M-11:20 A.M', '', 'maria'),
(14, '11:20 A.M-11:40 A.M', '', 'maria'),
(15, '11:40 A.M-12:00 P.M', '', 'maria'),
(16, '12:00 P.M-12:20 P.M', '', 'maria'),
(17, '12:20 P.M-12:40 P.M', '', 'maria'),
(18, '12:40 P.M-1:00 P.M', '', 'maria'),
(19, '1:00 P.M-1:20 P.M', '', 'pepe'),
(20, '1:20 P.M-1:40 P.M', '', 'pepe'),
(21, '1:40 P.M-2:00 P.M', '', 'pepe'),
(22, '2:00 P.M-2:20 P.M', '', 'pepe'),
(23, '2:20 P.M-2:40 P.M', '', 'pepe'),
(24, '2:40 P.M-3:00 P.M', '', 'pepe'),
(25, '3:00 P.M-3:20 P.M', '', 'pepe'),
(26, '3:20 P.M-3:40 P.M', '', 'pepe'),
(27, '3:40 P.M-4:00 P.M', '', 'pepe'),
(28, '4:20 P.M-4:40 P.M', '', 'pepe'),
(29, '4:40 P.M-5:00 P.M', '', 'pepe'),
(30, '5:00 P.M-5:20 P.M', '', 'pepe'),
(31, '5:20 P.M-5:40 P.M', '', 'pepe'),
(32, '5:40 P.M-6:00 P.M', '', 'pepe'),
(33, '6:20 P.M-6:40 P.M', '', 'pepe'),
(34, '6:40 P.M-7:00 P.M', '', 'pepe');



CREATE TABLE usuarios (
  nombre varchar(30)  NOT NULL,
  password varchar(30)  NOT NULL,
  tipo varchar(30)  NOT NULL
) ENGINE=InnoDB ;



INSERT INTO usuarios (nombre, password, tipo) VALUES
('alonso', '123', 'usuario'),
('ana', '123', 'usuario'),
('arne', '123', 'usuario'),
('frank', '123', 'admin'),
('haylie', '123', 'usuario'),
('josepe', '123', 'usuario'),
('latif', '123', 'usuario'),
('lori', '1', 'admin'),
('manli', '123', 'usuario'),
('maria', '123', 'doctor'),
('pedro', '1', 'admin'),
('pepe', '123', 'doctor'),
('sharifa', '123', 'usuario'),
('sigmund', '123', 'usuario'),
('silvestre', '123', 'usuario'),
('tata', '1', 'doctor');


ALTER TABLE datosusuario
  ADD PRIMARY KEY (cedula);


ALTER TABLE horarios
  ADD PRIMARY KEY (id);


ALTER TABLE usuarios
  ADD PRIMARY KEY (nombre);


ALTER TABLE horarios
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

