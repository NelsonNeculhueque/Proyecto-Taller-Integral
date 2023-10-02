--nuevo poblado  vizama
INSERT INTO Pedido_Suplemento (ID_Pedido, ID_Suplemento, Cantidad)
VALUES
    (1, 001, 2),
    (2, 002, 3),
    (3, 003, 1),
    (4, 004, 5),
    (5, 005, 2),
    (6, 006, 1),
    (7, 007, 4),
    (8, 008, 2),
    (9, 009, 3),
    (10, 010, 1);

---nuevo poblado vizama
INSERT INTO Pedido_Implemento (ID_Pedido, ID_Implemento, Cantidad) 
VALUES
(1, 001, 2),  
(2, 002, 3),  
(3, 003, 1),  
(4, 004, 5),  
(5, 005, 2),  
(6, 006, 1),  
(7, 007, 4),  
(8, 008, 2),  
(9, 009, 3),  
(10, 010, 1); 


---poblado de Nelson
INSERT INTO Suplementos (ID_Suplemento, Nombre_Suple, Stock, Precio)
VALUES 
(001, 'Cadena 28 Dientes', 100, 7500),
(002, 'Cadena 30 Dientes', 100, 8000),
(003, 'Cadena 33 Dientes', 100, 8500),
(004, 'Lima Redonda Gruesa 7/32', 100, 2290),
(005, 'Lima Redonda Mediana 3/16', 100, 1800),
(006, 'Lima Redonda Chica 5/32', 100, 1326),
(007, 'Aceite Mezcla Husqvarna HP 100CC', 100, 4290),
(008, 'Aceite Mezcla Husqvarna HP 1LT', 100, 16990),
(009, 'Aceite Mezcla Husqvarna HP 4LT', 100, 32990);

INSERT INTO ImplementoSeg (ID_Implemento, Tipo_Implemento, Talla, Stock, Precio)
VALUES 
 (001, 'Guantes de protección', 'N/A', 30, 7290),
 (002, 'Kit Casco Motosierra Con Visor', 'N/A', 50, 16990),
 (003, 'Gafas de seguridad', 'N/A', 20, 1590),
 (004, 'Botas con punta de acero', '40', 50, 89900),
 (005, 'Equipos de protección auditiva', 'XL', 20, 21590),
 (006, 'perneras de kevlar', 'L', 50, 150760);
 
INSERT INTO MaquinariaMotor (ID_Maquinaria, Tipo_Maquinaria, Modelo, Stock, Precio)
VALUES 
 (001, 'Motosierra Residencial', 'Husqvarna 120 ', 100, 178990),
 (002, 'Motosierra Residencial', 'Husqvarna 236', 100, 249990),
 (003, 'Motosierra Agricola', 'Husqvarna 440EII ', 100, 554271),
 (004, 'Motosierra Agricola', 'Husqvarna 445E', 100, 399990),
 (005, 'Motosierra Agricola', 'Husqvarna 450E ', 100, 650000),
 (006, 'Motosierra Agricola', 'Husqvarna 460', 100, 717010),
 (007, 'Motosierra Agricola', 'Husqvarna 61 ', 100, 509990),
 (008, 'Motosierra Profesional', 'Husqvarna T435', 100, 381959),
 (009, 'Motosierra Profesional', 'Husqvarna 346 ', 100, 455000),
 (010, 'Motosierra Profesional', 'Husqvarna 365', 100, 608990),
 (011, 'Motosierra Profesional', 'Husqvarna 560XP ', 100, 860604),
 (012, 'Motosierra Profesional', 'Husqvarna 272XP ', 100, 609505),
 (013, 'Motosierra Profesional', 'Husqvarna 372XP', 100, 829990),
 (014, 'Motosierra Profesional', 'Husqvarna 390XP ', 100, 939991),
 (015, 'Desbrozadora Residencial', 'Husqvarna 122c ', 100, 187057),
 (016, 'Desbrozadora Residencial', 'Husqvarna 128L', 100, 175990),
 (017, 'Desbrozadora Profesional', 'Husqvarna 128R', 100, 297910),
 (018, 'Desbrozadora Profesional', 'Husqvarna 226R ', 100, 439990),
 (019, 'Desbrozadora Profesional', 'Husqvarna 236R ', 100, 465990),
 (020, 'Desbrozadora Profesional', 'Husqvarna 143RII', 100, 436990),
 (021, 'Desbrozadora Profesional', 'Husqvarna 555RXT ', 100, 940000),
 (022, 'Tractor Cortacesped Residencial', 'Husqvarna LTH1738 ', 100, 2475000),
 (023, 'Tractor Cortacesped Residencial', 'Husqvarna YTH2042', 100, 13342017),
 (024, 'Tractor Cortacesped ProfesionalGZ', 'Husqvarna Z 254', 100, 5498990),
 (025, 'Tractor Cortacesped ProfesionalGZ', 'Husqvarna MZ 48 ', 100, 7700680),
 (026, 'Cortasetos Residencial Profesional', 'Husqvarna 226HD60S ', 100, 360580),
 (027, 'Cortasetos Residencial Profesional', 'Husqvarna 325HE4', 100, 808983),
 (028, 'PodadorAlt Domestico Agricola ', 'Husqvarna 525PT5S ', 100, 699990),
 (029, 'Soplador Residencial Profesional', 'Husqvarna 125BVX ', 100, 232392),
 (030, 'Soplador Residencial Profesional', 'Husqvarna 150BT', 100, 425000),
 (031, 'Pulverizador Agricola ', 'Husqvarna 362M18 ', 100, 495990),
 (032, 'Motocultivador Agricola ', 'Husqvarna TF230 ', 100, 689990),
 (033, 'Motocultivador Agricola ', 'Husqvarna TR430 ', 100, 1176990),
 (034, 'Motocultivador Agricola ', 'Husqvarna TR530 ', 100, 1404210),
 (035, 'Cortacesped Residencial ', 'Husqvarna LC140 ', 100, 315990),
 (036, 'Cortacesped Residencial', 'Husqvarna LC153', 100, 450000),
 (037, 'Cortacesped Residencial', 'Husqvarna HU725AWDH', 100, 698180);
