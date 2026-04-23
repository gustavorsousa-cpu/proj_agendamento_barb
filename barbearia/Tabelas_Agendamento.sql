create table barbeiros (
id int auto_increment primary key,
nome varchar (100) not null,
email varchar (100) not null,
senha varchar (255) not null,
ativo tinyint (1) default 1);

create table servicos(
id int auto_increment primary key,
nome varchar(100) not null,
duracao_minutos int not null,
preco decimal (10,2) not null
);

Create table horarios(
id int auto_increment primary key,
barbeiro_id int not null,
dia_semana tinyint not null,
horario_inicio time not null,
horario_fim time not null,
foreign key (barbeiro_id) references barbeiros (id)
);

create table agendamentos(
id int auto_increment primary key,
barbeiro_id int not null,
servico_id int not null,
cliente_nome varchar(100) not null,
cliente_telefone varchar(25) not null,
data_hora datetime not null,
status enum ('pendente', 'confirmado', 'cancelado') default 'pendente',
criado_em timestamp default current_timestamp,
foreign key (barbeiro_id) references barbeiros(id),
foreign key (servico_id) references servicos(id)
);

insert into servicos (nome, duracao_minutos, preco) values
('Corte', 30, 35.00),
('Barba', 20, 25.00),
('Corte + Barba', 50, 50.00);
