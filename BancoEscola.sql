-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para escola
DROP DATABASE IF EXISTS `escola`;
CREATE DATABASE IF NOT EXISTS `escola` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `escola`;

-- Copiando estrutura para tabela escola.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL DEFAULT '0',
  `cidade` varchar(250) NOT NULL DEFAULT '0',
  `sexo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela escola.alunos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`codigo`, `nome`, `cidade`, `sexo`) VALUES
	(7, 'Marcelo', 'Pariquera', 'Masculino'),
	(8, 'Afonso', 'Registro', 'Masculino'),
	(9, 'Ana', 'Registro', 'Feminino'),
	(10, 'Alessauro', 'Registro', 'Feminino'),
	(11, 'Eduardo', 'Registro', 'Masculino'),
	(12, 'Murilo', 'Registro', 'Masculino'),
	(17, 'Lucas', 'Parisquera', 'Masculino'),
	(18, 'Pedro', 'Registro', 'Feminino'),
	(19, 'Marcelo', 'Conchal', 'Masculino');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
