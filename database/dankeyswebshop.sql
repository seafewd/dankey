-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 01:22 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dankeyswebshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `graphics_cards`
--

CREATE TABLE `graphics_cards` (
  `name` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `clock_frequency` int(255) NOT NULL,
  `length` int(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `hardware_interface` varchar(255) NOT NULL,
  `video_memory_type` varchar(255) NOT NULL,
  `storage` int(255) NOT NULL,
  `video_memory_clock` int(255) NOT NULL,
  `displayport` int(255) NOT NULL,
  `hdmi` int(255) NOT NULL,
  `power_consum` int(255) NOT NULL,
  `width` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description_de` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `dvi` int(255) NOT NULL,
  `art_no` int(255) NOT NULL DEFAULT '123456789',
  `description_en` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics_cards`
--

INSERT INTO `graphics_cards` (`name`, `subcategory`, `clock_frequency`, `length`, `model`, `manufacturer`, `hardware_interface`, `video_memory_type`, `storage`, `video_memory_clock`, `displayport`, `hdmi`, `power_consum`, `width`, `height`, `price`, `picture`, `description_de`, `dvi`, `art_no`, `description_en`) VALUES
('ASUS GeForce GTX 1070 STRIX O8G-GAMING', 'nvidia_geforce', 1632, 30, 'GTX 1070', 'ASUS', 'PCI-E x16', 'GDDR5', 8, 8, 2, 2, 200, 13, 4, 518, 'ASUS_GEFORCE_GTX_1070_STRIX_O8G.png', 'Die ROG Strix GeForce GTX 1070 Gaming-Grafikkarte ist ausgestattet mit zahlreichen exklusiven ASUS-Technologien, wie DirectCU III mit patentierten Dual Wing-Blade-Lüftern für eine 30% kühlere und 3mal leisere Performance, sowie der Auto-Extreme-Technologie in Industriequalität für Premiumqualität und höchste Zuverlässigkeit.', 2, 123456789, 'ROG Strix GeForce GTX 1070 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU III Technology with Patented Wing-Blade Fans for 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. '),
('ASUS GeForce GTX 1080 Ti STRIX O11G-GAMING ', 'nvidia_geforce', 1569, 30, 'GTX 1080 Ti', 'ASUS', 'PCI-E x16', 'GDDR5X', 11, 11, 2, 2, 250, 13, 5, 919, 'ASUS_GEFORCE_GTX_1080_TI_Strix_O11G.jpg', 'ROG Strix GeForce® GTX 1080 Ti Gaming-Grafikkarten sind mit exklusiven ASUS-Technologien ausgestattet, darunter die neue MaxContact-Technologie mit doppeltem Kontakt zur GPU für verbesserte Wärmeübertragung und patentierte Wing-Blade IP5X-zertifizierte Lüfter für maximale Luftzirkulation und längeren Lüfter Lebensdauer.', 2, 123456789, 'ROG Strix GeForce GTX 1080 Ti gaming graphics cards are packed with exclusive ASUS technologies, including all-new MaxContact Technology that is 2X more contact with GPU for improved thermal transfer, and Patented Wing-Blade IP5X-Certified Fans for maximum airflow and longer fan lifespan. '),
('MSI GeForce GTX 1080 Ti GAMING X 11G', 'nvidia_geforce', 1569, 29, 'GTX 1080 Ti', 'MSI', 'PCI-E x16', 'GDDR5X', 11, 11, 2, 2, 250, 14, 5, 848, 'MSI_GEFORCE_GTX_1080_TI_GAMING_X_11G.jpg', 'GeForce GTX-Grafikkarten sind die fortschrittlichsten, die je entwickelt wurden. Entdecken Sie beispiellose Leistung, Energieeffizienz und Gaming-Erlebnisse der nächsten Generation.', 2, 123456789, 'GeForce GTX graphics cards are the most advanced ever created. Discover unprecedented performance, power efficiency, and next-generation gaming experiences.'),
('MSI Radeon RX Vega 64', 'amd_radeon', 1247, 27, 'RX Vega', 'MSI', 'PCI-E x16', 'HBM2', 8, 945, 3, 1, 300, 11, 4, 747, 'MSI_Radeon_RX_Vega_64.jpg', 'Radeon ™ RX Vega Graphics ist für extreme Spieler gedacht, die ihre Spiele mit den höchsten Auflösungen, höchsten Frameraten, maximalen Einstellungen und mit hochmodernen Funktionen für die Zukunft entwickeln möchten.', 2, 123456789, 'Radeon™ RX Vega Graphics is for extreme gamers looking to run their games at the highest resolutions, highest framerates, maximum settings, and who want cutting edge features to carry them into the future.'),
('XFX RX 580 GTS CORE', 'amd_radeon', 1366, 27, 'RX 580', 'XFX', 'PCI-E x16', 'GDDR5', 8, 8, 3, 1, 200, 12, 4, 378, 'XFX_RX_580_GTS_CORE.jpg', 'Die Grafikkarten der Radeon RX 580-Serie verfügen über die neueste Polaris-Architektur mit GCN-Grafikkernen der vierten Generation, einer brandneuen Display-Engine und neuen Multimedia-Kernen - alles auf der revolutionären Next FinFET 14-Prozesstechnologie für mehr Leistung und Effizienz.', 2, 123456789, 'Radeon RX 580 Series Graphics feature the latest Polaris architecture which includes the 4th Gen GCN graphics cores, a brand new display engine, new multimedia cores, all on the revolutionary Next FinFET 14 process technology for enhanced performance and efficiency.');

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

CREATE TABLE `memory` (
  `name` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `number_modules` int(10) NOT NULL,
  `storage` int(10) NOT NULL,
  `memory_factor` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `height` int(10) NOT NULL,
  `LED` varchar(3) NOT NULL DEFAULT 'No',
  `picture` varchar(255) NOT NULL DEFAULT 'deafult.jpg',
  `description_de` varchar(1000) DEFAULT NULL,
  `price` int(100) NOT NULL,
  `art_no` int(255) NOT NULL DEFAULT '123456789',
  `mem_speed` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description_en` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`name`, `subcategory`, `number_modules`, `storage`, `memory_factor`, `manufacturer`, `height`, `LED`, `picture`, `description_de`, `price`, `art_no`, `mem_speed`, `type`, `description_en`) VALUES
('Corsair Vengeance LPX', 'ddr4', 2, 8, 'DIMM 288', 'Corsair', 34, 'No', 'corsair_vengeance_lpx.jpg', 'Der Vengeance LPX-Speicher ist für die Hochleistungsübertaktung ausgelegt. Der Heatspreader besteht aus reinem Aluminium für eine schnellere Wärmeableitung, und die Leistungs-PCB hilft, Hitze zu bewältigen und bietet überlegene Overclocking Headroom.', 219, 123456789, 3000, 'DDR4-RAM', 'Vengeance LPX memory is designed for high-performance overclocking. The heatspreader is made of pure aluminum for faster heat dissipation, and the performance PCB helps manage heat and provides superior overclocking headroom. '),
('G.Skill Trident Z RGB', 'ddr4', 2, 8, 'DIMM 288', 'G.Skill', 44, 'Yes', 'gskill_trident_z_rgb.jpg', 'Der Trident Z RGB DDR4-Speicherbausatz bietet eine vollständig belichtete Lichtleiste mit leuchtenden RGB-LEDs, die mit dem preisgekrönten Trident Z-Heatspreader-Design kombiniert sind und aus höchstwertigen Komponenten bestehen. Er kombiniert die lebendigste RGB-Beleuchtung mit kompromissloser Leistung.', 226, 123456789, 3000, 'DDR4-RAM', 'Featuring a completely exposed light bar with vibrant RGB LEDs, merged with the award-winning Trident Z heatspreader design, and constructed with the highest quality components, the Trident Z RGB DDR4 memory kit combines the most vivid RGB lighting with uncompromised performance.'),
('HyperX Fury', 'ddr4', 2, 8, 'DIMM 288', 'HyperX', 34, 'No', 'hyperx_fury.jpg', 'HyperX® FURY DDR3 übertaktet automatisch auf Frequenzen von bis zu 1866 MHz1 und sorgt so für einen sofortigen, stressfreien und zuverlässigen Leistungsschub, der auf den Intel-Chipsatz der Serie 100 abgestimmt ist. Bei Spannungen von nur 1,35 V ist er schlank und mager, so dass er selbst unter Feuer kühl bleibt.', 199, 123456789, 2133, 'DDR4-RAM', 'HyperX FURY DDR3 automatically overclocks to frequencies up to 1866MHz1, dishing out an instant, hassle-free, reliable boost of power tuned for Intel’s 100 Series chipset. It runs lean and mean on voltages as low as 1.35V, so it keeps its cool even when you’re under fire. '),
('HyperX Savage', 'ddr3', 4, 32, 'DIMM 240', 'HyperX', 33, 'No', 'hyperx_savage.jpg', 'Seriöse Spieler verlangen extreme Leistung, wenn sie sich in League of Legends oder Heroes of the Storm niederschlagen. Deshalb entscheiden sie sich für das Solid State Laufwerk HyperX Savage.', 325, 123456789, 1600, 'DDR3-RAM', 'Serious gamers demand extreme performance when they throw down in League of Legends or Heroes of the Storm, and that’s why they choose the HyperX Savage solid-state drive. '),
('Kingston ValueRAM', 'ddr3', 1, 32, 'DIMM 240', 'Kingston', 30, 'No', 'kingston_valueram.jpg', 'Kingston ValueRAM wird von Kunden gekauft, die die genauen technischen Spezifikationen des von ihnen benötigten Speichers kennen. Der ValueRAM-Speicher entspricht vollständig den JEDEC-Spezifikationen und wird zu 100 Prozent getestet und durch eine lebenslange Garantie abgesichert.', 448, 123456789, 1866, 'DDR3-RAM', 'Kingston ValueRAM is purchased by customers who know the exact technical specifications of the memory they need. ValueRAM memory is fully compliant with JEDEC Specifications and is 100-percent tested and backed by a lifetime warranty.');

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE `processors` (
  `name` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `number_cores` int(100) NOT NULL,
  `clock_frequency` int(100) NOT NULL,
  `family` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `number_threads` int(100) NOT NULL,
  `l3_cache` int(100) NOT NULL,
  `onboard_graphics` varchar(3) NOT NULL DEFAULT 'No',
  `price` int(100) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description_de` varchar(1000) DEFAULT NULL,
  `lithography` int(100) NOT NULL,
  `art_no` int(255) NOT NULL DEFAULT '123456789',
  `description_en` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`name`, `subcategory`, `number_cores`, `clock_frequency`, `family`, `manufacturer`, `number_threads`, `l3_cache`, `onboard_graphics`, `price`, `picture`, `description_de`, `lithography`, `art_no`, `description_en`) VALUES
('Intel Celeron G1850', 'socket_1150', 2, 3, 'Celeron', 'Intel', 2, 2, 'Yes', 62, 'intel_celeron_g1850.jpg', 'Der Celeron ist eine Familie von Mikroprozessoren von Intel, die auf den Markt für Low-End-Verbraucher ausgerichtet ist.', 22, 123456789, 'The Celeron is a family of microprocessors from Intel targeted at the low-end consumer market.'),
('Intel Core i5-8600K', 'socket_1151', 6, 4, 'Core i5 8th Gen', 'Intel', 6, 9, 'Yes', 289, 'intel_core_i5_8600k.jpg', 'Intel® Core™ i5-6600K Prozessor (6M Cache, up to 3.90 GHz)', 14, 123456789, 'Intel® Core™ i5-6600K Processor (6M Cache, up to 3.90 GHz)'),
('Intel Core i7 4790K BOX', 'socket_1150', 4, 4, '4th generation Core i7', 'Intel', 8, 8, 'No', 410, 'intel_core_i7_4790k_box.jpg', 'Dies ist ein Prozessor, den Sie verwenden können, wenn Sie einen benutzerdefinierten PC erstellen. Einer der besten Preis pro Leistung Prozessoren da draußen.', 22, 123456789, 'This is a processor to go to if building a custom pc. One of the best price per performance processors out there. '),
('Intel Core i7 7700K BOX', 'socket_1151', 4, 4, 'Core i7 7th Gen', 'Intel', 8, 8, 'Yes', 359, 'intel_core_i7_7700k_box.jpg', 'Ausgestattet mit der Intel Turbo Boost Technologie 2.02 3 wird Ihr Computer die beispiellose Leistung und Reaktionsfähigkeit haben, um Ihre Produktivität zu steigern.', 14, 123456789, 'Equipped with Intel Turbo Boost Technology 2.02 3, your computer will have the unprecedented power and responsiveness to help your productivity soar.'),
('Intel Core i7-8700K', 'socket_1151', 6, 4, 'Core i7 8th Gen', 'Intel', 12, 12, 'Yes', 418, 'intel_core_i7_8700k.jpg', 'Intel hat es geschafft und schwingt sich mit dem Core i7-8700K wieder an die Spitze der Mainstream-Prozessoren. Der erste Sechskerner mit Hyperthreading für Nicht-Enthusiasten-Plattformen erreicht riesige Takthöhen und setzt neue Benchmark-Bestwerte', 14, 123456789, 'Intel has done it and is back to the top of the mainstream processors with the Core i7-8700K. Hyperthreading for non-enthusiast platforms, the first six-core delivers huge heights and sets new benchmark scores'),
('Intel Xeon E3-1275V3', 'socket_1150', 4, 4, 'Xeon E3', 'Intel', 8, 8, 'No', 363, 'intel_xeon_e3_1275v3.jpg', 'Intel® Xeon® Processor E3-1275 v3 (8M Cache, 3.50 GHz) ', 22, 123456789, 'Intel® Xeon® Processor E3-1275 v3 (8M Cache, 3.50 GHz) '),
('Intel Xeon E3-1280 V5', 'socket_1151', 4, 4, 'Xeon E3', 'Intel', 8, 8, 'Yes', 679, 'intel_xeon_e3_1250_v5.jpg', 'Intel® Xeon® Processor E3-1280 v5 (8M Cache, 3.70 GHz) ', 14, 123456789, 'Intel® Xeon® Processor E3-1280 v5 (8M Cache, 3.70 GHz) ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`category`, `subcategory`) VALUES
('graphics_cards', ''),
('harddrives', 'accessories'),
('accessories', 'adapters'),
('graphics_cards', 'amd_radeon'),
('dvd_bd', 'bluray'),
('accessories', 'cables'),
('cooling', 'casefans'),
('memory', 'ddr'),
('memory', 'ddr2'),
('memory', 'ddr3'),
('memory', 'ddr4'),
('dvd_bd', 'dvdr'),
('dvd_bd', 'external_bluray'),
('dvd_bd', 'external_dvdr'),
('harddrives', 'external_ssd'),
('harddrives', 'external_usb_2_5'),
('harddrives', 'external_usb_3_5'),
('motherboards', 'fm2+'),
('cases', 'fulltower'),
('cases', 'miditower'),
('cases', 'minitower'),
('cases', 'mini_itx'),
('motherboards', 'm_am4'),
('motherboards', 'm_socket_1151'),
('motherboards', 'm_socket_2011-3'),
('motherboards', 'm_socket_2066'),
('motherboards', 'm_socket_am3'),
('motherboards', 'm_tr4'),
('graphics_cards', 'nvidia_geforce'),
('power_supplies', 'power_supplies'),
('hard_drives', 'sata_2_5'),
('harddrives', 'sata_3_5'),
('processors', 'socket_1150'),
('processors', 'socket_1151'),
('processors', 'socket_2011-3'),
('processors', 'socket_2066'),
('processors', 'socket_am3'),
('processors', 'socket_am4'),
('processors', 'socket_fm2'),
('processors', 'socket_tr4'),
('sound_cards', 'sound_external'),
('sound_cards', 'sound_internal'),
('harddrives', 'ssd_sata');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `language` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `address`, `city`, `phone`, `language`, `birthday`, `sex`, `avatar`) VALUES
(2, 'snowcarpet', 'patrick.werlen@hotmail.com', 'fy', 'Patrick', 'Werlen', 'Weriweg 35', '3902 Glis', '+41797858380', 'english', '1994-09-11', 'male', '1515539604.gif'),
(3, 'alex', 'alex@test.com', '123', 'alex', 'korpas', 'asd', 'asd', 'asdas', 'english', '1990-03-16', 'male', '1514917298.png'),
(12, 'alexus', 'alex.korpas@gmail.com', 'Hejsan123', 'Alexander', 'Korpas', 'General-Dufour-Strasse 52', '2502 Biel/Bienne', '0786779551', 'english', '1990-03-16', 'male', 'default.jpg'),
(13, 'aosidjaiosd', 'aoisdiojasd@asdoinasd.com', 'Hejsan123', 'akslelasdk', 'okaskdokaosd', 'aoskdkoas 52', '2512 aoskdkoasd', '07284783487', 'english', '1990-03-16', 'male', 'default.jpg'),
(14, 'hallo', 'patir@jd.com', 'Expchr94', '', 'asdkljf', 'MÃ¶sliweg, 25', '3098 KÃ¶nitz', '0797858380', 'deutsch', '2018-01-13', 'male', 'default.jpg'),
(15, 'hallajdfskl', 'asdj@go.com', 'Expchr94', '', 'ajklsdf', 'aasd 5', '1010 das', '0798846545', 'deutsch', '2018-01-18', 'male', 'default.jpg'),
(16, 'snowbow', 'paadf@gmail.com', 'Expchr94', '', 'SApopods', 'jsad 3', '3939 asdk', '4398349093', 'deutsch', '2018-01-19', 'male', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graphics_cards`
--
ALTER TABLE `graphics_cards`
  ADD PRIMARY KEY (`name`),
  ADD KEY `subcategory` (`subcategory`);

--
-- Indexes for table `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`name`),
  ADD KEY `products_FK` (`subcategory`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`name`),
  ADD KEY `subcategory` (`subcategory`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `subcategory` (`subcategory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `graphics_cards`
--
ALTER TABLE `graphics_cards`
  ADD CONSTRAINT `graphics_cards_ibfk_2` FOREIGN KEY (`subcategory`) REFERENCES `products` (`subcategory`);

--
-- Constraints for table `memory`
--
ALTER TABLE `memory`
  ADD CONSTRAINT `products_FK` FOREIGN KEY (`subcategory`) REFERENCES `products` (`subcategory`);

--
-- Constraints for table `processors`
--
ALTER TABLE `processors`
  ADD CONSTRAINT `processors_ibfk_1` FOREIGN KEY (`subcategory`) REFERENCES `products` (`subcategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
