
CREATE TABLE `clientes` (
`id`  int(7) NOT NULL AUTO_INCREMENT ,
`name`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;
-- ----------------------------
BEGIN;
INSERT INTO `clientes` VALUES ('1', 'Bull Peendranande 2'), ('2', 'Mariana'), ('13', 'Marhteus'), ('3', 'Macaco Aranha');
COMMIT;
