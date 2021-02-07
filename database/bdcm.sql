-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jul-2018 às 23:24
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblconsultas`
--

CREATE TABLE `tblconsultas` (
  `idcon` int(11) NOT NULL,
  `paciente` varchar(30) NOT NULL,
  `dtcon` date NOT NULL,
  `hora` varchar(5) NOT NULL,
  `especial` varchar(20) NOT NULL,
  `forma` varchar(4) NOT NULL,
  `valor` float NOT NULL,
  `unidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblconsultas`
--

INSERT INTO `tblconsultas` (`idcon`, `paciente`, `dtcon`, `hora`, `especial`, `forma`, `valor`, `unidade`) VALUES
(1, 'Juliana', '2018-06-25', '15:00', '', '', 0, ''),
(2, '', '0000-00-00', '', '', '', 0, ''),
(3, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(4, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(5, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(6, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(7, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(8, 'Juliana', '0000-00-00', '', '', '', 0, ''),
(9, 'Caio', '2018-06-29', '19:00', 'ortopedia', 'part', 0, 'nova iguacu'),
(10, 'Criss', '2018-06-29', '19:30', 'ortopedia', 'part', 0, 'nova iguacu'),
(11, '', '0000-00-00', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblespecialidades`
--

CREATE TABLE `tblespecialidades` (
  `idespecial` int(11) NOT NULL,
  `especial` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblespecialidades`
--

INSERT INTO `tblespecialidades` (`idespecial`, `especial`) VALUES
(1, 'Ortopedia'),
(2, 'Oftalmo'),
(3, ''),
(4, 'Cancerologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmedico`
--

CREATE TABLE `tblmedico` (
  `idmedico` int(11) NOT NULL,
  `medico` varchar(35) NOT NULL,
  `especialidade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblmedico`
--

INSERT INTO `tblmedico` (`idmedico`, `medico`, `especialidade`) VALUES
(1, '', 'Ortopedia'),
(2, '', 'Ginecologista'),
(3, '', 'Oftalmo'),
(4, '', 'Ginecologista'),
(5, '', 'Oftalmo'),
(6, 'Junior', 'Ortopedia'),
(7, '', 'Cancerologia'),
(8, '', 'Cancerologia'),
(9, '', 'Cancerologia'),
(10, '', 'Cancerologia'),
(11, '', '2'),
(12, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblpaciente`
--

CREATE TABLE `tblpaciente` (
  `idpaciente` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telf` varchar(12) NOT NULL,
  `telc` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblpaciente`
--

INSERT INTO `tblpaciente` (`idpaciente`, `cpf`, `nome`, `telf`, `telc`) VALUES
(1, '', 'Juliana', '', ''),
(2, '', 'Caio', '', ''),
(3, '', 'Junior', '', ''),
(4, '', 'Aurora', '', ''),
(5, '12345678910', 'Perola', '219650000000', '219650000000'),
(6, '12345678910', 'Perola', '219650000000', '219650000000'),
(7, '12345678910', '', '', ''),
(8, '12345678910', '', '', ''),
(9, '12345678910', '', '', ''),
(10, '12345678910', '', '', ''),
(11, '12345678910', '', '', ''),
(12, '12345678910', '', '', ''),
(13, '12345678910', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblconsultas`
--
ALTER TABLE `tblconsultas`
  ADD PRIMARY KEY (`idcon`);

--
-- Indexes for table `tblespecialidades`
--
ALTER TABLE `tblespecialidades`
  ADD PRIMARY KEY (`idespecial`);

--
-- Indexes for table `tblmedico`
--
ALTER TABLE `tblmedico`
  ADD PRIMARY KEY (`idmedico`);

--
-- Indexes for table `tblpaciente`
--
ALTER TABLE `tblpaciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblconsultas`
--
ALTER TABLE `tblconsultas`
  MODIFY `idcon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblespecialidades`
--
ALTER TABLE `tblespecialidades`
  MODIFY `idespecial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblmedico`
--
ALTER TABLE `tblmedico`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpaciente`
--
ALTER TABLE `tblpaciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
