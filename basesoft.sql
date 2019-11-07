-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2019 às 18:29
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `basesoft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovels`
--

CREATE TABLE `imovels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `tipo_imovel` varchar(25) NOT NULL,
  `proprietario` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imovels`
--

INSERT INTO `imovels` (`id`, `endereco`, `bairro`, `municipio`, `estado`, `cep`, `tipo_imovel`, `proprietario`, `created_at`, `updated_at`) VALUES
(1, 'Rua Teste 782', 'Teste de Bairro', 'Municipio Teste', 'RS', '22872-433', 'casa', 'Rosa Guimarães', '2019-11-07 20:07:56', '2019-11-07 20:07:56'),
(2, 'Rua Souza Franco', 'Vila isabel', 'Rio de Janeiro', 'RJ', '20569-148', 'Apartamento', 'Alexandre', '2019-11-07 20:10:26', '2019-11-07 20:10:26'),
(3, 'Rua Alfredo de Souza Mendes 31', 'Pilares', 'Rio de Janeiro', 'RJ', '20771-010', 'Apartamento', 'José', '2019-11-07 20:11:19', '2019-11-07 20:11:19'),
(4, 'Barata Ribeiro', 'Copacabana', 'Rio de Janeiro', 'RJ', '22040-002', 'Apartamento', 'Gabriel', '2019-11-07 20:12:50', '2019-11-07 20:15:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_27_233623_create_imovels_table', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imovels`
--
ALTER TABLE `imovels`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imovels`
--
ALTER TABLE `imovels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
