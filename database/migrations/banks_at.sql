DROP TABLE IF EXISTS banks_at;

CREATE TABLE banks_at
(
    id                  INT AUTO_INCREMENT PRIMARY KEY,
    kennzeichen         VARCHAR(255),
    identnummer         VARCHAR(255),
    bankleitzahl        VARCHAR(255),
    institutsart        VARCHAR(255),
    sektor              VARCHAR(255),
    firmenbuchnummer    VARCHAR(255),
    bankenname          VARCHAR(255),
    strasse             VARCHAR(255),
    plz                 VARCHAR(255),
    ort                 VARCHAR(255),
    postadresse_strasse VARCHAR(255),
    postadresse_plz     VARCHAR(255),
    postadresse_ort     VARCHAR(255),
    postfach            VARCHAR(255),
    bundesland          VARCHAR(255),
    telefon             VARCHAR(255),
    fax                 VARCHAR(255),
    email               VARCHAR(255),
    swift_code          VARCHAR(255),
    homepage            VARCHAR(255),
    gruendungsdatum     VARCHAR(255),
    lei                 VARCHAR(255),
    INDEX `bank_code_merkmal_index` (`bankleitzahl`, `kennzeichen`),
    INDEX datensatz_nummer_index (swift_code, `kennzeichen`)
);
