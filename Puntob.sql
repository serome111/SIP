

#punto B
INSERT INTO parents (parents_id, name, lastname, cardtype_id, email, phone, fixedphone, cardid, parent, gender, state, create_at) VALUES
(1,'Sr.pepe', 'last', '2', 'serome111@gmail.com', '2147483647', '8715116', '1075297729', 'Padre del niño', 'male', '1', CURRENT_TIMESTAMP),
(2,'Sra.pepa', 'lastp', '2', 'pepa@gmail.com', '2147483647', '8715116', '1075297728', 'vecino', 'female', '1', CURRENT_TIMESTAMP);

INSERT INTO `users_parents` (`users_parents_id`, `user_id`, `parents_id`, `create_at`) VALUES
(NULL, '1', '1', CURRENT_TIMESTAMP), #usuario pepito ahora tiene un acudiente
(NULL, '1', '2', CURRENT_TIMESTAMP),#usuario pepito ahora tiene dos acudiente
(NULL, '2', '1', CURRENT_TIMESTAMP),
(NULL, '2', '2', CURRENT_TIMESTAMP);