CREATE DATABASE IF NOT EXISTS `6`;
USE `6`;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Peralatan Mandi'),
	(2, 'Mie Instan'),
	(3, 'Olahan Daging');

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__categories` (`category_id`),
  CONSTRAINT `FK__categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB;

INSERT INTO `products` (`id`, `name`, `category_id`) VALUES
	(1, 'shampo', 1),
	(2, 'sikat gigi', 1),
	(3, 'Indomie', 2),
	(4, 'Mie Sedap', 2),
	(5, 'Nugget', 3);

SELECT categories.id, categories.name AS 'category_name', GROUP_CONCAT(products.name SEPARATOR ', ') AS 'products'
FROM categories
INNER JOIN products
ON products.category_id = categories.id
GROUP BY categories.id;
