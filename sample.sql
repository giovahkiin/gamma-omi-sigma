INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
VALUES("Flipper", "Folder", 8, 13.5, 10.25, 0.75, NULL, "reversible, slim and compact, leatherette material", 745);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
VALUES("Slinger", "Pen Organizer", 5, NULL, NULL, NULL, 6, "magnetic lock, dual ribbon straps with velcro, water repellent", 95);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
VALUES("Doodler", "Planner", 8,  8.5, 6, 0.75, NULL, "smyth sewn hardbound, premium120 gsm paper, monthly spread", 595);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
VALUES("Filer", "Folder", 8,  14, 11, 1.5, NULL, "multi-function portfolio organizer, leather exterior, magnetic flap", 995);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
VALUES("Shifter", "Pen Organizer", 8, NULL, NULL, NULL, 15, "triple zipper, expandable bin, velcro locked pockets", 295);

INSERT INTO color(color_name) VALUES("Red");
INSERT INTO color(color_name) VALUES("Orange");
INSERT INTO color(color_name) VALUES("Yellow");
INSERT INTO color(color_name) VALUES("Green");
INSERT INTO color(color_name) VALUES("Blue");
INSERT INTO color(color_name) VALUES("Purple");
INSERT INTO color(color_name) VALUES("Pink");
INSERT INTO color(color_name) VALUES("Black");

INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Red", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Orange", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Yellow", 1,'2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Green", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Blue", 1,  '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Purple", 1,  '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Pink", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Black", 1,  '2017-05-10');

INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Red", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Orange", 1,  '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Yellow", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Green", 1,  '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Blue", 1,  '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Purple", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Pink", 1,  '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Black", 1, '2017-05-11');

INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Red", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Orange", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Yellow", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Green", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Blue", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Purple", 1, '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Pink", 1,  '2017-05-12');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Black", 1,  '2017-05-12');

INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Red", 1, '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Orange", 1, '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Yellow", 1,  '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Green", 1,  '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Blue", 1,  '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Purple", 1, '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Pink", 1, '2017-05-13');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Black", 1, '2017-05-13');

INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Red", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Orange", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Yellow", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Green", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Blue", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Purple", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Pink", 1, '2017-05-14');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Black", 1, '2017-05-14');

INSERT INTO agent(name) VALUES("Axis Snowdrop");
INSERT INTO agent(name) VALUES("Gamma Omicron");
INSERT INTO agent(name) VALUES("Emerald Ruby Diamond");

INSERT INTO customer(customer_name, agent_id)
VALUES ("Carlo Mendoza", 1);
INSERT INTO customer(customer_name, agent_id)
VALUES ("Gener Lopez", 2);
INSERT INTO customer(customer_name, agent_id)
VALUES ("Christian Chan", 2);
INSERT INTO customer(customer_name, agent_id)
VALUES ("Tim Bergling", 3);
INSERT INTO customer(customer_name, agent_id)
VALUES ("Kyrre Gorvell-Dahl", 1);

INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (1, FALSE, "Carlo Mendoza", "Marikina City", '2017-05-10', '2017-05-15', '12:30:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (2, FALSE, "Gener Lopez", "Quezon City", '2017-05-11', '2017-05-15', '14:30:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (3, FALSE, "Christian Chan", "Manila City", '2017-05-12', '2017-05-16', '15:00:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (4, FALSE, "Tim Bergling", "Stockholm, Sweden", '2017-05-13', '2017-05-16', '06:45:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (5, TRUE, "Dara Hayes", "Bergen, Norway", '2017-05-14', '2017-05-17', '08:30:00');

INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (1, "Flipper", "Red", "~Carlo~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Flipper") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Flipper") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (1, "Slinger", "Pink", "~Mendoza~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Slinger") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Slinger") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (2, "Doodler", "Orange", "~Gio~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Doodler") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Doodler") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (2, "Filer", "Black", "~Lopez~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Filer") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Filer") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (3, "Flipper", "Yellow", "~300~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Flipper") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Flipper") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (3, "Filer", "Blue", "~CCC~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Filer") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Filer") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (4, "Slinger", "Green", "~Pewds~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Slinger") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Slinger") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (4, "Doodler", "Purple", "~Pewdie~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Doodler") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Doodler") * 1))));

INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Shifter", "Red", "~Jack~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Shifter") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Shifter") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Flipper", "Blue", "~Septiceye~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Flipper") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Flipper") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Doodler", "Pink", "~ohayou~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Doodler") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Doodler") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Slinger", "Black", "~arigatou~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Slinger") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Slinger") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Filer", "Yellow", "~kawaii~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Filer") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Filer") * 1))));