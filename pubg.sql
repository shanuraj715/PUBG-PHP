-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2020 at 01:23 AM
-- Server version: 5.6.45
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techfact_pubg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_as` varchar(20) NOT NULL,
  `enabled` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `username`, `password`, `login_as`, `enabled`) VALUES
(1, 'Shanu', 'Raj', 'shanuraj715@gmail.com', 'shanuraj715', '9877936035', '1', 1),
(2, 'Shanu', 'Raj', 'shanuraj1696@gmail.com', 'shanuraj1696', '8271890685', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `all-assets`
--

CREATE TABLE `all-assets` (
  `id` int(3) NOT NULL,
  `name` varchar(60) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `attach-on` varchar(100) NOT NULL,
  `short-description` varchar(500) NOT NULL,
  `long-description` text NOT NULL,
  `work-as` text NOT NULL,
  `category` text NOT NULL,
  `use-on` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all-assets`
--

INSERT INTO `all-assets` (`id`, `name`, `url`, `image`, `attach-on`, `short-description`, `long-description`, `work-as`, `category`, `use-on`) VALUES
(1, 'Quiver', 'qvr', 'quiver.png', 'other', 'A quiver is a container for holding arrows, bolts, or darts.', 'A quiver is a container for holding arrows, bolts, or darts. It can be carried on an archer\'s body, the bow, or the ground, depending on the type of shooting and the archer\'s personal preference. Quivers were traditionally made of leather, wood, furs, and other natural materials, but are now often made of metal or plastic.', '', 'Foregrip', 'Crossbow'),
(2, 'Bulletloop (Kar98K, Win94)', 'bulletloopk98-win94', 'bulletloop-kar98k-win94.png', 'sniper', 'Increases reload speed by 30%. It also has an unmentioned effect of decreasing the base spread by 50%.', 'Increases reload speed by 30%. It also has an unmentioned effect of decreasing the base spread by 50%.', '', 'Stock', 'Kar98k,Win94'),
(66, 'Fuel', 'gas', 'fuel.png', 'vehicle', '', '', '', 'Vehicle', ''),
(3, 'Bulletloop (Shotgun)', 'bulletloop-shotgun', 'bulletloop-shotgun.png', 'shotgun', '', '', '', 'Stock', 'Shotgun'),
(4, 'Thumb Grip', 'tgrip', 'thumb-grip.png', 'ar', '', '', '', 'Foregrip', 'Scar-L,M416,UMP9,'),
(5, 'Laser Sight', 'lsight', 'laser-sight.png', 'ar', '', '', '', 'Foregrip', ''),
(6, 'Half Grip', 'hgrip', 'half-grip.png', 'ar', '', '', '', 'Foregrip', ''),
(7, 'Light Grip', 'lgrip', 'light-grip.png', 'ar', '', '', '', 'Foregrip', ''),
(8, 'Verticle Grip', 'vgrip', 'verticle-grip.png', 'ar', '', '', '', 'Foregrip', ''),
(9, 'Angled Grip', 'agrip', 'angled-grip.png', 'ar', '', '', '', 'Foregrip', ''),
(10, 'Cheek Pad', 'cpad', 'cheek-pad.png', 'ar', '', '', '', 'Stock', ''),
(11, 'Tact Stock', 'tstock', 'tact-stock.png', 'ar', '', '', '', 'Stock', ''),
(12, 'Stock Micro', 'smicro', 'stock-micro.png', 'smg', '', '', '', 'Stock', ''),
(13, 'Duckbill', 'dbill', 'duckbill.png', 'shotgun', '', '', '', 'Muzzle', ''),
(14, 'Choke', 'choke', 'choke.png', 'shotgun', '', '', '', 'Muzzle', ''),
(15, 'Supressor (AR)', 'supp-ar', 'supressor-ar.png', 'ar', '', '', '', 'Muzzle', ''),
(16, 'Supressor (SMG)', 'supp-smg', 'supressor-smg.png', 'smg', '', '', '', 'Muzzle', ''),
(17, 'Supressor (SNIPER)', 'supp-sni', 'supressor-sniper.png', 'sniper', '', '', '', 'Muzzle', ''),
(18, 'Supressor (Pistol)', 'supp-pis', 'supressor-pistol.png', 'pistol', '', '', '', 'Muzzle', ''),
(19, 'Flash Hider (AR)', 'fh-ar', 'flash-hider-ar.png', 'ar', '', '', '', 'Muzzle', ''),
(20, 'Flash Hider (Sniper)', 'fh-sni', 'flash-hider-sniper.png', 'sniper', '', '', '', 'Muzzle', ''),
(21, 'Flash Hider (SMG)', 'fh-smg', 'flash-hider-smg.png', 'smg', '', '', '', 'Muzzle', ''),
(22, 'Compensator (AR)', 'c-ar', 'compensator-ar.png', 'ar', '', '', '', 'Muzzle', ''),
(23, 'Compensator (SMG)', 'c-smg', 'compensator-smg.png', 'smg', '', '', '', 'Muzzle', ''),
(24, 'Compensator (Sniper)', 'c-sni', 'compensator-sniper.png', 'sniper', '', '', '', 'Muzzle', ''),
(25, 'Ext. Quickdraw  (AR)', 'ext-q-ar', 'extended-quickdraw-mag-ar.png', 'ar', '', '', '', 'Magzine', ''),
(26, 'Ext. Quickdraw (SN)', 'ext-q-sni', 'extended-quickdraw-mag-sniper.png', 'sniper', '', '', '', 'Magzine', ''),
(27, 'Ext. Quickd (SMG)', 'ext-q-smg', 'extended-quickdraw-mag-smg.png', 'smg', '', '', '', 'Magzine', ''),
(28, 'Ext. Quickdraw (Pis)', 'ext-q-pis', 'extended-quickdraw-mag-pistol.png', 'pistol', '', '', '', 'Magzine', ''),
(29, 'Quickdraw (AR)', 'quick-ar', 'quickdraw-mag-ar.png', 'ar', '', '', '', 'Magzine', ''),
(30, 'Quickdraw (SMG)', 'quick-smg', 'quickdraw-mag-smg.png', 'smg', '', '', '', 'Magzine', ''),
(31, 'Quickdraw (Sniper)', 'quick-sni', 'quickdraw-mag-sniper.png', 'sniper', '', '', '', 'Magzine', ''),
(32, 'Quickdraw (Pistol)', 'quick-pis', 'quickdraw-mag-pistol.png', 'pistol', '', '', '', 'Magzine', ''),
(33, 'Extended (AR)', 'ext-ar', 'extended-mag-ar.png', 'ar', '', '', '', 'Magzine', ''),
(34, 'Extended (SMG)', 'ext-smg', 'extended-mag-smg.png', 'smg', '', '', '', 'Magzine', ''),
(35, 'Extended (Sniper)', 'ext-sni', 'extended-mag-sniper.png', 'sniper', '', '', '', 'Magzine', ''),
(36, 'Extended (Pistol)', 'ext-pis', 'extended-mag-pistol.png', 'pistol', '', '', '', 'Magzine', ''),
(37, 'Adrenaline Syringe', 'ad-syringe', 'adrenaline.png', 'Not Available', '', '', '', 'health', ''),
(38, 'Pain Killer', 'p-killer', 'painkiller.png', 'Not Available', '', '', '', 'health', ''),
(39, 'Energy Drink', 'e-drink', 'energy-drink.png', 'Not Available', '', '', '', 'health', ''),
(40, 'First Aid Kit', 'fa-kit', 'first-aid.png', 'Not Available', '', '', '', 'health', ''),
(41, 'MedKit', 'm-kit', 'medkit.png', 'Not Available', '', '', '', 'health', ''),
(42, 'Bandage', 'bandage', 'bandage.png', 'Not Available', '', '', '', 'health', ''),
(43, 'Military Vest (Lv-3)', 'vest-3', 'vest-lv3.png', 'Not Available', '', '', '', 'Body', ''),
(44, 'Police Vest (Lv-2)', 'vest-2', 'vest-lv2.png', 'Not Available', '', '', '', 'Body', ''),
(45, 'Police Vest (Lv-1)', 'vest-1', 'vest-lv1.png', 'Not Available', '', '', '', 'Body', ''),
(46, 'Bag Pack (Lv-3)', 'bag-3', 'bag-pack-lv3.png', 'Not Available', '', '', '', 'Body', ''),
(47, 'Bag Pack (Lv-2)', 'bag-2', 'bag-pack-lv2.png', 'Not Available', '', '', '', 'Body', ''),
(48, 'Bag Pack (Lv-1)', 'bag-1', 'bag-pack-lv1.png', 'Not Available', '', '', '', 'Body', ''),
(49, 'Spetsnaz Helmet (Lv-3)', 'helmet-3', 'helmet-lv3.png', 'Not Available', '', '', '', 'Body', ''),
(50, 'Military Helmet (Lv-2)', 'helmet-2', 'helmet-lv2.png', 'Not Available', '', '', '', 'Body', ''),
(51, 'Motorcycle Helmet (Lv-1)', 'helmet-1', 'helmet-lv1.png', 'Not Available', '', '', '', 'Body', ''),
(52, 'Holographic', 'holo', 'holographic.png', 'Not Available', '', '', '', 'Sight', ''),
(53, 'Red Dot', 'r-dot', 'red-dot.png', 'Not Available', '', '', '', 'Sight', ''),
(54, '2x Scope', '2x', '2x.png', 'Not Available', '', '', '', 'Sight', ''),
(55, '3x Scope', '3x', '3x.png', 'Not Available', '', '', '', 'Sight', ''),
(56, '4x Scope', '4x', '4x.png', 'Not Available', '', '', '', 'Sight', ''),
(57, '6x Scope', '6x', '6x.png', 'Not Available', '', '', '', 'Sight', 'AWM,Crossbow,MK14,M24,SKS,Kar98k,DP 28,M762,Groza,SLR,MK47 Mutant,AKM,Aug A3,QBZ,Mini 14, QBU,M416,Scar-L,M16A4,S12K,UMP9,Vector'),
(58, '8x Scope', '8x', '8x.png', 'Not Available', '', '', '', 'Sight', 'QBU,SLR,SKS,Mini 14,AWM,M24,MK14,Kar98K'),
(59, '.45 ACP', '45acp', '45acp.png', 'Not Available', 'The .45 ACP, or .45 Auto is a handgun cartridge designed by John Browning in 1905', 'The .45 ACP is an effective combat pistol cartridge that combines accuracy and stopping power for use against human targets. It has relatively low muzzle blast and flash, and it produces moderate recoil in handguns, made worse in compact models. The standard issue military .45 ACP round has a 230-grain bullet that travels at approximately 830 feet per second when fired from the government issue M1911A1 pistol and approximately 950 feet per second from the M1A1 Thompson submachine gun. The cartridge also comes in various specialty rounds of varying weights and performance levels. It operates at a relatively low maximum chamber pressure rating of 21,000 psi (145 MPa) (compared to 35,000 psi/241 MPa for 9mm Parabellum and .40 S&W, 37,500 psi/259 MPa for 10mm Auto, 40,000 psi/276 MPa for .357 SIG), which due to a low bolt thrust helps extend service life of weapons in which it is used. Some makers of pistols chambered in .45 ACP do not certify them to use Plus P ammunition.  In its non-expanding full metal jacket (FMJ) version, the .45 ACP cartridge has a reputation for effectiveness against human targets because its heavy mass has the capacity to penetrate tissue deeply and damage the central nervous system, and its large 11.5mm diameter creates a more substantial permanent wound channel than other calibers, which can lower blood pressure rapidly if critical organs of the circulatory system are hit.', 'Not Available', 'Bullet', 'Win94,Thompson SMG,Vector,R45,P1911'),
(60, '9mm', '9mm', '9mm.png', 'Not Available', '', '', '', 'Bullet', 'VSS,UMP9,UZI,P18C,P92'),
(61, '7.62mm', '762mm', '7_62mm.png', 'Not Available', '7.62 mm caliber is a nominal caliber used for a number of different cartridges.', '7.62 mm caliber is a nominal caliber used for a number of different cartridges. Historically, this class of cartridge was commonly known as .30 caliber, the imperial unit equivalent, and was most commonly used for indicating a class of full power military main battle rifle (MBR) cartridges. The measurement equals 0.30 inches or three decimal lines, written .3\" and read as three-line. The 7.62 mm designation refers to the internal diameter of the barrel at the lands. The actual bullet caliber is often 7.82 mm (0.308 in), although Soviet weapons commonly use a 7.91 mm (0.311 in) bullet, as do older British (.303 British) and Japanese cartridges.', '', 'Bullet', 'MK14,M24,SKS,Kar98K,DP 28,M762,Groza,SLR,MK47 Mutant,AKM,R1895'),
(62, '5.56mm', '556mm', '5_56mm.png', 'Not Available', '', '', '', 'Bullet', 'M249,Aug-A3,QBZ,QBU,Mini 14,M416,Scar-L,M16A4'),
(63, '12 Gauge', '12-g', '12-gauge.png', 'Not Available', '', '', '', 'Bullet', 'S12K,S1897,S686,Sawed-off'),
(64, '.300 Magnum', '300-mag', '_300-magnum.png', 'Not Available', '', '', '', 'Bullet', 'AWM'),
(65, 'Bolt', 'bolt', 'bolt.png', 'Not Available', '', '', '', 'Bullet', 'Crossbow');

