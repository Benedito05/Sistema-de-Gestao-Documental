-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2021 às 09:23
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sig_doc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id`, `name`) VALUES
(1, 'GABTIC'),
(2, 'RH'),
(3, 'DSV'),
(4, 'DSG'),
(5, 'QSSA'),
(6, 'DMI'),
(7, 'MARKETING '),
(8, 'COMERCIAL'),
(9, 'CONTABILIDADE E FINANÇAS'),
(10, 'DEPU'),
(11, 'GABACA'),
(12, 'DRS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `id` int(11) NOT NULL,
  `document` varchar(45) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `document_upload` varchar(45) DEFAULT NULL,
  `send_date` timestamp NULL DEFAULT current_timestamp(),
  `receiving date` timestamp NULL DEFAULT current_timestamp(),
  `delivery date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `name`) VALUES
(1, 'PCA'),
(2, 'DIRECTOR'),
(3, 'CHEFE DE DEPARTAMENTO'),
(4, 'ASSISTENTE PRINCIPAL'),
(5, 'TÉCNICO ADMINISTRATIVO'),
(6, 'TÉCNICO'),
(7, 'ASSISTENTE'),
(8, 'ADMINISTRADOR(a)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `level` enum('PCA','DIRECTOR EXECUTIVO','DIRECTOR DE GABINETE','CHEFE DE DEPARTAMENTO','CHEFE DE AREA',' OUTRO') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `first_name`, `last_name`, `genre`, `email`, `level`, `created_at`, `updated_at`) VALUES
(3, 'Gilberto', 'Antonio', 'M', 'Gilberto.Antonio@zee.co.ao', 'CHEFE DE AREA', '2020-11-16 02:27:38', NULL),
(4, 'Humberto ', 'Azevedo', 'M', 'Humberto.Azevedo@zee.co.ao', 'CHEFE DE AREA', '2020-11-16 02:28:56', NULL),
(5, 'Kerson ', 'Santos', 'M', 'Kerson.Santos@zee.co.ao', '', '2020-11-16 02:31:43', NULL),
(6, 'António', 'Reis', 'M', 'Antonio.Reis@zee.co.ao', 'CHEFE DE AREA', '2020-11-16 02:32:21', NULL),
(7, 'Alváro', 'Santos', 'M', 'Alvaro.Santos@zee.co.ao', '', '2020-11-16 02:33:04', NULL),
(8, 'Adão ', 'Catumbila', 'M', 'adao.catumbila@zee.co.ao', 'CHEFE DE AREA', '2020-11-16 02:33:37', NULL),
(9, 'José ', 'Amtónio', 'M', 'jose.antonio@zee.co.ao', '', '2020-11-16 11:32:25', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `document_upload` varchar(255) NOT NULL,
  `title` varchar(45) NOT NULL,
  `status` int(20) NOT NULL,
  `id_usuario_recebido` int(11) NOT NULL,
  `id_usuario_enviado` int(11) NOT NULL,
  `date_send` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_funcao` int(10) NOT NULL,
  `Nivel_Acesso` enum('Administrador','Utilizador') NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `first_name`, `last_name`, `genre`, `email`, `password`, `id_funcao`, `Nivel_Acesso`, `id_departamento`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Benedito', 'Calundungo', '', 'rosariobdrc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 6, 'Administrador', 1, '131634114939.jpg', '2020-11-17 02:56:31', '2021-10-13 13:33:47');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_funcao` (`id_funcao`),
  ADD KEY `id_funcao_2` (`id_funcao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcao`
--
ALTER TABLE `funcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
