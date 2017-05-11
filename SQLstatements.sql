DROP DATABASE PixieDustbyGMO;
CREATE DATABASE PixieDustbyGMO;
USE PixieDustbyGMO;

----------PRODUCT CATALOG----------
CREATE TABLE catalog (
	product_type			VARCHAR(20) DEFAULT 'Flipper' PRIMARY KEY,
	product_line			VARCHAR(20) DEFAULT 'Folder',
	personalization_limit	INT DEFAULT 1,
	length					FLOAT(2) DEFAULT 0.00,
	width					FLOAT(2) DEFAULT 0.00,
	height					FLOAT(2) DEFAULT 0.00,
	number_of_slots			INT DEFAULT 3,
	price					FLOAT(2) DEFAULT 0.00,
	CHECK (personalization_limit between 1 and 10),
	CHECK (number_of_slots between 3 and 15)
);

----------INVENTORY----------
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

----------PRODUCT CATALOG----------
CREATE TABLE item (
	item_id					INT(6) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	color					VARCHAR(8),		
	product_type			VARCHAR(20),		
	FOREIGN KEY (color) REFERENCES color(color_name) ON DELETE RESTRICT,
	FOREIGN KEY (product_type) REFERENCES catalog(product_type) ON DELETE RESTRICT
);

CREATE TABLE folder_features (
	folder_type				VARCHAR(20) NOT NULL,
	features  				VARCHAR(255) NOT NULL,   
	FOREIGN KEY (folder_type) REFERENCES catalog(product_type) ON DELETE RESTRICT    
);

CREATE TABLE organizer_features (
	organizer_type			VARCHAR(20) NOT NULL,
	features  				VARCHAR(255) NOT NULL,   
	FOREIGN KEY (organizer_type) REFERENCES catalog(product_type) ON DELETE RESTRICT    
);

CREATE TABLE planner_features (
	planner_type			VARCHAR(20) NOT NULL,
	features  				VARCHAR(255) NOT NULL,   
	FOREIGN KEY (planner_type) REFERENCES catalog(product_type) ON DELETE RESTRICT    
);

----------ORDERS AND DELIVERIES----------
CREATE TABLE agent (
	agent_id				INT(6) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	name             		VARCHAR(255) DEFAULT "Anonymous"
);

CREATE TABLE customer (
	customer_id				INT(6) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	name 					VARCHAR(255) DEFAULT "Anonymous",
	isBuyer					BOOLEAN DEFAULT TRUE,
	isRecipient				BOOLEAN DEFAULT TRUE,
	address					VARCHAR(255) DEFAULT "Unknown",
	agent_id				INT(6) ZEROFILL NOT NULL,
	FOREIGN KEY (agent_id) REFERENCES agent(agent_id) ON DELETE RESTRICT
);

----------AGENT TRANSACTIONS----------
CREATE TABLE orders (
	order_no				INT(8) ZEROFILL NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY,
	customer_id				INT(6) ZEROFILL NOT NULL,
	order_date				DATE DEFAULT '1990-01-01',
	amount_due				FLOAT(2) DEFAULT 0.00,
	FOREIGN KEY (customer_id) REFERENCES customer(customer_id) ON DELETE RESTRICT
);

----------ORDERS AND DELIVERIES----------
CREATE TABLE delivery (
	order_no				INT(8) ZEROFILL NOT NULL,
	recipient_id			INT(6) ZEROFILL NOT NULL,
	delivery_date			DATE DEFAULT '1990-01-01',
	delivery_time			TIME DEFAULT '00:00:00',
	isGift					BOOLEAN DEFAULT FALSE,
	FOREIGN KEY (order_no) REFERENCES orders(order_no) ON DELETE RESTRICT,
	FOREIGN KEY (recipient_id) REFERENCES customer(customer_id) ON DELETE RESTRICT
);

CREATE TABLE request (
	order_no				INT(8) ZEROFILL NOT NULL,
	product_type			VARCHAR(20) NOT NULL,
	color     				VARCHAR(8) NOT NULL,
	personalization    		VARCHAR(255),
	quantity				INT DEFAULT 1,
	discount				FLOAT(2) DEFAULT 0.05,			
	total_amount			FLOAT(2) DEFAULT 0.00,
	PRIMARY KEY (order_no, product_type, color),
	FOREIGN KEY (order_no) REFERENCES orders(order_no) ON DELETE RESTRICT,
	FOREIGN KEY (product_type) REFERENCES catalog(product_type) ON DELETE RESTRICT,
	FOREIGN KEY (color) REFERENCES color(color_name) ON DELETE RESTRICT,
	CHECK (quantity between 1 and 99)
);

CREATE TABLE request_item (
	order_no				INT(8) ZEROFILL NOT NULL,	
	product_type			VARCHAR(20) NOT NULL,
	item_id					INT(6) ZEROFILL NOT NULL,
	PRIMARY KEY (order_no, product_type, item_id),
	FOREIGN KEY (order_no, product_type) REFERENCES request(order_no, product_type) ON DELETE RESTRICT,
	FOREIGN KEY (item_id) REFERENCES item(item_id) ON DELETE RESTRICT
);








	
