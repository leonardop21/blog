-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2016 às 20:33
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

--
-- Extraindo dados da tabela `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `title`, `content`, `author`, `img`, `link`) VALUES
(2, '2016-04-08 02:52:44', '2016-04-08 02:52:44', '10 motivos para treinar Muay Thai', 'Muay Thai, muito mais do que socos, chutes, cotoveladas e joelhadas, o boxe Tailand?s ? uma arte marcial que traz aos seus praticantes muitos benef?cios f?sicos, como; maior flexibilidade, defini??o muscular, resist?ncia. As aulas s?o animadas por uma mistura de corrida, alongamento e exerc?cios localizados - flex?es de bra?os, abdominais e agachamentos. Em uma hora ? poss?vel eliminar at? mil calorias.', '', 'http://i0.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/05/Muay-Thai.jpg', 'http://conexaocorbelia.com/05/2015/10-motivos-para-treinar-muay-thai/'),
(3, '2016-04-08 02:54:54', '2016-04-08 02:54:54', 'Nova rede social paga por conte?do gerado e tempo gasto pelo usu?rio', 'A nova rede social, se tornou sucesso mundial e vem preocupando grandes empresas. Atualmente, Facebook, Twitter, Tumblr e outras redes sociais movem bilh?es de d?lares com an?ncios por ano e...', '', 'http://i1.wp.com/conexaocorbelia.com/cnx-crbx/uploads/2015/11/tsu.png', 'http://conexaocorbelia.com/11/2015/tsu/'),
(4, '2016-04-08 02:56:25', '2016-04-08 02:56:25', 'V?deo de policiais auxiliando idosa viraliza na web', 'Infelizmente a grande m?dia fez de conta que n?o viu o ocorrido...', '', 'http://16bpm.com.br/site/uploads/photos/217.jpg', 'http://conexaocorbelia.com/02/2016/video-de-policiais-auxiliando-idosa-viraliza-na-web');

--
-- Extraindo dados da tabela `dudas`
--

INSERT INTO `dudas` (`id`, `title`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Eduardo Cormier -UFC CHAMPIONSHIP', 'Peso: 189,56 kg - Categoria: Betoneira Plus +++++ Especialidade: Jiu Jitsu - Golpe Favorito: Posição dos 100 kg', 'http://i.imgur.com/2nV7X0D.jpg', '2016-04-07 22:30:19', '2016-04-07 22:30:19'),
(2, 'Sopa, faze una sopa pah nois', 'Vai uma sopah? Faze uma sopa pa nois', 'http://i.imgur.com/Bfahs7m.png', '2016-04-08 02:06:34', '2016-04-08 02:06:34'),
(3, 'Tio Duda Phill', 'GRANDE Tio Phill e Will Smith', 'http://i.imgur.com/oyfBfdL.png', '2016-04-09 00:36:46', '2016-04-09 00:39:31'),
(4, 'Voce desonlou dinastia chinesa', 'Pedi uma pizza de flango pa nois', 'http://i.imgur.com/0qFY2IQ.png', '2016-04-09 00:42:02', '2016-04-09 00:42:02'),
(5, 'Ansioso pela estreia no SUMO', 'Estou muito ansioso por essa estreia, essa noite pode definir a minha vida. Treinei pesado para essa luta', 'http://i.imgur.com/l2So2AB.png', '2016-04-09 01:07:37', '2016-04-09 01:07:37'),
(6, 'Nega do ''subaco'' cabeludo', 'Nega do ''subaco'' cabeludo ''vem ni mim'', ''vem ni mim'', vem que eu quero dar no coro, vem que hj eu não perdoo nem cachorro. Oh, nega do ''subaco'' cabeludo.', 'http://i.imgur.com/MTmCDDH.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Quero caafee ops comida', 'Muita, muita comida. Você disse comida? Não importa o valor, eu quero.', 'http://i.imgur.com/zSsHX6o.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Selfie com o açaí na sorveteria', 'Por que açai Podiiiii, nutricionista que disse. Não reparem na minha careca, é efeito de câmera :p', 'http://i.imgur.com/8RdAKPh.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Nelson Luther', 'Eduardo Nelson Mandela Luther King.', 'http://i.imgur.com/gqZFyhl.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_07_185217_create_table_post', 1),
('2016_04_07_191617_create_table_duda', 1),
('2016_04_07_202436_create_table_blogs', 1),
('2016_04_08_174351_create_comments_table', 1),
('2016_05_02_142617_create_table_relaxe', 2);

--
-- Extraindo dados da tabela `relaxes`
--

INSERT INTO `relaxes` (`id`, `created_at`, `updated_at`, `title`, `author`, `content`, `img`, `link`) VALUES
(1, '2016-05-02 14:34:24', '2016-05-02 14:34:24', 'Som do mar', 'Leonardo', 'Relaxe ao som do mar', 'http://music.14bisdigital.com.br/icons/peixe.jpg', 'http://music.14bisdigital.com.br/music/mar-agitado.mp3'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Chuva na Floresta', 'Leonardo', 'Relaxe ao som de chuva na floresta..', 'http://music.14bisdigital.com.br/icons/florest.jpg', 'http://music.14bisdigital.com.br/music/chuva-floresta.mp3'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Grilo', 'Leonardo', 'Ouça o belo canto de um grilo', 'http://music.14bisdigital.com.br/icons/grilo.jpg', 'http://music.14bisdigital.com.br/music/canto-grilo.mp3'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pássaros cantando', 'Leonardo', 'Ouça o cantar dos pássaros na natureza..', 'http://music.14bisdigital.com.br/icons/passaro.jpg', 'http://music.14bisdigital.com.br/music/passaros.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
