CREATE TABLE `Cliente` (
    `Rut` INT,
    `Nombre` VARCHAR(200),
    `Apellido` VARCHAR(200),
    `Correo` VARCHAR(200),
    `Direccion` VARCHAR(200),
    PRIMARY KEY (`Rut`)
);

CREATE TABLE `Pedido` (
    `ID_Pedido` INT,
    `Rut` INT,
    `FechaPedido` DATE,
    `Total` INT,
    PRIMARY KEY (`ID_Pedido`),
    FOREIGN KEY (`Rut`) REFERENCES `Cliente`(`Rut`)
);

CREATE TABLE `Pedido_Producto` (
    `ID_Pedido` INT,
    `ID_Producto` INT,
    `Cantidad` INT,
    PRIMARY KEY (`ID_Pedido`, `ID_Producto`),
    FOREIGN KEY (`ID_Pedido`) REFERENCES `Pedido`(`ID_Pedido`)
);

CREATE TABLE `Producto` (
    `ID_Producto` INT,
    `Tipo_Producto` VARCHAR(200),
    `Modelo` VARCHAR(200),
    `Stock` INT,
    `Precio` INT,
    PRIMARY KEY (`ID_Producto`)
);

CREATE TABLE `Pedido_Suplemento` (
    `ID_Pedido` INT,
    `ID_Suplemento` INT,
    `Cantidad` INT,
    PRIMARY KEY (`ID_Pedido`, `ID_Suplemento`),
    FOREIGN KEY (`ID_Pedido`, `ID_Suplemento`) REFERENCES `Pedido_Producto`(`ID_Pedido`, `ID_Producto`)
);

CREATE TABLE `Pedido_Implemento` (
    `ID_Pedido` INT,
    `ID_Implemento` INT,
    `Cantidad` INT,
    PRIMARY KEY (`ID_Pedido`, `ID_Implemento`),
    FOREIGN KEY (`ID_Pedido`, `ID_Implemento`) REFERENCES `Pedido_Producto`(`ID_Pedido`, `ID_Producto`)
);

CREATE TABLE `Suplementos` (
    `ID_Suplemento` INT,
    `Nombre_Suple` VARCHAR(200),
    `Stock` INT,
    `Precio` INT,
    PRIMARY KEY (`ID_Suplemento`)
);

CREATE TABLE `ImplementoSeg` (
    `ID_Implemento` INT,
    `Tipo_Implemento` VARCHAR(200),
    `Talla` VARCHAR(200),
    `Stock` INT,
    `Precio` INT,
    PRIMARY KEY (`ID_Implemento`)
);

CREATE TABLE `Pedido_Maquinaria` (
    `ID_Pedido` INT,
    `ID_Maquinaria` INT,
    `Cantidad` INT,
    PRIMARY KEY (`ID_Pedido`, `ID_Maquinaria`),
    FOREIGN KEY (`ID_Pedido`, `ID_Maquinaria`) REFERENCES `Pedido_Producto`(`ID_Pedido`, `ID_Producto`)
);

CREATE TABLE `MaquinariaMotor` (
    `ID_Maquinaria` INT,
    `Tipo_Maquinaria` VARCHAR(200),
    `Modelo` VARCHAR(200),
    `Stock` INT,
    `Precio` INT,
    PRIMARY KEY (`ID_Maquinaria`)
);