create table flujo					
(
    flujo varchar(4),	
    proceso	varchar(4),
    proceso_siguiente	varchar(4),
    tipo	varchar(2),
    rol varchar(20),
    pantalla	varchar(50)
)

insert into flujo values('F1','P1','P2','I','Alumno','inicial');
insert into flujo values('F1','P2','P3','P','Alumno','datos');
insert into flujo values('F1','P3','P4','P','Alumno','envio');
insert into flujo values('F1','P4',null, 'C','Kardex','revision');
insert into flujo values('F1','P5','P2','P','Kardex','no');
insert into flujo values('F1','P6',null,'C','Caja','verificar_pago'); -- antiguo si
insert into flujo values('F1','P7','P2','P','Caja','no_deposito');
insert into flujo values('F1','P8','P9','P','Kardex','registrar_materia'); -- el nuevo si
insert into flujo values('F1','P9',null,'F','Alumno','inscripcion'); 





flujocondicion			
flujo	proeso	procesoSI	procesoNo


create table flujocondicion			
(

flujo varchar (3),	
proceso	varchar (3),
procesoSI	varchar (3),
procesoNO varchar (3),
)


insert into flujocondicion values ('F1',	'P4', 	'P6', 	'P5');
insert into flujocondicion values ('F1',	'P6', 	'P8', 	'P7');




create table flujotramite							

(
Flujo	        varchar(5),
proceso	        varchar(5),
nro_tramite	    varchar(10),
fechaini	    datetime,
fechafin	    datetime,
usuario	        varchar(30), 
usuario_tarea   varchar(30)
)	


truncate table flujotramite;
insert into flujotramite values('F1','P1','1000','2022/11/23 23:55:00', NULL,'FuryAlumno', 'FuryAlumno');
insert into flujotramite values('F1','P1','1001','2022/10/23 21:55:00', NULL,'FuryAlumno', 'FuryAlumno');
insert into flujotramite values('F1','P1','1002','2022/11/29 13:55:00', NULL,'FuryAlumno', 'FuryAlumno');

insert into flujotramite values('F1','P2','2001','2020/09/22 13:35:00', NULL,'OsvaldoAlumno', 'OsvaldoAlumno');
insert into flujotramite values('F1','P1','2002','2019/06/21 11:45:00', NULL,'OsvaldoAlumno', 'OsvaldoAlumno');
insert into flujotramite values('F1','P1','2003','2018/12/21 23:55:00', NULL,'OsvaldoAlumno', 'OsvaldoAlumno');

insert into flujotramite values('F1','P3','3001','2020/11/20 15:00:00', NULL,'TouristAlumno', 'TouristAlumno');
insert into flujotramite values('F1','P1','3002','2021/02/17 11:02:00', NULL,'TouristAlumno', 'TouristAlumno');
insert into flujotramite values('F1','P1','3003','2022/01/17 19:03:00', NULL,'TouristAlumno', 'TouristAlumno');


UPDATE `flujotramite` SET `Flujo`='F1',`proceso`='P1',`nro_tramite`='1000',`fechaini`='2022-11-23 23:55:0',`fechafin`=NULL,`usuario`='FuryAlumno', `usuario_tarea`='FuryAlumno' WHERE `nro_tramite`='1000'

UPDATE `flujotramite` SET `Flujo`='F1',`proceso`='P2',`nro_tramite`='1001',`fechaini`='2022-11-22 13:55:0',`fechafin`=NULL,`usuario`='osvaldo' WHERE `nro_tramite`='1001';





create table Rol
(
id int,	
descipcion varchar(20)
)

insert into Rol values(1, 'Alumno');
insert into Rol values(2, 'Kardex');
insert into Rol values(3, 'Prefas');


create table Usuario 	
(
id	int,
descripcion varchar(20)
)

insert into Usuario values(1, 'fury');
insert into Usuario values(2, 'osvaldo');
insert into Usuario values(3, 'tourist');
insert into Usuario values(4, 'JuanKardex');


create table RolUsuario	
(

IdRol	int,
IdUsuario int
)

insert into RolUsuario values(1, 1);
insert into RolUsuario values(1, 2);
insert into RolUsuario values(1, 3);
insert into RolUsuario values(2, 4);
insert into RolUsuario values(3, 5);





create table alumno
(
id	                int,
nombrecompleto	    varchar(70),
coddepto	        varchar(5),
codBachiller	    varchar(10),
cnacimiento	        varchar(5),
cidentidad	        varchar(5),
nacionalidad	    varchar(10),
usuario             varchar(20)
)

insert into alumno values (1,'RAGO','02','12345','si','12323','Bolivia','fury');
insert into alumno values (2,'Osvaldo Rodriguez','03','42343','si','34','Peru','osvaldo');
insert into alumno values (3,'Gennady Korotevich','02','34545','no','23','Francia','tourist');



alter table nombre_tabla add nombre_atrib varchar(30);