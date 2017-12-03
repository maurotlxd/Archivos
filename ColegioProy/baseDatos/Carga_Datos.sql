use colegio;
set names utf8;



insert into Contador Values( 'Usuario', 5, 10);
insert into Contador Values( 'Pago', 5, 10 );
insert into Contador Values( 'Matricula', 5, 10 );
insert into Contador Values( 'Estudiante', 5, 10);


insert into usuario

values
(10000,'mauro','12345'),
(10001,'juan','123456'),
(10002,'daniel','1234567'),
(10003,'marcos','12345678'),
(10004,'antonio','123456789');



insert into matricula 
values
(20000,200.0,'2015-04-01'),
(20001,200.0,'2015-04-06'),
(20002,200.0,'2015-08-09'),
(20003,200.0,'2015-02-10'),
(20004,200.0,'2015-03-07');


insert into pago
values
(30000,50.0,'estudiante nuevo'),
(30001,50.0,'estudiante nuevo'),
(30002,50.0,'estudiante nuevo');



insert into grado
values
(40000,'3ro'),
(40001,'4to'),
(40002,'3ro'),
(40003,'1ro'),
(40004,'2do');


insert into nivel
values
(10,'Primaria'),
(20,'Secundaria');

insert into estudiante
values 
(01,'mauro enrique','canales zapata','2002-05-08','Lima','Lima',99897868,10000,20000,30000,40000,10),
(02,'juan daniel','gutierrez sanchez','2003-06-08','Lima','Lima',99897789,10001,20001,30001,40001,20),
(03,'david yerson','berrospi cueva','2003-05-08','Lima','Lima',99897789,10002,20002,30002,40002,10),
(04,'gerardo alonso','chavez jimenez','2003-09-03','Lima','Lima',99897563,10003,20003,null,40003,10),
(05,'gustavo samuel','talledo lopez','2005-05-10','Lima','Lima',99897485,10004,20004,null,40004,20);








