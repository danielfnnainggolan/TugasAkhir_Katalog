-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 05:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Q2v73Xj.ImSWWF6KOiQjVufHDhjCnRbT91ZCh8mvmab33EcDi4BXC');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(30) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(40) NOT NULL,
  `harga` int(30) NOT NULL,
  `id_merek` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama_barang`, `deskripsi`, `id_kategori`, `harga`, `id_merek`) VALUES
(1, 'PH109 ', 'PH meter pocket 0.0 -14.0   gratech ', 3, 6169789, 1),
(2, 'PH600', 'PH meter pocket 0.0-14.0 Milwaukee', 3, 2711426, 2),
(3, 'PH55', 'ph meter pocket waterproof range -2.0 to 16.0 Milwaukee', 3, 6187362, 2),
(4, 'PH56', 'ph meter pocket waterproof range -2.00 to 16.00 Milwaukee', 3, 1802940, 2),
(5, 'MI105', 'Portable pH/Temp meter WP  with hard carrying case and probe MA914BR/1 ', 3, 5339221, 2),
(6, 'MI106', 'Portable pH/ORP/Temp meter WP with hard carrying case and probe MA923D/1', 3, 6346500, 2),
(7, 'MW100', 'portable PH meter 0.0 to 14.0 with probe SE 220 ', 3, 6234219, 2),
(8, 'MW101', 'portable PH meter 0.00-14.00  with probe SE 220 ', 3, 5363752, 2),
(9, 'MW102', 'Portable PH/Temp meter -2.00-16.00 with probe SE 220 and MA 830R', 3, 4094440, 2),
(10, 'MW101 soil ', 'portable PH meter 0.00-14.00 with probe MA918B/1 for soil ', 3, 440452, 2),
(11, 'MW101 Cheese', 'portable PH meter 0.00-14.00 with probe MA920B/1 for cheese', 3, 95003, 2),
(12, 'MW102 meat', 'portable PH meter 0.00-14.00 with probe MA920B/1 for meat', 3, 1244760, 2),
(13, 'MI150', 'PH/Temperature laboratory bench meter ', 3, 4620246, 2),
(14, 'MI151', 'PH/ORP/Temperature laboratory bench meter ', 3, 908379, 2),
(15, 'MI160', 'PH/ORP/ISE/Temperature laboratory bench meter ', 3, 5254476, 2),
(16, 'ORP57', 'Pocket ORP/Temp meter ', 4, 309851, 2),
(17, 'PH58', 'Pocket PH/ORP/Temp meter ', 4, 4891805, 2),
(18, 'MC110', 'PH monitor 0.0-14.0 set point 3.5-7.5 ph with probe MA911B/2', 5, 5305332, 2),
(19, 'MC120 ', 'PH monitor 0.0-14.0 set point 5.5-9.5 ph with probe MA911B/2', 5, 5192868, 2),
(20, 'MC122', 'PH controller supplied with MA 911B/2', 6, 3404028, 2),
(21, 'MC510', 'ORP controller supplied with MA921B/2', 7, 2987390, 2),
(22, 'MC125', 'PH/ORP controller supplied with MA911B/2 and MA921B/2', 6, 4174575, 2),
(23, 'MP810', 'Dosing pump 1.5 L/h  max pressure 2 bar', 8, 5366317, 2),
(24, 'MP810US', 'Dosing pump 0.6 L/h  max pressure 1.5 bar', 8, 5076549, 2),
(25, 'MP815', 'Dosing pump 1.1 to 2.2  L/h max pressure 2 bar', 8, 4221039, 2),
(26, 'MP815US', 'Dosing pump 0.0 to 2,2 L/h max pressure 1.5 bar', 8, 3219915, 2),
(27, 'MC720 kit', 'Ph Controller kit with MP810 dosing pump ', 8, 2525439, 2),
(28, 'MI170', 'Autoranging EC/TDS/NaCL/Temperature bench meter', 9, 2413602, 2),
(29, 'MI306', 'Automatic and logging EC/TDS/NaCL/Temperature meter ', 10, 6414601, 2),
(30, 'MW301', 'conductivity meter range 0 to 1999us/cm, with probe SE 510', 11, 1598615, 2),
(31, 'MW302', 'conductivity meter range 0.0 to 10.0 mS/cm , with probe SE 520', 11, 810177, 2),
(32, 'MW401', 'conductivity meter range , with probe SE 501 ', 11, 5470819, 2),
(33, 'MW402', 'conductivity meter range 0.0 to 10.0 g/L (ppt)with probe SE 520', 11, 4061964, 2),
(34, 'TDS3', 'TDS meter range 0-9990 ppm ', 12, 438630, 1),
(35, 'CD600', 'conductivity meter range 0 to 1990 ppm ', 11, 5640329, 2),
(36, 'CD601', 'TDS meter range 0 to 1990 us/cm', 11, 4850733, 2),
(37, 'CD610', 'Conductivity meter 0 to 10000 ppm', 11, 5647772, 2),
(38, 'CD611', 'conductivity  meter range 0 to 20000 us/cm', 11, 5453256, 2),
(39, 'CD97', 'Conductivity meter range 0 to 1000 ppm ', 11, 5222860, 2),
(40, 'HS1215', 'TDS/Conductivity meter range 0-9990 us/cm ; 0-9990 ppm', 11, 3028288, 1),
(41, 'EC59', 'EC/TDS/Temp meter with rep[lacement probe MI59P ', 9, 1299588, 2),
(42, 'EC60', 'EC/TDS/Temp meter with rep[lacement probe MI59P ', 9, 1731183, 2),
(43, 'MC310', 'Conductivity/TDS monitor range 0.0 to10.0 ms/cm ', 13, 351197, 2),
(44, 'MC410', 'Conductivity/TDS monitor range 1 to 1990 ppm', 13, 1971095, 2),
(45, 'MI190', 'Extended range bench Dissolved Oxygen meter range 0.00 to 45.00 mg/l (ppm)', 14, 2303615, 2),
(46, 'MI605', 'Portable Dissolved Oxigen meter range 0.0 to 45.0 mg/L (ppm) supplied with carrying case', 14, 5018292, 2),
(47, 'MW600', 'Portable Dissolved Oxigen meter range 0.0 to 19.9 mg/L (ppm) ', 14, 5948921, 2),
(48, 'MI180', 'PH/ORP/EC/TDS?NaCl?temperature bench meter ', 15, 46485, 2),
(49, 'MI805', 'Portable PH/EC/TDS/Temperature meters ', 15, 6004561, 2),
(50, 'MI806', 'portable PH/EC/TDS/Temperature meters', 15, 3285389, 2),
(51, 'MI801', 'portable PH/EC/TDS/Temperature meters', 15, 2490178, 2),
(52, 'MI802', 'portable PH/EC/TDS/Temperature meters', 15, 3864770, 2),
(53, 'MW803', 'Pocket pH/Conductivity/TDS/Temperature tester', 15, 3529165, 2),
(54, 'MW804', 'Pocket pH/Conductivity/TDS/Temperature tester', 15, 6360202, 2),
(55, 'MI411', 'Free & total Clorine and PH photometer  ', 16, 1706927, 2),
(56, 'MI405 ', 'Free & total chlorine meter ', 16, 437414, 2),
(57, 'MI407', 'Free Chlorine meter', 16, 5367748, 2),
(58, 'MI408', 'Free & total Chlorine HR meter', 16, 2942509, 2),
(59, 'MI412', 'Chloride meter', 16, 3828294, 2),
(60, 'MW10', 'Free Chlorine meter range 0.00 to 2.50 ppm', 16, 2373461, 2),
(61, 'MW11', 'Total Chlorine meter range 0.00 to 3.50 ppm', 16, 5508878, 2),
(62, 'MW12', 'Phosphate meter range 0.00 to 2.50 ppm ', 16, 847395, 2),
(63, 'MW13', 'Iodine meter range 0.0 to 12,5 ppm ', 16, 1473189, 2),
(64, 'MW14', 'Iron meter range 0.00 to 5.00 ppm ', 16, 6085812, 2),
(65, 'MI490', 'Peroxide value in the process of oil making', 16, 4433470, 2),
(66, 'MI415', 'Turbiditymeter range 0.00 to 50.00 FNU, to to 1000FNU ', 17, 5609076, 2),
(67, 'MA871', 'digital brix meter range 0 to 85% brix', 18, 2460679, 2),
(68, 'MA872', 'digital Fructose meter range 0 to 85% mass', 18, 5134920, 2),
(69, 'MA873', 'Digital glucose meter range 0 to 85% mass', 18, 1000170, 2),
(70, 'MA881', 'Digital inverted sugar range 0 to 85% mass', 18, 734930, 2),
(71, 'MA882', 'Digital refractometer for grape juice range 0 to 50% brix ', 18, 5825604, 2),
(72, 'MA883', 'Digital refractometer for grape juice range 0 to 28 baume', 18, 2478960, 2),
(73, 'MA884', 'Digital refractometer for grape juice range 0 to 50% bric potential alc', 18, 1150393, 2),
(74, 'MA885', 'Digital refractometer for grape juice  measure %brix, Oeschsle and KMW range 0 to 50% brix ', 18, 309508, 2),
(75, 'MA886', 'Digital refractometer for sodium Chloride range 0 t0 28g/100g', 18, 5534340, 2),
(76, 'MA887', 'Digital refractometer for seawater measurement 0 to 50 PSU/1.000 to 1.114 S.G/0-150ppt', 18, 1445222, 2),
(77, 'MA888', 'Digital refractometer for Ethylene Glycol range 0-100% volume', 18, 4057734, 2),
(78, 'SE220', 'double junction PH electrode with 1 m cable and gel filled for MW100/MW101/MW102', 19, 5893414, 2),
(79, 'SE300', 'double junction ORP platinum electrode with 1 m cable and gel filled for MW500', 19, 4023586, 2),
(80, 'SE510', 'conductivity /TDS probe with 1 meter cable for MW301/MW401', 19, 4294412, 2),
(81, 'SE520', 'conductivity /TDS probe with 1 meter cable for MW302/MW402', 19, 1018190, 2),
(82, 'SE600', 'Combination probe for PH/EC/TDS with 1 meter cable for MW801/MW802', 19, 1074575, 2),
(83, 'MA812/2', 'Conductivity/TDS probe with 2 meter cable for MC310/MC410', 19, 233091, 2),
(84, 'MA814DB/1 ', '4-ring conductivity /TDS/NACl/Temperature probe with DIN connector and 1 m cable for MI306', 19, 2745977, 2),
(85, 'MA911B/1', 'double junction gel filled PH electrode with BNC connector and 1 m cable', 19, 6132920, 2),
(86, 'MA911B/2', 'double junction gel filled PH electrode with BNC connector and 2 m cable', 19, 4869742, 2),
(87, 'MA914BR/1', 'PH/Temp amplified probe iwth 1 m cable for MI105', 19, 1495175, 2),
(88, 'MA912B/2', 'Double junction gel filled ORP elecrode with platinum sensor BNC connector 2 m cable', 19, 4146216, 2),
(89, 'MA923D/1', 'PH/ORP/Temp amplified probe with 1 meter cable for MI 106', 19, 199118, 2),
(90, 'MA830R', 'Stainless steel temperature probe for MW 102', 19, 1724261, 2),
(91, 'MA831R', 'Stainles steel temperature probe for MI150/MI151/MI160', 19, 5959697, 2),
(92, 'MA840', 'Polarographic D.O probe iwth 3 meter cable for MW600/MW605', 19, 2706116, 2),
(93, 'MA851D/1', 'pH/Conductivity/TDS/Temperature amplified probe iwth DIN cconnetor and 1 m cable for MI805/MI806', 19, 1780587, 2),
(94, 'MA9001', 'PH1.68 calibration buffer solution 230 ml ', 20, 2292027, 2),
(95, 'MA9004', 'PH4.01 calibration buffer solution 230 ml ', 20, 4072356, 2),
(96, 'MA9006', 'PH6.86 calibration buffer solution 230 ml ', 20, 5297748, 2),
(97, 'MA9007', 'PH7.01 calibration buffer solution 230 ml ', 20, 5026392, 2),
(98, 'MA9009', 'PH9.18 calibration buffer solution 230 ml ', 20, 1440662, 2),
(99, 'MA9010', 'PH10.01 calibration buffer solution 230 ml ', 20, 1237832, 2),
(100, 'MA9011', 'refilling electrolyte solution 3.5 KCl for PH/ORP electrodes 230 ml ', 20, 1033537, 2),
(101, 'MA9012', 'refilling electrolyte solution 1M KNO3   230 ml  for food application ', 20, 374024, 2),
(102, 'MA9015', 'storage solution for PH/ORP electodes 230 ml', 20, 4590373, 2),
(103, 'MA9016', 'celaning solution for PH/ORP electrodes 230 ml ', 20, 1210091, 2),
(104, 'MA9020', '200-2765 mV ORP solution 230 ml ', 20, 2952440, 2),
(105, 'MA9060', '12880 us/cm conductivity calibration solution 230 ml ', 20, 3977606, 2),
(106, 'MA9061', '1412us/cm conductivity calibration solution 230 ml ', 20, 5386508, 2),
(107, 'MA9062', '1382 ppm  conductivity calibration solution 230 ml ', 20, 732482, 2),
(108, 'MA9063', '84 us/cm conductivity calibration solution 230 ml ', 20, 932681, 2),
(109, 'MA9064', '80000 us/cm conductivity calibration solution 230 ml ', 20, 5809770, 2),
(110, 'MA9065', '111.8 mS/cm conductivity calibration solution 230 ml ', 20, 3459668, 2),
(111, 'MA9066', '100% NaCl calibration solution 230 ml ', 20, 300727, 2),
(112, 'MA9070', '5000 uS/cm conductivity calibration solution 230 ml', 20, 2085067, 2),
(113, 'MA9071', 'Electrolyte solution for D.O probes 230 ml ', 20, 3899494, 2),
(114, 'MA9112', 'pH 12.45 calibration buffer solution 230 ml ', 20, 3919583, 2),
(115, 'M10000B', 'rinse solution deionized water pk of 25 x 20  ml', 20, 5077544, 2),
(116, 'M10004B', 'PH 4.01 calibration buffer solution pk of 25 x 20 ml ', 20, 5336537, 2),
(117, 'M10007B', 'PH 7.01 calibration buffer solution pk of 25 x 20 ml', 20, 1788380, 2),
(118, 'M10010B', 'PH 10.01 calibration buffer solution pk of 25 x 20 ml', 20, 2755681, 2),
(119, 'M10016B', 'celaning solution for electrodes pk of 25 x 20 ml', 20, 4113720, 2),
(120, 'M10030B', '12880 us /cm calibration buffer solution pk of 25 x 20 ml ', 20, 3040456, 2),
(121, 'M10031B', '1413 us /cm calibration buffer solution pk of 25 x 20 ml ', 20, 4930119, 2),
(122, 'M10032B', '1382 ppm calibration buffer solution pk of 25 x 20 ml ', 20, 6483886, 2),
(123, 'M10038B', '6.44 ppt calibration buffer solution pk of 25 x 20 ml ', 20, 1799773, 2),
(124, 'M10080B', '800 ppm calibration buffer solution pk of 25 x 20 ml ', 20, 1487618, 2),
(125, 'WT-1', 'Digital pocket thermometer -50-300 deg with 15 m stainless probe', 22, 5700824, 1),
(126, 'TM-301', 'Thermometer IR -30/530 deg C', 22, 5600346, 3),
(127, 'TM-311N', 'Single K type thermometer ', 22, 1833796, 3),
(128, 'TM-321N', 'Dual K type thermometer ', 22, 6422887, 3),
(129, 'ST-105D', 'class I Integrating sound analyzer meter ', 23, 848883, 3),
(130, 'ST-105D', 'class I Integrating sound analyzer meter ', 23, 2415505, 3),
(131, 'ST-105L', 'class I Integrating sound analyzer meter ', 23, 3726264, 3),
(132, 'ST-105S', 'class I Integrating sound analyzer meter ', 23, 2911545, 3),
(133, 'ST-106', 'class I Integrating sound level meter', 23, 637251, 3),
(134, 'ST-107', 'class 2 integrating sound level meter', 23, 61992, 3),
(135, 'ST-107S', 'class 2 integrating sound level meter', 23, 2195394, 3),
(136, 'ST-109', 'class I Integrating sound level meter', 23, 984700, 3),
(137, 'ST-120', 'Sound level calibrator', 23, 4010339, 3),
(138, 'TM-100 ', 'Sound level calibrator', 23, 919852, 3),
(139, 'TM-101', 'sound level meter', 23, 3174610, 3),
(140, 'TM-102', 'sound level meter', 23, 5618525, 3),
(141, 'TM-103', 'sound level meter', 23, 1977092, 3),
(142, 'ST-130', 'noise dose meter ', 24, 6454840, 3),
(143, 'ST-140', 'vibration meter  1 channel ', 25, 5885492, 3),
(144, 'ST-140D', 'vibration meter  with data logger 1 channel', 25, 4504803, 3),
(145, 'ST-141', 'vibration meter  2 channel', 25, 2401181, 3),
(146, 'ST-141D', 'vibration meter  with data logger 2 channel ', 25, 3756202, 3),
(147, 'ST-501', 'CO2/Temperature / Humidity monitor/RH monitor', 26, 2472709, 3),
(148, 'ST-502', 'Indoor air quality CO2 / temperature / humidity monitor /RH monitor', 26, 5305402, 3),
(149, 'TM-182', 'Temperature / humdity meter', 26, 5511060, 3),
(150, 'TM-183', 'temperature/humidity meter ', 26, 447646, 3),
(151, 'TM-183N', 'temperature/humidity meter ', 26, 5750600, 3),
(152, 'TM-183P', 'temperature/humidity meter ', 26, 3851161, 3),
(153, 'TM-184', 'Precision temperature /humidity meter', 26, 3911111, 3),
(154, 'TM-185', 'large LED screen temperature monitor', 26, 5868077, 3),
(155, 'TM-185A', 'large LED screen humidity /temperature RS 232', 26, 1036993, 3),
(156, 'TM-185D', 'large LED screen temperature monitor with data logger', 26, 6017890, 3),
(157, 'TM-185P', 'sphare probe for TM 185', 26, 2438702, 3),
(158, 'TM-187', 'Large LED screen CO2/temperature/humidity ', 26, 5669196, 3),
(159, 'TM-187A', 'large LED screen CO2/ humidity /temperature RS 232', 26, 2321589, 3),
(160, 'TM-187D', 'Large LED screen CO2/temperature/humidity with data logger', 26, 685675, 3),
(161, 'TM-305U', 'Temperature/humidity datalogger', 26, 4551946, 3),
(162, 'TM-306U', 'temperature data logger', 26, 5540492, 3),
(163, 'TM-317', 'waterproof temperature/humidity datalogger', 26, 3336756, 3),
(164, 'TM-188', 'Heat stress WGBT meter ', 27, 4039478, 3),
(165, 'TM-188D', 'Heat stress WGBT meter  with datalogger', 27, 423222, 3),
(166, 'TM-190', 'Multi field EMF meter', 28, 4725219, 3),
(167, 'Tm-191', 'Magnetic field meter (gauss meter )', 28, 1662521, 3),
(168, 'TM-192', 'Magnetic field meter (gauss meter ) ', 28, 851065, 3),
(169, 'TM-192D', 'Magnetic field meter (gauss meter )  with data logger', 28, 683128, 3),
(170, 'TM-195', 'RF field strength meter', 29, 2633527, 3),
(171, 'TM-196', 'Three axis RF field strength meter 10MHz to 8 GHz', 29, 2252603, 3),
(172, 'TM-201 ', 'Light meter', 30, 1085266, 3),
(173, 'TM-201L', 'LED light meter', 30, 5893088, 3),
(174, 'TM-202', 'Light meter', 30, 261590, 3),
(175, 'TM-203 ', 'Data logging light meter ', 30, 2794148, 3),
(176, 'TM-204', 'light meter ', 30, 5724245, 3),
(177, 'TM-205', 'light meter auto ranging', 30, 5588730, 3),
(178, 'TM-208', 'UV light meter data logging 3 in 1', 30, 1444244, 3),
(179, 'TM-209', 'LED light meter', 30, 6159348, 3),
(180, 'TM-209M', 'LED light meter', 30, 6055347, 3),
(181, 'TM-213', 'mini pocket UV/AB meter ', 30, 3167135, 3),
(182, 'TM-218', 'UVC light meter', 30, 4223893, 3),
(183, 'MW700', 'Lux meter range 0.000 to 1999/2000 to 19999/20000 to 50000 lux', 30, 2922450, 2),
(184, 'TM-2011', 'AC camp meter ', 31, 3906509, 3),
(185, 'TM-2013', 'AC /DC clamp meter', 31, 5310247, 3),
(186, 'TM-1018', 'Automative AC/DC clamp', 31, 589742, 3),
(187, 'TM-12E', 'auto ranging AC clamp meter', 31, 4518126, 3),
(188, 'TM-13E', '400A Autoranging AC/DC clamp meter ', 31, 3012487, 3),
(189, 'TM-16E', '600A autoranging AC clamp meter', 31, 4098843, 3),
(190, 'TM-197', 'AC/DC magnetic field meter ', 31, 2731231, 3),
(191, 'TM-1018', 'HVAC autoranging AC clamp meter', 31, 2982027, 3),
(192, 'TM-1104', 'AC/DC transducer', 31, 36494, 3),
(193, 'TM-27E', '600A true RMS autoranging AC/DC watt clamp meter', 31, 5835960, 3),
(194, 'Tm-28E', '600A true RMS autoranging AC/DC watt clamp meter', 31, 5945996, 3),
(195, 'TM-3011', 'AC camp meter ', 31, 2174155, 3),
(196, 'Tm-206', 'Solar power meter ', 32, 4547863, 3),
(197, 'Tm-207', 'mini pocket solar power meter', 32, 5358097, 3),
(198, 'TM-3013', 'AC/DC magnetic field meter ', 33, 1100390, 3),
(199, 'TM-3014', 'AC/DC magnetic field meter ', 33, 1263070, 3),
(200, 'LC-90', 'LAN cable tester ', 33, 595901, 3),
(201, 'TM-4001', 'Hot wire air velocity meter ', 34, 1260596, 3),
(202, 'TM-4002', 'Hot wire air velocity meter ', 34, 5577732, 3),
(203, 'TM-402', 'Air velocity meter (anemometer)', 34, 2886769, 3),
(204, 'TM-403', 'Air velocity meter (anemometer)', 34, 5766130, 3),
(205, 'TM-404', 'Air velocity meter (anemometer)', 34, 4674101, 3),
(206, 'TM-4100', 'tachometer with K-4100 ', 35, 3600214, 3),
(207, 'TM-4100D', 'tachometer with K-4100 with datalogger', 35, 4377985, 3),
(208, 'TM-4100K', 'spare combokit for tachometer', 35, 3003037, 3),
(209, 'TM-507', 'Digital insulation tester', 36, 287715, 3),
(210, 'TM-508A', 'Milliohm meter', 15, 4639570, 3),
(211, 'TM-71', 'Autoranging pen multimeter ', 15, 5566518, 3),
(212, 'TM-72', 'Autoranging pen multimeter +phase rotation', 15, 1527252, 3),
(213, 'TM-6001', 'Battery impedance tester', 37, 4762611, 3),
(214, 'TM-6002 ', 'Battery impedance tester', 37, 4068146, 3),
(215, 'TM-601N', '3-Phase /motor rotation tester', 38, 37974, 3),
(216, 'TM-604', '3-Phase /motor rotation tester', 38, 4500330, 3),
(217, 'DM13', 'Soil ph meter pocket type ', 39, 739495, 4),
(218, 'DM15', 'soil PH/moisture meter pocket type', 39, 1636402, 4),
(219, 'DM5', 'soil PH/moisture meter pocket type with soft case', 39, 3974715, 4),
(220, '4in1', '4 in 1 soil meter ph/temp/lux/moisture', 39, 2378225, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(30) NOT NULL,
  `parent_kategori` int(30) DEFAULT NULL,
  `nama_kategori` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `parent_kategori`, `nama_kategori`) VALUES
(1, NULL, 'Instrument'),
(2, 1, 'Water Quality Test'),
(3, 2, 'PH Meter'),
(4, 2, 'ORP Meter '),
(5, 2, 'PH  Monitor'),
(6, 2, 'PH Controller'),
(7, 2, 'ORP Controller'),
(8, 2, 'Dosing pump'),
(9, 2, 'EC/TDS meter'),
(10, 2, 'EC/TDS/Nacl/Temp'),
(11, 2, 'Conductivity &TDS meter'),
(12, 2, 'TDS meter'),
(13, 2, 'Con/TDS monitor'),
(14, 2, 'DO meter '),
(15, 2, 'Multimeter'),
(16, 2, 'Photometer'),
(17, 2, 'Turbiditymteer '),
(18, 2, 'digital refractometer'),
(19, 2, 'electrode'),
(20, 2, 'Calibration,Maintenance & cleaning solution '),
(21, 1, 'Environment Meter'),
(22, 21, 'Thermometer '),
(23, 21, 'Sound level meter'),
(24, 21, 'noise meter'),
(25, 21, 'vibration meter'),
(26, 21, 'Temperature /humidity '),
(27, 21, 'Heat stress'),
(28, 21, 'Gauss meter'),
(29, 21, 'Field meter '),
(30, 21, 'lux meter'),
(31, 21, 'clamp meter'),
(32, 21, 'solar meter'),
(33, 21, 'Magnetic field meter'),
(34, 21, 'air velocity '),
(35, 21, 'tachometer'),
(36, 21, 'insulaton tester'),
(37, 21, 'battery impedance'),
(38, 21, 'rotation tester '),
(39, 21, 'Soil tester');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(2) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `alamat`, `email`, `no_hp`, `wa`) VALUES
(1, 'CV. Karya Graha Agung', 'Jl Pancing Kompleks MMTC Blok D no 1-2\r\nMedan', 'sales@karyagrahaagung.com', '061-6639860', '081316644196'),
(2, 'Jakarta Branch Office', 'Jl Kamal Raya Kompleks Rukan Malibu Blok j no 71 \r\nCengkareng - Jakarta Barat ', 'bielie@karyagrahaagung.com', '0812 97774464', '-');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(30) NOT NULL,
  `nama_merek` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`) VALUES
