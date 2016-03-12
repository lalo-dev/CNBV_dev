SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `cnbv` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `cnbv` ;

-- -----------------------------------------------------
-- Table `cnbv`.`Auditoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`Auditoria` (
  `idUsuarioCreador` INT NOT NULL ,
  `fechaCreacion` DATETIME NOT NULL ,
  `idUsuarioModificador` INT NOT NULL ,
  `fechaModificacion` DATETIME NOT NULL )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cnbv`.`Pat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`Pat` (
  `idPat` INT NOT NULL AUTO_INCREMENT ,
  `nombrePat` VARCHAR(100) NOT NULL ,
  `anioPat` INT(11) NOT NULL ,
  `auditoriasPat` INT(11) NOT NULL ,
  `seguimientosPat` INT(11) NOT NULL ,
  `observacionesPat` INT(11) NOT NULL ,
  `prasPat` INT(11) NOT NULL ,
  `idEstatusPat` INT(11) NOT NULL ,
  `activoPat` INT(11) NOT NULL ,
  `idUsuarioCreadorPat` INT NOT NULL ,
  `fechaCreacionPat` DATETIME NOT NULL ,
  `idUsuarioModificadorPat` INT NOT NULL ,
  `fechaModificacionPat` DATETIME NOT NULL ,
  PRIMARY KEY (`idPat`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cnbv`.`PatDetalle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`PatDetalle` (
  `idPatDetalle` INT NOT NULL AUTO_INCREMENT ,
  `consecutivoPatDetalle` INT(11) NOT NULL ,
  `tipoPatDetalle` INT(11) NOT NULL ,
  `paPatDetalle` INT(11) NOT NULL ,
  `clavePatDetalle` INT(11) NOT NULL ,
  `instanciaPatDetalle` INT(11) NOT NULL ,
  `justificacionPatDetalle` INT(11) NOT NULL ,
  `areaPatDetalle` INT(11) NOT NULL ,
  `descripcionPatDetalle` TEXT NOT NULL ,
  `objetivoPatDetalle` TEXT NOT NULL ,
  `spiPatDetalle` INT(11) NOT NULL ,
  `sptPatDetalle` INT(11) NOT NULL ,
  `tsrPatDetalle` INT(11) NOT NULL ,
  `tshPatDetalle` INT(11) NOT NULL ,
  `priPatDetalle` INT(11) NOT NULL ,
  `prfPatDetalle` INT(11) NOT NULL ,
  `apPatDetalle` INT(11) NOT NULL ,
  `muestraPatDetalle` INT(11) NOT NULL ,
  `universoPatDetalle` INT(11) NOT NULL ,
  `pendientePatDetalle` INT(11) NOT NULL ,
  `riesgosPatDetalle` INT(11) NOT NULL ,
  `cuadrantePatDetalle` INT(11) NOT NULL ,
  `revisadoPatDetalle` INT(11) NOT NULL ,
  `verificadoPatDetalle` INT(11) NOT NULL ,
  `comentariosPatDetalle` INT(11) NOT NULL ,
  `idEstatusPatDetalle` INT(11) NOT NULL ,
  `idUsuarioCreadorPatDetalle` INT NOT NULL ,
  `fechaCreacionPatDetalle` DATETIME NOT NULL ,
  `idUsuarioModificadorPatDetalle` INT NOT NULL ,
  `fechaModificacionPatDetalle` DATETIME NOT NULL ,
  PRIMARY KEY (`idPatDetalle`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cnbv`.`Estatus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`Estatus` (
  `idEstatus` INT NOT NULL AUTO_INCREMENT ,
  `nombreEstatus` VARCHAR(50) NOT NULL ,
  `descripcionEstatus` VARCHAR(150) NOT NULL ,
  `idUsuarioCreadorEstatus` INT NOT NULL ,
  `fechaCreacionEstatus` DATETIME NOT NULL ,
  `idUsuarioModificadorEstatus` INT NOT NULL ,
  `fechaModificacionEstatus` DATETIME NOT NULL ,
  PRIMARY KEY (`idEstatus`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cnbv`.`Publicaciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`Publicaciones` (
  `idPublicacion` INT NOT NULL AUTO_INCREMENT ,
  `idTipoPublicacionPublicaciones` INT NOT NULL ,
  `tituloPublicaciones` VARCHAR(200) NOT NULL ,
  `textoPublicaciones` TEXT NOT NULL ,
  `idEstatusPublicaciones` INT NOT NULL ,
  `idUsuarioCreadorPublicaciones` INT NOT NULL ,
  `fechaCreacionPublicaciones` DATETIME NOT NULL ,
  `idUsuarioModificadorPublicaciones` INT NOT NULL ,
  `fechaModificacionPublicaciones` DATETIME NOT NULL ,
  PRIMARY KEY (`idPublicacion`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;


-- -----------------------------------------------------
-- Table `cnbv`.`TiposPublicaciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cnbv`.`TiposPublicaciones` (
  `idTipoPublicacion` INT NOT NULL AUTO_INCREMENT ,
  `nombreTiposPublicaciones` VARCHAR(50) NOT NULL ,
  `descripcionTiposPublicaciones` VARCHAR(150) NOT NULL ,
  `imagenTiposPublicaciones` VARCHAR(50) NOT NULL ,
  `idEstatusTiposPublicaciones` INT NOT NULL ,
  `idUsuarioCreadorTiposPublicaciones` INT NOT NULL ,
  `fechaCreacionTiposPublicaciones` DATETIME NOT NULL ,
  `idUsuarioModificadorTiposPublicaciones` INT NOT NULL ,
  `fechaModificacionTiposPublicaciones` DATETIME NOT NULL ,
  PRIMARY KEY (`idTipoPublicacion`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
