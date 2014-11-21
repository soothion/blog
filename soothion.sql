-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-06-25 16:56:30
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soothion`
--

-- --------------------------------------------------------

--
-- 表的结构 `soothion_admins`
--

CREATE TABLE IF NOT EXISTS `soothion_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- 转存表中的数据 `soothion_admins`
--

INSERT INTO `soothion_admins` (`id`, `username`, `password`) VALUES
(1, 'soothion', '8a5f1b8a54db96cec95bf3e67c7ae6f5');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_blog`
--

CREATE TABLE IF NOT EXISTS `soothion_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `soothion_blog`
--

INSERT INTO `soothion_blog` (`id`, `category`, `alias`, `title`, `thumb`, `content`, `addtime`) VALUES
(1, '1', 'about', 'about us', '', 'content', '2014-06-24 06:34:02'),
(2, '3', 'php', 'php', 'thumb', 'content', '2014-06-24 07:29:54'),
(3, '1', 'Introduction', 'Introduction', '', '# Introduction\r\n\r\n- [Where To Start](#where-to-start)\r\n- [Laravel Philosophy](#laravel-philosophy)\r\n\r\n<a name="where-to-start"></a>\r\n## Where To Start\r\n\r\nLearning a new framework can be daunting, but it''s also exciting. To smooth your transition, we''ve attempted to create very clear, concise documentation for Laravel. Here are some recommendations for what to read first:\r\n\r\n- [Installation](/docs/installation) and [Configuration](/docs/configuration)\r\n- [Routing](/docs/routing)\r\n- [Requests & Input](/docs/requests)\r\n- [Views & Responses](/docs/responses)\r\n- [Controllers](/docs/controllers)\r\n\r\nAfter reading through these documents, you should have a good grasp on basic request / response handling in Laravel. Next, you may wish to read about [configuring your database](/docs/database), the [fluent query builder](/docs/queries), and the [Eloquent ORM](/docs/eloquent). Or, you may wish to read about [authentication and security](/docs/security) so you can start signing people into your application.\r\n\r\n<a name="laravel-philosophy"></a>\r\n## Laravel Philosophy\r\n\r\nLaravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.\r\n\r\nLaravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we''ve attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.\r\n\r\nLaravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.\r\n', '2014-06-24 13:28:16'),
(4, '1', 'blog', 'blog', '', 'blog', '2014-06-25 07:37:18');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_category`
--

CREATE TABLE IF NOT EXISTS `soothion_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `soothion_category`
--

INSERT INTO `soothion_category` (`id`, `title`) VALUES
(1, '系统'),
(2, '博客'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_config`
--

CREATE TABLE IF NOT EXISTS `soothion_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `keyword` varchar(100) CHARACTER SET utf8 NOT NULL,
  `des` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(250) CHARACTER SET utf8 NOT NULL,
  `copyright` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `soothion_config`
--

INSERT INTO `soothion_config` (`id`, `title`, `keyword`, `des`, `tag`, `copyright`) VALUES
(1, '火焰雨', '', '', '', 'COPYRIGHT@火焰雨. ');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_module`
--

CREATE TABLE IF NOT EXISTS `soothion_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `soothion_module`
--

INSERT INTO `soothion_module` (`id`, `title`, `content`) VALUES
(1, 'header', '    <div class="boxed">\r\n        <!-- tagline -->\r\n        <div id="tagline" class="animated bounceInUp">\r\n            <h1>The PHP Framework For Web Artisans.</h1>\r\n            <h2>PHP That Doesn''t Hurt. Code Happy & Enjoy The Fresh Air.</h2>\r\n        </div>\r\n        <!-- /tagline -->\r\n\r\n        <!-- callto action -->\r\n        <div id="callto" class="animated bounceInLeft">\r\n            <a href="docs/quick" class="button large animated shake">博客</a>\r\n            <a href="http://laracon.eu" class="button large animated shake">案例</a>\r\n            <a href="https://forge.laravel.com" class="button large animated shake">联系</a>\r\n        </div>\r\n        <!-- /callto action -->\r\n\r\n        <!-- ui -->\r\n        <div class="animated fadeIn" id="header_image" style="background: url(assets/img/sublime.png) top center no-repeat;"></div>\r\n        <!-- /ui -->\r\n    </div>'),
(2, 'page', '<article class="boxed">\r\n            <ul class="feature-box nolist">\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-random"></i> <a title="RESTful Routing" href="docs/routing">RESTful Routing</a></h2>\r\n                    <p>Use simple Closures to respond to requests to your application. It couldn''t be easier to get started building amazing applications.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-graph"></i> <a title="Command Your Data" href="docs/eloquent">Command Your Data</a></h2>\r\n                    <p>Ships with the amazing Eloquent ORM and a great migration system. Works great on MySQL, Postgres, SQL Server, and SQLite.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-pencil-alt"></i> <a title="Beautiful Templating" href="docs/templates">Beautiful Templating</a></h2>\r\n                    <p>Use native PHP or the light-weight Blade templating engine. Blade provides great template inheritance and is blazing fast. You''ll love it.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-time"></i> <a title="Ready For Tomorrow" href="docs/routing">Ready For Tomorrow</a></h2>\r\n                    <p>Build huge enterprise applications, or simple JSON APIs. Write powerful controllers, or slim RESTful routes. Laravel is perfect for jobs of all sizes.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-cog"></i> <a title="Proven Foundation" href="http://www.symfony.com">Proven Foundation</a></h2>\r\n                    <p>Laravel is built on top of several Symfony components, giving your application a great foundation of well-tested and reliable code.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-star"></i> <a title="Composer Powered" href="http://getcomposer.org">Composer Powered</a></h2>\r\n                    <p>Composer is an amazing tool to manage your application''s third-party packages. Find packages on Packagist and use them in seconds.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-group"></i> <a title="Great Community" href="http://laravel.io/forum">Great Community</a></h2>\r\n                    <p>Whether you''re a PHP beginner or architecture astronaut, you''ll fit right in. Discuss ideas in the IRC chat room, or post questions in the forum.</p>\r\n                </li>\r\n                <li class="one_quarter">\r\n                    <h2><i class="icon-wrench"></i> <a title="Red, Green, Refactor" href="docs/testing">Red, Green, Refactor</a></h2>\r\n                    <p>Laravel is built with testing in mind. Stay flexible with the IoC container, and run your tests with PHPUnit. Don''t worry... it''s easier than you think.</p>\r\n                </li>\r\n            </ul>\r\n        </article>'),
(3, 'quotes', '   <article class="boxed">\r\n       <ul id="quote" class="nolist textcenter aligncenter">\r\n           <li class="animated flipInX">\r\n               <div class="quote"><p>Laravel has changed my life. The best framework to quickly turn an idea into product.</p></div>\r\n               <div class="person">Maksim Surguy</div>\r\n           </li>\r\n           <li class="animated flipInX">\r\n               <div class="quote"><p>Laravel reignited my passion for code, reinforced my understanding of MVC, and made development fun again!</p></div>\r\n               <div class="person">Jozef Maxted</div>\r\n           </li>\r\n           <li class="animated flipInX">\r\n               <div class="quote"><p>Laravel kept me from leaving PHP.</p></div>\r\n               <div class="person">Michael Hasselbring</div>\r\n           </li>\r\n           <li class="animated flipInX">\r\n               <div class="quote"><p>Laravel helped me stop reinventing the wheel!</p></div>\r\n               <div class="person">Ryan McDonough</div>\r\n           </li>\r\n       </ul>\r\n   </article>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
