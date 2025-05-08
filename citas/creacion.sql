CREATE TABLE usuarios (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(100) NOT NULL,
    pass_hash VARCHAR(255) NOT NULL,
    id_rol INT(11) UNSIGNED,
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
);
-- INSERT INTO usuarios('nombre_usuario','pass_hash','id_rol')
-- VALUES('mafe','12345',1);
-- INSERT INTO `cliente` (`documento`, `nombre`, `apellido`, `direccion`) VALUES
-- (1528089606, 'fernanda', 'carvajal', 'xxx22'),
-- (1128905602, 'maria', 'garcia', 'xxxx'),
-- (109255555, 'luis', 'perez', 'xxx4');
-- COMMIT;

INSERT INTO usuarios (nombre_usuario, pass_hash, id_rol)
VALUES 
('mafe garcia', SHA1('1313'), 1);