(1, 'Gratech'),
(2, 'Milwaukee'),
(3, 'Tenmars'),
(4, 'Takemura');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(60) NOT NULL,
  `id_katalog` int(60) NOT NULL,
  `status` int(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `id_katalog`, `status`, `keterangan`, `createdAt`) VALUES
(1, 1, 518, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(2, 2, 673, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(3, 3, 658, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(4, 4, 423, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(5, 5, 493, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(6, 6, 583, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(7, 7, 468, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(8, 8, 223, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(9, 9, 445, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(10, 10, 344, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(11, 11, 540, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(12, 12, 177, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(13, 13, 531, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(14, 14, 368, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(15, 15, 645, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(16, 16, 175, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(17, 17, 234, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(18, 18, 711, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(19, 19, 388, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(20, 20, 731, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(21, 21, 347, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(22, 22, 503, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(23, 23, 520, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(24, 24, 581, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(25, 25, 747, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(26, 26, 279, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(27, 27, 134, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(28, 28, 355, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(29, 29, 660, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(30, 30, 217, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(31, 31, 263, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(32, 32, 327, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(33, 33, 308, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(34, 34, 309, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(35, 35, 106, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(36, 36, 404, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(37, 37, 629, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(38, 38, 225, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(39, 39, 484, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(40, 40, 107, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(41, 41, 201, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(42, 42, 158, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(43, 43, 332, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(44, 44, 326, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(45, 45, 562, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(46, 46, 743, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(47, 47, 397, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(48, 48, 437, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(49, 49, 230, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(50, 50, 517, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(51, 51, 137, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(52, 52, 192, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(53, 53, 122, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(54, 54, 436, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(55, 55, 733, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(56, 56, 510, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(57, 57, 449, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(58, 58, 665, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(59, 59, 473, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(60, 60, 227, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(61, 61, 378, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(62, 62, 580, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(63, 63, 392, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(64, 64, 119, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(65, 65, 431, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(66, 66, 629, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(67, 67, 322, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(68, 68, 323, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(69, 69, 270, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(70, 70, 705, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(71, 71, 665, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(72, 72, 115, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(73, 73, 463, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(74, 74, 761, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(75, 75, 502, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(76, 76, 208, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(77, 77, 97, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(78, 78, 687, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(79, 79, 110, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(80, 80, 732, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(81, 81, 620, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(82, 82, 751, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(83, 83, 211, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(84, 84, 159, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(85, 85, 243, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(86, 86, 659, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(87, 87, 399, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(88, 88, 245, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(89, 89, 546, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(90, 90, 392, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(91, 91, 679, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(92, 92, 139, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(93, 93, 94, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(94, 94, 217, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(95, 95, 235, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(96, 96, 108, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(97, 97, 221, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(98, 98, 619, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(99, 99, 332, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(100, 100, 546, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(101, 101, 641, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(102, 102, 500, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(103, 103, 222, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(104, 104, 503, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(105, 105, 699, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(106, 106, 715, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(107, 107, 466, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(108, 108, 628, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(109, 109, 448, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(110, 110, 299, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(111, 111, 493, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(112, 112, 266, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(113, 113, 132, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(114, 114, 600, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(115, 115, 339, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(116, 116, 271, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(117, 117, 248, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(118, 118, 556, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(119, 119, 654, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(120, 120, 420, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(121, 121, 720, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(122, 122, 115, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(123, 123, 290, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(124, 124, 538, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(125, 125, 790, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(126, 126, 777, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(127, 127, 117, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(128, 128, 682, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(129, 129, 474, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(130, 130, 279, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(131, 131, 439, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(132, 132, 729, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(133, 133, 622, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(134, 134, 663, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(135, 135, 595, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(136, 136, 506, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(137, 137, 600, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(138, 138, 323, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(139, 139, 242, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(140, 140, 313, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(141, 141, 131, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(142, 142, 462, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(143, 143, 211, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(144, 144, 759, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(145, 145, 464, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(146, 146, 167, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(147, 147, 426, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(148, 148, 624, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(149, 149, 713, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(150, 150, 268, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(151, 151, 481, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(152, 152, 641, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(153, 153, 105, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(154, 154, 563, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(155, 155, 466, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(156, 156, 749, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(157, 157, 266, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(158, 158, 581, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(159, 159, 753, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(160, 160, 615, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(161, 161, 541, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(162, 162, 201, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(163, 163, 538, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(164, 164, 76, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(165, 165, 184, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(166, 166, 608, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(167, 167, 302, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(168, 168, 206, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(169, 169, 540, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(170, 170, 83, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(171, 171, 248, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(172, 172, 205, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(173, 173, 154, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(174, 174, 375, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(175, 175, 116, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(176, 176, 512, 'Barang Masuk Sistem', '2021-11-30 14:51:11'),
(177, 177, 546, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(178, 178, 722, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(179, 179, 87, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(180, 180, 172, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(181, 181, 770, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(182, 182, 320, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(183, 183, 354, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(184, 184, 557, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(185, 185, 111, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(186, 186, 112, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(187, 187, 775, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(188, 188, 483, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(189, 189, 684, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(190, 190, 311, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(191, 191, 777, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(192, 192, 87, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(193, 193, 650, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(194, 194, 207, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(195, 195, 259, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(196, 196, 629, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(197, 197, 274, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(198, 198, 220, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(199, 199, 594, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(200, 200, 315, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(201, 201, 589, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(202, 202, 461, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(203, 203, 469, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(204, 204, 610, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(205, 205, 684, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(206, 206, 396, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(207, 207, 634, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(208, 208, 574, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(209, 209, 755, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(210, 210, 596, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(211, 211, 596, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(212, 212, 156, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(213, 213, 437, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(214, 214, 319, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(215, 215, 309, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(216, 216, 380, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(217, 217, 424, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(218, 218, 349, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(219, 219, 185, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(220, 220, 320, 'Barang Masuk Sistem', '2021-11-30 14:51:12'),
(221, 1, 60, 'tes', '2021-11-30 15:02:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
