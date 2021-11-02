CREATE TABLE `id17861569_statistics`.`Users`
( `userId` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR
(10) NOT NULL , `password` VARCHAR
(10) NOT NULL , `email` VARCHAR
(20) NOT NULL , PRIMARY KEY
(`userId`)) ENGINE = InnoDB;

INSERT INTO `Users` (`
userId`,
`username
`, `password`, `email`) VALUES
(NULL, 'troymartin', '12345', 'helloworld@yahoo.com');