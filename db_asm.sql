-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Abr-2017 às 14:52
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacient`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `mae` varchar(75) NOT NULL,
  `nasc` date NOT NULL,
  `sexo` varchar(11) NOT NULL,
  `cpf` varchar(75) NOT NULL,
  `rg` varchar(75) NOT NULL,
  `titulo` varchar(75) NOT NULL,
  `sus` varchar(75) NOT NULL,
  `rua` varchar(75) NOT NULL,
  `quadra` varchar(75) NOT NULL,
  `numero` varchar(75) NOT NULL,
  `bairro` varchar(75) NOT NULL,
  `cep` varchar(75) NOT NULL,
  `telefone` varchar(75) NOT NULL,
  `celular` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `assunto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `mae`, `nasc`, `sexo`, `cpf`, `rg`, `titulo`, `sus`, `rua`, `quadra`, `numero`, `bairro`, `cep`, `telefone`, `celular`, `email`, `assunto`) VALUES
(13, 'Wander Pereira', 'Rosangela Maria Pereira', '2017-04-17', '', '23423', '345938475', '3457', '9876', '876876', '876876', '87687', '867876', '867786', '876876', '876876', '867786', '876788'),
(940, 'Kuiui', '', '2017-02-08', 'Masculino', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(941, 'JosÃ© Manuel', 'Elena', '2017-04-06', 'Masculino', '90898', '809098', '9090890', '980909', '09808', '98098', '098', '908', '90908908', '09', '8098', '08098', '098098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=942;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
