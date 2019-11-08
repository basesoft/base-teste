Utilizado o Xampp na Elaboração do projeto.

* Método Paginate configurado para exibir 1 por 1:
http://localhost/dados/public/api/dados/bairro/santa%20rita?page=1

* Função ADD apenas se os dados do CEP estiver no padrão conforme solicitado (xxxxx-xxx);
* Para inserir os dados: http://localhost/dados/public/api/dados/list/add
	
	Exemplo:

    {
      "id": 1,
      "endereco": "Primevera",
      "bairro": "Santa Rita",
      "municipio": "Nova_Iguacu",
      "estado": "Rio de Janeiro",
      "cep": "26051-230",
      "tipo_imovel": "Casa",
      "nome_proprietario": "Havila Cosme"
    }

* Para inserir os dados: http://localhost/dados/public/api/dados/list/update/inserir id

  {
      "id": 1,
      "endereco": "Primavera",
      "bairro": "Santa Rita",
      "municipio": "Nova Iguacu",
      "estado": "Rio de Janeiro",
      "cep": "26051-230",
      "tipo_imovel": "Casa",
      "nome_proprietario": "Havila Cosme"
    }

* Para deletar os dados: http://localhost/dados/public/api/dados/list/delete/inserir id

* Para Filtrar:
   Por bairro: http://localhost/dados/public/api/dados/bairro/inserir o bairro?page=1
   Por municipio: http://localhost/dados/public/api/dados/bairro/inserir o municipio?page=1


Query MySQL:

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2019 às 15:50
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_imovel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_proprietario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `endereco`, `bairro`, `municipio`, `estado`, `cep`, `tipo_imovel`, `nome_proprietario`) VALUES
(1, 'Primevera', 'Santa Rita', 'Nova_Iguacu', 'Rio de Janeiro', '26051-230', 'Casa', 'Havila Cosme'),
(2, 'Sergio', 'Oliveiras', 'Nova Iguaçu', 'Rio de Janeiro', '23051-563', 'Casa', 'Joaquim da Silva'),
(3, 'sdgfds', 'Vista Alegre', 'Iraja', 'Rio de Janeiro', '260511230', 'Casa', 'Havila Cosme'),
(4, 'sdgfds', 'Vila de Cava', 'Nova Iguacu', 'Rio de Janeiro', '260511230', 'Casa', 'Havila Cosme'),
(5, 'sdgfds', 'Santa Cruz', 'Santa Cruz', 'Rio de Janeiro', '260511', 'Casa', 'Havila Cosme'),
(6, 'sdgfds', 'Inhoaiba', 'Campo Grande', 'Rio de Janeiro', '2605sadsasda11', 'Casa', 'Havila Cosme'),
(7, 'sdgfds', 'Inhoaiba', 'Campo Grande', 'Rio de Janeiro', '26051-230', 'Casa', 'Havila Cosme'),
(8, 'sdgfds', 'Santa Rita', 'Nova Iguacu', 'Rio de Janeiro', '26051230', 'Casa', 'Havila Cosme'),
(9, 'sdgfds', 'Vista Alegre', 'Iraja', 'Rio de Janeiro', '26051', 'Casa', 'Havila Cosme'),
(10, 'sdgfds', 'Santa Rita', 'Nova Iguacu', 'Rio de Janeiro', '26051-230', 'Casa', 'Havila Cosme'),
(11, 'sdgfds', 'Bras de Pina', 'Penha', 'Rio de Janeiro', '26051230', 'Casa', 'Havila Cosme'),
(12, 'sdgfds', 'Santa Rita', 'Nova Iguacu', 'Rio de Janeiro', '26051230', 'Casa', 'Havila Cosme'),
(13, 'sdgfds', 'Santa Rita', 'Nova Iguacu', 'Rio de Janeiro', '26051-230', 'Casa', 'Havila Cosme');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



