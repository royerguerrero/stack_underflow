CREATE DATABASE stack_underflow_dev;

USE stack_underflow_dev;

CREATE TABLE roles(
    id int(11) not null auto_increment,
    nombre varchar(30) not null,
    CONSTRAINT pk_rol PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE estados(
    id int(11) not null auto_increment,
    nombre varchar(30) not null,
    CONSTRAINT pk_estado PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE tipos_de_entradas(
    id int(11) not null auto_increment,
    nombre varchar(30) not null,
    CONSTRAINT pk_tipo_de_entrada PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE usuarios(
    id int(11) not null auto_increment,
    email varchar(200) not null,
    nickname varchar(50) not null,
    password varchar(100) not null,
    bio MEDIUMTEXT,
    fecha date not null,
    rol_id int(11) not null,
    estado_id int(11) not null,
    CONSTRAINT pk_usuario PRIMARY KEY(id),
    CONSTRAINT uq_usuario_email UNIQUE (email),
    CONSTRAINT uq_usuario_nickname UNIQUE (nickname),
    CONSTRAINT fk_usuario_rol FOREIGN KEY (rol_id) REFERENCES roles(id),
    CONSTRAINT fk_usuario_estado FOREIGN KEY (estado_id) REFERENCES estados(id)
)ENGINE=InnoDB;

CREATE TABLE categorias(
    id int(11) not null auto_increment,
    nombre varchar(100) not null,
    usuario_id int(11) not null,
    estado_id int(11) not null,
    CONSTRAINT pk_categorias PRIMARY KEY (id),
    CONSTRAINT fk_categoria_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_categoria_estado FOREIGN KEY (estado_id) REFERENCES estados(id)
)ENGINE=InnoDB;


CREATE TABLE entradas(
    id int(11) not null auto_increment,
    titulo varchar(255) not null,
    contenido MEDIUMTEXT not null,
    num_respuestas int(11),
    num_vistas int(11),
    fecha date not null,
    respuestas_id int(11) not null,
    categoria_id int(11) not null,
    usuario_id int(11) not null,
    tipo_de_entrada_id int(11) not null,
    estado_id int(11) not null,
    CONSTRAINT pk_entrada PRIMARY KEY (id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_tipo_de_entrada FOREIGN KEY (tipo_de_entrada_id) REFERENCES tipos_de_entradas(id),
    CONSTRAINT fk_entradas_estado FOREIGN KEY (estado_id) REFERENCES estados(id)
)ENGINE=InnoDB;

ALTER TABLE entradas ADD CONSTRAINT fk_entrada_respuesta FOREIGN KEY (respuestas_id) REFERENCES entradas(id);

-- registro de roles

INSERT INTO roles VALUES (null, 'Administrador'); 
INSERT INTO roles VALUES (null, 'Usuario');

-- registro de tipos de entradas

INSERT INTO tipos_de_entradas VALUES (null, "Pregunta");
INSERT INTO tipos_de_entradas VALUES (null, "Respuesta");

-- registro de los estados

INSERT INTO estados VALUES (null, "Activo");
INSERT INTO estados VALUES (null, "Inactivo");