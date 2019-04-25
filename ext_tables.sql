CREATE TABLE static_countries (
  cn_short_pl varchar(50) DEFAULT '' NOT NULL,
  cn_official_name_pl varchar(128) DEFAULT '' NOT NULL,
  cn_capital_pl varchar(45) DEFAULT '' NOT NULL,
  KEY cn_short_pl (cn_short_pl)
);

CREATE TABLE static_country_zones (
  zn_name_pl varchar(50) DEFAULT '' NOT NULL,
  KEY zn_name_pl (zn_name_pl)
);

CREATE TABLE static_currencies (
  cu_name_pl varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_pl varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_pl varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_pl varchar(50) DEFAULT '' NOT NULL
);
