http://alexcytek.blogspot.com/2013/10/crear-un-blog-con-codeigniter-parte-1.html

 CREATE TABLE IF NOT EXISTS `entries` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `permalink` VARCHAR(100) NOT NULL,
  `author` VARCHAR(50) NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `tags` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


 CREATE TABLE IF NOT EXISTS `comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_blog` INT(11) NOT NULL,
  `author` VARCHAR(50) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;