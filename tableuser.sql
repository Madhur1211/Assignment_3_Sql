
CREATE TABLE `tblusers` (
                            `ID` int(10) NOT NULL auto_increment primary key,
                            `FirstName` varchar(200) DEFAULT NULL,
                            `LastName` varchar(200) DEFAULT NULL,
                            `MobileNumber` bigint(10) DEFAULT NULL,
                            `Email` varchar(200) DEFAULT NULL,
                            `Bio` mediumtext DEFAULT NULL,
                            `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

