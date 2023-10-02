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
(001, 'Cadena_28_Dientes', 100, 7500),
(002, 'Cadena_30_Dientes', 100, 8000),
(003, 'Cadena_33_Dientes', 100, 8500),
(004, 'Lima_Redonda_Gruesa_7/32', 100, 2290),
(005, 'Lima_Redonda_Mediana_3/16', 100, 1800),
(006, 'Lima_Redonda_Chica_5/32', 100, 1326),
(007, 'Aceite_Mezcla_Husqvarna_HP_100CC', 100, 4290),
(008, 'Aceite_Mezcla_Husqvarna_HP_1LT', 100, 16990),
(009, 'Aceite_Mezcla_Husqvarna_HP_4LT', 100, 32990);

INSERT INTO ImplementoSeg (ID_Implemento, Tipo_Implemento, Talla, Stock, Precio)
VALUES 
 (001, 'Guantes_de_protección', 'N/A', 30, 7290),
 (002, 'Kit_Casco_Motosierra_Con_Visor', 'N/A', 50, 16990),
 (003, 'Gafas_de_seguridad', 'N/A', 20, 1590),
 (004, 'Botas_con_punta_de_acero', '40', 50, 89900),
 (005, 'Equipos_de_protección_auditiva', 'XL', 20, 21590),
 (006, 'perneras_de_kevlar', 'L', 50, 150760);
 
INSERT INTO MaquinariaMotor (ID_Maquinaria, Tipo_Maquinaria, Modelo, Stock, Precio)
VALUES 
 (001, 'Motosierra_Residencial', 'Husqvarna 120 ', 100, 178990),
 (002, 'Motosierra_Residencial', 'Husqvarna 236', 100, 249990),
 (003, 'Motosierra_Agricola', 'Husqvarna 440EII ', 100, 554271),
 (004, 'Motosierra_Agricola', 'Husqvarna 445E', 100, 399990),
 (005, 'Motosierra_Agricola', 'Husqvarna 450E ', 100, 650000),
 (006, 'Motosierra_Agricola', 'Husqvarna 460', 100, 717010),
 (007, 'Motosierra_Agricola', 'Husqvarna 61 ', 100, 509990),
 (008, 'Motosierra_Profesional', 'Husqvarna T435', 100, 381959),
 (009, 'Motosierra_Profesional', 'Husqvarna 346 ', 100, 455000),
 (010, 'Motosierra_Profesional', 'Husqvarna 365', 100, 608990),
 (011, 'Motosierra_Profesional', 'Husqvarna 560XP ', 100, 860604),
 (012, 'Motosierra_Profesional', 'Husqvarna 272XP ', 100, 609505),
 (013, 'Motosierra_Profesional', 'Husqvarna 372XP', 100, 829990),
 (014, 'Motosierra_Profesional', 'Husqvarna 390XP ', 100, 939991),
 (015, 'Desbrozadora_Residencial', 'Husqvarna 122c ', 100, 187057),
 (016, 'Desbrozadora_Residencial', 'Husqvarna 128L', 100, 175990),
 (017, 'Desbrozadora_Profesional', 'Husqvarna 128R', 100, 297910),
 (018, 'Desbrozadora_Profesional', 'Husqvarna 226R ', 100, 439990),
 (019, 'Desbrozadora_Profesional', 'Husqvarna 236R ', 100, 465990),
 (020, 'Desbrozadora_Profesional', 'Husqvarna 143RII', 100, 436990),
 (021, 'Desbrozadora_Profesional', 'Husqvarna 555RXT ', 100, 940000),
 (022, 'Tractor_Cortacesped_Residencial', 'Husqvarna LTH1738 ', 100, 2475000),
 (023, 'Tractor_Cortacesped_Residencial', 'Husqvarna YTH2042', 100, 13342017),
 (024, 'Tractor_Cortacesped_ProfesionalGZ', 'Husqvarna Z 254', 100, 5498990),
 (025, 'Tractor_Cortacesped_ProfesionalGZ', 'Husqvarna MZ 48 ', 100, 7700680),
 (026, 'Cortasetos_Residencial_Profesional', 'Husqvarna 226HD60S ', 100, 360580),
 (027, 'Cortasetos_Residencial_Profesional', 'Husqvarna 325HE4', 100, 808983),
 (028, 'PodadorAlt_Domestico_Agricola ', 'Husqvarna 525PT5S ', 100, 699990),
 (029, 'Soplador_Residencial_Profesional', 'Husqvarna 125BVX ', 100, 232392),
 (030, 'Soplador_Residencial_Profesional', 'Husqvarna 150BT', 100, 425000),
 (031, 'Pulverizador_Agricola ', 'Husqvarna 362M18 ', 100, 495990),
 (032, 'Motocultivador_Agricola ', 'Husqvarna TF230 ', 100, 689990),
 (033, 'Motocultivador_Agricola ', 'Husqvarna TR430 ', 100, 1176990),
 (034, 'Motocultivador_Agricola ', 'Husqvarna TR530 ', 100, 1404210),
 (035, 'Cortacesped_Residencial ', 'Husqvarna LC140 ', 100, 315990),
 (036, 'Cortacesped_Residencial', 'Husqvarna LC153', 100, 450000),
 (037, 'Cortacesped_Residencial', 'Husqvarna HU725AWDH', 100, 698180),