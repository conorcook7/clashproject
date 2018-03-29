CREATE TABLE users(
    user_id INT AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    PRIMARY KEY(user_id)
);

CREATE TABLE info_cannons(
    cannon_lvl_id INT AUTO_INCREMENT,
    gold_cost INT NOT NULL,
    time_to_finish_minutes INT NOT NULL,
    PRIMARY KEY(cannon_lvl_id)
);

CREATE TABLE info_archer_towers(
    archer_tower_lvl_id INT AUTO_INCREMENT,
    gold_cost INT NOT NULL,
    time_to_finish_minutes INT NOT NULL,
    PRIMARY KEY(archer_tower_lvl_id)
);

CREATE TABLE info_wizard_towers(
    wizard_tower_lvl_id INT AUTO_INCREMENT,
    gold_cost INT NOT NULL,
    time_to_finish_minutes INT NOT NULL,
    PRIMARY KEY(wizard_tower_lvl_id)
);