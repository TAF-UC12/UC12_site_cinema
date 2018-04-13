-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13-Abr-2018 às 14:59
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_cinema_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `nomeOriginal` varchar(100) DEFAULT NULL,
  `estreia` varchar(50) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `paisOrigem` varchar(50) DEFAULT NULL,
  `diretor` varchar(100) DEFAULT NULL,
  `elenco` text,
  `sinopse` text NOT NULL,
  `poster` varchar(100) NOT NULL,
  `emCartaz` varchar(3) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `nomeOriginal`, `estreia`, `duracao`, `genero`, `paisOrigem`, `diretor`, `elenco`, `sinopse`, `poster`, `emCartaz`) VALUES
(9, 'Vingadores: Guerra Infinita', 'Avengers: Infinity War', '26 de Abril de 2018', 156, 'Aventura', 'Estados Unidos da AmÃ©rica', 'Anthony Russo e Joe Russo', '<p>Chris Evans, Robert Downey Jr., Scarlett Johansson, Chris Hemsworth, Benedict Cumberbatch, Bradley Cooper, Brie Larson</p>\r\n', '<p>O maior e mais mortal confronto de todos os tempos. Os Vingadores e seus aliados Super Her&oacute;is devem se dispor a sacrificar tudo em uma tentativa de derrotar o poderoso Thanos antes que seu ataque de devasta&ccedil;&atilde;o e ru&iacute;na d&ecirc; um fim ao universo.</p>\r\n', 'vingadores_guerra_infinita.jpg', 'nao'),
(10, 'Jogador NÂº1', 'Ready Player One', '29 de MarÃ§o de 2018', 140, 'Aventura', 'Estados Unidos da AmÃ©rica', 'Steven Spielberg', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-519140/">Tye Sheridan</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-586280/">Olivia Cooke</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-44069/">Ben Mendelsohn</a></p>\r\n', '<p>Num futuro dist&oacute;pico, em 2044, Wade Watts (Tye Sheridan), como o resto da humanidade, prefere a realidade virtual do jogo OASIS ao mundo real. Quando o criador do jogo, o exc&ecirc;ntrico James Halliday (Mark Rylance) morre, os jogadores devem descobrir a chave de um quebra-cabe&ccedil;a diab&oacute;lico para conquistar sua fortuna inestim&aacute;vel. Para vencer, por&eacute;m, Watts ter&aacute; de abandonar a exist&ecirc;ncia virtual e ceder a uma vida de amor e realidade da qual sempre tentou fugir.</p>\r\n', 'jogador_n1.jpg', 'sim'),
(11, 'Um Lugar Silencioso', 'A Quiet Place', '5 de abril de 2018', 130, 'Suspense', 'Estados Unidos da AmÃ©rica', 'John Krasinski', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-125110/">John Krasinski</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-123054/">Emily Blunt</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-773529/">Millicent Simmonds</a></p>\r\n', '<p>Em uma fazenda dos Estados Unidos, uma fam&iacute;lia do meio-oeste &eacute; perseguida por uma entidade fantasmag&oacute;rica assustadora. Para se protegerem, eles devem permanecer em sil&ecirc;ncio absoluto, a qualquer custo, pois o perigo &eacute; ativado pela percep&ccedil;&atilde;o do som.</p>\r\n', 'lugar_silencioso.jpg', 'sim'),
(12, 'Deadpool 2', 'Deadpool 2', '17 de maio de 2018', 120, 'AÃ§Ã£o', 'Estados Unidos da AmÃ©rica', 'David Leitch', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-74084/">Ryan Reynolds</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-3146/">Josh Brolin</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-104434/">Morena Baccarin</a></p>\r\n', '<p>Sequ&ecirc;ncia das aventuras do Mercen&aacute;rio Tagarela, interpretado por Ryan Reynolds. Na hist&oacute;ria original, o her&oacute;i adquire superpoderes ap&oacute;s uma experi&ecirc;ncia cient&iacute;fica, e decide se vingar da pessoa respons&aacute;vel por sequestrar sua namorada.</p>\r\n', 'deadpool2.jpg', 'nao'),
(13, 'Han Solo: Uma HistÃ³ria Star Wars', 'Solo: A Star Wars Story', '24 de maio de 2018', 120, 'Aventura', 'Estados Unidos da AmÃ©rica', 'Ron Howard', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-136292/">Alden Ehrenreich</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-457862/">Emilia Clarke</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-209532/">Donald Glover</a></p>\r\n', '<p>As aventuras do emblem&aacute;tico mercen&aacute;rio Han Solo (Alden Ehrenreich) e seu fiel escudeiro Chewbacca (Joonas Suotamo) antes dos eventos retratados em <em>Star Wars: Uma Nova Esperan&ccedil;a,&nbsp;</em>inclusive&nbsp;encontrando com Lando Calrissian (Donald Glover).</p>\r\n', 'han_solo.jpg', 'nao'),
(14, 'Gnomeu e Julieta: O MistÃ©rio do Jardim', 'Sherlock Gnomes', '31 de maio de 2018', 126, 'AnimaÃ§Ã£o', 'Estados Unidos da AmÃ©rica', 'John Stevenson', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-12839/">Johnny Depp</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-85120/">James McAvoy</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-123054/">Emily Blunt</a></p>\r\n', '<p>Gnomeu e Julieta chegam &agrave; Inglaterra, preocupados em preparar o jardim para a primavera e rever os amigos brit&acirc;nicos. No entanto, a dupla come&ccedil;a a perceber que os gnomos est&atilde;o sendo sequestrados em toda a cidade. Eles recorrem ao g&ecirc;nio da investiga&ccedil;&atilde;o Sherlock Gnomes que, junto de seu fiel companheiro Watson, embarca numa aventura para solucionar o mist&eacute;rio. Sequ&ecirc;ncia da anima&ccedil;&atilde;o Gnomeu e Julieta (2011).</p>\r\n', 'gnomeu.jpg', 'nao'),
(15, 'Oito Mulheres e um Segredo', 'Oceans 8', '7 de junho de 2018', 120, 'ComÃ©dia', 'Estados Unidos da AmÃ©rica', 'Gary Ross', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-4700/">Sandra Bullock</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-28561/">Cate Blanchett</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-421334/">Rihanna</a></p>\r\n', '<p>Rec&eacute;m-sa&iacute;da da pris&atilde;o, Debbie Ocean (Sandra Bullock) planeja executar o assalto do s&eacute;culo em pleno Met Gala, em Nova York, com o apoio de Lou (Cate Blanchett), Nine Ball (Rihanna), Amita (Mindy Kaling), Constance (Awkwafina), Rose (Helena Bonham Carter), Daphne Kluger (Anne Hathaway) e Tammy (Sarah Paulson).</p>\r\n', 'ocean8.jpg', 'nao'),
(16, 'Talvez uma HistÃ³ria de Amor', 'Talvez uma HistÃ³ria de Amor', ' 14 de junho de 2018', 120, 'Nacional', 'Brasil', 'Rodrigo Bernardo', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-471425/">Mateus Solano</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-669245/">Thaila Ayala</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-509518/">Bianca Comparato</a></p>\r\n', '<p>Quando chega em casa, depois de mais um dia corriqueiro no trabalho, Virg&iacute;lio (Mateus Solano) liga a secret&aacute;ria eletr&ocirc;nica e ouve um recado perturbador. &Eacute; uma mensagem de Clara (Thaila Ayala), comunicando o t&eacute;rmino do relacionamento dos dois. Virg&iacute;lio, contudo, n&atilde;o faz a menor ideia de quem &eacute; Clara.&nbsp; Perturbado devido ao seu jeito met&oacute;dico e controlador, ele n&atilde;o se lembra de ter se relacionado com ningu&eacute;m, mas todos ao seu redor pareciam saber do relacionamento dos dois, perguntando como ele est&aacute; se sentindo com o t&eacute;rmino. Agora, ele precisa encontrar essa mulher misteriosa.</p>\r\n', 'talvez_uma_historia.jpg', 'nao'),
(17, 'Legalize JÃ¡!', 'Legalize JÃ¡!', '14 de junho de 2018', 130, 'Nacional', 'Brasil', ' Johnny AraÃºjo, Gustavo BonafÃ© ', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-738077/">Renato G&oacute;es</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-646763/">&Iacute;caro Silva</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-21437/">Ernesto Alterio</a></p>\r\n', '<p>Skunk (&Iacute;caro Silva) &eacute; um jovem m&uacute;sico, revoltado com a opress&atilde;o e o preconceito di&aacute;rios sofrido pelas comunidades de baixa renda, que busca expor sua insatisfa&ccedil;&atilde;o atrav&eacute;s da m&uacute;sica. Um dia, ao fugir da pol&iacute;cia, ele literalmente esbarra em Marcelo (Renato G&oacute;es), um vendedor de camisas de bandas de heavy metal. O gosto pelo mesmo estilo musical os aproxima, assim como a habilidade de Marcelo em compor letras de forte cunho social e questionador. Impulsionado por Skunk, ele adentra o universo da m&uacute;sica e, juntos, formam a banda Planet Hemp.</p>\r\n', 'legalize.jpg', 'nao'),
(18, 'Jurassic World: Reino AmeaÃ§ado', 'Jurassic World: Fallen Kingdom', '21 de junho de 2018', 120, 'Aventura', 'Estados Unidos da AmÃ©rica', 'Juan Antonio Bayona', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-98332/">Chris Pratt</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-91615/">Bryce Dallas Howard</a>, <a href="http://www.adorocinema.com/personalidades/personalidade-17412/">B.D. Wong</a></p>\r\n', '<p>Quatro anos ap&oacute;s o fechamento do Jurassic Park, um vulc&atilde;o prestes a entrar em erup&ccedil;&atilde;o p&otilde;e em risco a vida na ilha Nublar. No local n&atilde;o h&aacute; mais qualquer presen&ccedil;a humana, com os dinossauros vivendo livremente. Diante da situa&ccedil;&atilde;o, &eacute; preciso tomar uma decis&atilde;o: deve-se retornar &agrave; ilha para salvar os animais ou abandon&aacute;-los para uma nova extin&ccedil;&atilde;o? Decidida a resgat&aacute;-los, Claire (Bryce Dallas Howard) convoca Owen (Chris Pratt) a retornar &agrave; ilha com ela.</p>\r\n', 'jurassicworld2.jpg', 'nao'),
(20, 'Rampage: DestruiÃ§Ã£o Total', 'Rampage', '12 de abril de 2018', 107, 'Aventura', 'EUA', 'Brad Peyton', '<p>&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-38755/">Dwayne Johnson</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-92692/">Naomie Harris</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-97430/">Malin &Aring;kerman</a></p>\r\n', '<p>Davis Okoye&nbsp; &eacute; um primatologista (Dwayne Johnson), um homem recluso que compartilha um v&iacute;nculo inabal&aacute;vel com George, um gorila muito inteligente que est&aacute; sob seus cuidados desde o nascimento. Quando um experimento gen&eacute;tico desonesto &eacute; feito em um grupo de predadores que inclui o primata, os animais se transformam em monstros que destroem tudo em seu caminho. Agora Okoye tenta conseguir um ant&iacute;doto e impedir que seu amigo provoque uma cat&aacute;strofe global.</p>\r\n', 'rampage.jpg', 'sim'),
(21, 'Antes Que Eu Me EsqueÃ§a', 'Antes Que Eu Me EsqueÃ§a', '24 de maio de 2018', 100, 'ComÃ©dia', 'Brasil', 'Tiago Arakilian', '<p>&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-19489/">Jos&eacute; de Abreu</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-594483/">Danton Mello</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-203815/">Guta Stresser</a></p>\r\n', '<p>Aos 80 anos de idade, Polidoro (Jos&eacute; de Abreu) &eacute; um soberbo juiz aposentado que vive sozinho e mal tem contato com o filho Paulo (Danton Mello), pianista fracassado. Quando sua filha mais pr&oacute;xima, Bia (Let&iacute;cia Isnard), entra com uma a&ccedil;&atilde;o para interdit&aacute;-lo, ele decide investir seus fundos numa boate de striptease em Copacabana.</p>\r\n', 'antes_que_eu_me_esqueca.jpg', 'nao'),
(22, 'Pedro Coelho', 'Peter Rabbit', '22 de marÃ§o de 2018', 90, 'AnimaÃ§Ã£o', 'EUA, Reino Unido, AustrÃ¡lia', 'Will Gluck', '<p><a href="http://www.adorocinema.com/personalidades/personalidade-398314/">Domhnall Gleeson</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-64704/">Rose Byrne</a>,&nbsp;<a href="http://www.adorocinema.com/personalidades/personalidade-973/">Sam Neill</a></p>\r\n', '<p>Pedro Coelho &eacute; um animal rebelde que apronta todas no quintal e at&eacute; dentro da casa do&nbsp;Mr. McGregor (Domhnall Gleeson), com quem trava uma dura batalha pelo carinho da amante de animais Bea (Rose Byrne).</p>\r\n', 'pedro_coelho.jpg', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `idGenero` int(11) NOT NULL,
  `nomeGenero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`idGenero`, `nomeGenero`) VALUES
(1, 'AÃ§Ã£o'),
(2, 'Aventura'),
(3, 'Drama'),
(4, 'DocumentÃ¡rio'),
(5, 'ComÃ©dia'),
(6, 'AnimaÃ§Ã£o'),
(7, 'Suspense'),
(8, 'Terror'),
(9, 'Nacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(12, 'Thiago Silva', 'stornwild@yahoo.com.br', 'teste', '$2y$10$LZGGLN.ZoKKVOOdmEYN4V.DrAiJGUVN7.gDKYNDc3HAgVATyKwIFy'),
(13, 'Maria Silva', 'teste@teste.com', 'maria', '$2y$10$BYIBLE/wfSH0lMENw.F8kudWFtqLNGqJShvBL/mbSzfin3yJrfvmW'),
(15, 'Fulano de tal', 'teste10@teste.com', 'teste5', '$2y$10$/tcx8sYkxjzcnnD/bV5qOuV1fZOONgFHIi13kxWnPPnsk0PVRKdje'),
(16, 'Andre Sousa', 'andre.deoliveirasousa@yahoo.com', 'AndreXsousA', '$2y$10$HAXVa1FOJa7uFXKxxZmW9OdctzYJkcqahHNIoI6uIGm/U5zAU3Cd6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(5) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `titulo` char(100) CHARACTER SET latin1 DEFAULT NULL,
  `subtitulo` char(200) CHARACTER SET latin1 DEFAULT NULL,
  `texto` text CHARACTER SET latin1,
  `data` char(20) CHARACTER SET latin1 NOT NULL,
  `hora` char(20) CHARACTER SET latin1 NOT NULL,
  `autor` int(11) DEFAULT NULL,
  `relacionado` int(11) DEFAULT NULL,
  `img` char(100) CHARACTER SET latin1 DEFAULT NULL,
  `destaque` char(3) CHARACTER SET latin1 DEFAULT 'off',
  `imgDestaque` char(50) CHARACTER SET latin1 DEFAULT NULL,
  `validar` varchar(3) DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `tipo`, `titulo`, `subtitulo`, `texto`, `data`, `hora`, `autor`, `relacionado`, `img`, `destaque`, `imgDestaque`, `validar`) VALUES
(23, 1, 'Terceiro trailer serÃ¡ lanÃ§ado em breve', 'O filme tem estreia marcada para junho no Brasil.', '<p>O portal <em>Trailer Track</em> anunciou que o terceiro trailer de &ldquo;<strong>Jurassic World: Reino Amea&ccedil;ado</strong>&rdquo; ser&aacute; lan&ccedil;ado em breve, tendo a dura&ccedil;&atilde;o de 2 minutos e 30 segundos. Ainda n&atilde; h&aacute; uma data definida para a divulga&ccedil;&atilde;o do v&iacute;deo, mas especula-se que ele ser&aacute; lan&ccedil;ado nas pr&oacute;ximas semanas, podendo acompanhar a estreia de &ldquo;<em>Rampage: Destrui&ccedil;&atilde;o Total</em>&rdquo; ou de &ldquo;<em>Vingadores: Guerra Infinita</em>&ldquo;, que ser&atilde;o lan&ccedil;ados no m&ecirc;s de abril.</p>\r\n\r\n<p>O filme se passa alguns anos depois de &ldquo;<em>Jurassic World: O Mundo dos Dinossauros</em>&ldquo;, quando o&nbsp;vulc&atilde;o adormecido da ilha&nbsp;Nublar come&ccedil;a a rugir para a vida, fazendo com que Owen (Chris Pratt, de&ldquo;<em>Guardi&otilde;es da Gal&aacute;xia Vol.2</em>&ldquo;) e Claire (Bryce Dallas-Howard<strong>,&nbsp;</strong>de<strong>&nbsp;</strong>&ldquo;<em>Ouro&rdquo;</em>) montem uma campanha para resgatar os dinossauros restantes desse evento de n&iacute;vel de extin&ccedil;&atilde;o.</p>\r\n\r\n<p>O elenco tamb&eacute;m conta com Jeff Goldblum (<em>&ldquo;Thor:Ragnarok&rdquo;</em>),&nbsp;Ted Levine (&ldquo;<em>Little Boy &ndash; Al&eacute;m do Imposs&iacute;vel</em>&ldquo;), Rafe Spall (<em>&ldquo;X + Y&rdquo;</em>),&nbsp;Toby Jones (<em>&ldquo;At&ocirc;mica&rdquo;</em>),&nbsp;James Cromwell (&ldquo;<em>Marshall: Igualdade e Justi&ccedil;a</em>&ldquo;), B. D. Jones (da s&eacute;rie &ldquo;<em>Mr. Robot&rdquo;</em>),&nbsp;Daniella Pineda (&ldquo;<em>Mr. Roosevelt</em>&ldquo;),&nbsp;Geraldine Chaplin (&ldquo;<em>Sete Minutos Depois da Meia-Noite</em>&ldquo;) e&nbsp;Justice Smith (&ldquo;<em>Cidades de Papel</em>&ldquo;).</p>\r\n\r\n<p>&ldquo;Jurassic World: Reino Amea&ccedil;ado&rdquo; tem estreia marcada para 21 de junho de 2018.</p>\r\n', '06/04/2018', '22h22min', 12, 18, 'jurassicworld2.jpg', 'on', 'jurassicworld2_home.jpg', 'off'),
(24, 1, 'Novo filme de "Star Wars" sobre Han Solo terÃ¡ estreia no Festival de Cannes', 'Han Solo: Uma HistÃ³ria Star Wars", terÃ¡ sua estreia mundial no Festival de Cannes em maio, anunciaram os organizadores do evento nesta sexta-feira.', '<p>A estreia no tapete vermelho da cidade costeira francesa est&aacute; marcada para o dia 15 de maio, dez dias antes de o filme estrear em cinemas ao redor do mundo, disseram em comunicado.</p>\r\n\r\n<p>Publicidade</p>\r\n\r\n<p>&quot;Solo&quot; leva os espectadores de volta &agrave; juventude de Han Solo, um contrabandista, piloto e charmoso malandro, interpretado por Harrison Ford no filme original da saga &quot;Star Wars&quot; de 1977.</p>\r\n\r\n<p>Sua vers&atilde;o mais nova &eacute; interpretada pelo ator novato norte-americano Alden Ehrenreich.</p>\r\n\r\n<p>O Festival de Cannes &eacute; conhecido por exibir filmes art&iacute;sticos do mundo todo, mas a inclus&atilde;o de &quot;Solo&quot; n&atilde;o &eacute; sem precedentes. &quot;Star Wars: Epis&oacute;dio 2 - Ataque dos Clones&quot; foi exibido pelo evento em 2002, assim como &quot;A Vingan&ccedil;a dos Sith&quot; em 2005.</p>\r\n', '06/04/2018', '22h27min', 12, 13, 'hansolo1.jpg', 'off', '', 'off'),
(25, 1, 'Em campanha contra cÃ¢ncer, MercenÃ¡rio Tagarela adota versÃ£o rosa do uniforme', 'Em aÃ§Ã£o beneficente, traje Ãºnico serÃ¡ sorteado e renda serÃ¡ destinada Ã  ONG.', '<p>Uma campanha, pra l&aacute; de inesperada, juntou um dos anti-her&oacute;is mais querido do cinema e um tema pouco abordado em&nbsp;filmes <em>blockbusters</em>: c&acirc;ncer. Vestindo seu uniforme em uma in&eacute;dita vers&atilde;o rosa, <strong>Ryan Reynolds</strong> <em>(&ldquo;Dupla Explosiva</em>&ldquo;), que repetir&aacute; o papel do personagem-t&iacute;tulo em&nbsp;<strong>&ldquo;Deadpool 2&rdquo;</strong>, anunciou em v&iacute;deo uma a&ccedil;&atilde;o de doa&ccedil;&atilde;o &agrave; <a href="https://www.omaze.com/experiences/deadpool-suit?utm_source=youtube.com&amp;utm_medium=social&amp;utm_content=20thCenturyFox&amp;utm_campaign=experiences.deadpool-suit&amp;utm_term=PitchSTC&amp;oa_h=dej4r3">Omaze,</a> ONG dedicada &agrave; preven&ccedil;&atilde;o do c&acirc;ncer. Com uma doa&ccedil;&atilde;o de pelo menos US$ 10,00, &eacute; poss&iacute;vel fazer parte da campanha intitulada &lsquo;FUCK CANCER&rsquo;. Aqueles que se dispuserem a participar, entrar&atilde;o em um sorteio, onde o sortudo vencedor receber&aacute; o traje rosa do Mercen&aacute;rio. Veja o v&iacute;deo abaixo (em ingl&ecirc;s e sem legendas):</p>\r\n\r\n<blockquote>\r\n<p><em><strong>&rdquo;Quero falar de uma causa muito pr&oacute;xima a mim, o c&acirc;ncer. Omaze e eu estamos junto para promover uma campanha, a &lsquo;Fuck Cancer&rsquo;. Irei doar meu uniforme, enquanto darei a voc&ecirc; a chance de possuir uma bela recorda&ccedil;&atilde;o.&rdquo;</strong></em></p>\r\n</blockquote>\r\n\r\n<p>Al&eacute;m do retorno Reynolds como o mutante tagarela, a produ&ccedil;&atilde;o tem tamb&eacute;m a estreia de Cable (Josh Brolin, de &ldquo;<em>Ave, C&eacute;sar!</em>&ldquo;) e de Domin&oacute; (Zazie Beetz, de&nbsp;<em>&ldquo;Tempestade: Planeta em F&uacute;ria&rdquo;</em>&nbsp;). A sequ&ecirc;ncia ainda conta com os retornos de&nbsp;M&iacute;ssil Adolescente Megass&ocirc;nico (Brianna Hildebrand, da s&eacute;rie&nbsp;<em>&ldquo;</em><em>O</em>&nbsp;<em>Exorcista&rdquo;</em>), Colossus (Andre Tricoteux, de &ldquo;<em>Warcraft</em>&ldquo;) e Vanessa (Morena Baccarin, da s&eacute;rie &ldquo;<em>Gotham&rdquo;</em>). A atriz&nbsp;Shioli Kutsuna (&ldquo;<em>The Outsider&rdquo;</em>) e os atores Terry Crews (&ldquo;<em>Onde Est&aacute; o Dinheiro&rdquo;</em>) e Bill Skarsg&aring;rd (&ldquo;<em>It: A Coisa&rdquo;</em>) s&atilde;o outras novidades do elenco. A dire&ccedil;&atilde;o &eacute; de David Leitch (<em>&ldquo;</em><em>At&ocirc;mica&rdquo;</em>).</p>\r\n\r\n<p>&ldquo;Deadpool 2&rdquo; estreia em 17 de maio no Brasil.</p>\r\n', '06/04/2018', '22h32min', 12, 12, 'deadpool21.jpg', 'on', 'deadpoll21_home.jpg', 'on'),
(26, 1, 'Equipe tÃ©cnica do longa indica possÃ­vel apariÃ§Ã£o de Samuel L. Jackson', 'Personagem Nick Fury nÃ£o foi confirmado.', '<p>Apesar de <strong>Samuel L. Jackson </strong>ter <a href="https://omelete.com.br/filmes/noticia/vingadores-3-e-4-nao-tera-nick-fury-diz-samuel-l-jackson/" target="_blank">negado apari&ccedil;&atilde;o nos pr&oacute;ximos dois filmes</a> dos <em><strong>Vingadores</strong></em>, o <a href="http://www.slashfilm.com/nick-fury-in-infinity-war/" target="_blank"><em>Slash Films</em></a> notou que a lista de equipe t&eacute;cnica (dispon&iacute;vel no <a href="http://www.imdb.com/title/tt4154756/fullcredits/?ref_=tt_ov_st_sm" target="_blank"><em>Imdb</em></a>) de&nbsp;<strong><em><a href="https://omelete.com.br/filmes/vingadores-guerra-infinita/">Vingadores: Guerra Infinita</a>&nbsp;</em></strong> traz dois nomes com associa&ccedil;&atilde;o direta ao ator. S&atilde;o eles:</p>\r\n\r\n<p>- <strong>Jake Garber</strong>, listado com o maquiador de Samuel L. Jackson</p>\r\n\r\n<p>- <strong>Qualen Bradley</strong>, listado como o dubl&ecirc; de Samuel L. Jackson</p>\r\n\r\n<p>Uma chamada de dubl&ecirc;s anunciada no ano passado tamb&eacute;m aumentou rumores da apari&ccedil;&atilde;o do ator no filme (<a href="https://omelete.com.br/filmes/noticia/vingadores-4-chamada-de-dubles-indica-que-nick-fury-pode-aparecer-no-longa/" target="_blank">leia mais</a>).</p>\r\n\r\n<p>Nick Fury est&aacute; confirmado, no entanto, em&nbsp;<strong><em><a href="https://omelete.com.br/filmes/capita-marvel/" target="_blank">Capit&atilde; Marvel</a></em></strong>, que tem estreia marcada para 14 de mar&ccedil;o de 2019.&nbsp;</p>\r\n\r\n<p><em>Vingadores: Guerra&nbsp;Infinita&nbsp;</em>chega aos cinemas em&nbsp;<strong>26 de abril de 2018&nbsp;</strong>e&nbsp;<em>Vingadores 4</em>&nbsp;est&aacute; marcado para 2 de maio de 2019.&nbsp;</p>\r\n', '06/04/2018', '22h37min', 12, 9, 'vingadores3.jpg', 'off', 'vingadores3_home.jpg', 'off'),
(27, 1, 'Spielberg tentou, mas Lucasfilm nÃ£o permitiu referÃªncias a Star Wars', 'Jogador NÂ° 1 Ã© uma obra cheia de referÃªncias e alusÃµes a universos fantÃ¡sticos da cultura pop.', '<p>Na obra original, um personagem pilota uma <strong>X-Wing</strong> &mdash; a nave cl&aacute;ssica dos rebeldes em Star Wars &mdash; durante uma persegui&ccedil;&atilde;o dentro do OASIS. Ao adaptar a obra de <strong>Ernest Cline</strong> para as telas, o diretor Steven Spielberg at&eacute; tentou colocar essa cena no longa, mas a Lucasfilm vetou a ideia.</p>\r\n\r\n<p>Como <strong>Jogador N&deg; 1</strong> &eacute; uma adapta&ccedil;&atilde;o produzida pela Warner Bros., s&oacute; &eacute; permitido que a empresa use personagens e cria&ccedil;&otilde;es de propriedades intelectuais que ela det&eacute;m &mdash; como O Gigante de Ferro e Arlequina. Para outros casos &eacute; necess&aacute;rio obter uma autoriza&ccedil;&atilde;o por escrito dos est&uacute;dios concorrentes para que uma refer&ecirc;ncia visual seja colocada no filme &mdash; foi assim, por exemplo, com a apari&ccedil;&atilde;o da Tracer, de Overwatch.</p>\r\n\r\n<p>Havia uma pessoa do time de produ&ccedil;&atilde;o que trabalhou por v&aacute;rios anos apenas para lidar e negociar estas participa&ccedil;&otilde;es especiais. O produtor <strong>Kristie Macosko Krieger</strong> foi respons&aacute;vel por essa tarefa. Ao conversar com o p&uacute;blico em uma sess&atilde;o do filme no festival SXSW (via: <strong><a href="http://www.syfy.com/syfywire/ready-player-one-is-filled-with-nostalgia-but-disney-said-no-to-using-star-wars" target="_blank">syfy</a></strong>), <strong>Spielberg&nbsp;</strong>contou que descobriu que os direitos n&atilde;o seriam cedidos e comunicou o elenco da produ&ccedil;&atilde;o. O ator <strong>Ben Mendelsohn</strong> &mdash; que interpreta o vil&atilde;o Nolan Sorrento, de&nbsp;Jogador N&deg; 1, e interpretou&nbsp;Orson Krennic em Rogue One &mdash; brincou: &ldquo;voc&ecirc; deveria ter falado comigo. Eu constru&iacute; a Estrela da Morte.</p>\r\n\r\n<p><strong>Jogador N&ordm;1&nbsp;</strong>&eacute; um romance de Ernest Cline que est&aacute; sendo adaptado para os cinemas por Steven Spielberg. A hist&oacute;ria se passa no ano de 2044 e segue Wade Watts, um jovem que, assim como a maioria das pessoas de seu mundo, escapa da realidade em uma utopia virtual chamada Oasis e sonha em encontrar os tesouros escondidos ali.</p>\r\n\r\n<p>O longa ser&aacute; dirigido por Steven Spielberg e o elenco conta com <strong>Tye Sheridan, Olivia Cooke, Mark Rylance, Simon Pegg</strong> e <strong>Ben Mendelsohn.</strong></p>\r\n\r\n<p><strong>Jogador N&ordm;1&nbsp;</strong>tem estreia prevista para 5 de abril&nbsp;de 2018.</p>\r\n', '06/04/2018', '23h09min', 12, 10, 'jogador1news1.jpg', 'on', 'jogador1_home.jpg', 'off'),
(28, 2, 'Han Solo â€“ Uma HistÃ³ria Star Wars | O que a escolha do compositor diz sobre o filme', 'John Powell Ã© conhecido por seu trabalho em filmes infantis e blockbusters de aÃ§Ã£o.', '<p>Quando a <strong>Disney</strong> divulgou, finalmente, o trailer final de <em><strong><a href="https://omelete.com.br/filmes/han-solo/">Han Solo &ndash; Uma Hist&oacute;ria Star Wars</a></strong></em>, no &uacute;ltimo domingo, um dos elementos que mais chamou aten&ccedil;&atilde;o foi a trilha. Logo de cara, antes mesmo de qualquer personagem aparecer na tela, a pr&eacute;via fez algo que nenhum filme da franquia <strong>Star Wars</strong> havia feito at&eacute; hoje: come&ccedil;a com uma guitarra cortante e pegajosa, bem rock n&#39; roll. O distanciamento da trilha cl&aacute;ssica e &eacute;pica para algo arriscado neste modo pode ser mais um dos pontos controversos do filme, mas tem potencial, tamb&eacute;m, para se provar como uma de suas qualidades.</p>\r\n\r\n<p>Mudar qualquer quesito da franquia Star Wars &eacute; coisa s&eacute;ria.<strong> John Powell</strong>, compositor contratado para as m&uacute;sicas do novo filme, foi uma escolha ousada do est&uacute;dio, que j&aacute; tinha arriscado ao dedicar um filme &agrave;s ra&iacute;zes de um de seus personagens favoritos dos f&atilde;s, ainda colocando um ator pouco conhecido (e j&aacute; muito criticado). N&atilde;o &eacute; surpreendente que, no final do ano passado, a produ&ccedil;&atilde;o anunciou que, apesar da trilha ser de Powell, o tema principal do personagem ficar&aacute; nas seguras m&atilde;os do sempre elogiado, <strong>John Williams</strong>.</p>\r\n\r\n<p>Mas o cat&aacute;logo de Powell tem muito a dizer sobre ele, e sobre a sua escolha para o filme. O seu curr&iacute;culo &eacute; quase que exclusivamente feito de anima&ccedil;&otilde;es e filmes de a&ccedil;&atilde;o. Como um banco e preto, sua ficha t&eacute;cnica inclui:<em> Como Treinar Seu Drag&atilde;o, </em>a trilogia<em> Bourne, Shrek, Um Crime de Mestre, Rio, Hancock, Happy Feet, Sr. e Sra. Smith, Lorax, Encontro Explosivo, A Era do Gelo</em> e por a&iacute; vai. Seu hist&oacute;rico &eacute; claramente bem definido, e bem sustentado. Ele recebeu uma indica&ccedil;&atilde;o ao Oscar por seu trabalho em <em>Como Treinar Seu Drag&atilde;o</em>, em 2011, e tamb&eacute;m foi reverenciado pela trilha que criou para Bourne. Quando se trata de filmes de a&ccedil;&atilde;o, a cria&ccedil;&atilde;o de Powell para a trilogia de <strong>Matt Damon</strong> &eacute; diversas vezes usada como refer&ecirc;ncia moderna aos filmes de a&ccedil;&atilde;o.</p>\r\n\r\n<p>Ao contr&aacute;rio tamb&eacute;m dos americanos John Williams e <strong>Michael Giacchino</strong> (compositor de <em>Rogue One</em>), John Powell &eacute; brit&acirc;nico, e come&ccedil;ou sua carreira em trilhas sonoras no Reino Unido. Ao se mudar para os EUA, ele foi rapidamente contratado por ningu&eacute;m menos que <strong>Hans Zimmer</strong>: <em>&ldquo;Eu n&atilde;o conseguia fazer minha carreira decolar l&aacute;, ent&atilde;o eu aluguei um lugar na Calif&oacute;rnia para me dar um ano e ver o que acontecia. Depois de uma semana, recebi uma liga&ccedil;&atilde;o de Hans&rdquo;</em> [via <a href="https://www.independent.co.uk/arts-entertainment/classical/news/john-powell-interview-i-sold-myself-to-the-devil-just-a-bit-9466955.html" target="_blank"><em>Independent</em></a>]. Atrav&eacute;s da indica&ccedil;&atilde;o do pr&oacute;prio Zimmer, um dos maiores nomes na ind&uacute;stria, Powell conseguiu o trabalho em <em>A Outra Face</em>, e entrou oficialmente para a panelinha de Hollywood.</p>\r\n\r\n<p>Grande parte de suas escolhas de projetos vem de&nbsp;uma influ&ecirc;ncia curiosa, que ele explicou &agrave; <em><a href="http://variety.com/2014/music/news/composer-john-powells-passion-ranges-from-animation-to-live-action-1201161511/" target="_blank">Variety</a></em>:<em> &ldquo;Eu cresci vendo Mogli, e um monte de desenhos animados, Tom e Jerry. Eu amo a arte por tr&aacute;s da anima&ccedil;&atilde;o, prefiro do que filmes&rdquo;.</em> Esta refer&ecirc;ncia, casada com a capacidade de criar m&uacute;sicas de a&ccedil;&atilde;o, &eacute; o que dar&aacute; o tom de <em>Han Solo &ndash; Uma Hist&oacute;ria Star Wars</em>. Pode-se chegar a imaginar que a procura por um compositor que seja mestre em a&ccedil;&atilde;o e filmes infantis signifique que Han Solo, ao contr&aacute;rio de <em>Rogue One</em>, seja um filme cheio de lutas, mas com carisma de anima&ccedil;&atilde;o de <strong>Dreamworks</strong>. E, se bem realizada, a trilha tem tudo para dar certo.</p>\r\n\r\n<p>Claro que Powell pode se basear exclusivamente em seu hist&oacute;rico mais inclinado a&nbsp;<em>Jason Bourne</em>, mas querendo ou n&atilde;o, as composi&ccedil;&otilde;es precisam combinar com o tom de John Williams e n&atilde;o podem retirar a caracter&iacute;stica essencial de soar como <strong>Star Wars</strong>. Ainda, considerando seu foco nas anima&ccedil;&otilde;es nos anos recentes (em seus 10 &uacute;ltimos filmes, apenas 1 n&atilde;o foi anima&ccedil;&atilde;o, <em>Jason Bourne</em>, de 2015), Powell deve realmente trazer o peso da trilha mais caricata e menos tensa. &Agrave; <a href="http://collider.com/how-to-train-your-dragon-2-john-powell-interview/" target="_blank"><em>Collider</em></a>, ele disse que a raz&atilde;o para isso &eacute; uma relativa fadiga de trilhas de a&ccedil;&atilde;o atuais: <em>&ldquo;Funcionava bem no passado porque elas eram diferentes. &Eacute; dif&iacute;cil agora, pois todos me pedem para fazer a mesma coisa que eu fazia, e eu n&atilde;o acho mais interessante. Filmes de anima&ccedil;&atilde;o me permitem criar mais&rdquo;.</em> Ao mesmo tempo, Powell sabe a import&acirc;ncia das refer&ecirc;ncias: <em>&ldquo;Ningu&eacute;m escreve m&uacute;sicas realmente originais. Todo mundo escreve uma &oacute;tima vers&atilde;o de uma m&uacute;sica de outra pessoa, e usa de modo inovador&rdquo;.</em></p>\r\n\r\n<p>Parece que o projeto de <em>Han Solo &ndash; Uma Hist&oacute;ria Star Wars</em> seria uma escolha perfeita para o pr&oacute;prio Powell, que quer liberdade criativa mas <a href="https://synchrotones.wordpress.com/2013/05/01/interview-with-john-powell/" target="_blank">disse</a>, em 2014, querer voltar aos filmes de a&ccedil;&atilde;o quando achar o projeto certo: <em>&ldquo;quero voltar com um filme grande, interessante, com um som interessante para reinventar algumas coisas&rdquo;</em>. Resta saber se Powell realmente &eacute; a escolha certa para fazer isso com o novo filme da saga.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '10/04/2018', '19h53min', 12, 13, 'hansolo_artigo.jpg', 'off', '', 'off'),
(29, 2, 'Jogador NÃºmero 1 â€“ Ernest Cline', 'Cinco estranhos e uma coisa em comum: a caÃ§a ao tesouro. Achar as pistas nesta guerra definirÃ¡ o destino da humanidade.', '<p>Em um futuro n&atilde;o muito distante, as pessoas abriram m&atilde;o da vida real para viver em uma plataforma chamada Oasis. Neste mundo dist&oacute;pico, pistas s&atilde;o deixadas pelo criador do programa e quem ach&aacute;-las herdar&aacute; toda a sua fortuna. Como a maior parte da humanidade, o jovem Wade Watts escapa de sua mis&eacute;ria em Oasis. Mas ter achado a primeira pista para o tesouro deixou sua vida bastante complicada. De repente, parece que o mundo inteiro acompanha seus passos, e outros competidores se juntam &agrave; ca&ccedil;ada. S&oacute; ele sabe onde encontrar as outras pistas: filmes, s&eacute;ries e m&uacute;sicas de uma &eacute;poca que o mundo era um bom lugar para viver. Para Wade, o que resta &eacute; vencer &ndash; pois esta &eacute; a &uacute;nica chance de sobreviv&ecirc;ncia.</p>\r\n\r\n<p>O ano &eacute; 2044, o planeta em que vivemos entrou em colapso, guerras constantes, recursos naturais chegando pr&oacute;ximo a seus limites trouxeram consequ&ecirc;ncias avassaladoras na vida das pessoas. Grande parte da popula&ccedil;&atilde;o vive com fome, medo, o cen&aacute;rio &eacute; dist&oacute;pico, a anarquia reina nas regi&otilde;es mais afastadas dos grandes centros. Wade Owen Watts &eacute; um jovem &oacute;rf&atilde;o de 18 anos que vive em um dos parques de trailers espalhados pela cidade com sua desprez&iacute;vel tia e outras tantas pessoas, um amontoado de ve&iacute;culos uns sobre os outros, formando um grotesco conglomerado de pr&eacute;dios de metais e latas onde vivem a popula&ccedil;&atilde;o mais afetada. O cen&aacute;rio &eacute; desolador, crimes dos mais variados tipos s&atilde;o cometidos diariamente, n&atilde;o h&aacute; seguran&ccedil;a e muito menos puni&ccedil;&atilde;o aos infratores.</p>\r\n\r\n<p>A vida de todos seria muito mais desastrosa, caso n&atilde;o existisse o OASIS, plataforma de jogo online mundial, abrangente, com uma mistura elevado a n&iacute;veis estratosf&eacute;ricos de The Sims com MMO (Massive Multiplayer Online), no universo do OASIS existem centenas de mundos onde voc&ecirc; pode estudar, trabalhar, ser quem quiser, ir onde desejar (desde que tenha recursos para tal) e construir toda uma vida dentro do jogo com o seu personagem. O limiar entre o mundo real e o digital torna-se mais t&ecirc;nue.</p>\r\n\r\n<p>James Holliday, criador da plataforma OASIS ao lado de seu amigo e co-criador Ogden Morrow s&atilde;o os respons&aacute;veis por este sucesso e nerds de carteirinha, Holliday &eacute; aficionado pelos anos 80 e constr&oacute;i grande parte do OASIS com claras refer&ecirc;ncias &agrave; &eacute;poca, e quando James morre e deixa em seu testamento todas as suas posses e sua riqueza avaliada em mais de 240 bilh&otilde;es de d&oacute;lares &agrave; merc&ecirc; de quem descobrir e alcan&ccedil;ar o famoso ovo dourado, para isso a pessoa ter&aacute; de solucionar diversos enigmas e atravessar 3 port&otilde;es criados por Jim para ter acesso ao pr&ecirc;mio final, milh&otilde;es de pessoas partem para uma busca desenfreada rumo ao sucesso. Wade &eacute; um destes ca&ccedil;a-ovos (termo designado aos jogadores) que vive a maior parte do seu tempo ca&ccedil;ando informa&ccedil;&otilde;es e enigmas que possam leva-lo ao pr&ecirc;mio final.</p>\r\n\r\n<p>Jogador N&ordm; 1 &eacute; um livro que mostra v&aacute;rias facetas de g&ecirc;neros ao longo da narrativa, as primeiras 100 p&aacute;ginas destacam a situa&ccedil;&atilde;o do mundo com vi&eacute;s dist&oacute;pico, a pobreza latente e as dificuldades pelas quais ele se mant&eacute;m. A partir do momento que acompanhamos Wade na busca pelo Ovo, a Fantasia e a Fic&ccedil;&atilde;o Cient&iacute;fica unem-se umas &agrave;s outras de maneira espetacular. O livro &eacute; recheado (e bota recheado nisso) de refer&ecirc;ncias a jogos, filmes, quadrinhos, m&uacute;sicas e cultura dos anos 80, se voc&ecirc; leitor viveu nesta &eacute;poca certamente ir&aacute; submergir no sentimento de nostalgia. Em diversos momentos iremos nos divertir com as trapalhadas e pensamentos dignos de um garoto com 18 anos, em outros ficaremos apreensivos quando nosso protagonista enfrentar&aacute; problemas que parecem leva-lo al&eacute;m de suas capacidades. Os demais personagens s&atilde;o envolventes e precisos, e aos poucos Art3mis, Aech Daito e Shoto ganham notoriedade e import&acirc;ncia, visto que todos almejam a mesma coisa, o Ovo Dourado.</p>\r\n', '10/04/2018', '20h33min', 12, 10, 'jogador1_artigo.jpg', 'off', '', 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_FK_relacionado` (`relacionado`),
  ADD KEY `FK_ID_autor` (`autor`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `noticias_ibfk_2` FOREIGN KEY (`relacionado`) REFERENCES `filmes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
