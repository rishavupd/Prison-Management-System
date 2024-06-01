SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin'),
('pasang', '1234'),
('rishav', '1234');


CREATE TABLE `cell_location` (
  `cell_no` varchar(4) NOT NULL,
  `block_no` varchar(4) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `cleaner` (
  `cno` varchar(4) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `starting_date` date NOT NULL,
  `caddress` varchar(20) NOT NULL,
  `assigned_cellno` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `cleaner` (`cno`, `cname`, `DOB`, `sex`, `starting_date`, `caddress`, `assigned_cellno`) VALUES
('1000', 'Ashok', '1998-11-12', 'Male', '2000-11-12', 'Goa', '1100'),
('1001', 'Suvash', '1999-11-12', 'Male', '2000-11-12', 'kalinchowk', '5767'),
('1002', 'Ranvir', '1996-08-06', 'Male', '2005-06-08', 'Udupi', '1001'),
('1003', 'Bhusal', '1998-11-11', 'Male', '2018-10-20', 'Patna', '1026');


CREATE TABLE `guard` (
  `gno` varchar(4) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `starting_date` date NOT NULL,
  `sex` varchar(8) NOT NULL,
  `assigned_block` varchar(4) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `guard` (`gno`, `gname`, `DOB`, `address`, `starting_date`, `sex`, `assigned_block`, `shift`, `password`) VALUES
('1111', 'guard', '1997-11-13', 'Goa', '2000-11-12', 'Female', '1066', 'Morning', 'guard');
INSERT INTO `guard` (`gno`, `gname`, `DOB`, `address`, `starting_date`, `sex`, `assigned_block`, `shift`, `password`) VALUES
('1234', 'Ember', '1997-11-13', 'Goa', '2000-11-12', 'Male', '8888', 'Morning', '1234');
INSERT INTO `guard` (`gno`, `gname`, `DOB`, `address`, `starting_date`, `sex`, `assigned_block`, `shift`, `password`) VALUES
('2345', 'Lycan', '1996-10-12', 'Goa', '2000-11-12', 'Male', '4203', 'night', '2345');


CREATE TABLE `prisoner` (
  `pno` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `admit_date` date NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `crime` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `cellno` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `prisoner` (`pno`, `Name`, `admit_date`, `DOB`, `address`, `crime`, `sex`, `ptype`, `duration`, `cellno`) VALUES
('1000', 'Osama Bin Ladin', '2000-11-12', '1997-11-13', 'Patna', 'Murder', 'Male', 'Maximum security', '70 Years', '1032');
INSERT INTO `prisoner` (`pno`, `Name`, `admit_date`, `DOB`, `address`, `crime`, `sex`, `ptype`, `duration`, `cellno`) VALUES
('1234', 'Prashant KC', '2001-08-02', '1997-11-13', 'Bihar', 'Sex Assult', 'Male', 'Minimum security', '2 Months', '1148');
INSERT INTO `prisoner` (`pno`, `Name`, `admit_date`, `DOB`, `address`, `crime`, `sex`, `ptype`, `duration`, `cellno`) VALUES
('1380', 'Osama Bin Ladin', '2000-11-12', '1997-11-13', 'Lucknow', 'Kidnapping', 'Male', '12 years', '2 Months', '1032');
INSERT INTO `prisoner` (`pno`, `Name`, `admit_date`, `DOB`, `address`, `crime`, `sex`, `ptype`, `duration`, `cellno`) VALUES
('2186', 'Prashant KC', '2001-08-02', '1997-11-13', 'Pune', 'Rape', 'Male', 'Minimum security', '10 years', '1148');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);


ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`cno`);


ALTER TABLE `guard`
  ADD PRIMARY KEY (`gno`);


ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`pno`);
COMMIT;