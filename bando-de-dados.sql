-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webdev
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nota` int(2) NOT NULL,
  `mensagem` text NOT NULL,
  `serie_id` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` VALUES (1,'Rodrigo Machado',4,'Muito Bom',1,'2021-07-21'),(2,'Rodrigo Machado',5,'Muito Bom',2,'2021-07-25');
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `diretor` varchar(255) NOT NULL,
  `lancamento` varchar(10) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'Breaking Bad','beaking-bad','Ação','Vince Gilligan','2008','5 temporadas','2021-06-19','capa_serie_1','O novo drama \"Breaking Bad\" narra a história de Walter White (Bryan Cranston), um humilde professor de química que vê sua vida se transformar quando descobre ser portador de um câncer terminal. ... ele começa a usar suas habilidades em química a favor do crime, montando um laboratório de drogas para financiar seus anseios.'),(2,'Stranger Things','stranger-things','Suspense','Mat Duffer','2016','4 temporadas','2021-06-19','capa_serie_2','Stranger Things é uma série sobrenatural de ficção científica criada pelos irmãos Duffer para a Netflix. Situada na cidade ficcional de Hawkins, Indiana, a trama começa no ano de 1983 com o desaparecimento do garoto Will.'),(3,'La Casa de Papel','la-casa-de-papel','Drama','Alex Pina','2017','4 temporadas','2021-06-19','capa_serie_3','Oito ladrões se trancam com reféns na Casa da Moeda da Espanha. Seu líder manipula a polícia para realizar um plano. Será o maior roubo da história, ou uma missão em vão?'),(4,'Game of Thrones','game-of-thrones','Drama','Mark Huffam','2009','8 temporadas','2021-06-19','capa_serie_4','Game of Thrones conta a históra de um lugar onde uma força destruiu o equilíbrio das estações, há muito tempo. Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, as reivindicações e as forças sobrenaturais correm as portas do Reino dos Sete Reinos.'),(5,'Sons of Anarchy','sons-of-anarchy','Drama','Kurt Sutter','2008','7 temporadas','2021-07-22','capa_serie_5','Uma gangue de motoqueiros segue suas próprias leis e comanda, por debaixo dos panos, o tráfico de armas na região da aparentemente pacata da cidade de Charming, protegendo-a contra forasteiros hostis.'),(6,'Band Of Brothers','band-of-brothers','Guerra','Tom Hanks','2001','1 temporada','2021-07-22','capa_serie_6','Band of Brothers acompanha a história da \"E\" Easy Company, o 506º Regimento da 101ª Divisão Aerotransportada, desde o treinamento inicial da equipe, em 1942, até o final da 2ª Guerra Mundial. Com um papel primordial para a resolução do conflito, eles foram uma das unidades de maior sucesso na história militar americana.'),(7,'The Flash','the-flash','Ação','Greg Berlanti','2014','7 temporadas','2021-07-22','capa_serie_7','Acompanhe as aventuras do homem mais veloz do planeta, o cientista da Central City Police Barry Allen, que após um trágico acidente adquire o poder da velocidade.'),(8,'Prison Break','prison-break','Drama','Paul Scheuring','2005','5 temporadas','2021-07-22','capa_serie_8','Michael Scofield é um homem desesperado em uma situação desesperada. Seu irmão, Lincoln Burrows, foi condenado por um crime que não cometeu e colocado no corredor da morte. Michael rende um banco para conseguir ser encarcerado junto ao irmão na penitenciária estadual de Fox River e coloca em ação uma série de planos elaborados para permitir a fuga de Lincoln e provar sua inocência. Mesmo fora da prisão, seus perigos não acabam -- os irmãos precisam fugir para evitar a recaptura e lutar contra uma intricada conspiração policial que coloca a vida de todo mundo em risco.'),(9,'Mayans MC','mayans-mc','Crime','Kurt Sutter','2018','2 temporadas','2021-07-22','capa_serie_9','Ezekiel Reyes é um jovem muito inteligente cujo futuro é arruinado por um cartel. Depois de passar dois anos e meio na prisão, ele promete se vingar.'),(10,'Coringa','coringa','Crime','Todd Philips','2019','2 horas','2021-07-22','capa_filme_10','Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.'),(11,'Venom','venom','Aventura','Andy Serkis','2018','1h 52min','2021-07-22','capa_filme_11','Em Venom, Eddie Brock (Tom Hardy) é um jornalista investigativo, que tem um quadro próprio em uma emissora local. Um dia, ele é escalado para entrevistar Carlton Drake (Riz Ahmed), o criador da Fundação Vida, que tem investido bastante em missões espaciais de forma a encontrar possíveis usos medicinais para a humanidade. Após acessar um documento sigiloso enviado à sua namorada, a advogada Anne Weying (Michelle Williams), Brock descobre que Drake tem feito experimentos científicos em humanos. Ele resolve denunciar esta situação durante a entrevista, o que faz com que seja demitido. Seis meses depois, o ainda desempregado Brock é procurado pela dra. Dora Skirth (Jenny Slate) com uma denúncia: Drake estaria usando simbiontes alienígenas em testes com humanos, muitos deles mortos como cobaias.'),(12,'Aves de Rapina','aves-de-rapina','Aventura','Cathy Yan','2020','1h 49min','2021-07-22','capa_filme_12','Em Aves de Rapina - Arlequina e sua Emancipação Fantabulosa, Arlequina (Margot Robbie), Canário Negro (Jurnee Smollett-Bell), Caçadora (Mary Elizabeth Winstead), Cassandra Cain e a policial Renée Montoya (Rosie Perez) formam um grupo inusitado de heroínas. Quando um perigoso criminoso começa a causar destruição em Gotham, as cinco mulheres precisam se unir para defender a cidade.');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 14:27:34
