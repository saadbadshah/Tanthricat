CREATE Table DevicesTanthricat (
    id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nickname varchar(128),
    EnergyRating int(10) NOT NULL,
    LastOnDate date NOT NULL,
    State int(1)
);

INSERT INTO DevicesTanthricat (
    Nickname, EnergyRating, LastOnDate, State)
VALUES
    ('tv', 30, '2020-04-17', 1),
    ('lamp', 6, '2020-04-19', 1),
    ('fridge', 500, '2020-04-01', 1);