CREATE TABLE IF NOT EXISTS `webprostor_smtp_logs` (
  `ID` int(18) NOT NULL AUTO_INCREMENT,
  `DATE_CREATE` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ERROR_NUMBER` int(3) DEFAULT NULL,
  `ERROR_TEXT` TEXT DEFAULT NULL,
  `SEND_INFO` TEXT DEFAULT NULL,
  `SITE_ID` char(2) NOT NULL,
  PRIMARY KEY (`ID`)
);