-- --------------------------------------------------------

--
-- Table structure for table `error_feedback`
--

CREATE TABLE `error_feedback` (
  `id` int(4) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `error_type` varchar(150) NOT NULL,
  `date` varchar(20) NOT NULL,
  `explained` text NOT NULL,
  `error_page` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gun-category`
--

CREATE TABLE `gun-category` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `url` varchar(200) NOT NULL,
  `btn_order` int(3) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gun-category`
--

INSERT INTO `gun-category` (`id`, `title`, `image`, `url`, `btn_order`, `description`) VALUES
(2, 'Pistols', 'pistol.png', 'pistol', 1, ''),
(3, 'SMG Guns', 'smg-gun.png', 'smg', 2, ''),
(4, 'Melee Weapons', 'melee-item.png', 'melee', 3, ''),
(5, 'Throwable', 'throwable-item.png', 'throwable', 4, ''),
(6, 'Shotguns', 'shotgun-gun.png', 'shotgun', 5, ''),
(7, 'Sniper Rifels', 'sniper-gun.png', 'sniper', 6, ''),
(8, 'Assault Rifels', 'ar-gun.png', 'ar', 7, ''),
(10, 'Others', 'others.png', 'other', 10, ''),
(12, 'Marksman Rifles', 'marksman-rifles.png', 'marksman-rifles', 8, ''),
(13, 'LMG', 'lmg.png', 'lmg', 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `guns`
--

CREATE TABLE `guns` (
  `id` int(3) NOT NULL,
  `name` varchar(40) NOT NULL COMMENT 'gun name',
  `image` varchar(40) NOT NULL COMMENT 'gun image',
  `full-name` varchar(100) NOT NULL COMMENT 'Gun full name',
  `url` varchar(255) NOT NULL COMMENT 'this will use in url with get method',
  `category` varchar(100) NOT NULL COMMENT 'gun category',
  `short-description` varchar(500) NOT NULL,
  `long-description` text NOT NULL,
  `bullet-type` varchar(20) NOT NULL,
  `max-range` varchar(20) NOT NULL,
  `sight` varchar(200) NOT NULL,
  `magzine` varchar(255) NOT NULL,
  `muzzle` varchar(200) NOT NULL,
  `foregrip` varchar(200) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `bwom` varchar(5) NOT NULL COMMENT 'bullet without magzine',
  `bwm` varchar(5) NOT NULL COMMENT 'bullet with magzine',
  `fire-modes` varchar(100) NOT NULL,
  `fire_rate` varchar(20) NOT NULL,
  `skin` int(1) NOT NULL COMMENT 'skin availavle or not. 0=No 1=Yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guns`
--

INSERT INTO `guns` (`id`, `name`, `image`, `full-name`, `url`, `category`, `short-description`, `long-description`, `bullet-type`, `max-range`, `sight`, `magzine`, `muzzle`, `foregrip`, `stock`, `bwom`, `bwm`, `fire-modes`, `fire_rate`, `skin`) VALUES
(1, 'AKM', 'akm.png', 'Avtomat Kalashnikova Modernizirovanny', 'akm', 'ar', 'The AKM is an assault rifle type weapon in BATTLEGROUNDS.', 'The AKM is a 7.62mm assault rifle designed by Mikhail Kalashnikov. It is a common modernized variant of the AK-47 rifle developed in the 1940s.Introduced into service with the Soviet Army in 1959, the AKM is the most ubiquitous variant of the entire AK series of firearms and it has found widespread use with most member states of the former Warsaw Pact and its African and Asian allies as well as being widely exported and produced in many other countries. The production of these rifles was carried out at both the Tula Arms Plant and Izhmash. It was officially replaced in Soviet frontline service by the AK-74 in the late 1970s, but remains in use worldwide.', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Thumb Grip, Laser Sight, Half grip, Light Grip, Verticle Grip, Angled Foregrip', 'Not Available', '30', '40', 'Not Available', '600 rounds/min', 1),
(2, 'M16A4', 'm16a4.png', 'M16A4', 'm16a4', 'ar', 'The M16A4 is an assault rifle type weapon in BATTLEGROUNDS.', 'The M16 rifle, officially designated Rifle, Caliber 5.56 mm, M16, is a family of military rifles adapted from the ArmaLite AR-15 rifle for the United States military. The original M16 rifle was a 5.56mm automatic rifle with a 20-round magazine.<br /><br />In 1964, the M16 entered U.S. military service and the following year was deployed for jungle warfare operations during the Vietnam War. In 1969, the M16A1 replaced the M14 rifle to become the U.S. military\'s standard service rifle. The M16A1 improvements include a bolt-assist, chrome-plated bore and a 30-round magazine.<br />In 1983, the U.S. Marine Corps adopted the M16A2 rifle and the U.S. Army adopted it in 1986. The M16A2 fires the improved 5.56x45mm NATO (M855/SS109) cartridge and has a newer adjustable rear sight, case deflector, heavy barrel, improved handguard, pistol grip and buttstock, as well as a semi-auto and three-round burst fire selector. Adopted in 1998, the M16A4 is the fourth generation of the M16 series.[21] It is equipped with a removable carrying handle and Picatinny rail for mounting optics and other ancillary devices.', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Quickdraw Mag (AR), Extended Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Not Available', 'Not Available', '30', '40', 'Not Available', '700-950 rounds/min', 1),
(3, 'Scar-L', 'scar-l.png', 'Special Combat/Capable Assault Rifle', 'scar-l', 'ar', 'The FN SCAR is a gas-operated self-loading rifle with a rotating bolt.', 'The FN SCAR (Special Operations Forces Combat Assault Rifle) is a gas-operated (short-stroke gas piston) self-loading rifle with a rotating bolt. It is constructed to be extremely modular, including barrel change to switch between calibers. The rifle was developed by Belgian manufacturer FN Herstal (FNH) for the United States Special Operations Command (SOCOM) to satisfy the requirements of the SCAR competition. This family of rifles consist of two main types. The SCAR-L, for \"light,\" is chambered in 5.56x45mm NATO cartridge and the SCAR-H, for \"heavy,\" is chambered in 7.62x51mm NATO. Both are available in Close Quarters Combat (CQC), Standard (STD), and Long Barrel (LB) variants.The SCAR is manufactured in two main versions; the SCAR-L (\"Light\") and SCAR-H (\"Heavy\"). The SCAR-L fires 5.56×45mm NATO, fed from STANAG (M16) magazines. The SCAR-H fires the more powerful 7.62×51mm NATO from proprietary 30-round magazines. Different length barrels are available for close quarters battle and for longer-range engagements. The initial solicitation indicated that the SCAR-H would also be able to be chambered in 7.62x39mm M43 Kalashnikov cartridge and 6.8×43mm Remington SPC cartridge. However, FN is not currently offering them and they likely have been cancelled.', '5.56mm', 'Not Available', 'Holographic Sight,Red Dot,2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR),Extended Mag (AR),Quickdraw Mag (AR)', 'Compensator (AR),Supressor (AR),Flash Hider (AR)', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', 'Not Available', '30', '40', 'Not Available', '625 RPM', 1),
(4, 'M416', 'm416.png', 'Not Available', 'm416', 'ar', 'The HK416, (referred to as the M416 in-game) is an assault rifle/carbine type weapon in BATTLEGROUNDS.', 'The United States Army\'s Delta Force, at the request of R&D NCO Larry Vickers, collaborated with the German arms maker Heckler & Koch to develop the new carbine in the early 1990s. During development, Heckler & Koch capitalized on experience gained developing the Bundeswehr\'s Heckler & Koch G36 assault rifle, the U.S. Army\'s XM8 rifle project (cancelled in 2005) and the modernization of the British Armed Forces SA80 small arms family. The project was originally called the Heckler & Koch M4, but this was changed in response to a trademark infringement suit filed by Colt Defense. Delta Force replaced its M4s with the HK416 in 2004, after tests revealed that the piston operating system significantly reduces malfunctions while increasing the life of parts.<br /><br />The HK416 has been tested by the United States military and is in use with some law enforcement agencies. It has been adopted as the standard rifle of the Norwegian Armed Forces (2008) and the French Armed Forces (2017) and is used by many special operations units worldwide.', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', 'Tact Mock', '30', '40', 'Not Available', '700-900 rounds/min', 1),
(5, 'Groza', 'groza.png', 'Not Available', 'groza', 'ar', 'The OTs-14 Groza is a Russian selective fire bullpup assault rifle chambered for the 7.62x39 round and the 9x39mm subsonic round.', 'The OTs-14-4A shares 75% of its components with the AKS-74U. The basic components of the weapon are borrowed directly from the AKS-74U assault rifle and slightly modified, simplifying the design as a whole and making the weapon considerably cheaper. The weapon has modular design allowing for assembly of one of four weapon versions depending on the assigned mission. It is configured in a bullpup layout for increased portability and balance. The grip is displaced forward, making the assault rifle compact, suitable for concealed carrying and so well balanced that it can be fired using just one hand, like a pistol. The weapon fires from a closed bolt and has a hammer-type firing mechanism. It has a unitary trigger; a three-position combination fire mode selector switch / manual safety on the left side of the receiver sets whether it fires either the rifle or the grenade launcher or places it in \"safe\". The assault rifle is equipped with iron sights contained in the carrying handle that consist of an adjustable rear aperture sight on a tangent leaf with range graduations from 50 to 200 m, and a forward post. The grenade launcher is aimed using a folding leaf sight. The weapon will also accept several optical sights, including the PSO telescopic sights which mount directly onto the carrying handle or, as on early models, onto a bracket on the left side of the receiver housing. The OTs-14-4A also has a night sight dovetail rail that will accept all standard night vision optics.', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Not Available', 'Not Available', '30', '40', 'Not Available', '700-750 rounds/min', 1),
(6, 'AUG A3', 'aug.png', 'Armee Universal Gewehr', 'aug', 'ar', '', 'The Steyr AUG (Armee-Universal-Gewehr—\"universal army rifle\") is an Austrian 5.56×45mm NATO bullpup assault rifle, designed in the 1960s by Steyr-Daimler-Puch and now manufactured by Steyr Mannlicher GmbH & Co KG.', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', 'Not Available', '30', '40', 'Not Available', '680–750 RPM', 1),
(7, 'QBZ', 'qbz.png', 'Not Available', 'qbz', 'ar', 'The QBZ-95 was first observed outside China on 1 July 1997, when the United Kingdom transferred the sovereignty of Hong Kong to the People\'s Republic of China', 'The QBZ-95 is a bullpup-style assault rifle designed and manufactured by Norinco for the People\'s Liberation Army, the armed forces of the People\'s Republic of China, People\'s Armed Police (para-military police), and other Chinese law enforcement agencies. This weapon uses the 5.8×42mm DBP87, a type ammunition of Chinese origin. The QBZ-95 consists of a system of firearms using a common design. This family includes a carbine variant, a standard rifle, and a light support weapon. The QBZ-95 was first observed outside China on 1 July 1997, when the United Kingdom transferred the sovereignty of Hong Kong to the People\'s Republic of China. It is a modern weapon system in a bullpup configuration, where the weapon\'s action and magazine are located behind the grip and trigger assembly. The weapon was designed to replace the standard-issue Type 81 assault rifle. The QBZ-95 had replaced the Type 81 in frontline units by 2006, and is gradually replacing it in second-line units and the People\'s Armed Police. The rifle uses polymer materials in its construction, fires a 5.8×42mm small-caliber, high-velocity bullet (in a class with the NATO standard 5.56×45mm SS109 and the Russian 5.45×39mm), and employs a bullpup configuration similar to the British SA80, French FAMAS, Austrian Steyr AUG, South African Vektor CR-21, Israeli Tavor or the Singaporean SAR-21. Duo Yingxian mentioned that his staff was given 2 and a half years when he was recruited to serve as the project head to develop the QBZ-95 in 1992, alongside two years of field tests.', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', 'Not Available', '30', '40', 'Not Available', '650 rounds/min', 1),
(8, 'M762', 'm762.png', 'Not Available', 'm762', 'ar', 'The Beryl M762 is a versatile assault rifle with more attachment points than the AKM, on par with the SCAR-L', 'Development work on a new service rifle (both a standard and carbine variant) adapted to use the intermediate 5.56x45mm NATO cartridge had been undertaken in 1995, however a functioning 5.56 mm rifle and carbine variant had already been available in Radom since 1991, known as the wz. 1991 (a rechambered wz. 1988 Tantal rifle). The new weapon\'s specifications were approved in February 1995 and in December the same year, a prototype production batch consisting of 11 Beryl rifles was produced. In 1997 the weapon had been successfully evaluated and adopted into service as the 5.56 mm karabinek szturmowy wz. 1996 (\"assault carbine pattern 1996\"). The Beryl subsequently became the standard Polish rifle. In 2011, there were more than 45,000 in the inventory, accounting for about half of the assault rifles in the Polish Army. On May 25, 2016, FB \"Lucznik\" Radom announced an order from the Polish Army for 26,000 Beryls and Mini-Beryls, though did not break it down by system.', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', 'Falsh Hider (AR), Suppressor (AR), Compensator (AR)', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', '', '30', '40', 'Not Available', '', 1),
(9, 'Kar98K', 'kar98k.png', 'Not Available', 'kar98k', 'sniper', 'The Karabiner 98 kurz is a bolt-action rifle chambered for the 7.92×57mm Mauser cartridge that was adopted on 21 June 1935', 'The Karabiner 98 kurz often abbreviated Kar98k or K98k and often incorrectly referred to as a \"K98\" (which was a Polish Carbine) is a bolt-action rifle chambered for the 7.92x57mm Mauser cartridge that was adopted on 21 June 1935 as the standard service rifle by the German Wehrmacht. It was one of the final developments in the long line of Mauser military rifles. Although supplemented by semi- and fully automatic rifles during World War II, it remained the primary German service rifle until the end of the war in 1945. Millions were captured by the Soviets at the conclusion of World War II and were widely distributed as military aid. The Karabiner 98k therefore continues to appear in conflicts across the world as they are taken out of storage during times of strife.', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'No Magzine', 'Falsh Hider (Snipers), Suppressor (Snipers), Compensator (Snipers)', 'Not Available', 'Cheek Pad (Snipers), Bulletloop (Kar98k, Win94)', '5', '5', 'Not Available', 'Not Available', 1),
(10, 'M24', 'm24.png', 'Not Available', 'm24', 'sniper', '', 'The M24 Sniper Weapon System (SWS) is the military and police version of the Remington Model 700 rifle, M24 being the model name assigned by the United States Army after adoption as their standard sniper rifle in 1988. The M24 is referred to as a \"weapon system\" because it consists of not only a rifle, but also a detachable telescopic sight and other accessories.  The M24 SWS has the \"long action\" bolt version of the Remington 700 receiver but is chambered for the 7.62x51mm NATO \"short action\" cartridge that has an overall length of 2.750 inches (69.85 mm). The \"long action\" allows the rifle to be re-configured for dimensionally larger cartridges up to 3.340 inches (84.84 mm) in overall length.', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper)', 'Falsh Hider (Snipers), Suppressor (Snipers), Compensator (Snipers)', 'Not Available', 'Cheek Pad (Snipers)', '5', '7', 'Not Available', 'Not Available', 0),
(11, 'AWM', 'awm.png', 'Not Available', 'awm', 'sniper', '', '', '.300 Magnum', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper)', '', '', '', '5', '7', '', '', 1),
(12, 'Win94', 'win94.png', 'Not Available', 'win94', 'sniper', '', '', '.45 ACP', 'Not Available', '', 'No Magzine', '', '', '', '', '', '', '', 1),
(13, 'SKS', 'sks.png', 'Not Available', 'sks', 'marksman-rifles', '', '', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '10', '20', '', '', 1),
(14, 'VSS', 'vss.png', 'Not Available', 'vss', 'marksman-rifles', '', '', '9mm', 'Not Available', 'No Sight Attachment | Default 4x Attached', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '10', '20', '', '', 0),
(15, 'Mini 14', 'mini14.png', 'Not Available', 'mini14', 'marksman-rifles', '', '', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '20', '30', '', '', 1),
(16, 'MK14', 'mk14.png', 'Not Available', 'mk14', 'marksman-rifles', '', '', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '', '', '', '', 0),
(17, 'SLR', 'slr.png', 'Not Available', 'slr', 'marksman-rifles', '', '', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '10', '20', '', '', 1),
(18, 'QBU', 'qbu.png', 'Not Available', 'qbu', 'marksman-rifles', '', '', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x, 8x', 'Extended Quickdraw Mag. (Sniper), Extended Mag (Sniper), Quickdraw Mag (Sniper), Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '', '', '', '', 1),
(19, 'UZI', 'uzi.png', 'Not Available', 'uzi', 'smg', '', '', '9mm', 'Not Available', 'No Sight Attachment', 'Extended Quickdraw Mag. (SMG), Extended Mag (SMG), Quickdraw Mag (SMG)', '', '', '', '', '', '', '', 1),
(20, 'UMP9', 'ump9.png', 'Not Available', 'ump9', 'smg', 'The UMP has been adopted by various agencies such as the U.S. Customs and Border Protection.', 'The UMP is a Blowback operated, magazine-fed submachine gun firing from a closed bolt. As originally designed, the UMP is chambered for larger cartridges (.45 ACP and .40 S&W) than other submachine guns like the MP5, to provide more stopping power against unarmored targets (with slightly lower effectiveness at longer range) than the MP5 (largely offered in 9x19mm, albeit with short-lived production of 10mm Auto and .40 S&W variants). A larger cartridge produces more recoil, and makes it more difficult to control in fully automatic firing. To mitigate this, the cyclic rate of fire was reduced to around 600–745 rounds per minute (RPM) for the UMP40[6] and 600 rounds per minute for the UMP45, which makes it one of the slower firing submachine guns on the market. The UMP9 (the 9x19mm version of the UMP) is almost 0.2 kilograms (0.44 lb) lighter than its MP5 counterpart. Its predominantly polymer construction reduces both its weight and the number of parts susceptible to corrosion. It has a cyclic rate of fire of around 600-650 rounds per minute.', '9mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag. (SMG), Extended Mag (SMG), Quickdraw Mag (SMG)', '', 'Thumb Grip,Laser Sight,Half Grip,Light Grip,Verticle Grip,Angled Grip', 'Not Available', '30', '40', '', '600–650 RPM', 1),
(21, 'Vector', 'vector.png', 'Not Available', 'vector', 'smg', '', '', '.45 ACP', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag. (SMG), Extended Mag (SMG), Quickdraw Mag (SMG)', '', '', '', '15', '25', '', '', 1),
(22, 'Thompson SMG', 'thompson.png', 'Not Available', 'thompson', 'smg', '', '', '.45 ACP', 'Not Available', 'No Sight Attachment', 'Extended Quickdraw Mag. (SMG), Extended Mag (SMG), Quickdraw Mag (SMG)', '', '', '', '30', '50', '', '', 0),
(23, 'S686', 's686.png', 'Not Available', 's686', 'shotgun', '', '', '12 Gauge', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '2', '', '', '', 1),
(24, 'S1897', 's1897.png', 'Not Available', 's1897', 'shotgun', '', '', '12 Gauge', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '5', '', '', '', 1),
(25, 'S12K', 's12k.png', 'Not Available', 's12k', 'shotgun', '', '', '12 Gauge', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'Extended Quickdraw Mag (AR), Extended Mag (AR), Quickdraw Mag (AR)', '', '', '', '5', '8', '', '', 1),
(26, 'M249', 'm249.png', 'Not Available', 'm249', 'lmg', 'The M249 light machine gun, formerly designated the M249 Squad Automatic Weapon', 'The M249 light machine gun (LMG), formerly designated the M249 Squad Automatic Weapon (SAW) and formally written as Light Machine Gun, 5.56 mm, M249, is the American adaptation of the Belgian FN Minimi, a light machine gun manufactured by the Belgian company FN Herstal (FN).<br />The M249 is manufactured in the United States by the local subsidiary FN Manufacturing LLC in Columbia, South Carolina and is widely used in the U.S. Armed Forces. The weapon was introduced in 1984 after being judged the most effective of a number of candidate weapons to address the lack of automatic firepower in small units. The M249 provides infantry squads with the high rate of fire of a machine gun combined with accuracy and portability approaching that of a rifle.  The M249 is gas operated and air-cooled. It has a quick-change barrel, allowing the gunner to rapidly replace an overheated or jammed barrel.<br />A folding bipod is attached near the front of the gun, though an M192 LGM tripod is available. It can be fed from both linked ammunition and STANAG magazines, like those used in the M16 and M4. This allows the SAW gunner to use rifle magazines as an emergency source of ammunition in the event that he or she runs out of linked rounds.', '5.56mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'No Magzine', 'Not Available', 'Not Available', 'Not Available', '100', '100', 'Not Available', '650-850 RPM', 1),
(27, 'DP-28', 'dp28.png', 'Not Available', 'dp28', 'lmg', '', '', '7.62mm', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'No Magzine', '', '', '', '47', '', '', '', 0),
(28, 'P92', 'p92.png', 'Not Available', 'p92', 'pistol', 'The Beretta 92 is a series of semi-automatic pistols designed and manufactured by Beretta of Italy.', 'The Beretta 92 pistol evolved from earlier Beretta designs, most notably the M1923 and M1951. From the M1923 comes the open slide design, while the alloy frame and locking block barrel, originally from Walther P38, were first used in the M1951. The grip angle and the front sight integrated with the slide were also common to earlier Beretta pistols. What were perhaps the Model 92\'s two most important advanced design features had first appeared on its immediate predecessor, the 1974 .380 caliber Model 84. These improvements both involved the magazine, which featured direct feed; that is, there was no feed ramp between the magazine and the chamber (a Beretta innovation in pistols). In addition, the magazine was a \"double-stacked\" design, a feature originally introduced in 1935 on the Browning Hi-Power. Carlo Beretta, Giuseppe Mazzetti and Vittorio Valle, all experienced firearms designers, contributed to the final design in 1975.', '9mm', 'Not Available', 'Red Dot', 'Extended Quickdraw Mag (Pistols), Extended Mag (Pistols), Quickdraw Mag (Pistols)', 'Suppressor (Pistols)', 'Laser Sight', 'Not Available', '', '', 'Not Available', 'Not Available', 1),
(29, 'P1911', 'p1911.png', 'Not Available', 'p1911', 'pistol', 'The M1911, also known as the \"Government\" or \"Colt Government\", is a single-action pistol', 'The P1911 packs a punch in a small package. Its damage output is limited only by the small magazine size and the skill of its operator. It is therefore advisable to find an extended or extended quickdraw magazine as soon as possible if planning to keep this weapon as its magazine capacity is almost doubled, greatly increasing its potential as a backup weapon. Due to its slow muzzle velocity of 250 meters per second, it is inadvisable to use this gun at ranges further than 50 meters.  Damage falloff begins after the bullet has traveled one meter and will continually decrease for as long as the bullet is in flight.', '.45 ACP', 'Not Available', 'Red Dot', 'Extended Quickdraw Mag (Pistols), Extended Mag (Pistols), Quickdraw Mag (Pistols)', 'Suppressor (Pistols)', 'Laser Sight', 'Not Available', '', '', '', '', 1),
(30, 'R1895', 'r1895.png', 'Not Available', 'r1895', 'pistol', 'A Nagant M1895 produced in 1941 by the Tula Arsenal with its 7.62×38mmR ammunition', 'The Nagant M1895 Revolver is a seven-shot, gas-seal revolver designed and produced by Belgian industrialist Léon Nagant for the Russian Empire. The Nagant M1895 was chambered for a proprietary cartridge, 7.62x38mmR, and featured an unusual \"gas-seal\" system, in which the cylinder moved forward when the gun was cocked, to close the gap between the cylinder and the barrel, providing a boost to the muzzle velocity of the fired projectile and allowing the weapon to be suppressed (an unusual ability for a revolver).[3] Its design would inspire the m1893 Pieper Carbine[4] and Steyr 1893 revolver.', '7.62mm', 'Not Available', 'Not Available', 'Not Available', 'Suppressor (Pistols)', 'Not Available', 'Not Available', '', '', 'Not Availabe', 'Not Availble', 0),
(31, 'P18C', 'p18c.png', 'Not Available', 'p18c', 'pistol', '', '', '9mm', 'Not Available', '', 'Extended Quickdraw Mag (Pistols), Extended Mag (Pistols), Quickdraw Mag (Pistols)', '', '', '', '', '', '', '', 1),
(32, 'R45', 'r45.png', 'Not Available', 'r45', 'pistol', '', '', '.45 ACP', 'Not Available', '', 'No Magzine', '', '', '', '', '', '', '', 1),
(33, 'Sawed-off', 'sawed-off.png', 'Not Available', 's-off', 'pistol', '', '', '12 Gauge', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 1),
(34, 'Flare Gun', 'flare.png', 'Flare', 'flare', 'other', 'Flare gun is used to create illumination for improved vision or as a distress signal.', 'Flare guns have been used as such in some situations. Towards the end of World War I during the Final Offensive of the Sinai and Palestine Campaign, on 19 October 1918 a German aircraft was destroyed on the ground by firing a Very light into the aircraft. The D.F.W. two-seater was first seen in the air; the first German aircraft since aerial fighting over Deraa on 16 and 17 September just prior to the beginning of the Battle of Sharon. The two-seater was forced to land and was destroyed after the German pilot and observer had moved to safety. In 1942, a German pilot mistakenly landed at the Pembrey Airfield in Wales. The duty pilot, Sgt. Jeffreys, did not have a conventional weapon, so he grabbed a Very pistol and used it to capture the German pilot, Oberleutnant Armin Faber. In World War II, Germany manufactured grenades designed to be fired from adapted flare guns known as the Kampfpistole, or Sturmpistole in its final form. The weapon was designed to function as an anti-tank weapon but failed to perform to expectations due to the minuscule amount of TNT carried in the hollow charge projectiles.', 'Flare', 'Not Available', 'No Sight Attachment', 'No Magzine', 'Not Available', 'Not Available', 'Not Available', '1', '1', 'Not Available', 'Not Available', 0),
(35, 'Machete', 'machete.png', 'Not Available', 'machete', 'melee', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 0),
(36, 'Crowbar', 'crowbar.png', 'Not Available', 'crowbar', 'melee', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 1),
(37, 'Sickle', 'sickle.png', 'Not Available', 'sickle', 'melee', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 1),
(38, 'Pan', 'pan.png', 'Not Available', 'pan', 'melee', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 1),
(39, 'Crossbow', 'crossbow.png', 'Not Available', 'crossbow', 'other', 'A crossbow is a type of elastic ranged weapon in similar principle to a bow, consisting of a bow-like assembly called a prod.', 'A crossbow is a type of elastic ranged weapon in similar principle to a bow, consisting of a bow-like assembly called a prod, mounted horizontally on a main frame called a tiller, which is handheld in a similar fashion to the stock of a long gun. It shoots arrow-like projectiles called bolts or quarrels. The medieval European crossbow was called by many other names, most of which were derived from the word ballista, an ancient Greek torsion siege engine similar in appearance. Although having the same launch principle, crossbows differ from bows in that a bow\'s draw must be maintained manually by the archer pulling the bowstring with fingers, arm and back muscles and holding that same form in order to aim (which demands significant physical strength and stamina), while a crossbow uses a locking mechanism to maintain the draw, limiting the shooter\'s exertion to only pulling the string into lock and then release the shot via depressing a lever/trigger. This not only enables a crossbowman to handle stronger draw weight, but also hold for longer with significant less physical strain, thus capable of better precision.', 'Bolt', 'Not Available', 'Red Dot, Holographic Sight, 2x, 3x, 4x, 6x', 'No Magzine', 'Not Available', 'Quiver', 'Not Available', '1', '1', 'Not Available', 'Not Available', 1),
(40, 'Granade', 'granade.png', 'Not Available', 'granade', 'throwable', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 0),
(41, 'Moltov', 'moltov.png', 'Not Available', 'moltove', 'throwable', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 0),
(42, 'Smoke Granade', 'smoke.png', 'Not Available', 'smoke', 'throwable', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 0),
(43, 'Stun Granade', 'stun.png', 'Not Available', 'stun', 'throwable', '', '', 'None', 'Not Available', 'No Sight Attachment', 'No Magzine', '', '', '', '', '', '', '', 0),
(44, 'MK47 - Mutant', 'mk47.png', '', 'mk47', 'ar', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(45, 'G36C', 'g36c.png', '', 'g36c', 'ar', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(512) NOT NULL,
  `description` varchar(255) NOT NULL,
  `btn_order` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `title`, `image`, `url`, `description`, `btn_order`) VALUES
(1, 'Erangel', 'erangel.png', '#', '', 1),
(2, 'Miramar', 'miramar.png', '#', '', 2),
(3, 'Sanhok', 'sanhok.png', '#', '', 3),
(4, 'Vikendi', 'vikendi.png', '#', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_menu`
--

CREATE TABLE `navigation_menu` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `btn_order` int(3) NOT NULL,
  `link` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `p_id` int(3) NOT NULL COMMENT 'page id to show this in  which page'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation_menu`
--

INSERT INTO `navigation_menu` (`id`, `name`, `btn_order`, `link`, `description`, `p_id`) VALUES
(3, 'Blog', 6, 'blog', '', 0),
(2, 'Game Lobby', 2, '#', 'Learn More About Lobby Options', 0),
(7, 'New Season', 3, 'season.php', 'Know More About Season 6', 0),
(8, 'Weapon Skins', 1, 'skins.php', 'View All Skins of PUBG Mobile 0.12.5', 0),
(6, 'Notifications', 5, 'notifications.php', '', 0),
(9, 'Tournaments', 4, 'tournament', 'Join our online PUBG Mobile Toornaments and Win Mo...', 0),
(10, 'My Account', 2, 'login.php', 'Access all your account details and make changes to your profile.', 9),
(12, 'Upcoming Matches', 1, '?n=all', 'New tournaments for joining.', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(3) NOT NULL,
  `value` varchar(255) NOT NULL,
  `list_order` int(3) NOT NULL,
  `link` int(1) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `value`, `list_order`, `link`, `url`) VALUES
(19, 'Purchase Season 6 Elite Pass In 600 UC', 1, 1, '7250&title=Purchase-Season-6-Elite-Pass-With-600-UC'),
(20, 'PUBG Mobile has released A new Zombie Mode (Darkest Night)', 2, 0, ''),
(21, 'PUBG Mobile Has Released 0.12.0 Version. Update it from Playstore', 3, 2, 'https://play.google.com/store/apps/details?id=com.tencent.ig&hl=en_IN'),
(22, 'New Vikendi Map Update In PUBG Mobile in version 0.11.0', 4, 1, '1000&title=New-Vikendi-Map-Update-In-PUBG-Mobile-Global');

-- --------------------------------------------------------

--
-- Table structure for table `other-assets`
--

CREATE TABLE `other-assets` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL,
  `url` varchar(200) NOT NULL,
  `btn_order` int(3) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other-assets`
--

INSERT INTO `other-assets` (`id`, `title`, `image`, `url`, `btn_order`, `description`) VALUES
(1, 'Bullets', 'bullets.png', 'bullet', 1, ''),
(2, 'Foregrips', 'foregrip.png', 'foregrip', 2, ''),
(3, 'Health', 'health.png', 'health', 3, ''),
(4, 'Magzines', 'magzine.png', 'magzine', 4, ''),
(5, 'Muzzle', 'muzzle.png', 'muzzle', 5, ''),
(6, 'Stock', 'stock.png', 'stock', 6, ''),
(7, 'Fuel', 'fuel.png', 'vehicle', 7, ''),
(8, 'Sight', 'sight.png', 'sight', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(3) NOT NULL,
  `post_id` int(4) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_desc` text NOT NULL,
  `post_image` varchar(30) NOT NULL,
  `post_date` varchar(40) NOT NULL,
  `author` varchar(100) NOT NULL,
  `post_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_id`, `post_title`, `post_desc`, `post_image`, `post_date`, `author`, `post_data`) VALUES
(1, 1000, 'New Vikendi Map Update In PUBG Mobile Global', 'PlayerUnknown\'s Battleground Mobile will get the new snow map \"Vikendi\" in upcoming PUBG update 0.10. The update is scheduled to arrive globally on December 22, while those who can\'t wait for that date can play the map right now in the beta version of PlayerUnknown\'s Battleground Mobile.', '2453.png', '04-04-2019', 'Shanu Raj', '<span style=\"font-size: 20px;\">PUBG\' Mobile Vikendi snow map is now finally playable on Android, iOS. Notably, this is PUBG Mobile\'s fourth map addition, following Miramar, Erangel, and Sanhok. To recall, support for the Vikendi snow map in PUBG Mobile was added with the PUBG Mobile 0.10.0 update. 24 hours ago, the PUBG Mobile Vikendi Snow Map download was made available. The PUBG Mobile Vikendi Snow Map download size is 134.2MB on Android and iOS. Right now, Vikendi is available for all PUBG Mobile users. Although at the time of filing this story, it appears that the PUBG Mobile Vikendi snow map is still in beta despite being available for matchmaking. Before you can get the Vikendi map though, you\'ll need to download the PUBG Mobile 0.10.0 update if you haven\'t already and that has a 2.1GB download size.</span>\n\n<hr />\n\n&nbsp;\n<h2><span style=\"color: #ff0000;\">PUBG Mobile Vikendi snow map features</span></h2>\n<span style=\"font-size: 20px;\">Compared to PUBG Mobile\'s other maps, Vikendi is 6x6 km. This makes it smaller than Erangel and Miramar, both of which are 8x8 km. Though it is larger than Sanhok which is 4x4 km. The Vikendi snow map features icy terrain complete with mountains, open fields, and frozen lakes. There\'s even a dino park, a castle, , and a giant cosmodrome complete with a rocket and a command centre along with satellites and towers peppering the landscape. Furthermore, the map sports some unique elements. These include an exclusive vehicle, snowmobiles and players can partake in snowball fights on the spawn island before getting into a game.</span>\n<br><br>\n<span style=\"font-size: 20px;\">Aside from adding support for the new map, the PUBG Mobile 0.10.0 update brings some interesting features such as the Firearms Finish Upgrade System. This lets players get new cosmetic items such as kill effects and death crate appearances. The arrival of Vikendi in PUBG Mobile makes it the second platform to receive the map after PUBG PC developer PUBG Corp announced it was hitting Steam on December 19.</span>\n\n<hr />\n\n<div class=\"post_image_display_block\"><img class=\"post_image_responsive\" src=\"images/post_data_images/1000-01.jpg\" /></div>\n\n<h2><span style=\"color: #ff0000;\">PUBG Mobile Vikendi snow map update notes</span></h2>\n<ul>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Vikendi: a 6x6 km snow map.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Added a Snow theme to the main menu.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Added Arabic language support.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Added cross-server matchmaking.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Players may now report suspicious behavior while spectating after dying.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Added Firearms Finish Upgrade System.</span></li>\n 	<li class=\"post_li\"><span style=\"font-size: 20px;\">Added Season spending rewards.</span></li>\n</ul>\n&nbsp;'),
(2, 7250, 'Purchase Season 6 Elite Pass With 600 UC', 'Purchase Season Elite and get 600 UC back and use that UC to purchase Season 7 Elite. Purchse Elite and get Free Gun Skins, Free Room Cards, Free Emotes, etc...', '7250.png', '05-04-2019', 'Shanu Raj', '<span style=\"font-size: 20px;\"><strong>PlayerUnknown\'s Battlegrounds</strong> or <strong>PUBG</strong> has become one of the most popular games of the decade. Inspired by the Japanese film Battle Royale, PUBG is an online multiplayer battle game loved by millions of gamers all around the world.  The game has already won nine awards and growing very strongly with more than 30 million daily active users. As per the recent update, PUBG Mobile Season 6 is expected to be released on March 20. The new season will bring new guns, vehicle and a lot of excitement.</span>\n<br /><br />\n<span style=\"font-size:20px\";>Talking about the fifth season of this popular game, it\'s started on January 21 and about to end on March 19. The season is quite successful but now players don\'t have enough time to get obtain royal pass missions if they wanted to be geared up for the upcoming complimentary UC credits.</span>\n<div class=\"post_image_display_block\">\n<img class=\"post_image_responsive\" src=\"./images/post_data_images/14754.jpg\" />\n</div>\n<span style=\"font-size:20px\";>As the new season is only a few days away, we are getting many leaks and speculations by the popular players and miners. Youtubers such as Mr. Ghost Gaming, SPD Gaming, Hydra beast Gaming etc. released some videos showing an initial look of PUBG Mobile Season 6. We can say season 6 will provide a new experience to many gamers.</span>\n<br><br>\n<span style=\"font-size:20px\";>Some sources even saying that the new update will bring Prime and Prime Plus membership system, which are expected for a long time. The new beta patch also shed some light on the new features such as:</span>\n<ul>\n\n<li class=\"post_li\">Powerful new weapons like the G36C rifle which is seen in the Vikendi map.</li>\n<li class=\"post_li\">New Dynamic Weather has been added to the Map of Miramar and Erangel.</li>\n<li class=\"post_li\">The new version has some area fixed where Zombies are not allowed to enter.</li>\n<li class=\"post_li\">Zombies are going to make a lot of trouble for you. Now, they can enter a weakened state from time to time during the match.</li>\n<li class=\"post_li\">If you are fed up of Jeep and Bus in the map, a new vehicle has been added to the map named Tukshai.</li>\n\n</ul>\n\n<span style=\"font-size:20px\";>As per the reports, these features were observed in the activity tab of the game\'s code. Also, Daily Missions are found on the PUBG 0.11.5 beta version released on Monday. You will also see \"I got supplies\" is now pre-selected in the chat menu. We\'ll also found out about a new PUBG song with season 6 launch.</span>'),
(3, 1452, 'New Zombie Event Mode Is Released v-0.11.0', 'zombie Mode: Survive Till Dawn, a new time-limited event mode when players fight zombies and bosses from Resident Evil 2. ', '1452.png', '05-04-2019', 'Shanu Raj', '');

-- --------------------------------------------------------

--
-- Table structure for table `royal-pass`
--

CREATE TABLE `royal-pass` (
  `id` int(3) NOT NULL,
  `rp_logo` varchar(20) NOT NULL,
  `weeks` varchar(2) NOT NULL,
  `sdate` varchar(20) NOT NULL,
  `edate` varchar(20) NOT NULL,
  `level` varchar(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `etitle` varchar(50) NOT NULL,
  `eimage` varchar(50) NOT NULL,
  `e2title` varchar(50) NOT NULL,
  `e2image` varchar(50) NOT NULL,
  `non_elite_imp` int(1) NOT NULL,
  `elite_imp` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `royal-pass`
--

INSERT INTO `royal-pass` (`id`, `rp_logo`, `weeks`, `sdate`, `edate`, `level`, `title`, `image`, `etitle`, `eimage`, `e2title`, `e2image`, `non_elite_imp`, `elite_imp`) VALUES
(1, 'royalpass.png', '8', 'NULL', '15-May-2019', '', '', '', '', '', '', '', 0, 0),
(2, '', '', '', '', '1', 'Crate Coupon Scrap', 'ccs.png', 'Retro Anniversary Set', 'retro.png', 'White & Purple - SCAR-L', 'wnpscar.png', 0, 1),
(3, '', '', '', '', '2', '', '', 'Point Card: 500 (Season 7)', 'rp500.png', 'Season Portable Closet', 'seasonportcloset.png', 0, 0),
(4, '', '', '', '', '3', '2x BP Card: 1-Hour', 'bpcard.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(5, '', '', '', '', '4', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(6, '', '', '', '', '5', 'Classic Coupon Scrap', 'classiccs.png', 'Royal Pass Avatar Frame (Season 6)', 'avatar-frame.png', '', '', 0, 0),
(7, '', '', '', '', '6', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', 'BP (1000)', 'bp.png', '', '', 0, 0),
(8, '', '', '', '', '7', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(9, '', '', '', '', '8', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(10, '', '', '', '', '9', 'Silver (5)', 'silver.png', '2x EXP Card: 1-Hour', 'exp.png', '', '', 0, 0),
(11, '', '', '', '', '10', 'Aviator Sunglasses', 'Aviator_Sunglasses.png', 'Soaring Eagle - Pan', 'eagle-pan.png', '', '', 0, 0),
(12, '', '', '', '', '11', 'Crate Coupon Scrap', 'ccs.png', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(13, '', '', '', '', '12', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(14, '', '', '', '', '13', '2x EXP Card: 1-Hour', 'exp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(15, '', '', '', '', '14', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(16, '', '', '', '', '15', 'Classic Coupon Scrap', 'classiccs.png', 'Swayin\' Away', 'swayin.png', '', '', 0, 1),
(17, '', '', '', '', '16', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', 'BP (1000)', 'bp.png', '', '', 0, 0),
(18, '', '', '', '', '17', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(19, '', '', '', '', '18', '', '', '2x BP Card: 1-Hour', 'bpcard.png', '', '', 0, 0),
(20, '', '', '', '', '19', 'Silver (5)', 'silver.png', 'Silver (10)', 'silver.png', '', '', 0, 0),
(21, '', '', '', '', '20', 'Brawler\'s Shoes (Grey)', 'braw-shoe.png', 'Soaring Eagle Dacia', 'soaring-car.png', '', '', 0, 1),
(22, '', '', '', '', '21', 'Crate Coupon Scrap', 'ccs.png', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(23, '', '', '', '', '22', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(24, '', '', '', '', '23', '2x BP Card: 1-Hour', 'bpcard.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(25, '', '', '', '', '24', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(26, '', '', '', '', '25', 'Classic Coupon Scrap', 'classiccs.png', 'Royal Pass Avatar (Season 6)', 'avatar-s6.png', '', '', 0, 0),
(27, '', '', '', '', '26', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', 'BP (1000)', 'bp.png', '', '', 0, 0),
(28, '', '', '', '', '27', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(29, '', '', '', '', '28', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(30, '', '', '', '', '29', 'Silver (5)', 'silver.png', '2x EXP Card: 1-Hour', 'exp.png', '', '', 0, 0),
(31, '', '', '', '', '30', 'Brawler\'s Pants (Grey)', 'braw-pant.png', 'Elite Soldiew Set', 'soldier-set.png', '', '', 0, 1),
(32, '', '', '', '', '31', 'Crate Coupon Scrap', 'ccs.png', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(33, '', '', '', '', '32', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(34, '', '', '', '', '33', '2x EXP Card: 1-Hour', 'exp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(35, '', '', '', '', '34', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(36, '', '', '', '', '35', 'Classic Coupon Scrap', 'classiccs.png', 'Elite Soldier Hat', 'elite-soldier-hat.png', '', '', 0, 0),
(37, '', '', '', '', '36', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', 'BP (1000)', 'bp.png', '', '', 0, 0),
(38, '', '', '', '', '37', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(39, '', '', '', '', '38', '', '', '2x BP Card: 1-Hour', 'bpcard.png', '', '', 0, 0),
(40, '', '', '', '', '39', 'Silver (5)', 'silver.png', 'Silver (10)', 'silver.png', '', '', 0, 0),
(41, '', '', '', '', '40', 'Breakdown', 'breakdown.png', 'Soaring Eagle Parachute', 'soldier-parachute.png', '', '', 1, 1),
(42, '', '', '', '', '41', 'Crate Coupon Scrap', 'ccs.png', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(43, '', '', '', '', '42', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(44, '', '', '', '', '43', '2x BP Card: 1-Hour', 'bpcard.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(45, '', '', '', '', '44', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(46, '', '', '', '', '45', 'Classic Coupon Scrap', 'classiccs.png', 'Tycoon Set', 'tycoon.png', '', '', 0, 1),
(47, '', '', '', '', '46', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(48, '', '', '', '', '47', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(49, '', '', '', '', '48', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(50, '', '', '', '', '49', 'Silver (5)', 'silver.png', '2x EXP Card: 1-Hour', 'exp.png', '', '', 0, 0),
(51, '', '', '', '', '50', 'Brawler\'s Shirt (Grey)', '', 'Seagull Finish', 'seagull.png', '', '', 0, 1),
(52, '', '', '', '', '51', 'Crate Coupon Scrap', 'ccs.png', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(53, '', '', '', '', '52', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(54, '', '', '', '', '53', '2x EXP Card: 1-Hour', 'exp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(55, '', '', '', '', '54', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(56, '', '', '', '', '55', 'Classic Coupon Scrap', 'classiccs.png', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(57, '', '', '', '', '56', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(58, '', '', '', '', '57', 'BP (500)', 'bp.png', 'UC (30)', 'uc.png', '', '', 0, 0),
(59, '', '', '', '', '58', '', '', '2x BP Card: 1-Hour', 'bpcard.png', '', '', 0, 0),
(60, '', '', '', '', '59', 'Silver (5)', 'silver.png', 'Silver (10)', 'silver.png', '', '', 0, 0),
(61, '', '', '', '', '60', 'Desert Camo - AWM', 'desert-camo-awm.png', 'Brilliant Anniversary Backpack', 'brilliant.png', '', '', 1, 1),
(62, '', '', '', '', '61', '', '', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(63, '', '', '', '', '62', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(64, '', '', '', '', '63', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(65, '', '', '', '', '64', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(66, '', '', '', '', '65', '', '', 'Anniversary Avatar (Season 6)', 'anniversary-avatar.png', '', '', 0, 0),
(67, '', '', '', '', '66', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(68, '', '', '', '', '67', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(69, '', '', '', '', '68', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(70, '', '', '', '', '69', '', '', '2x EXP Card: 1-Hour', 'exp.png', '', '', 0, 0),
(71, '', '', '', '', '70', '', '', 'L&Q Chicken - M762', 'l&q-chicken.png', '', '', 0, 1),
(72, '', '', '', '', '71', '', '', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(73, '', '', '', '', '72', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(74, '', '', '', '', '73', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(75, '', '', '', '', '74', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(76, '', '', '', '', '75', '', '', 'Soaring Eagle Helmet', 'soaring-helemt.png', '', '', 0, 1),
(77, '', '', '', '', '76', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(78, '', '', '', '', '77', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(79, '', '', '', '', '78', '', '', '2x BP Card: 1-Hour', 'bpcard.png', '', '', 0, 0),
(80, '', '', '', '', '79', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(81, '', '', '', '', '80', '', '', 'Lucky Rabbit Set', 'rabbit-set.png', '', '', 0, 1),
(82, '', '', '', '', '81', '', '', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(83, '', '', '', '', '82', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(84, '', '', '', '', '83', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(85, '', '', '', '', '84', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(86, '', '', '', '', '85', '', '', 'Wedding Crasher', 'wedding-crasher.png', '', '', 0, 1),
(87, '', '', '', '', '86', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(88, '', '', '', '', '87', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(89, '', '', '', '', '88', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(90, '', '', '', '', '89', '', '', '2x EXP Card: 1-Hour', 'exp.png', '', '', 0, 0),
(91, '', '', '', '', '90', '', '', 'Brilliant Anniversary Headgear', 'brilliant-headgear.png', '', '', 0, 1),
(92, '', '', '', '', '91', '', '', 'Royal Pass Mission Card (Season 6)', 'rpmissioncard.png', '', '', 0, 0),
(93, '', '', '', '', '92', '', '', 'Anniversary Collector\'s Crate', 'anniversary-crate.png', '', '', 0, 0),
(94, '', '', '', '', '93', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(95, '', '', '', '', '94', '', '', 'Classic Coupon Scrap', 'classiccs.png', '', '', 0, 0),
(96, '', '', '', '', '95', '', '', 'Room Card: 7-Day', '7d-room.png', '', '', 0, 1),
(97, '', '', '', '', '96', '', '', 'BP (1000)', 'bp.png', '', '', 0, 0),
(98, '', '', '', '', '97', '', '', 'UC (30)', 'uc.png', '', '', 0, 0),
(99, '', '', '', '', '98', '', '', '2x BP Card: 1-Hour', 'bpcard.png', '', '', 0, 0),
(100, '', '', '', '', '99', '', '', 'Silver (10)', 'silver.png', '', '', 0, 0),
(101, '', '', '', '', '100', '', '', 'Brilliant Anniversary Set', 'brilliant-set.png', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'site_url', 'http://127.7.2.5'),
(2, 'site_title', 'PUBG World');

-- --------------------------------------------------------

--
-- Table structure for table `skins`
--

CREATE TABLE `skins` (
  `id` int(11) NOT NULL COMMENT 'Default Id',
  `item_for` varchar(50) NOT NULL COMMENT 'for which item',
  `item_name` varchar(100) NOT NULL COMMENT 'skin name',
  `image` varchar(100) NOT NULL COMMENT 'skin image path or image name'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skins`
--

INSERT INTO `skins` (`id`, `item_for`, `item_name`, `image`) VALUES
(1, 'akm', 'Roaring Grizzly - AKM', 'roaring_grizzly-akm.png'),
(2, 'akm', 'Neon Destroyer - AKM', 'neon_destroyer-akm.png'),
(3, 'akm', 'Witherer - AKM', 'witherer-akm.png'),
(4, 'akm', 'Rugged (Orange) - AKM', 'rugged_orange-akm.png'),
(5, 'akm', 'Golden Sand - AKM', 'golden_sand-akm.png'),
(6, 'akm', 'Rock Star - AKM', 'rock_star-akm.png'),
(7, 'akm', 'Yellow Stripes - AKM', 'yellow_stripes-akm.png'),
(8, 'akm', 'Blood Dath - AKM', 'blood_dath-akm.png'),
(9, 'akm', 'Wood & Gold - AKM', 'wood_n_gold-akm.png'),
(10, 'akm', 'Hellfire - AKM', 'hellfire-akm.png'),
(11, 'm16a4', 'Sci-fi - M16A4', 'sci_fi-m16a4.png'),
(12, 'm16a4', 'Galaxy - M16A4', 'galaxy-m16a4.png'),
(13, 'm16a4', 'Yellow Stripes - M16A4', 'yellow_stripes-m16a4.png'),
(14, 'm16a4', 'Rugged (Beige) - M16A4', 'rugged_beige-m16a4.png'),
(15, 'm16a4', 'Lightning - M16A4', 'lightning-m16a4.png'),
(16, 'm16a4', 'Neon Destroyer - M16A4', 'neon_destroyer-m16a4.png'),
(17, 'm16a4', 'Golden Sand - M16A4', 'golden_sand-m16a4.png'),
(18, 'm16a4', 'Greenleaf - M16A4', 'greenleaf-m16a4.png'),
(19, 'm16a4', 'Regal - M16A4', 'regal-m16a4.png'),
(20, 'scar-l', 'Tidal Wave - SCAR-L', 'tidal_wave-scar-l.png'),
(21, 'scar-l', 'Sandstorm - SCAR-L', 'sandstorm-scar-l.png'),
(22, 'scar-l', 'Bowknot - SCAR-L', 'bowknot-scar-l.png'),
(23, 'scar-l', 'Extreme Racing - SCAR-L', 'extreme_racing-scar-l.png'),
(24, 'scar-l', 'Blue Dimension - SCAR-L', 'blue_dimension-scar-l.png'),
(25, 'scar-l', 'Tidal Surge - SCAR-L', 'tidal_surge-scar-l.png'),
(26, 'scar-l', 'Gold Plated - SCAR-L', 'gold_plated-scar-l.png'),
(27, 'scar-l', 'Rugged (Orange) - SCAR-L', 'rugged_orange-scar-l.png'),
(28, 'scar-l', 'Swordsman - SCAR-L', 'swordsman-scar-l.png'),
(29, 'scar-l', 'Hot Pizza - SCAR-L', 'hot_pizza-scar-l.png'),
(30, 'scar-l', 'Yellow Stripes - SCAR-L', 'yellow_stripes-scar-l.png'),
(31, 'scar-l', 'Desert Camo - SCAR-L', 'desert_camo-scar-l.png'),
(32, 'scar-l', 'Blood Dath - SCAR-L', 'blood_dath-scar-l.png'),
(33, 'scar-l', 'Glorious Gold - SCAR-L', 'glorious_gold-scar-l.png'),
(34, 'scar-l', 'Terror - SCAR-L', 'terror-scar-l.png'),
(35, 'scar-l', 'Sand Dune - SCAR-L', 'sand_dune-scar-l.png'),
(36, 'scar-l', 'Lightning - SCAR-L', 'lightning-scar-l.png'),
(37, 'm416', 'Golden Trigger - M416', 'golden_trigger-m416.png'),
(38, 'm416', 'Time Traveler - M416', 'time_traveler-m416.png'),
(39, 'm416', 'Vampire - M416', 'vampire-m416.png'),
(40, 'm416', 'Tidal Surge - M416', 'tidal_surge-m416.png'),
(41, 'm416', 'Yellow Stripes - M416', 'yellow_stripes-m416.png'),
(42, 'm416', 'Viper - M416', 'viper-m416.png'),
(43, 'm416', 'Desert Storm - M416', 'desert_storm-m416.png'),
(44, 'm416', 'Blood Dath - M416', 'blood_dath-m416.png'),
(45, 'm416', 'Stained Soul - M416', 'stained_soul-m416.png'),
(46, 'm416', 'Jungle - M416', 'jungle-m416.png'),
(47, 'm416', 'Skeleton Hand - M416', 'skeleton_hand-m416.png'),
(48, 'm416', 'Neon Punk (Purple) - M416', 'neon_punk_purple-m416.png'),
(49, 'm416', 'Extreme Racing - M416', 'extreme_racing-m416.png'),
(50, 'm416', 'Rugged (Orange) - M416', 'rugged_orange-m416.png'),
(51, 'm416', 'Safari - M416', 'safari-m416.png'),
(52, 'm416', 'Graffiti - M416', 'graffiti-m416.png'),
(53, 'm416', 'Reaper - M416', 'reaper-m416.png'),
(54, 'm416', 'Desert Camo - M416', 'desert_camo-m416.png'),
(55, 'groza', 'The Skull - GROZA', 'the_skull-groza.png'),
(56, 'groza', 'Blue Dimension - GROZA', 'blue_dimension-groza.png'),
(57, 'aug', 'Neon Destroyer - AUG', 'neon_destroyer-aug.png'),
(58, 'aug', 'Witherer - AUG', 'witherer-aug.png'),
(59, 'aug', 'White Rabbit - AUG', 'white_rabbit-aug.png'),
(60, 'aug', 'Circus - AUG', 'circus-aug.png'),
(61, 'aug', 'Rainforest - AUG', 'rainforest-aug.png'),
(62, 'aug', 'Blood Dath - AUG', 'blood_dath-aug.png'),
(63, 'qbz', 'Vampire - QBZ', 'vampire-qbz.png'),
(64, 'qbz', 'Phantom - QBZ', 'phantom-qbz.png'),
(65, 'qbz', 'Raging Chicken - QBZ', 'raging_chicken-qbz.png'),
(66, 'qbz', 'Silver Lion - QBZ', 'silver_lion-qbz.png'),
(67, 'qbz', 'Amethyst - QBZ', 'amethyst-qbz.png'),
(68, 'qbz', 'Bone Carving - QBZ', 'bone_carving-qbz.png'),
(69, 'm762', 'Naughty Christmas - M762', 'naughty_christmas-m762.png'),
(70, 'kar98k', 'Vampire - Kar98K', 'vampire-kar98k.png'),
(71, 'kar98k', 'Rainbow Shot - Kar98K', 'rainbow_shot-kar98k.png'),
(72, 'kar98k', 'Master of the Land - Kar98K', 'master_of_the_land-kar98k.png'),
(73, 'kar98k', 'Time Traveler - Kar98K', 'time_traveler-kar98k.png'),
(74, 'kar98k', 'Rugged (Beige) - Kar98K', 'rugged_beige-kar98k.png'),
(75, 'kar98k', 'Scorching - Kar98K', 'scorching-kar98k.png'),
(76, 'kar98k', 'Yellow Stripes - Kar98K', 'yellow_stripes-kar98k.png'),
(77, 'kar98k', 'Gold Plated - Kar98K', 'gold_plated-kar98k.png'),
(78, 'kar98k', 'Desert Camo - Kar98K', 'desert_camo-kar98k.png'),
(79, 'kar98k', 'Extreme Racing - Kar98K', 'extreme_racing-kar98k.png'),
(80, 'kar98k', 'Blood Dath - Kar98K', 'blood_dath-kar98k.png'),
(81, 'kar98k', 'Sanguine - Kar98K', 'sanguine-kar98k.png'),
(82, 'kar98k', 'Love - Kar98K', 'love-kar98k.png'),
(83, 'kar98k', 'Golden Sand - Kar98K', 'golden_sand-kar98k.png'),
(84, 'kar98k', 'Rock Star - Kar98K', 'rock_star-kar98k.png'),
(85, 'kar98k', 'Rugged (Orange)', 'rugged_orange-kar98k.png'),
(86, 'awm', 'Lightning - AWM', 'lightning-awm.png'),
(87, 'awm', 'Desert Camo - AWM', 'desert_camo-awm.png'),
(88, 'awm', 'Neon - AWM', 'neon-awm.png'),
(89, 'win94', 'Desert Camo - Win94', 'desert_camo-win94.png'),
(91, 'sks', 'Rugged (Beige) - SKS', 'rugged_beige-sks.png'),
(92, 'sks', 'Desert Camo - SKS', 'desert_camo-sks.png'),
(93, 'sks', 'Tsunami - SKS', 'tsunami-sks.png'),
(94, 'sks', 'Skeleton Hand - SKS', 'skeleton_hand-sks.png'),
(95, 'mini14', 'Desert Camo - Mini14', 'desert_camo-mini14.png'),
(96, 'mini14', 'Rock Star - Mini14', 'rock_star-mini14.png'),
(97, 'slr', 'Arctic Guardian - SLR', 'arctic_guardian-slr.png'),
(98, 'qbu', 'Lonewolf - QBU', 'lonewolf-qbu.png'),
(99, 'qbu', 'Blue Spider - QBU', 'blue_spider-qbu.png'),
(100, 'uzi', 'Drifter - UZI', 'drifter-uzi.png'),
(101, 'uzi', 'Neon Pack (Blue) - UZI', 'neon_punk_blue-uzi.png'),
(102, 'uzi', 'Hot Pizza - UZI', 'hot_pizza-uzi.png'),
(103, 'uzi', 'Desert Camo - UZI', 'desert_camo-uzi.png'),
(104, 'ump9', 'Halloween Party - UMP9', 'halloween_party-ump9.png'),
(105, 'ump9', 'Wolfheart - UMP9', 'wolfheart-ump9.png'),
(106, 'ump9', 'Rugged (Beige) - UMP9', 'rugged_beige-ump9.png'),
(107, 'ump9', 'The Skulls - UMP9', 'the_skulls-ump9.png'),
(108, 'ump9', 'Neon Punk (Blue) - UMP9', 'neon_punk_blue-ump9.png'),
(109, 'ump9', 'Rugged (Orange) - UMP9', 'rugged_orange-ump9.png'),
(110, 'ump9', 'Bowknot - UMP9', 'bowknot-ump9.png'),
(111, 'vector', 'White Rabbit - Vector', 'white_rabbit-vector.png'),
(112, 's686', 'Winning Chicken - S686', 'winning_chicken-s686.png'),
(113, 's686', 'Space Traveler - S686', 'space_traveler-s686.png'),
(114, 's686', 'Gold Plated - S686', 'gold_plated-s686.png'),
(115, 's686', 'Rugged (Beige) - S686', 'rugged_beige-s686.png'),
(116, 's1897', 'Winning Chicken - S1897', 'winning_chicken-s1897.png'),
(117, 's1897', 'Space Traveler - S1897', 'space_traveler-s1897.png'),
(118, 's1897', 'Golden Sand - S1897', 'golden_sand-s1897.png'),
(119, 's12k', 'Rugged (Beige) - S12K', 'rugged_beige-s12k.png'),
(120, 's12k', 'Desert Camo - S12K', 'desert_camo-s12k.png'),
(121, 's12k', 'Witherer - S12K', 'witherer-s12k.png'),
(122, 'm249', 'Witherer - M249', 'witherer-m249.png'),
(123, 'm249', 'Circus - M249', 'circus-m249.png'),
(124, 'p92', 'Desert Camo - P92', 'desert_camo-p92.png'),
(125, 'p92', 'Skeleton Hand - P92', 'skeleton_hand-p92.png'),
(126, 'p92', 'Circus - P92', 'circus-p92.png'),
(127, 'p1911', 'Lifesaver - P1911', 'lifesaver-p1911.png'),
(128, 'p18c', 'Desert Camo - P18C', 'desert_camo-p18c.png'),
(129, 'p18c', 'White Rabbit - P18C', 'white_rabbit-p18c.png'),
(130, 'r45', 'Desert Camo - R45', 'desert_camo-r45.png'),
(131, 'r45', 'Winning Chicken - R45', 'winning_chicken-r45.png'),
(132, 'sawed_off', 'Desert Camo - Sawed-off Shotgun', 'desert_camo-sawed-off-shotgun.png'),
(133, 'crowbar', 'Hockey Stick - Crowbar', 'hockey_stick-crowbar.png'),
(134, 'crowbar', 'Golden Scepter - Crowbar', 'golden_scepter-crowbar.png'),
(135, 'sickle', 'Touch of Death - Sickle', 'touch_of_death-sickle.png'),
(136, 'pan', 'Hot Pizza - Pan', 'hot_pizza-pan.png'),
(137, 'pan', 'Survivor - Pan', 'survivor-pan.png'),
(138, 'pan', 'No Hunting - Pan', 'no_hunting-pan.png'),
(139, 'pan', 'Tomato - Pan', 'tomato-pan.png'),
(140, 'pan', 'Speed Demon - Pan', 'speed_demon-pan.png'),
(141, 'pan', 'Olive Branch - Pan', 'olive_branch-pan.png'),
(142, 'pan', 'Target Practice - Pan', 'target_practice-pan.png'),
(143, 'pan', 'Sunglass Chicken - Pan', 'sunglass_chicken-pan.png'),
(144, 'pan', 'Skulls - Pan', 'skulls-pan.png'),
(145, 'pan', 'Player (Male) - Pan', 'player_male-pan.png'),
(146, 'pan', 'BAPE - Pan', 'bape-pan.png'),
(147, 'pan', 'Haloween Fever - Pan', 'halloween_fever-pan.png'),
(148, 'pan', 'Cuddly Chicken - Pan', 'cuddly_chicken-pan.png'),
(149, 'pan', 'Roaring Grizzly - Pan', 'roaring_grizzly-pan.png'),
(150, 'pan', 'Glacier - Pan', 'glacier-pan.png'),
(151, 'pan', 'Wintertime - Pan', 'wintertime-pan.png'),
(152, 'pan', 'Time Traveler - Pan', 'time_traveler-pan.png'),
(153, 'pan', 'Two Eggs - Pan', 'two_eggs-pan.png'),
(154, 'pan', 'Winning Chicken - Pan', 'winning_chicken-pan.png'),
(155, 'crossbow', 'Rugged (Beige) - Crossbow', 'rugged_beige-crowbar.png');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Tournament Name',
  `mode` int(1) NOT NULL COMMENT '1=Classic 2=Arcade',
  `map` int(1) NOT NULL COMMENT '1=Erangel 2=Miramar 3=Sanhok 4=Vikendi',
  `time` varchar(10) NOT NULL COMMENT 'Match Time',
  `date` varchar(10) NOT NULL COMMENT 'Tournament Date',
  `view` varchar(5) NOT NULL COMMENT '1=TPP 2=FPP',
  `server` varchar(30) NOT NULL COMMENT 'Server (Asia, Europe etc...)',
  `type` varchar(20) NOT NULL COMMENT '1=Solo 2=Duo 3=Squad',
  `max_player` int(5) NOT NULL COMMENT 'Number of max players in tournament',
  `emulator` int(1) NOT NULL COMMENT '0=Not Allowed 1=Allowed',
  `reg_fee` int(10) NOT NULL COMMENT 'registration fee per member',
  `enabled` int(1) NOT NULL COMMENT '0=Disabled 1=Enabled'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `name`, `mode`, `map`, `time`, `date`, `view`, `server`, `type`, `max_player`, `emulator`, `reg_fee`, `enabled`) VALUES
(1, 'PUBG Mobile  Big War', 1, 1, '11:20 PM', '01-06-2019', '1', 'Asia', '3', 100, 0, 20, 1),
(2, 'PUBG Mobile Battle', 1, 2, '09:21 PM', '02-06-2019', '1', 'Asia', '3', 100, 0, 40, 1),
(3, 'Win Royale Pass', 2, 1, '10:00 AM', '10-08-2019', '2', 'North America', '1', 40, 0, 0, 0),
(4, '100 Entry Fee', 2, 1, '08:00 PM', '05-12-2019', '2', 'Europe', '2', 40, 0, 60, 0),
(5, '1000 Win INR', 1, 3, '09:45 PM', '05-12-2019', '1', 'Middle East', '1', 100, 0, 0, 0),
(6, 'Test Name 1', 1, 1, '08:00 PM', '05-05-2019', '1', 'Asia', '2', 100, 1, 40, 0),
(7, 'Test Name 2', 1, 1, '11:05 PM', '06-05-2019', '1', 'Asia', '3', 100, 0, 0, 0),
(8, 'Test Name 3', 1, 1, '11:20 PM', '02-06-2019', '1', 'Asia', '1', 100, 0, 25, 1),
(9, 'Test Name 4', 1, 1, '09:45 PM', '10-08-2019', '1', 'Middle East', '2', 100, 0, 15, 1),
(10, 'Test Name 5', 2, 1, '11:20 PM', '05-12-2019', '1', 'Asia', '1', 100, 0, 12, 1),
(11, 'Test Name 6', 1, 1, '11:05 PM', '10-08-2019', '1', 'Asia', '1', 100, 1, 0, 1),
(12, 'Test Name 7', 1, 1, '09:45 PM', '02-06-2019', '1', 'Middle East', '3', 100, 0, 0, 0),
(13, 'Test Name 8', 1, 1, '11:20 PM', '10-08-2019', '1', 'Asia', '3', 100, 1, 0, 1),
(14, 'Test Name 9', 1, 1, '11:05 PM', '05-12-2019', '1', 'Middle East', '3', 100, 1, 0, 0),
(15, 'Test Name 10', 2, 1, '11:20 PM', '10-08-2019', '1', 'Asia', '3', 100, 0, 0, 1),
(16, 'Test Name 11', 1, 1, '11:05 PM', '02-06-2019', '1', 'Asia', '3', 100, 1, 0, 0),
(17, 'Test Name 12', 1, 1, '09:45 PM', '10-08-2019', '1', 'Middle East', '3', 100, 1, 0, 1),
(18, 'Test Name 13', 1, 1, '11:20 PM', '05-12-2019', '1', 'Asia', '3', 100, 1, 0, 1),
(19, 'Test Name 14', 1, 1, '09:45 PM', '10-08-2019', '1', 'Asia', '3', 100, 1, 0, 1),
(20, 'Test Name 15', 2, 1, '11:05 PM', '02-06-2019', '1', 'Middle East', '3', 100, 1, 0, 0),
(21, 'Test Name 16', 1, 1, '09:45 PM', '10-08-2019', '1', 'Asia', '3', 100, 1, 0, 1),
(22, 'Test Name 17', 1, 1, '11:20 PM', '05-12-2019', '1', 'Asia', '3', 100, 1, 0, 1),
(23, 'Test Name 18', 1, 1, '09:45 PM', '10-08-2019', '1', 'Middle East', '2', 100, 1, 0, 0),
(24, 'Test Name 19', 1, 1, '11:05 PM', '02-06-2019', '1', 'Asia', '2', 100, 1, 0, 1),
(25, 'Test Name 20', 1, 1, '11:05 PM', '10-08-2019', '1', 'Middle East', '1', 100, 1, 0, 0),
(26, 'Test Name 21', 2, 1, '11:20 PM', '02-06-2019', '1', 'Asia', '2', 100, 1, 0, 1),
(27, 'Test Name 22', 1, 1, '11:05 PM', '10-08-2019', '1', 'Middle East', '1', 100, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_result`
--

CREATE TABLE `tournament_result` (
  `id` int(4) NOT NULL,
  `match_id` int(4) NOT NULL COMMENT 'Match id is loaded from tournament table',
  `first` varchar(100) NOT NULL COMMENT 'winner',
  `second` varchar(100) NOT NULL COMMENT '2nd winner',
  `third` varchar(100) NOT NULL COMMENT '3rd winner',
  `fourth` varchar(100) NOT NULL COMMENT '4th winner',
  `fifth` varchar(100) NOT NULL COMMENT '5th winner'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_result`
--

INSERT INTO `tournament_result` (`id`, `match_id`, `first`, `second`, `third`, `fourth`, `fifth`) VALUES
(1, 6, 'Shanu Raj', 'Pratik Thakur', 'Nitin Nain', 'Manan Aggarwal', 'Lalit'),
(2, 7, 'Shanu Raj', 'Lalit', 'Manan Aggarwal', 'Pratik Thakur', 'Nitin Nain'),
(3, 3, 'Nitin', 'Lalit', 'Shanu', 'Pratik', 'Manan'),
(4, 4, 'Manan', 'Lalit', 'Nitin', 'Pratik', 'Shanu'),
(5, 5, 'Pratik', 'Nitin', 'Shanu', 'Lalit', 'Manan'),
(6, 12, '', '', '', '', ''),
(7, 14, '', '', '', '', ''),
(8, 16, '', '', '', '', ''),
(9, 20, '', '', '', '', ''),
(10, 23, '', '', '', '', ''),
(11, 25, '', '', '', '', ''),
(12, 27, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `u_id` bigint(15) NOT NULL COMMENT 'Unique Userid on this website',
  `fname` varchar(20) NOT NULL COMMENT 'User First Name',
  `lname` varchar(20) NOT NULL COMMENT 'User Last Name',
  `username` varchar(30) NOT NULL COMMENT 'Username on this website',
  `password` varchar(32) NOT NULL COMMENT 'user password',
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `c_id` bigint(16) NOT NULL COMMENT 'game character id',
  `u_name` varchar(50) NOT NULL COMMENT 'game username',
  `gender` int(1) NOT NULL COMMENT 'user gender',
  `age` int(2) NOT NULL COMMENT 'user age',
  `state` varchar(80) NOT NULL COMMENT 'user state'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_id`, `fname`, `lname`, `username`, `password`, `email`, `mobile`, `c_id`, `u_name`, `gender`, `age`, `state`) VALUES
(1, 7426807250, 'Shanu', 'Raj', 'shanuraj715', '9877936035', 'shanuraj715@gmail.com', '8271890685', 50125845, 'NooB:)SR7151', 1, 22, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `id` int(4) NOT NULL,
  `u_id` varchar(16) NOT NULL COMMENT 'user_id',
  `c_id` varchar(16) NOT NULL COMMENT 'character_id',
  `m_id` varchar(4) NOT NULL COMMENT 'match_id',
  `rank` int(4) NOT NULL COMMENT 'rank or position in match',
  `mode` int(1) NOT NULL COMMENT '1=solo 2=duo 3=squad',
  `kills` int(4) NOT NULL COMMENT 'total kills',
  `tot_earning` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_result`
--

INSERT INTO `user_result` (`id`, `u_id`, `c_id`, `m_id`, `rank`, `mode`, `kills`, `tot_earning`) VALUES
(1, '7426807250', '50125845', '1', 1, 1, 5, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all-assets`
--
ALTER TABLE `all-assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_feedback`
--
ALTER TABLE `error_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gun-category`
--
ALTER TABLE `gun-category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guns`
--
ALTER TABLE `guns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other-assets`
--
ALTER TABLE `other-assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `royal-pass`
--
ALTER TABLE `royal-pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skins`
--
ALTER TABLE `skins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament_result`
--
ALTER TABLE `tournament_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `all-assets`
--
ALTER TABLE `all-assets`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `error_feedback`
--
ALTER TABLE `error_feedback`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gun-category`
--
ALTER TABLE `gun-category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guns`
--
ALTER TABLE `guns`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `navigation_menu`
--
ALTER TABLE `navigation_menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `other-assets`
--
ALTER TABLE `other-assets`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `royal-pass`
--
ALTER TABLE `royal-pass`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skins`
--
ALTER TABLE `skins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Default Id', AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tournament_result`
--
ALTER TABLE `tournament_result`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
