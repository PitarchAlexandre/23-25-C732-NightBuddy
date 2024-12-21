INSERT INTO `events` (`name`, `date`, `location`, `theme_music`, `created_at`, `updated_at`) VALUES
                                                                                                 ('Rockair Festival', '2024-09-15', 'Porrentruy, Suisse', 'Rock', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Médiévales de Saint-Ursanne', '2024-08-30', 'Saint-Ursanne, Suisse', 'Médiéval', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Marché de Saint-Martin', '2024-11-11', 'Porrentruy, Suisse', 'Traditionnel', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Fête de la Saint-Martin', '2024-11-11', 'Chevenez, Suisse', 'Traditionnel', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Marché de Noël de Saint-Ursanne', '2024-12-15', 'Saint-Ursanne, Suisse', 'Noël', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Fête de la bière', '2024-06-15', 'Bienne, Suisse', 'Rock', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Fête de la Tête de Moine', '2024-09-07', 'Bellelay, Suisse', 'Folk', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Rockair Festival', '2024-08-10', 'Bienne, Suisse', 'Rock', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Danse sur la Doubs', '2024-07-20', 'Delémont, Suisse', 'Folk', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Marché de Noël de Bienne', '2024-12-01', 'Bienne, Suisse', 'Noël', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                                 ('Festival des lanternes de Bienne', '2024-10-20', 'Bienne, Suisse', 'Traditionnel', '2024-12-18 21:00:00', '2024-12-18 21:00:00');

INSERT INTO `users` (`name`, `email`, `password`, `created_at`, `updated_at`) VALUES
                                                                                  ('Jean Dupont', 'jean.dupont@example.com', '$2y$10$saltsalt.dudud.7t2rs8peT3uNWjeCVku/NeH6wiPvV4rmRpI', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Alice Berner', 'alice.berner@example.com', '$2y$10$saltsalt.gddu9q.TmfEomKp6lwHTKdzY9xJqTw6jyS/3Q2yVkB', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Maxime Morel', 'maxime.morel@example.com', '$2y$10$saltsalt.g6gqu.LRwfSz7uIQZcyiMy4RB8z6Jvn.6Na2w5YXyB', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Emma Lambert', 'emma.lambert@example.com', '$2y$10$saltsalt.NpWBZlXlh9w9lFeAtP6Mk3i.JJauZP/tLYW3tMYltg', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Léo Perrin', 'leo.perrin@example.com', '$2y$10$saltsalt.3v9z3.5unOHU9zv6P4ZHgMWu3b50.w82ln6Tlr.Jt7G8y', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Marie Leroy', 'marie.leroy@example.com', '$2y$10$saltsalt.IhYg4k5J3Xzyq5OU5dl4AeDQFM6xCwko5pBwpdEluQ0Jd6', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Lucas Fuchs', 'lucas.fuchs@example.com', '$2y$10$saltsalt.Lfknxh/3tkM4GOW54I5/DoqPhkDRjWv.Ni1YIE6.yWxzkm', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Clara Vogel', 'clara.vogel@example.com', '$2y$10$saltsalt.xsafl.3jqcDN5qERJvb4MfO2HI2B0oKMP61E/Nm3paqa', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Simon Koch', 'simon.koch@example.com', '$2y$10$saltsalt.U9/vO1r9K1JrSw9Ot6uB1/NHp6M3ZCqXbYyVXO9F3ybpC', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Inès Weber', 'ines.weber@example.com', '$2y$10$saltsalt.hf4aR45Er5TpR5uMX0DpHqZh4QwPHv6JTNW20u5CAt3s7', '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                  ('Paul Kessler', 'paul.kessler@example.com', '$2y$10$saltsalt.IHKh5O0s4H22XRvaRfE2DUyy4FUd4I4k5STORQh9vbntfRp', '2024-12-18 21:00:00', '2024-12-18 21:00:00');

INSERT INTO `carpools` (`event_id`, `driver_id`, `max_seats`, `created_at`, `updated_at`) VALUES
                                                                                              (1, 1, 4, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (2, 2, 3, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (3, 3, 5, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (4, 4, 6, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (5, 5, 2, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (6, 6, 4, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (7, 7, 5, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (8, 8, 4, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (9, 9, 3, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (10, 10, 4, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                              (11, 11, 6, '2024-12-18 21:00:00', '2024-12-18 21:00:00');
INSERT INTO `carpool_user` (`carpool_id`, `user_id`, `created_at`, `updated_at`) VALUES
                                                                                     (1, 2, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (1, 3, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (2, 4, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (3, 1, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (4, 5, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (5, 6, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (6, 7, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (7, 8, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (8, 9, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (9, 10, '2024-12-18 21:00:00', '2024-12-18 21:00:00'),
                                                                                     (10, 11, '2024-12-18 21:00:00', '2024-12-18 21:00:00');
