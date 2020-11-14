-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 07:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejurysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_submits`
--

CREATE TABLE `case_submits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caseName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caseDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `caseStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_submits`
--

INSERT INTO `case_submits` (`id`, `caseName`, `caseDescription`, `caseStatus`, `created_at`, `updated_at`) VALUES
(4, 'test3', 'test3 description', 1, '2020-05-14 11:14:40', '2020-05-14 11:14:40'),
(5, 'Accident', 'Accident Description', 0, '2020-05-15 08:18:06', '2020-05-15 08:18:06'),
(6, 'Accident 2.0', 'Accident 2.0', 0, '2020-05-15 08:19:11', '2020-05-15 15:10:25'),
(207, 'Non autem cumque dolorem quia et veniam in.', 'Exercitationem sapiente et quam iste ex qui. Ipsum deserunt neque aut dolorum quo qui omnis animi. Nostrum fugit nesciunt non.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(208, 'Magni odit quasi voluptatibus velit consequuntur ad.', 'Pariatur possimus quidem occaecati atque aut. Voluptates velit non repellat inventore. Porro omnis explicabo assumenda dolor neque velit nesciunt temporibus.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(209, 'adbads', 'Doloribus labore harum vel nulla tempore quo error. Impedit sed consequatur in veniam. Consectetur doloribus dolorem inventore voluptates aut est. Dolor velit quis magnam necessitatibus dicta.', 0, '2020-05-15 17:07:15', '2020-05-18 01:50:11'),
(210, 'Ut veniam illo quia explicabo quaerat vel adipisci enim.', 'Id quia quam ut omnis accusantium. Aliquam alias aspernatur quidem quia. Temporibus dolor nostrum fuga debitis est ut non. Et qui recusandae nostrum et vitae hic.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(211, 'Corrupti autem ea eum odio velit enim sit.', 'Rerum voluptas dolorem consectetur. Minima at ipsa illum et temporibus omnis. Aspernatur aut ducimus ut iusto tempore doloribus optio.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(212, 'Recusandae est quia unde autem aliquam quaerat dolore.', 'Earum in quas quia at. Occaecati error corporis sit consequuntur ut ut ut. Ullam expedita voluptatem tenetur delectus consequuntur aperiam. In illo quia qui enim modi illum.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(213, 'Id animi sunt eligendi ipsa consequatur.', 'Et praesentium maiores minima voluptates qui delectus. Omnis veniam eveniet modi id quam sit. Ea est sed modi sint sint maiores. Vitae non excepturi ut enim sit.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(214, 'Soluta numquam numquam hic magni fugiat.', 'Nihil necessitatibus rerum illo praesentium modi. Praesentium reprehenderit porro in minus qui eius autem rerum. Deserunt quo ut qui eaque possimus magnam inventore.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(215, 'Labore dicta voluptates itaque labore esse id ipsam.', 'Maiores vel ex ratione error eos ab sit. Et sed molestias assumenda quisquam. Et quo aspernatur saepe beatae saepe.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(216, 'Et voluptatum velit et.', 'Eos dolores molestiae ullam dignissimos vel voluptatem aut. Voluptates culpa facere voluptatem.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(217, 'Voluptatem qui magnam incidunt harum.', 'Sit ut quisquam sit eum assumenda. Ipsum et voluptatem qui unde soluta aut. Rerum vitae qui aut pariatur.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(218, 'Unde non nam officiis ut vero voluptatum ea.', 'Id quaerat et totam itaque. Autem omnis et at voluptates. Consequatur ipsum vel ut nam vel. Tempore qui illum repellat in hic.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(219, 'Excepturi ipsa suscipit quidem est minus.', 'Voluptas consectetur repellat cumque ipsam sapiente deserunt accusantium. Cupiditate earum in itaque blanditiis. Rerum et ut perferendis fugit quis quo mollitia.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(220, 'Voluptates et ea rem ratione tempore.', 'Dolores voluptatem molestiae rerum quisquam eius distinctio impedit. Non mollitia odit repellendus amet beatae qui totam.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(221, 'Perferendis commodi voluptates quisquam et architecto.', 'Vel harum est officiis dolorem libero dolorem quae mollitia. Eligendi magni tenetur enim iure omnis. Nobis ratione animi commodi dolores rem eos ut.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(222, 'Assumenda sint alias deleniti.', 'Reiciendis dolor fugiat vel ut est eaque qui laborum. Molestiae repudiandae quia quis et sapiente facere. Et quos exercitationem fugit illo autem.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(223, 'Exercitationem dolor dicta perspiciatis repellendus.', 'Nihil et non placeat quidem. Iure velit laboriosam id ad dolor perferendis. Maiores architecto porro animi qui est dolorum est nihil. Excepturi facilis qui qui cum sint voluptatum.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(224, 'Dolores ipsa sed error officia nobis.', 'Voluptatem porro cum sit molestiae non sit pariatur. Veritatis corrupti recusandae est. Voluptatem veritatis perspiciatis ab cupiditate. Id maiores voluptas velit quo eos harum qui.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(225, 'Dicta mollitia et consequatur aspernatur id aut.', 'Ratione doloribus fuga est ipsa iusto. Vitae distinctio ex doloribus eius nobis voluptatem.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(226, 'Voluptatum ipsam alias error magni at autem dolor.', 'Maiores totam qui et quia minima est. Quaerat ut quam vitae et. Rerum accusamus fugit beatae iure vero et ipsa. Tenetur ea dolorum eligendi architecto sit eaque.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(227, 'Dolorem perspiciatis ut iure velit unde dignissimos est.', 'Fugiat dolorem iusto qui laboriosam. Quia magnam nam suscipit ut qui nihil suscipit. Repellendus sed rerum error. Architecto dicta et et.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(228, 'Nobis non accusantium explicabo error.', 'Vel tempore distinctio in. Ducimus sapiente laborum nisi assumenda. Sunt qui voluptas molestiae aperiam ut nesciunt.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(229, 'Commodi reiciendis ipsam qui maxime voluptatem facere.', 'Ut quis modi aspernatur blanditiis quia pariatur quia. Sint molestias officiis accusamus nam. Maxime qui necessitatibus nam blanditiis voluptates est quasi.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(230, 'Qui et beatae exercitationem.', 'Nulla odit illum non et aliquam error nam. Quod quas neque error voluptates aut ipsum sit. Vitae laborum soluta rerum eius maiores.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(231, 'Perspiciatis sit et fugiat.', 'Et fuga dolore nihil vitae. Temporibus vero neque id officiis voluptatibus.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(232, 'Quo possimus nulla et magnam inventore at.', 'Eligendi facere voluptas est omnis. Possimus vero ratione totam omnis qui sit corrupti dolor. Delectus odio qui pariatur cupiditate. Aliquid aut qui enim aut quaerat doloremque dolorem.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(233, 'Autem quia dolores in.', 'Temporibus perferendis eum occaecati iste occaecati fugit enim. Nihil est optio ullam consequatur ex at.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(234, 'Excepturi ut voluptatem incidunt ducimus.', 'Quaerat aut sint voluptatibus iusto animi. Adipisci sint explicabo eos fugit est fugit. Hic animi repudiandae distinctio non.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(235, 'Repellendus nisi voluptatum numquam excepturi consequatur ut qui.', 'Dolores sunt aut praesentium est sed iusto. Labore assumenda aliquid dicta perspiciatis repellendus soluta non. Veniam ducimus qui a rerum. Qui iusto aut qui aut.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(236, 'Aperiam alias quam ad dolorum eos vero fuga.', 'In at aperiam harum asperiores. Quaerat eos enim quis quis unde quidem. Maxime consequuntur sunt ut deserunt.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(237, 'Doloribus qui non quia et dicta quasi.', 'Qui dolor molestiae aut magni. Voluptate minus vitae itaque et ut pariatur. Delectus ad consequatur et earum qui porro.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(238, 'Adipisci eum quibusdam voluptatibus ea sit blanditiis dolore.', 'Rerum id suscipit ut sed saepe. Omnis ut voluptatum facere mollitia asperiores possimus. Distinctio sit quaerat recusandae et placeat in dolorum assumenda. Excepturi aut veniam sed et sed.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(239, 'Dolores est rerum voluptatibus omnis modi modi.', 'Omnis sit laudantium repellendus praesentium. Excepturi beatae et repellendus culpa. Suscipit qui aut in voluptates.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(240, 'Temporibus aliquam sit in quas dolorem id.', 'Inventore ut velit quia assumenda inventore non. Dolor quae fuga aut aut est doloremque. Adipisci quam assumenda omnis excepturi sed. Eligendi ipsam assumenda enim et esse.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(241, 'Ratione quod odit sed fugiat maxime ut.', 'Doloribus natus et autem omnis veniam omnis. Sunt voluptatibus quos corporis. Nesciunt eum et quis molestias illum.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(242, 'Animi vel natus sed numquam voluptas inventore assumenda.', 'Numquam natus nemo veniam voluptas qui voluptate iusto qui. Tenetur sed dolores doloribus tenetur odit. Harum totam aut quam molestiae nostrum. Molestiae iure iure quasi perferendis vitae molestias.', 1, '2020-05-15 17:07:15', '2020-05-15 17:07:15'),
(243, 'Fuga ut vel quia ipsum repudiandae nostrum in aut.', 'Labore temporibus debitis officia non enim. Tempora dolor harum eveniet rem. Reiciendis aut in quo ad incidunt. Sed est sed sed et. Voluptas dolor aspernatur aut ratione.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(244, 'Aut est explicabo et beatae.', 'Vel exercitationem in minima est mollitia. Et eos voluptatem ratione in veritatis accusantium. Reprehenderit esse laboriosam incidunt voluptatibus et accusamus.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(245, 'Harum quam possimus recusandae necessitatibus assumenda.', 'Illo quis facere aliquam iusto autem pariatur molestiae. Atque eos saepe quidem ut voluptatem. Possimus perferendis qui ut nihil. Veniam quia est ut ut.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(246, 'Ipsa animi sapiente accusamus.', 'A earum quia qui rem tenetur sunt. Qui quo ea provident illo similique voluptatem. Dolores id at id corporis quia. Et laudantium reiciendis illo quis sit quos distinctio eum.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(247, 'Explicabo dolorem vero molestiae magni dolorum molestias qui.', 'Suscipit vel pariatur earum. Alias a recusandae voluptas non rem. Possimus voluptas molestiae in voluptatem voluptates impedit incidunt optio.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(248, 'Maiores dolorem facilis et veritatis aperiam.', 'Qui unde dolor est ipsam dolorem. Delectus itaque omnis alias quas. Natus quae cum veritatis temporibus et.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(249, 'Maiores molestiae et optio accusantium.', 'Iure natus est dolorum consectetur. Rem distinctio hic nostrum a omnis molestiae. Expedita ducimus quisquam qui sequi.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(250, 'Minima quas sit earum quas omnis cum deleniti.', 'Et eos animi et magni. Libero unde sunt reprehenderit quia molestiae. Ex corrupti reiciendis corporis.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(251, 'Impedit eum velit fugit repellat nemo laboriosam et.', 'Veniam ipsum quia quia deserunt doloremque assumenda. Molestiae consectetur est aut molestiae et magni a distinctio. Ipsum odit assumenda voluptas corporis.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(252, 'Aperiam sapiente temporibus nihil consequuntur omnis commodi maxime.', 'Asperiores est modi quis consequatur non neque porro fugiat. Nesciunt consequatur et eaque iste et. Quam molestiae aut explicabo. Suscipit doloribus et ad tempora.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(253, 'Et quae perspiciatis fugit natus.', 'Odio accusantium error est omnis maiores cupiditate. Nobis ut debitis voluptatibus aliquam mollitia sint laborum. Voluptas maiores minus minus et occaecati. Id delectus et quaerat iste.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(254, 'Quibusdam facere reprehenderit sed reiciendis sed dolores tempore.', 'Provident accusamus eum nemo necessitatibus quis. Sed delectus molestiae aliquid odit expedita est. Eveniet reprehenderit rerum dolores nobis. Perferendis repudiandae eum fugiat aut harum.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(255, 'Rerum quo commodi architecto labore.', 'Unde sed accusantium est et et. Aut enim repudiandae est dolorem sint. Non optio rem necessitatibus dolore voluptas necessitatibus.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(256, 'Qui sint odio esse asperiores.', 'Ducimus vel quibusdam in vitae. Aliquam numquam maiores enim neque beatae. Quaerat expedita dolorem voluptas et doloribus sed. Laboriosam repudiandae laudantium incidunt et dicta libero.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(257, 'Sapiente vel et blanditiis est nisi porro nam.', 'Illum qui tempore inventore. Placeat cum incidunt quia dolorem non sed. Error veniam eaque alias sunt cum est. Qui accusantium ut omnis sapiente voluptate saepe.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(258, 'Dignissimos nostrum voluptatibus nulla enim atque.', 'Dicta expedita quidem aliquam non rerum esse dolorem. Iusto in nobis error nemo mollitia delectus. Voluptatem est nihil libero in et. Et voluptas quasi temporibus omnis.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(259, 'Consequuntur cum explicabo et.', 'Eius repellendus et qui tempore. Totam eos sapiente numquam sunt itaque quia. Sed dolor est sed qui. Repudiandae veniam velit alias placeat fugit exercitationem itaque.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(260, 'Saepe omnis odio nisi omnis odio facilis.', 'Vel consequatur quo sint earum facilis iste. Aut ipsam voluptates qui cumque quisquam necessitatibus a. Quia excepturi et consectetur. Illo eaque sit omnis labore.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(261, 'Maiores suscipit aliquid commodi sed.', 'Eaque et beatae beatae iure sunt nam. Ad quis quam et. Sunt id qui ea ad sequi totam. Est ut suscipit iusto tempora maxime.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(262, 'Quam et non dolor excepturi et.', 'Voluptate earum debitis exercitationem voluptatem sit. Ea minima rerum ut odit. Quis est voluptatum quia voluptate dolorem. Nihil et sit nihil quo sapiente.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(263, 'Magni et ducimus architecto dolorem incidunt inventore et aut.', 'Repellendus est omnis corporis voluptatem id corporis nemo. Sequi rem porro quae id eos officia. Neque aut accusamus aliquid impedit voluptatem accusamus est.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(264, 'Quae ratione aperiam nesciunt quia et ratione ut.', 'Et sequi dolorum est. A laboriosam hic quaerat neque distinctio eveniet. Consectetur animi hic quis et et excepturi sit.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(265, 'Dicta accusantium est esse quasi.', 'Cum architecto in aut architecto. Aliquid quia et repudiandae ut rem necessitatibus minus est. Suscipit non vero adipisci est cum vel.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(266, 'Similique in quaerat odit sit ut.', 'Rem ut ut voluptates ut et. Aut libero debitis voluptatem repellat explicabo. Nesciunt quibusdam nihil voluptatem debitis. Accusamus qui accusantium velit qui natus accusantium.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(267, 'Officiis quibusdam perferendis autem.', 'Omnis et eum sequi culpa similique. Molestiae ut sit quam inventore ipsum provident. Doloribus unde corporis deleniti corporis. Natus qui quo quia quas omnis nulla eligendi eaque.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(268, 'Sit alias facere nisi.', 'Adipisci id amet quia dolore repellat eaque inventore. Velit laudantium et occaecati accusamus voluptatum molestiae doloremque. Nostrum ut sit aspernatur sit.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(269, 'Commodi ullam iure maxime dolore.', 'Eligendi eius ullam quia deleniti. Cumque vitae recusandae iusto ducimus consequatur aliquam. Aspernatur sit non dolorum. Odit optio dolores facere voluptas.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(270, 'Recusandae sunt vel ipsam qui et voluptas nam ut.', 'Vel veniam sed veniam voluptatem velit soluta. Accusamus odit nam neque adipisci unde veniam. At at porro ut. A qui aut voluptatem voluptatem.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(271, 'Aut nisi placeat voluptate animi corrupti.', 'Atque dicta corrupti velit qui est iusto est. Dolorem exercitationem libero soluta eius pariatur. Debitis eos incidunt ex sit magnam dolorem.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(272, 'Est voluptatem quod est consequatur.', 'Iure quibusdam omnis delectus voluptatem dolorem. Consequatur temporibus aliquid velit. Non qui non commodi in odit pariatur. Excepturi tenetur voluptatem quaerat inventore iure aspernatur incidunt.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(273, 'Quia nisi natus voluptatibus est enim.', 'Atque doloribus nobis consequatur itaque incidunt harum. Sint expedita veritatis veritatis voluptatibus. Eius ut et excepturi et expedita. Qui sequi quasi aut odit.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(274, 'Sit odio et ut rerum illum quia aspernatur inventore.', 'Voluptatibus exercitationem impedit dolorum. Vel totam illum qui reprehenderit corrupti non eligendi. Ut dignissimos distinctio aut dicta rerum expedita voluptatem enim.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(275, 'Ut sed architecto est ex nemo in nihil excepturi.', 'Non ratione veniam minus eveniet tenetur non dolorem. Culpa quidem quo veritatis est laborum. Cumque quia repellat recusandae velit fugiat tempora. Optio fuga ut vero excepturi.', 1, '2020-05-15 17:07:16', '2020-05-15 17:07:16'),
(276, 'Enim quam officia velit id.', 'Nesciunt harum ipsam et doloribus a id. Ab atque facilis delectus ex. Dolores quis est iusto nam.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(277, 'Maxime ea doloremque et perferendis.', 'Labore voluptas illo at corporis quas velit. Culpa eum sit totam et vitae aut est.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(278, 'Sequi libero est omnis in.', 'Quis sit laboriosam totam veritatis non. Quasi assumenda autem recusandae est quia explicabo quidem. Molestias est culpa blanditiis commodi ut minima perspiciatis. Aut voluptatum ut molestiae facere.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(279, 'Magni error voluptatem repudiandae quis.', 'Placeat repellat rerum voluptatem autem. Tenetur sed voluptas unde quos voluptatem. Sapiente molestiae placeat rerum. Enim sit maiores qui omnis quia eveniet quisquam.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(280, 'Molestiae totam id illum sed id cum.', 'Voluptates vero aliquid sint consequuntur sint iure. Recusandae aspernatur et explicabo. Voluptate et ad vitae ut.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(281, 'Vero et totam architecto repellat error.', 'Exercitationem architecto aut et nihil non eos distinctio velit. Fugiat nesciunt in eum libero voluptate reiciendis et. Earum modi itaque totam qui voluptas officia.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(282, 'Fuga dolores repudiandae perferendis expedita.', 'Quia rerum architecto quod et doloribus ea porro. Laborum velit qui error sed consequatur modi blanditiis. Alias qui nesciunt voluptatum et.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(283, 'Asperiores et pariatur porro magni occaecati ut.', 'Autem quia libero architecto voluptatibus dolores sed. Tempore voluptas ipsa modi consequatur ad. Dolor necessitatibus quas in sit totam autem exercitationem voluptatum.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(284, 'Dolores facere autem facilis totam iure.', 'Ipsa sit porro id sapiente consequatur occaecati porro animi. Autem dolore eos esse exercitationem reprehenderit sed quo esse. Nobis impedit nisi omnis eaque.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(285, 'Rerum laboriosam sed ducimus.', 'Provident et aut modi qui vel. Consequatur labore aspernatur ipsum nulla. Aperiam qui eligendi nulla et et nisi. Dolor amet sit nisi corrupti dolores qui.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(286, 'Totam nesciunt fugit cum ab iure atque doloremque.', 'Hic beatae magnam voluptas debitis. Ducimus repellendus quos et. Voluptatum est et molestiae earum. Ea quas nemo ea modi eaque.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(287, 'Velit ut cum esse atque et at voluptas.', 'Maiores est reprehenderit ex rem laboriosam. Mollitia est accusamus veritatis consequatur esse. Qui repellat eum fugit dolores sequi.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(288, 'Id fugiat ut placeat consequatur earum dolorem.', 'Tempore atque adipisci neque. Quibusdam possimus voluptatibus qui iusto voluptatem vel. Id perspiciatis nulla alias temporibus in.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(289, 'Error ut voluptatem est nobis et reiciendis omnis aut.', 'Vel vel dolor labore et tempore. Dicta autem et voluptatem tempore. Quae magni quas blanditiis consequatur cumque magni.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(290, 'Aut et iste totam eum inventore.', 'Et et eum earum minima enim. Nisi expedita est quisquam in in autem at. Nesciunt et debitis ipsa eveniet. Sit animi aut molestiae exercitationem totam consequatur autem voluptatum.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(291, 'Omnis omnis qui rem voluptas consequatur laboriosam et.', 'Eos at quo in perspiciatis. Et repudiandae ut velit aliquam est est. Et officia veniam culpa aut. Voluptas totam hic nihil reiciendis laboriosam.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(292, 'Aspernatur consequatur placeat repellat dolorum.', 'Est enim debitis aut error. Qui dolor voluptas voluptatibus quas quia ut nam. Optio aut exercitationem reiciendis autem error unde.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(293, 'Doloribus sed rerum dolorum animi tenetur aliquid qui debitis.', 'Voluptatem et provident delectus quae velit adipisci dolorum. Omnis voluptatum consequuntur sed aut quae. Sapiente est ducimus quo id animi aliquid quia.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(294, 'Quaerat quo omnis consequatur hic similique eos voluptatum voluptas.', 'Dolore dicta sit illo labore voluptatum quaerat. Sunt et sunt fugit doloremque reprehenderit. Totam illo porro odio accusamus qui voluptatem deserunt ipsam. Sint at facere labore dignissimos est.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(295, 'Non sunt deserunt temporibus.', 'Est ut qui possimus non dignissimos saepe voluptatem et. Voluptatem voluptatibus inventore voluptatem qui. Amet quaerat voluptatum natus nihil eum odio incidunt. Ipsam dolorem tempora sint.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(296, 'Unde voluptatem aliquam perspiciatis.', 'Qui ut illo non aliquam iure. Expedita ut tempore reprehenderit ratione. Tempora neque culpa dolorem autem suscipit.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(297, 'Neque eum et quae ea soluta laudantium et.', 'Rerum velit aut vel provident nam. Odio minus aut et est. Dignissimos distinctio eius est harum molestiae reprehenderit tempore voluptas.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(298, 'Qui impedit sint commodi doloribus.', 'Maiores ab doloremque nihil. Aliquam dolores vel similique rerum suscipit molestiae ut. Inventore non natus esse aut voluptatem. Explicabo perferendis qui necessitatibus et.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(299, 'Illum et autem officiis rem.', 'Asperiores vel magnam saepe omnis. At tenetur qui quaerat recusandae atque ut non. A blanditiis sit nam vel. Eum ducimus quisquam repellendus consequatur adipisci.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(300, 'Tempora ea enim similique.', 'Provident dolore error nihil dolor nesciunt aperiam nobis. Maiores id sequi ea in blanditiis sit maxime deleniti. Perspiciatis maiores consequatur consequatur ut est magni nemo.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17'),
(301, 'Nihil similique iusto quas voluptate.', 'Officia libero assumenda rem rerum magnam recusandae dolor. Tempora hic molestias eos qui quam atque. Sunt incidunt vitae unde qui et vero.', 1, '2020-05-15 17:07:17', '2020-05-15 17:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_05_14_150354_create_case_submits_table', 2),
(5, '2020_05_15_121500_create_bios_table', 3),
(6, '2020_05_17_115402_add_avatar_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Armaan Hossain', 'armaansanjeed@gmail.com', '1589727183.jpg', NULL, '$2y$10$l3K/m9U2jkF.ATGhQMreAuOZxGAE2O48SLTCdd19lO7p4b6vG5XFy', NULL, '2020-05-13 10:41:13', '2020-05-17 08:53:03'),
(2, 'Foysal Rahman', 'foysalrahman@gmail.com', '1589727422.jpg', NULL, '$2y$10$U7VQ5uqzWesbjwMjIdajvOOPk71EWSP7JmemWJrj0uKWe8JhrOxs6', NULL, '2020-05-13 12:48:40', '2020-05-17 08:57:02'),
(3, 'Al Shazid', 'alshazid@gmail.com', 'default.jpg', NULL, '$2y$10$hJHYVKcqqaw60w0O.LZzNOg2a4yapVtaz0tLrvQoAe6hnMADiLo1m', NULL, '2020-05-13 15:13:00', '2020-05-13 15:13:00'),
(4, 'abc', 'abc@gmail.com', '1589788161.jpg', NULL, '$2y$10$0OBvVIVhyrnIVE6N3feSROqk51IGIzNLcEPiXVVZyMey1z7S6v1qu', NULL, '2020-05-18 01:48:37', '2020-05-18 01:49:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_submits`
--
ALTER TABLE `case_submits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_submits`
--
ALTER TABLE `case_submits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
