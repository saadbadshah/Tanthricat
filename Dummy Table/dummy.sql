CREATE TABLE Dummy (
    Model VARCHAR(255),
    DeviceName VARCHAR(255),
    ManufaName VARCHAR(255),
    EnergyPH INT(5),
    Category VARCHAR(255)
);

INSERT INTO Dummy
    (Model, DeviceName, ManufaName, EnergyPH, Category)
VALUES
    ('32LM6300PLA', 'LG 32" Smart Full HD HDR LED TV', 'LG', 36, 'Entertainment'),
    ('49UM7000PLA', 'LG 49" Smart 4K Ultra HD HDR LED TV', 'LG', 79, 'Entertainment'),
    ('UE43RU7470UXXU', 'SAMSUNG 43" Smart 4K Ultra HD HDR LED TV', 'SAMSUNG', 70, 'Entertainment'),
    ('KD55AG8BU', 'SONY 55" Smart 4K Ultra HD HDR OLED TV', 'SONY', 130, 'Entertainment'),

    ('SK4D', 'LG 2.1 Wireless Sound Bar', 'LG', 22, 'Entertainment'),
    ('PLAYBAR', 'SONOS Sound Bar', 'SONOS', 15, 'Entertainment'),
    ('Solo 5', 'BOSE Sound Bar', 'BOSE', 30, 'Entertainment'),
    ('BDVE4100.CEK', 'SONY 5.1 Smart 3D Blu-ray & DVD Home Cinema System', 'SONY', 95, 'Entertainment'),

    ('TCPLEDE27', 'TCP Smart LED Light Bulb', 'TCP', 9, 'Lighting'),
    ('LIFLHA19E27UC10P', 'LIFX Smart RGB IR Light Bulb', 'LIFX', 11, 'Lighting'),
    ('KL130', 'TP-LINK Kasa Multicolour Smart Light Bulb', 'TP-LINK', 10, 'Lighting'),
    ('LIFLC1000', 'LIFX Colour 1000 Smart RGB Light Bulb', 'LIFX', 11, 'Lighting'),

    ('PHBWSTL', 'PHILIPS Hue Bloom Wireless Smart Table Lamp', 'PHILIPS', 8, 'Lighting'),
    ('PHWAWSTL', 'PHILIPS Hue White Ambience Wellness Smart Table Lamp', 'PHILIPS', 15, 'Lighting'),
    ('PHETL', 'PHILIPS Hue Explore Table Lamp', 'PHILIPS', 6, 'Lighting'),

    ('BKE820UK', 'SAGE Smart Jug Kettle', 'SAGE', 3000, 'General Appliances'),
    ('KBOM3001R', 'DELONGHI Micalite Jug Kettle', 'DELONGHI', 3000, 'General Appliances'),
    ('21600-10', 'RUSSELL HOBBS Jug Kettle', 'RUSSELL HOBBS', 3000, 'General Appliances'),
    ('VKT017', 'BREVILLE Curve Jug Kettle', 'BREVILLE', 3000, 'General Appliances'),

    ('BTA845UK', 'SAGE Smart 4-Slice Toaster', 'SAGE', 1900, 'General Appliances'),
    ('VTT783', 'BREVILLE Impressions 4-Slice Toaster', 'BREVILLE', 2100, 'General Appliances'),
    ('TSF02CRUK', 'SMEG 4-Slice Toaster', 'SMEG', 1500, 'General Appliances'),
    ('24094', 'RUSSELL HOBBS 4-Slice Toaster', 'RUSSELL HOBBS', 1700, 'General Appliances'),

    ('GSX961NSVZ', 'LG American-Style Smart Fridge Freezer', 'LG', 130, 'Kitchen'),
    ('RF56M9540SR', 'SAMSUNG Family Hub American-Style Smart Fridge Freezer', 'SAMSUNG', 150, 'Kitchen'),
    ('RF22R7351SR', 'SAMSUNG Smart Fridge Freezer', 'SAMSUNG', 145, 'Kitchen'),
    ('KGN36AI35G', 'BOSCH Serie 6 Smart 60/40 Fridge Freezer', 'BOSCH', 90, 'Kitchen'),

    ('K30GMS18', 'KENWOOD Compact Microwave with Grill', 'KENWOOD', 900, 'General Appliances'),
    ('K30CSS14', 'KENWOOD Combination Microwave', 'KENWOOD', 900, 'General Appliances'),
    ('RHM2076B', 'RUSSELL HOBBS Solo Microwave', 'RUSSELL HOBBS', 800, 'General Appliances'),
    ('MS28J5215AS', 'SAMSUNG Solo Microwave', 'SAMSUNG', 1000, 'General Appliances'),

    ('33701860', 'HOOVER Vision Electric Smart Oven', 'HOOVER', 2100, 'Kitchen'),
    ('NV73J9WIFI', 'SAMSUNG Electric Smart Oven', 'SAMSUNG', 950, 'Kitchen'),
    ('HBG6764B6B', 'BOSCH Serie 8 Electric Smart Oven', 'BOSCH', 690, 'Kitchen'),
    ('BI902MFCT', 'BELLING Electric Double Smart Oven', 'BELLING', 1600, 'Kitchen'),

    ('CID641BB', 'HOTPOINT Smart Electric Induction Hob', 'HOTPOINT', 2300, 'Kitchen'),
    ('ZEI6840FBA', 'ZANUSSI Electric Induction Hob', 'ZANUSSI', 2800, 'Kitchen'),
    ('LCHOBTC16', 'LOGIK Electric Ceramic Hob', 'LOGIK', 1800, 'Kitchen'),
    ('HIC64402T', 'BEKO Ceramic Hob', 'BEKO', 2200, 'Kitchen'),

    ('AM07', 'DYSON Tower Fan', 'DYSON', 56, 'Cooling'),
    ('AM06', 'DYSON Desk Fan', 'DYSON', 26, 'Cooling'),
    ('Pure Cool Me', 'DYSON Air Purifier', 'DYSON', 40, 'Cooling'),

    ('AM09', 'DYSON Hot & Cool Fan Heater', 'DYSON', 2000, 'Heating'),
    ('403BTB', 'DIMPLEX Portable Smart Convector Heater', 'DIMPLEX', 3000, 'Heating'),
    ('DXSTG25', 'DIMPLEX Ceramic Fan Heater', 'DIMPLEX', 2500, 'Heating');