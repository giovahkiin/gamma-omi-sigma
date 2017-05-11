--insert product info--
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

--insert colors available--
INSERT INTO color(color_name) VALUES("Red");
INSERT INTO color(color_name) VALUES("Orange");
INSERT INTO color(color_name) VALUES("Yellow");
INSERT INTO color(color_name) VALUES("Green");
INSERT INTO color(color_name) VALUES("Blue");
INSERT INTO color(color_name) VALUES("Purple");
INSERT INTO color(color_name) VALUES("Pink");
INSERT INTO color(color_name) VALUES("Black");

--insert item_id for each product type in all colors--
INSERT INTO item(color, product_type)
VALUES("Red", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Orange", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Green", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Blue", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Purple", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Pink", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Black", "Flipper");
--
INSERT INTO item(color, product_type)
VALUES("Red", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Orange", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Green", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Blue", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Purple", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Pink", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Black", "Slinger");
--
INSERT INTO item(color, product_type)
VALUES("Red", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Orange", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Green", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Blue", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Purple", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Pink", "Doodler");
INSERT INTO item(color, product_type)
VALUES("Black", "Doodler");
--
INSERT INTO item(color, product_type)
VALUES("Red", "Filer");
INSERT INTO item(color, product_type)
VALUES("Orange", "Filer");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Filer");
INSERT INTO item(color, product_type)
VALUES("Green", "Filer");
INSERT INTO item(color, product_type)
VALUES("Blue", "Filer");
INSERT INTO item(color, product_type)
VALUES("Purple", "Filer");
INSERT INTO item(color, product_type)
VALUES("Pink", "Filer");
INSERT INTO item(color, product_type)
VALUES("Black", "Filer");
--
INSERT INTO item(color, product_type)
VALUES("Red", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Orange", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Green", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Blue", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Purple", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Pink", "Shifter");
INSERT INTO item(color, product_type)
VALUES("Black", "Shifter");

--record items to stock--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Red", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Orange", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Yellow", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Green", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Blue", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Purple", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Pink", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Black", 1, '2017-05-09');
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Red", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Orange", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Yellow", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Green", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Blue", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Purple", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Pink", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Black", 1, '2017-05-09');
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Red", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Orange", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Yellow", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Green", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Blue", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Purple", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Pink", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Black", 1, '2017-05-09');
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Red", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Orange", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Yellow", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Green", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Blue", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Purple", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Pink", 1, '2017-05-10');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Filer", "Black", 1, '2017-05-10');
--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Red", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Orange", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Yellow", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Green", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Blue", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Purple", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Pink", 1, '2017-05-11');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Shifter", "Black", 1, '2017-05-11');

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
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Carlo Mendoza", TRUE, TRUE, "Marikina City", 1);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Gener Lopez", TRUE, TRUE, "Quezon City", 2);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Christian Chan", TRUE, TRUE, "Manila City", 2);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Tim Bergling", TRUE, TRUE, "Stockholm, Sweden", 3);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Kyrre Gorvell-Dahl", TRUE, FALSE, "Bergen, Norway", 1);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Dara Hayes", FALSE, TRUE, "Sydney, Australia", 3);

--insert orders--
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (1, '2017-05-12', 6900);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (2, '2017-05-12', 4200);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (3, '2017-05-13', 3000);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (4, '2017-05-13', 12700);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (5, '2017-05-14', 29600);

--insert deliveries--
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (1, 1, '2017-05-15', '12:30:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (2, 2, '2017-05-15', '14:30:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (3, 3, '2017-05-16', '15:00:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (4, 4, '2017-05-16', '06:45:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (5, 6, '2017-05-17', '08:30:00', TRUE);

--insert requests from orders--
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (1, "Flipper", "Red", "~Carlo~", 1, 0.00, 745);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (1, "Flipper", "Pink", "~Mendoza~", 1, 0.00, 745);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (2, "Slinger", "Orange", "~Gio~", 1, 0.00, 95);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (2, "Slinger", "Black", "~Lopez~", 1, 0.00, 95);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (3, "Doodler", "Yellow", "~300~", 1, 0.00, 595);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (3, "Doodler", "Blue", "~CCC~", 1, 0.00, 595);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (4, "Filer", "Green", "~Pewds~", 1, 0.00, 995);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (4, "Filer", "Purple", "~Pewdie~", 1, 0.00, 995);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (5, "Shifter", "Red", "~Jack~", 1, 0.00, 595);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (5, "Shifter", "Blue", "~Septiceye~", 1, 0.00, 595);

--insert item_id for each request--
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (1, "Flipper", 1);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (1, "Flipper", 7);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (2, "Slinger", 10);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (2, "Slinger", 16);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (3, "Doodler", 19);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (3, "Doodler", 28);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (4, "Filer", 28);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (4, "Filer", 30);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (5, "Shifter", 33);
INSERT INTO request_item(order_no, product_type, item_id)
VALUES (5, "Shifter", 37);
