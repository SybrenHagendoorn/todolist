CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todolist`;

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(50) DEFAULT NULL,
  `task_id` varchar(50) DEFAULT NULL,
  `task_description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `list` (`list_id`, `list_name`, `task_id`, `task_description`) VALUES
(1, 'blablabla');
