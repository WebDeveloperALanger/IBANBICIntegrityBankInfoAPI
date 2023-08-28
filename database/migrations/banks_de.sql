DROP TABLE IF EXISTS banks_de;

CREATE TABLE `banks_de`
(
    `id`                            INT AUTO_INCREMENT PRIMARY KEY,
    `bank_code`                     VARCHAR(8) NOT NULL,
    `merkmal`                       VARCHAR(10),
    `bezeichnung`                   VARCHAR(255),
    `plz`                           VARCHAR(10),
    `ort`                           VARCHAR(255),
    `kurzbezeichnung`               VARCHAR(255),
    `pan`                           VARCHAR(10),
    `bic`                           VARCHAR(11),
    `prufziffer_berechnungsmethode` VARCHAR(10),
    `datensatz_nummer`              VARCHAR(255),
    `anderungskennzeichen`          VARCHAR(10),
    `bankleitzahl_loschung`         VARCHAR(10),
    `nachfolge_bankleitzahl`        VARCHAR(8),
    INDEX `bank_code_merkmal_index` (`bank_code`, `merkmal`),
    INDEX datensatz_nummer_index (datensatz_nummer),
    INDEX bic_merkmal_index (bic, merkmal)
);
