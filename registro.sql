create database d;
	use d;

	create table i(
		id int primary key auto_increment not null,
		marca varchar (50) not null,
		existencia int not null,
		precio int not null,
		codigo int not null
		);