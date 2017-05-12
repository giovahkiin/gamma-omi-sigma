DROP DATABASE PixieDustbyGOS;
CREATE DATABASE PixieDustbyGOS;
USE PixieDustbyGOS;

CREATE TABLE catalog (
	product_type			VARCHAR(20) DEFAULT 'Flipper' PRIMARY KEY,
	product_line			VARCHAR(20) DEFAULT 'Folder',
	personalization_limit	INT DEFAULT 1,
	length					FLOAT(2) DEFAULT 0.00,
	width					FLOAT(2) DEFAULT 0.00,
	height					FLOAT(2) DEFAULT 0.00,
	number_of_slots			INT DEFAULT 3,
	features 				TEXT NOT NULL,
	price					FLOAT(2) DEFAULT 0.00,
	discount				FLOAT(2) DEFAULT 0.00,
	CHECK (personalization_limit between 1 and 10),
	CHECK (number_of_slots between 3 and 15)
);

CREATE TABLE color (
	color_name				VARCHAR(8) NOT NULL PRIMARY KEY,
	CHECK (color_name IN ('Red, Orange, Yellow, Green, Blue, Purple, Pink, Black'))
);

CREATE TABLE stock (
	product_type			VARCHAR(20) NOT NULL,
	color       			VARCHAR(8) NOT NULL,
	quantity				INT DEFAULT 0,
	last_update				DATE DEFAULT '1990-01-01',
	FOREIGN KEY (product_type) REFERENCES catalog(product_type) ON DELETE RESTRICT,
	FOREIGN KEY (color) REFERENCES color(color_name) ON DELETE RESTRICT,
	CHECK (quantity between 0 and 99)
);

CREATE TABLE agent (
	agent_id				INT(6) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	name             		VARCHAR(255) DEFAULT "Anonymous"
);

CREATE TABLE customer (
	customer_id				INT(6) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	customer_name 			VARCHAR(255) DEFAULT "Anonymous",
	agent_id				INT(6) ZEROFILL NOT NULL,
	FOREIGN KEY (agent_id) REFERENCES agent(agent_id) ON DELETE RESTRICT
);

CREATE TABLE orders (
	order_no				INT(8) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	customer_id				INT(6) ZEROFILL NOT NULL,
	isGift					BOOLEAN DEFAULT TRUE,
	recipient_name			VARCHAR(255) DEFAULT "Anonymous",
	address					VARCHAR(255) DEFAULT "Unknown",
	order_date				DATE DEFAULT '1990-01-01',
	delivery_date			DATE DEFAULT '1990-01-01',
	delivery_time			TIME DEFAULT '00:00:00',
	FOREIGN KEY (customer_id) REFERENCES customer(customer_id) ON DELETE RESTRICT
);

CREATE TABLE request (
	order_no				INT(8) ZEROFILL NOT NULL,
	product_type			VARCHAR(20) NOT NULL,
	color     				VARCHAR(8) NOT NULL,
	personalization    		VARCHAR(255),
	quantity				INT DEFAULT 1,	
	total_amount			FLOAT(2) DEFAULT 0.00,
	PRIMARY KEY (order_no, product_type, color),
	FOREIGN KEY (order_no) REFERENCES orders(order_no) ON DELETE RESTRICT,
	FOREIGN KEY (product_type) REFERENCES catalog(product_type) ON DELETE RESTRICT,
	FOREIGN KEY (color) REFERENCES color(color_name) ON DELETE RESTRICT,
	CHECK (quantity between 1 and 99)
);






	
