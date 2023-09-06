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
VALUES (001, 'Cadena_28_Dientes', 100, $$$$),
 (002, 'Cadena_30_Dientes', 100, $$$$),
 (003, 'Cadena_33_Dientes', 100, $$$$);
 (001, 'Lima_Redonda_Gruesa_7/32', 100, $$$$),
 (002, 'Lima_Redonda_Mediana_3/16', 100, $$$$),
 (003, 'Lima_Redonda_Chica_5/32', 100, $$$$);
 (001, 'Aceite_Mezcla_Husqvarna_HP_100CC', 100, $$$$),
 (002, 'Aceite_Mezcla_Husqvarna_HP_1LT', 100, $$$$),
 (003, 'Aceite_Mezcla_Husqvarna_HP_4LT', 100, $$$$);

INSERT INTO ImplementoSeg (ID_Implemento, Tipo_Implemento, Talla, Stock, Precio)
VALUES (001, ' ', 'M', 30, $$$$),
 (002, ' ', 'L', 50, $$$$),
 (003, ' ', 'XL', 20, $$$$);
INSERT INTO MaquinariaMotor (ID_Maquinaria, Tipo_Maquinaria, Modelo, Stock, Precio)
VALUES (001, 'Motosierra_Residencial', 'Husqvarna 120 ', 100, $$$$),
 (002, 'Motosierra_Residencial', 'Husqvarna 236', 100, $$$$),
 (033, 'Motosierra_Agricola', 'Husqvarna 440EII ', 100, $$$$);
 (002, 'Motosierra_Agricola', 'Husqvarna 445E', 100, $$$$),
 (033, 'Motosierra_Agricola', 'Husqvarna 450E ', 100, $$$$);
 (002, 'Motosierra_Agricola', 'Husqvarna 460', 100, $$$$),
 (033, 'Motosierra_Agricola', 'Husqvarna 61 ', 100, $$$$);
 (002, 'Motosierra_Profesional', 'Husqvarna T435', 100, $$$$),
 (033, 'Motosierra_Profesional', 'Husqvarna 346 ', 100, $$$$);
 (002, 'Motosierra_Profesional', 'Husqvarna 365', 100, $$$$),
 (033, 'Motosierra_Profesional', 'Husqvarna 560XP ', 100, $$$$);
 (033, 'Motosierra_Profesional', 'Husqvarna 272XP ', 100, $$$$);
 (002, 'Motosierra_Profesional', 'Husqvarna 372XP', 100, $$$$),
 (033, 'Motosierra_Profesional', 'Husqvarna 390XP ', 100, $$$$);
 (001, 'Desbrozadora_Residencial', 'Husqvarna 122c ', 100, $$$$),
 (002, 'Desbrozadora_Residencial', 'Husqvarna 128L', 100, $$$$),
 (002, 'Desbrozadora_Profesional', 'Husqvarna 128R', 100, $$$$),
 (033, 'Desbrozadora_Profesional', 'Husqvarna 226R ', 100, $$$$);
 (033, 'Desbrozadora_Profesional', 'Husqvarna 236R ', 100, $$$$);
 (002, 'Desbrozadora_Profesional', 'Husqvarna 143RII', 100, $$$$),
 (033, 'Desbrozadora_Profesional', 'Husqvarna 555RXT ', 100, $$$$);
 (001, 'Tractor_Cortacesped_Residencial', 'Husqvarna LTH1738 ', 100, $$$$),
 (002, 'Tractor_Cortacesped_Residencial', 'Husqvarna YTH2042', 100, $$$$),
 (002, 'Tractor_Cortacesped_Residencial', 'Husqvarna LGT54DXL', 100, $$$$),
 (002, 'Tractor_Cortacesped_ProfesionalGZ', 'Husqvarna Z 254', 100, $$$$),
 (033, 'Tractor_Cortacesped_ProfesionalGZ', 'Husqvarna MZ 48 ', 100, $$$$);
 (033, 'Cortasetos_Residencial_Profesional', 'Husqvarna 226HD60S ', 100, $$$$);
 (002, 'Cortasetos_Residencial_Profesional', 'Husqvarna 325HE4', 100, $$$$),
 (033, 'PodadorAlt_Domestico_Agricola', 'Husqvarna 327P4 ', 100, $$$$);
 (033, 'PodadorAlt_Domestico_Agricola ', 'Husqvarna 525PT5S ', 100, $$$$);
 (033, 'Soplador_Residencial_Profesional', 'Husqvarna 125BVX ', 100, $$$$);
 (002, 'Soplador_Residencial_Profesional', 'Husqvarna 150BT', 100, $$$$),
 (033, 'Pulverizador_Agricola ', 'Husqvarna 362M18 ', 100, $$$$);
 (033, 'Motocultivador_Agricola ', 'Husqvarna TF230 ', 100, $$$$);
 (033, 'Motocultivador_Agricola ', 'Husqvarna TR430 ', 100, $$$$);
 (033, 'Motocultivador_Agricola ', 'Husqvarna TR530 ', 100, $$$$);
 (001, 'Cortacesped_Residencial ', 'Husqvarna LC140 ', 100, $$$$),
 (002, 'Cortacesped_Residencial', 'Husqvarna LC153', 100, $$$$),
 (002, 'Cortacesped_Residencial', 'Husqvarna HU725AWDH', 100, $$$$),