--insert product info--
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Flipper", "Folder", 8, 13.5, 10.25, 0.75, NULL, 745);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Slinger", "Pen Organizer", 5, NULL, NULL, NULL, 6, 95);
INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
VALUES("Doodler", "Planner", 8,  8.5, 6, 0.75, NULL, 595);
--insert colors available--
INSERT INTO color(color_name) VALUES("Red");
INSERT INTO color(color_name) VALUES("Orange");
INSERT INTO color(color_name) VALUES("Yellow");
INSERT INTO color(color_name) VALUES("Green");
INSERT INTO color(color_name) VALUES("Blue");
INSERT INTO color(color_name) VALUES("Purple");
INSERT INTO color(color_name) VALUES("Pink");
INSERT INTO color(color_name) VALUES("Black");
--insert item_id (auto increment) for individual items--
INSERT INTO item(color, product_type)
VALUES("Red", "Flipper");
INSERT INTO item(color, product_type)
VALUES("Orange", "Slinger");
INSERT INTO item(color, product_type)
VALUES("Yellow", "Doodler");
--record items to stock--
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Flipper", "Red", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Slinger", "Orange", 1, '2017-05-09');
INSERT INTO stock(product_type, color, quantity, last_update)
VALUES("Doodler", "Yellow", 1, '2017-05-09');
--insert folder features for flipper--
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "reversible");
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "slim and compact");
INSERT INTO folder_features(folder_type, features)
VALUES("Flipper", "leatherette material");
--insert pen organizer features for slinger--
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "magnetic lock");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "dual ribbon straps with velcro");
INSERT INTO organizer_features(organizer_type, features)
VALUES("Slinger", "water repellent");
--insert planner features for doodler--
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "smyth sewn hardbound");
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "premium 120 gsm paper");
INSERT INTO planner_features(planner_type, features)
VALUES("Doodler", "monthly spread");
--insert agent info (id auto increments)--
INSERT INTO agent(name) VALUES("Axis Snowdrop");
INSERT INTO agent(name) VALUES("Gamma Omicron");
--insert customer info (id auto increments)--
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Carlo Mendoza", TRUE, TRUE, "Marikina City", 1);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Gener Lopez", TRUE, TRUE, "Quezon City", 2);
INSERT INTO customer(name, isBuyer, isRecipient, address, agent_id)
VALUES ("Christian Chan", TRUE, TRUE, "Manila City", 2);
--insert orders--
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (1, '2017-05-09', 6900);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (2, '2017-05-09', 4200);
INSERT INTO orders(customer_id, order_date, amount_due)
VALUES (3, '2017-05-09', 3000);
--insert deliveries--
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (1, 1, '2017-05-15', '12:30:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (2, 2, '2017-05-16', '14:30:00', FALSE);
INSERT INTO delivery(order_no, recipient_id, delivery_date, delivery_time, isGift)
VALUES (3, 3, '2017-05-17', '15:00:00', FALSE);
--insert requests from orders--
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (1, "Flipper", "Red", "~Carlo~", 1, 0.00, 745);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (2, "Slinger", "Orange", "~Gio~", 1, 0.00, 95);
INSERT INTO request(order_no, product_type, color, personalization, quantity, discount, total_amount)
VALUES (2, "Doodler", "Yellow", "~300~", 1, 0.00, 595);