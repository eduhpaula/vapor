-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30-Nov-2022 às 00:41
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vapor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Matheus de Barros Fagionato', '42381546812', 'mdbf42@gmail.com', 'teste1'),
(2, 'Roberto Arnaldo', '80583687091', 'mdbf43@gmail.com', 'teste2'),
(3, 'Arthud Dent', '73030876055', 'mdbf44@gmail.com', 'teste3'),
(4, 'Seu Cebola', '07924654070', 'mdbf45@gmail.com', 'teste4'),
(5, 'Ronaldo Fenômeno', '01547105046', 'mdbf46@gmail.com', 'teste5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(14, 'AÇÃO'),
(18, 'AMIZADE'),
(26, 'ANIMAÇÃO'),
(17, 'ARCADE'),
(15, 'AVENTURA'),
(16, 'CORRIDA'),
(19, 'ESPORTES'),
(23, 'FPS'),
(27, 'IDLE'),
(24, 'MOBA'),
(20, 'PESCARIA'),
(25, 'RPG'),
(21, 'SIMULADOR'),
(22, 'SUSPENSE'),
(13, 'TERROR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idioma`
--

CREATE TABLE `idioma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `idioma`
--

INSERT INTO `idioma` (`id`, `nome`) VALUES
(2, 'Espanhol'),
(3, 'Italiano'),
(4, 'Chines'),
(5, 'Romeno'),
(6, 'Português'),
(9, 'Inglês'),
(17, 'Espanho'),
(18, 'Alemão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL,
  `descricao` longtext DEFAULT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `data_lancamento` date NOT NULL,
  `desenvolvedora` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `valor`, `descricao`, `imagem_url`, `video_url`, `data_lancamento`, `desenvolvedora`, `id_categoria`) VALUES
(1, 'MINECRAFT', 29, 'Jogo Quadrado', 'https://files.tecnoblog.net/wp-content/uploads/2019/09/minecraft-001.jpg', 'https://www.youtube.com/watch?v=jMe3tdyjouM', '2022-09-09', 'Mojang', 15),
(2, 'THE LAST OF US', 30, 'Jogo de Zumbi', 'https://upload.wikimedia.org/wikipedia/pt/b/be/The_Last_of_Us_capa.png', 'https://www.youtube.com/watch?v=IpjRuuFEPMk', '2022-10-09', 'Naughty Dog', 13),
(3, 'ELDEN RING', 300, 'Jogo Maluco', 'https://files.tecnoblog.net/wp-content/uploads/2022/03/elden-ring-4-700x394.jpg', 'https://www.youtube.com/watch?v=gUPUI4NqQHc', '2022-10-13', 'FromSoftware', 14),
(4, 'VALORANT', 0, 'Jogo de Tiro e Poderzinho', 'https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt3f072336e3f3ade4/63096d7be4a8c30e088e7720/Valorant_2022_E5A2_PlayVALORANT_ContentStackThumbnail_1200x625_MB01.png', 'https://www.youtube.com/watch?v=0qhHKedfvkg', '2021-05-03', 'Riot', 23),
(5, 'LEAGUE OF LEGENDS', 0, 'Jogo de Torres e Poderzinho', 'https://s2.glbimg.com/M4Df2YVeiwElmr4cqNv1J_-gVgQ=/800x0/smart/filters:strip_icc()/s.glbimg.com/po/tt2/f/original/2014/04/03/league-of-legends-10.jpg', 'https://www.youtube.com/watch?v=aR-KAldshAE', '2015-05-03', 'Riot', 24),
(7, 'THE LEGEND OF ZELDA: BREATH OF THE WILD', 300, 'Jogo do Link', 'https://cdn.pocket-lint.com/r/s/970x/assets/images/137952-games-review-the-legend-of-zelda-breath-of-the-wild-review-image1-tbvqza2wel-jpg.webp', 'https://www.youtube.com/watch?v=zw47_q9wbBE', '2017-05-03', 'Nintendo', 15),
(8, 'CUPHEAD', 40, 'Jogo das Xicrina', 'https://conteudo.imguol.com.br/c/entretenimento/fd/2022/02/23/the-cuphead-show-personagem-diabo-1645649422377_v2_900x506.jpg.webp', 'https://www.youtube.com/watch?v=NN-9SQXoi50', '2018-05-03', 'Studio MDHR', 17),
(9, 'BATTLEFIELD 4', 299, 'Melhor FPS que tem', 'https://uploads.jovemnerd.com.br/wp-content/uploads/2021/06/battlefield-4-esta-gratuito-para-pc-no-amazon-prime-gaming.jpg', 'https://www.youtube.com/watch?v=hl-VV9loYLw', '2016-05-03', 'DICE', 23),
(10, 'BATTLEFIELD 2042', 150, 'Trailer é lindo mas o jogo é muito ruim', 'https://uploads.jovemnerd.com.br/wp-content/uploads/2021/11/Battlefield-2042-review.jpg', 'https://www.youtube.com/watch?v=eiAGqqSUqQY', '2021-09-03', 'DICE', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_idioma`
--

CREATE TABLE `jogo_idioma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_idioma`
--

INSERT INTO `jogo_idioma` (`id`, `id_jogo`, `id_idioma`) VALUES
(2, 1, 2),
(3, 1, 4),
(6, 2, 3),
(8, 3, 2),
(9, 3, 3),
(12, 8, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo_plataforma`
--

CREATE TABLE `jogo_plataforma` (
  `id` int(11) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo_plataforma`
--

INSERT INTO `jogo_plataforma` (`id`, `id_jogo`, `id_plataforma`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(9, 3, 3),
(10, 1, 4),
(11, 2, 4),
(12, 3, 4),
(13, 7, 8),
(14, 8, 8),
(18, 7, 7),
(19, 7, 8),
(20, 7, 1),
(21, 5, 1),
(22, 9, 1),
(23, 10, 1),
(24, 9, 2),
(25, 9, 3),
(26, 9, 4),
(27, 9, 5),
(28, 9, 6),
(29, 9, 7),
(30, 9, 8),
(31, 4, 1),
(32, 10, 1),
(33, 10, 4),
(34, 10, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_arquivar`
--

CREATE TABLE `mensagem_arquivar` (
  `id` int(11) NOT NULL,
  `nome` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `assunto` longtext DEFAULT NULL,
  `mensagem` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagem_arquivar`
--

INSERT INTO `mensagem_arquivar` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Eduardo Henrique', 'edu-paula@hotmail.com', 'criticas', 'Texto é uma manifestação da linguagem, uma mensagem usada para transmitir informação de um autor para um leitor. Um texto é uma manifestação da linguagem. Pode ser definido como tudo aquilo que é dito por um emissor e interpretado por um receptor. Dessa forma, tudo que é interpretável é um texto.'),
(2, 'Matheus', 'm@m.com', 'duvidas', 'HSYUAHDUSHAUDHSUAHDUASHUDHASUDBYTGADIBSAFOSA'),
(3, 'Douglas', 'Teclado@teste.com', 'sugestoes', 'Aqui é Body Builder Ipsum PORRA! Vem porra! Aqui nóis constrói fibra, não é água com músculo. Bora caralho, você quer ver essa porra velho. Vem porra! Eita porra!, tá saindo da jaula o monstro!\r\n\r\n Birl! Sabe o que é isso daí? Trapézio descendente é o nome disso aí. Ele tá olhando pra gente.\r\n\r\n Sabe o que é isso daí? Trapézio descendente é o nome disso aí. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n Sai filho da puta! É 13 porra! Negativa Bambam negativa. Aqui é bodybuilder porra! Negativa Bambam negativa. Sabe o que é isso daí? Trapézio descendente é o nome disso aí. Que não vai dá rapaiz, não vai dá essa porra.\r\n\r\n Aqui é Body Builder Ipsum PORRA! AHHHHHHHHHHHHHHHHHHHHHH..., porra! Sabe o que é isso daí? Trapézio descendente é o nome disso aí. Birl! Ele tá olhando pra gente. É 37 anos caralho! Ó o homem ali porra!, é 13 porra!\r\n\r\n Birl! Boraaa, Hora do Show Porra. Aqui é Body Builder Ipsum PORRA! Não vai dá não. Vamo monstro! Sai filho da puta! Vem porra! Que não vai dá rapaiz, não vai dá essa porra.\r\n\r\n Vai subir árvore é o caralho porra! Sai de casa comi pra caralho porra. É nóis caraio é trapezera buscando caraio! É nóis caraio é trapezera buscando caraio! Ó o homem ali porra!, é 13 porra!\r\n\r\n Bora caralho, você quer ver essa porra velho. Vai subir árvore é o caralho porra! Tá comigo porra. Aqui é Body Builder Ipsum PORRA!\r\n\r\n Que não vai dá rapaiz, não vai dá essa porra. Boraaa, Hora do Show Porra.\r\n\r\n Não vai dá não. Que não vai dá rapaiz, não vai dá essa porra. Negativa Bambam negativa. Tá comigo porra.\r\n\r\n'),
(4, 'ADS', 'A.A@GO.COM', 'duvidas', ' '),
(5, 'Teste', 'teste@teste.com', 'sugestoes', 'Aqui é Body Builder Ipsum PORRA! Sai filho da puta! É esse que a gente quer, é ele que nóis vamo buscar. Negativa Bambam negativa. É 13 porra! É 37 anos caralho!\r\n\r\n Que não vai dá rapaiz, não vai dá essa porra. Vamo monstro! Vai subir árvore é o caralho porra! Boraaa, Hora do Show Porra. Boraaa, Hora do Show Porra. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n É 13 porra! É verão o ano todo vem cumpadi. Sai filho da puta! É 13 porra! Ó o homem ali porra!, é 13 porra! Aqui é Body Builder Ipsum PORRA!\r\n\r\n É nóis caraio é trapezera buscando caraio! Tá comigo porra. Não vai dá não. Ó o homem ali porra!, é 13 porra! Que não vai dá rapaiz, não vai dá essa porra. Negativa Bambam negativa. É verão o ano todo vem cumpadi.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. Boraaa, Hora do Show Porra. Vamo monstro! Sai de casa comi pra caralho porra.\r\n\r\n Ele tá olhando pra gente. Sai de casa comi pra caralho porra. AHHHHHHHHHHHHHHHHHHHHHH..., porra! Ajuda o maluco que tá doente. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. É verão o ano todo vem cumpadi. Tá comigo porra. É nóis caraio é trapezera buscando caraio!\r\n\r\n Eita porra!, tá saindo da jaula o monstro! Bora caralho, você quer ver essa porra velho.\r\n\r\n Birl! Eu quero esse 13 daqui a pouquinho aí. É verão o ano todo vem cumpadi.\r\n\r\n É verão o ano todo vem cumpadi. Que não vai dá rapaiz, não vai dá essa porra.\r\n\r\n'),
(6, 'Eduardo Henrique de Paula', 'edu-paula@hotmail.com', 'criticas', 'Aqui é Body Builder Ipsum PORRA! Sai filho da puta! É esse que a gente quer, é ele que nóis vamo buscar. Negativa Bambam negativa. É 13 porra! É 37 anos caralho!\r\n\r\n Que não vai dá rapaiz, não vai dá essa porra. Vamo monstro! Vai subir árvore é o caralho porra! Boraaa, Hora do Show Porra. Boraaa, Hora do Show Porra. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n É 13 porra! É verão o ano todo vem cumpadi. Sai filho da puta! É 13 porra! Ó o homem ali porra!, é 13 porra! Aqui é Body Builder Ipsum PORRA!\r\n\r\n É nóis caraio é trapezera buscando caraio! Tá comigo porra. Não vai dá não. Ó o homem ali porra!, é 13 porra! Que não vai dá rapaiz, não vai dá essa porra. Negativa Bambam negativa. É verão o ano todo vem cumpadi.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. Boraaa, Hora do Show Porra. Vamo monstro! Sai de casa comi pra caralho porra.\r\n\r\n Ele tá olhando pra gente. Sai de casa comi pra caralho porra. AHHHHHHHHHHHHHHHHHHHHHH..., porra! Ajuda o maluco que tá doente. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. É verão o ano todo vem cumpadi. Tá comigo porra. É nóis caraio é trapezera buscando caraio!\r\n\r\n Eita porra!, tá saindo da jaula o monstro! Bora caralho, você quer ver essa porra velho.\r\n\r\n Birl! Eu quero esse 13 daqui a pouquinho aí. É verão o ano todo vem cumpadi.\r\n\r\n É verão o ano todo vem cumpadi. Que não vai dá rapaiz, não vai dá essa porra.\r\n\r\n'),
(7, 'Eduardo', 'edu-paula@hotmail.com', 'Suporte', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(8, 'Eduardo', 'edu-paula@hotmail.com', 'sugestoes', 'Isto é apenas um teste!'),
(9, 'Ruan', 'ruan@ruan.com', 'Outros', 'Aqui é Body Builder Ipsum PORRA! Sai filho da puta! É esse que a gente quer, é ele que nóis vamo buscar. Negativa Bambam negativa. É 13 porra! É 37 anos caralho!\r\n\r\n Que não vai dá rapaiz, não vai dá essa porra. Vamo monstro! Vai subir árvore é o caralho porra! Boraaa, Hora do Show Porra. Boraaa, Hora do Show Porra. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n É 13 porra! É verão o ano todo vem cumpadi. Sai filho da puta! É 13 porra! Ó o homem ali porra!, é 13 porra! Aqui é Body Builder Ipsum PORRA!\r\n\r\n É nóis caraio é trapezera buscando caraio! Tá comigo porra. Não vai dá não. Ó o homem ali porra!, é 13 porra! Que não vai dá rapaiz, não vai dá essa porra. Negativa Bambam negativa. É verão o ano todo vem cumpadi.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. Boraaa, Hora do Show Porra. Vamo monstro! Sai de casa comi pra caralho porra.\r\n\r\n Ele tá olhando pra gente. Sai de casa comi pra caralho porra. AHHHHHHHHHHHHHHHHHHHHHH..., porra! Ajuda o maluco que tá doente. Vo derrubar tudo essas árvore do parque ibirapuera.\r\n\r\n Aqui nóis constrói fibra, não é água com músculo. É verão o ano todo vem cumpadi. Tá comigo porra. É nóis caraio é trapezera buscando caraio!\r\n\r\n Eita porra!, tá saindo da jaula o monstro! Bora caralho, você quer ver essa porra velho.\r\n\r\n Birl! Eu quero esse 13 daqui a pouquinho aí. É verão o ano todo vem cumpadi.\r\n\r\n É verão o ano todo vem cumpadi. Que não vai dá rapaiz, não vai dá essa porra.\r\n\r\n'),
(10, 'Matheus de Barros Fagionato Ferreira Santos', 'matheusbfffs@gmail.com', 'Outros', 'Mussum Ipsum, cacilds vidis litro abertis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.Si num tem leite então bota uma pinga aí cumpadi!Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nQuem manda na minha terra sou euzis!Viva Forevis aptent taciti sociosqu ad litora torquent.Mé faiz elementum girarzis, nisi eros vermeio.Quem num gosta di mim que vai caçá sua turmis!\r\n\r\nNullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.Quem num gosta di mé, boa gentis num é.Quem num gosta di mim que vai caçá sua turmis!Per aumento de cachacis, eu reclamis.\r\n\r\nDetraxit consequat et quo num tendi nada.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Cevadis im ampola pa arma uma pindureta.Mé faiz elementum girarzis, nisi eros vermeio.\r\n\r\nLeite de capivaris, leite de mula manquis sem cabeça.Copo furadis é disculpa de bebadis, arcu quam euismod magna.Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.\r\n\r\nSi num tem leite então bota uma pinga aí cumpadi!Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Quem num gosta di mé, boa gentis num é.\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.Viva Forevis aptent taciti sociosqu ad litora torquent.A ordem dos tratores não altera o pão duris.\r\n\r\nNullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.Mé faiz elementum girarzis, nisi eros vermeio.Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!\r\n\r\nPraesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.Pra lá , depois divoltis porris, paradis.Per aumento de cachacis, eu reclamis.Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.\r\n\r\nEm pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.Per aumento de cachacis, eu reclamis.Paisis, filhis, espiritis santis.'),
(11, 'Teste', 'teste@teste.com', 'Críticas', 'Eiiitaaa Mainhaaa!! Esse Lorem ipsum é só na sacanageeem!! E que abundância meu irmão viuu!! Assim você vai matar o papai. Só digo uma coisa, Domingo ela não vai! Danadaa!! Vem minha odalisca, agora faz essa cobra coral subir!!! Pau que nasce torto, Nunca se endireita. Tchannn!! Tchannn!! Tu du du pááá! Eu gostchu muitchu, heinn! danadinha! Mainhaa! Agora use meu lorem ipsum ordinária!!! Olha o quibeee! rema, rema, ordinária!.\r\n \r\nVocê usa o Lorem Ipsum tradicional? Sabe de nada inocente!! Conheça meu lorem que é Tchan, Tchan, Tchannn!! Txu Txu Tu Paaaaa!! Vem, vem ordinária!! Venha provar do meu dendê que você não vai se arrepender. Só na sacanageeem!! Eu gostchu muitchu, heinn! Eitchaaa template cheio de abundância danadaaa!! Assim você mata o papai hein!? Etâaaa Mainhaaaaa...me abusa nesse seu layout, me gera, me geraaaa ordinária!!! Só na sacanagem!!!! Venha provar do meu dendê Tu du du pááá!.\r\n \r\nMas que abundância meu irmãooo!!! Esse é seu Layout danadaaa!??? Sabe de nada inocente!! Vem, vem, vem ordinária, provar do meu dendê!! Eu gostxuu muitxuu desse seu Layout!! Etâ danadaaaa!! Tá tão lindo que vou falar em inglês só pra você mainhaaa!! Know nothing innocent. Ordinary!! Txhann Txhann, Txu txu tu paaa!! Damned. Only in Slutty!! Abundance that my borther!! Tchan, Tchan, Tchan...Tu tu tu pa!!!!  .\r\n \r\nChama, Chama, Chama ordinária!!!! Tu du du pááá! rema, rema, ordinária! olha o quibe! eu gostchu muitchu, heinn! ordinária!! Domingo ela não vai. Tchannn!! Tchannn!! danadinha! Mainhaa! Eiiitaaa Mainhaaa!! Assim você mata o papai , viuu!! Danadaa!! Vem, vem ordinária!! Ahh mainhaa!! venha provar do meu dendê. Só na sacanageeem!! Sabe de nada inocente! que abundânciaaaa meu irmão!! Pau que nasce torto, Nunca se endireita....\r\n \r\nVem minha odalisca, agora faz essa cobra coral subir!!! que abundânciaaaa meu irmão!! Sabe de nada inocente! Só na sacanageeem!! venha provar do meu dendê. Ahh mainhaa!! Vem, vem ordinária!! Danadaa!! Assim você mata o papai , viuu!! Eiiitaaa Mainhaaa!! danadinha! Mainhaa! Tchannn!! Tchannn!! Domingo ela não vai. Sunday she won\'t go!! ordinária!! eu gostchu muitchu, heinn! olha o quibe! rema, rema, ordinária! Tu du du pááá!.\r\n \r\n'),
(12, 'Teste', 'teste@teste.com', 'Críticas', 'Eiiitaaa Mainhaaa!! Esse Lorem ipsum é só na sacanageeem!! E que abundância meu irmão viuu!! Assim você vai matar o papai. Só digo uma coisa, Domingo ela não vai! Danadaa!! Vem minha odalisca, agora faz essa cobra coral subir!!! Pau que nasce torto, Nunca se endireita. Tchannn!! Tchannn!! Tu du du pááá! Eu gostchu muitchu, heinn! danadinha! Mainhaa! Agora use meu lorem ipsum ordinária!!! Olha o quibeee! rema, rema, ordinária!.\r\n \r\nVocê usa o Lorem Ipsum tradicional? Sabe de nada inocente!! Conheça meu lorem que é Tchan, Tchan, Tchannn!! Txu Txu Tu Paaaaa!! Vem, vem ordinária!! Venha provar do meu dendê que você não vai se arrepender. Só na sacanageeem!! Eu gostchu muitchu, heinn! Eitchaaa template cheio de abundância danadaaa!! Assim você mata o papai hein!? Etâaaa Mainhaaaaa...me abusa nesse seu layout, me gera, me geraaaa ordinária!!! Só na sacanagem!!!! Venha provar do meu dendê Tu du du pááá!.\r\n \r\nMas que abundância meu irmãooo!!! Esse é seu Layout danadaaa!??? Sabe de nada inocente!! Vem, vem, vem ordinária, provar do meu dendê!! Eu gostxuu muitxuu desse seu Layout!! Etâ danadaaaa!! Tá tão lindo que vou falar em inglês só pra você mainhaaa!! Know nothing innocent. Ordinary!! Txhann Txhann, Txu txu tu paaa!! Damned. Only in Slutty!! Abundance that my borther!! Tchan, Tchan, Tchan...Tu tu tu pa!!!!  .\r\n \r\nChama, Chama, Chama ordinária!!!! Tu du du pááá! rema, rema, ordinária! olha o quibe! eu gostchu muitchu, heinn! ordinária!! Domingo ela não vai. Tchannn!! Tchannn!! danadinha! Mainhaa! Eiiitaaa Mainhaaa!! Assim você mata o papai , viuu!! Danadaa!! Vem, vem ordinária!! Ahh mainhaa!! venha provar do meu dendê. Só na sacanageeem!! Sabe de nada inocente! que abundânciaaaa meu irmão!! Pau que nasce torto, Nunca se endireita....\r\n \r\nVem minha odalisca, agora faz essa cobra coral subir!!! que abundânciaaaa meu irmão!! Sabe de nada inocente! Só na sacanageeem!! venha provar do meu dendê. Ahh mainhaa!! Vem, vem ordinária!! Danadaa!! Assim você mata o papai , viuu!! Eiiitaaa Mainhaaa!! danadinha! Mainhaa! Tchannn!! Tchannn!! Domingo ela não vai. Sunday she won\'t go!! ordinária!! eu gostchu muitchu, heinn! olha o quibe! rema, rema, ordinária! Tu du du pááá!.\r\n \r\n'),
(13, 'Teste', 'teste@teste.com', 'Dúvidas', 'Teste\r\n'),
(14, 'Teste1', 'teste1@teste1.com', 'Críticas', 'Teste1'),
(15, 'Teste', 'teste@teste.com', 'Dúvidas', 'Teste'),
(16, 'Teste', 'Teste@teste.com', 'Críticas', 'Teste3\r\n'),
(17, 'Teste', 'teste1@teste.com', 'Críticas', 'Teste3'),
(18, 'Teste', 'teste@hotmail.com', 'Dúvidas', 'Teste1'),
(19, 'Teste', 'teste@teste.com', 'Dúvidas', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_enviar`
--

CREATE TABLE `mensagem_enviar` (
  `id` int(11) NOT NULL,
  `nome` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `assunto` longtext DEFAULT NULL,
  `mensagem` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(1, 'PC'),
(2, 'Playstation 2'),
(3, 'Playstation 3'),
(4, 'Playstation 4'),
(5, 'Xbox 360'),
(6, 'Xbox One'),
(7, 'Nintendo Wii'),
(8, 'Nintendo Switch');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `imagem_url` (`imagem_url`),
  ADD UNIQUE KEY `video_url` (`video_url`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- Índices para tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Índices para tabela `mensagem_arquivar`
--
ALTER TABLE `mensagem_arquivar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensagem_enviar`
--
ALTER TABLE `mensagem_enviar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `mensagem_arquivar`
--
ALTER TABLE `mensagem_arquivar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `mensagem_enviar`
--
ALTER TABLE `mensagem_enviar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `jogo_idioma`
--
ALTER TABLE `jogo_idioma`
  ADD CONSTRAINT `jogo_idioma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_idioma_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id`);

--
-- Limitadores para a tabela `jogo_plataforma`
--
ALTER TABLE `jogo_plataforma`
  ADD CONSTRAINT `jogo_plataforma_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id`),
  ADD CONSTRAINT `jogo_plataforma_ibfk_2` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
