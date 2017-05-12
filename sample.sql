--add product (automatically adds 1 stock of that item in all colors)
--add features?
--update product (replaces price and discount)
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Flipper", "Folder", 8, 13.5, 10.25, 0.75, NULL, 745);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Slinger", "Pen Organizer", 5, NULL, NULL, NULL, 6, 95);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Doodler", "Planner", 8,  8.5, 6, 0.75, NULL, 595);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Filer", "Folder", 8,  14, 11, 1.5, NULL, 995);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Shifter", "Pen Organizer", 8, NULL, NULL, NULL, 15, 595);

--initial data--
INSERT INTO color(color_name) VALUES("Red");
INSERT INTO color(color_name) VALUES("Orange");
INSERT INTO color(color_name) VALUES("Yellow");
INSERT INTO color(color_name) VALUES("Green");
INSERT INTO color(color_name) VALUES("Blue");
INSERT INTO color(color_name) VALUES("Purple");
INSERT INTO color(color_name) VALUES("Pink");
INSERT INTO color(color_name) VALUES("Black");

--when a product is added to catalog, 1 stock of that item is added in each color
--last_update is now()
--update stock gets current stock whered date == now() then add sa quantity na ilalagay ng user then last update=now
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Red", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Orange", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Yellow", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Green", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Blue", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Purple", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Pink", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Black", 1,  NOW());
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Red", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Orange", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Yellow", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Green", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Blue", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Purple", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Pink", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Black", 1,  NOW());
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Red", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Orange", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Yellow", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Green", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Blue", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Purple", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Pink", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Black", 1,  NOW());
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Red", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Orange", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Yellow", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Green", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Blue", 1,  NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Purple", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Pink", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Black", 1, NOW());
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Red", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Orange", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Yellow", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Green", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Blue", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Purple", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Pink", 1, NOW());
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Black", 1, NOW());

--insert folder features--
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "reversible");
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "slim and compact");
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "leatherette material");
INSERT INTO folder_features(folder_type, features)
VALUES("Filer", "multi-function portfolio organizer");
INSERT INTO folder_features(folder_type, features)
VALUES("Filer", "3-ring binder");
INSERT INTO folder_features(folder_type, features)
VALUES("Filer", "sleeves for papers");

--insert pen organizer features--
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "magnetic lock");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "dual ribbon straps with velcro");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "water repellent");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Shifter", "triple zipper");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Shifter", "expandable bin");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Shifter", "velcro locked pockets");

--insert planner features--
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "smyth sewn hardbound");
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "premium 120 gsm paper");
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "monthly spread");

--insert agent info (id auto increments)--
INSERT INTO agent(name) VALUES("Axis Snowdrop");
INSERT INTO agent(name) VALUES("Gamma Omicron");
INSERT INTO agent(name) VALUES("Emerald Ruby Diamond");

--insert customer info (id auto increments)--
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

--insert orders--
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (1, FALSE, "Carlo Mendoza", "Marikina City", NOW(), '2017-05-15', '12:30:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (2, FALSE, "Gener Lopez", "Quezon City", NOW(), '2017-05-15', '14:30:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (3, FALSE, "Christian Chan", "Manila City", NOW(), '2017-05-16', '15:00:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (4, FALSE, "Tim Bergling", "Stockholm, Sweden", NOW(), '2017-05-16', '06:45:00');
INSERT INTO orders(customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
VALUES (5, TRUE, "Dara Hayes", "Bergen, Norway", NOW(), '2017-05-17', '08:30:00');

--insert requests from orders--
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (1, "Flipper", "Red", "~Carlo~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Flipper") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Flipper") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (1, "Flipper", "Pink", "~Mendoza~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Flipper") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Flipper") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (2, "Slinger", "Orange", "~Gio~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Slinger") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Slinger") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (2, "Slinger", "Black", "~Lopez~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Slinger") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Slinger") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (3, "Doodler", "Yellow", "~300~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Doodler") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Doodler") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (3, "Doodler", "Blue", "~CCC~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Doodler") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Doodler") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (4, "Filer", "Green", "~Pewds~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Filer") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Filer") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (4, "Filer", "Purple", "~Pewdie~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Filer") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Filer") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Shifter", "Red", "~Jack~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Shifter") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Shifter") * 1))));
INSERT INTO request(order_no, product_type, color, personalization, quantity, total_amount)
VALUES (5, "Shifter", "Blue", "~Septiceye~", 1, (SELECT((SELECT (SELECT price FROM catalog WHERE product_type = "Shifter") * 1) - 
	(SELECT (SELECT discount FROM catalog WHERE product_type = "Shifter") * 1))));