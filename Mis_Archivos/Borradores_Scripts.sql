INSERT INTO `cnbv`.`usuarios`
    (
        `idUsuario`, `idNivelAccesoUsuarios`, `idDepartamentoUsuarios`, `nombreUsuarios`, `apellidoPaternoUsuarios`,
        `apellidoMaternoUsuarios`, `nombreUsuarioUsuarios`, `contraseniaUsuarios`, `idEstatusUsuarios`, `idUsuarioCreadorUsuarios`,
        `fechaCreacionUsuarios`, `idUsuarioModificadorUsuarios`, `fechaModificacionUsuarios`
    )
VALUES
    (NULL, '1', '1', 'Carlos', 'Estrada', 'Toledo', 'carlos', 'carlos', '1', '1', '2016-03-16 00:00:00', '1', '2016-03-16 00:00:00'),
    (NULL, '1', '1', 'Uriel Jacobo', 'Torres', 'Martínez', 'uri', 'uri', '1', '1', '2016-03-16 00:00:00', '1', '2016-03-16 00:00:00');

SELECT * FROM usuarios;

INSERT INTO usuarios
    (
        `idUsuario`, `idNivelAccesoUsuarios`, `idDepartamentoUsuarios`, `nombreUsuarios`, `apellidoPaternoUsuarios`,
        `apellidoMaternoUsuarios`, `nombreUsuarioUsuarios`, `contraseniaUsuarios`, `idEstatusUsuarios`, `idUsuarioCreadorUsuarios`,
        `fechaCreacionUsuarios`, `idUsuarioModificadorUsuarios`, `fechaModificacionUsuarios`
    )
VALUES
    (NULL,'1', '1',
     AES_ENCRYPT('Sandro',UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512))), AES_ENCRYPT('Badillo',UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512))), AES_ENCRYPT('Sosa',UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512))), AES_ENCRYPT('sandro',UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512))), AES_ENCRYPT('sandro',UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512))),
     '1', '1', '2016-03-16 00:00:00', '1', '2016-03-16 00:00:00'
    );
    UNHEX(SHA2('s2a1i0d1a1l9a8r6c2o1n4s2o2s1a',512));











DESCRIBE Usuarios;
SELECT * FROM Usuarios;

INSERT INTO Usuarios
    (
        `idUsuario`, `idNivelAccesoUsuarios`, `idDepartamentoUsuarios`,
        `nombreUsuarios`, `apellidoPaternoUsuarios`, `apellidoMaternoUsuarios`, `nombreUsuarioUsuarios`, `contraseniaUsuarios`,
        `idEstatusUsuarios`, `idUsuarioCreadorUsuarios`, `fechaCreacionUsuarios`, `idUsuarioModificadorUsuarios`, `fechaModificacionUsuarios`
    )
VALUES
    (
        NULL, '1', '1',
        AES_ENCRYPT('Esteban','2142'),
        AES_ENCRYPT('Estrada','2142'),
        AES_ENCRYPT('Contreras','2142'),
        AES_ENCRYPT('esteban','2142'),
        AES_ENCRYPT('esteban','2142'),
        '1', '1', '2016-03-16 00:00:00', '1', '2016-03-16 00:00:00'
    );
	
	
	SET @llave:='s2a1i0d1a1l9a8r6c2o1n4s2osa';
INSERT INTO rrhh_usuari (DNI,adreca) VALUES (AES_ENCRYPT('99999999K',@password),AES_ENCRYPT('C/ María del Rosario',@password));

SET @llave:='s2a1i0d1a1l9a8r6c2o1n4s2osa';
INSERT INTO Usuarios
    (
        `idUsuario`, `idNivelAccesoUsuarios`, `idDepartamentoUsuarios`,
        `nombreUsuarios`, `apellidoPaternoUsuarios`, `apellidoMaternoUsuarios`, `nombreUsuarioUsuarios`, `contraseniaUsuarios`,
        `idEstatusUsuarios`, `idUsuarioCreadorUsuarios`, `fechaCreacionUsuarios`, `idUsuarioModificadorUsuarios`, `fechaModificacionUsuarios`
    )
VALUES
    (
        NULL, '1', '1',
        AES_ENCRYPT('nombreUsuarios',@llave),
        AES_ENCRYPT('apellidoPaternoUsuarios',@llave),
        AES_ENCRYPT('apellidoMaternoUsuarios',@llave),
        AES_ENCRYPT('nombreUsuarioUsuarios',@llave),
        AES_ENCRYPT('contraseniaUsuarios',@llave),
        '1', '1', '2016-03-16 00:00:00', '1', '2016-03-16 00:00:00'
    )