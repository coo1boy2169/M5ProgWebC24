CREATE TABLE `dbfirst`.`bordspellen` (
  `idbordspellen` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(250) NOT NULL,
  `aantal spellers` INT NOT NULL,
  `beschrijfing` VARCHAR(500) NOT NULL,
  `coop` INT NOT NULL,
  PRIMARY KEY (`idbordspellen`),
  UNIQUE INDEX `idbordspellen_UNIQUE` (`idbordspellen` ASC) VISIBLE);
