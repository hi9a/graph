/*
  db: pgdb
  user: pgusr
  password: pgusr
*/

create table AVT_IOT_DATA (
NAME varchar(128),
DATE_TIME timestamp,
VALUE int,
STATUS varchar(1)
);

insert into avt_iot_data values ('a', '2017-07-13', 115, '0');
insert into avt_iot_data values ('a', '2017-07-14', 120, '0');
insert into avt_iot_data values ('a', '2017-07-15', 100, '0');
insert into avt_iot_data values ('a', '2017-07-16', 90, '0');
insert into avt_iot_data values ('a', '2017-07-17', 95, '0');
insert into avt_iot_data values ('a', '2017-07-18', 90, '0');
insert into avt_iot_data values ('a', '2017-07-19', 105, '0');
insert into avt_iot_data values ('a', '2017-07-20', 100, '0');
insert into avt_iot_data values ('b', '2017-07-20', 200, '0');

commit;