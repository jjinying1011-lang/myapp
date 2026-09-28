-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2026 at 09:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'i love my job', 1, '2026-08-16 08:24:19', '2026-08-16 08:24:19'),
(2, 'Consequatur sunt voluptas iure sit molestiae omnis omnis.', 'Autem optio dolores veniam. Nostrum saepe perferendis tempora.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(3, 'Neque dolore sit vel quaerat quo voluptatibus qui.', 'Dolores velit nisi rem autem ad necessitatibus id. Quia non aut modi rerum. Cum commodi officia dolore ratione. Veniam aspernatur dolore est consequatur velit voluptate consequuntur.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(4, 'Officiis qui rem voluptas cum perspiciatis doloremque.', 'Eos autem nisi nemo dolorum. Qui ea iusto sit. Magnam hic sit debitis autem natus. Impedit eligendi tempore cumque animi maxime ut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(5, 'Ut quia deserunt fugiat aperiam possimus doloribus sed qui.', 'Culpa ut quia ut est nobis dolorem distinctio provident. Qui in unde omnis. Accusantium et quae dolor inventore temporibus dolorum.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(6, 'Incidunt iure molestiae pariatur accusantium sed totam consequatur.', 'Dolor omnis consectetur in praesentium molestias dolore dicta. Eius tempore perferendis qui iusto voluptatem.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(7, 'Totam non sunt sint qui.', 'Cumque est sed quam. Non nam magnam aut fuga aut. Ipsam magni in beatae modi quod perspiciatis. Eaque et recusandae nostrum et commodi ad qui.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(8, 'Dignissimos praesentium blanditiis ea ipsa quod necessitatibus.', 'Eius dolores quod debitis sunt odio dolorem voluptatum. Magnam nesciunt aut quam nam voluptatem ut. Harum at vero autem ad iste omnis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(9, 'Maiores dolores cupiditate accusamus placeat ipsam.', 'Assumenda velit nam ex. Ut vitae perferendis in sed. Impedit nemo autem quas vitae.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(10, 'Facere debitis neque nemo ab.', 'Ex culpa quia distinctio cupiditate quas excepturi omnis. Vero quod non aut asperiores est non quos. Id veniam tempore doloribus alias deserunt.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(11, 'Maxime voluptatem autem et quis.', 'Non expedita optio asperiores. Veniam blanditiis esse ratione repellendus cum nobis molestias. Illum qui quis ex velit eos rerum. Quas molestias unde possimus ut.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(12, 'Ut perferendis nostrum aut modi vitae molestiae.', 'Accusamus sapiente numquam dolorem. Qui quos voluptatem placeat et veritatis molestias. Nihil dolorem aliquam dicta quod qui. Rerum ex voluptates quibusdam.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(13, 'Voluptas unde cupiditate quis ducimus.', 'Modi ducimus magni tenetur voluptas. Ratione dolore quia rerum. Quas ipsum non quibusdam necessitatibus sed et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(14, 'Autem eum sed sed aut.', 'Sit repudiandae et asperiores expedita ad omnis asperiores. Commodi at aliquid aliquid vel modi. Tempore animi autem similique quae et reiciendis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(15, 'Doloribus dolorem voluptatem incidunt delectus blanditiis.', 'Quod magni cumque ut vitae atque hic. Assumenda modi maxime ea expedita modi et. Impedit quis maxime provident minus et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(16, 'Qui commodi facilis sed accusantium accusantium.', 'Praesentium officiis in laborum impedit blanditiis. Et corporis illo commodi qui ea harum mollitia. Qui dicta ad aut quia eius omnis nemo.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(17, 'Corporis ut recusandae aut sed itaque.', 'Totam commodi rerum sunt iste quia. Et voluptatum delectus eligendi dolores quo at. Ut adipisci iusto voluptatem velit iure. Enim ut voluptate mollitia error repudiandae. Perspiciatis aut voluptate in nesciunt error voluptas ex.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(18, 'Et rerum culpa itaque eveniet atque.', 'Qui temporibus cumque accusamus amet ut corrupti beatae. Eum fugiat laudantium consectetur consectetur voluptatem. Nihil qui exercitationem rerum ex alias eum similique doloribus. Maxime unde ullam atque voluptates et quia neque eius.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(19, 'Expedita veniam possimus in libero exercitationem illum.', 'Ad rerum laboriosam ut ipsam corporis corrupti. Iure unde repellendus omnis velit cupiditate. Tenetur rem laboriosam ipsum ut fugit.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(20, 'Blanditiis voluptatem nesciunt sit aut enim quia quia facere.', 'Numquam ut et sed sunt. Facere quia amet sequi molestias nam. Consequatur voluptas aut nihil doloribus.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(21, 'Qui qui corrupti adipisci omnis.', 'Blanditiis doloribus atque pariatur voluptatum itaque. Aut unde quia eaque velit veniam quasi. Blanditiis odit suscipit quis.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(22, 'Non provident molestiae sit ea amet eos a.', 'Magni laudantium quia debitis in. Voluptas delectus magnam consequatur repudiandae reprehenderit. Cumque quia perferendis corporis ut quia et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(23, 'Architecto nesciunt laudantium iusto soluta eos.', 'Itaque excepturi et quo quam. Neque deserunt autem reprehenderit quo vitae dolor. Tempore nihil ea quidem aliquid.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(24, 'Earum nisi vero debitis eaque.', 'Quia accusamus aut optio. Suscipit et quam dignissimos adipisci nulla amet dolor molestiae. Ratione at ut minima ut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(25, 'Sit non iure repellendus quidem.', 'Dignissimos consequatur sint qui laudantium dolore ad dolorem et. Est non inventore cumque laborum nihil. Quod fugit inventore deleniti ex et. Recusandae vero officia occaecati esse quod ut sed rem. Suscipit hic dolorum perferendis expedita.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(26, 'Sed molestiae commodi consectetur omnis sed corrupti.', 'Et tenetur et nostrum earum repellendus ipsam. Inventore minima laborum possimus perspiciatis perferendis. Eos nihil repudiandae corporis voluptate. Ea maxime et minus deserunt perferendis aut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(27, 'Cum magnam nihil voluptatem quibusdam omnis animi aperiam.', 'Hic numquam animi nam harum dolores dolorem dolor. Nihil animi sit quos eos. Rerum corporis molestiae quis aperiam.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(28, 'Quaerat sint autem eum laboriosam.', 'Ut non enim minus eum ea. Reprehenderit consequuntur repellendus debitis.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(29, 'Et ex quo fugit debitis impedit dignissimos.', 'Labore sed aut natus quae et cumque. Voluptatem sint excepturi ea eaque qui ad blanditiis. Nesciunt sunt facilis sed fuga enim quo. Vitae sed velit facilis nemo.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(30, 'Molestias voluptatum nostrum aut cum consequuntur dolorem.', 'Saepe amet et et voluptatem in nesciunt. Exercitationem accusantium et ut quis. Earum voluptas numquam vel vero repudiandae. Eos vero dicta eaque et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(31, 'Ut libero corrupti consectetur fuga.', 'Rerum vitae sint commodi magnam. Voluptas autem id enim enim quisquam dolores deleniti. Et laboriosam officiis vero et cupiditate sed et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(32, 'Earum voluptas aliquam praesentium tempora.', 'Ipsum facere quidem vitae dignissimos. Repellat architecto corporis et blanditiis cumque beatae. Veritatis cum voluptatem est est sunt eveniet quas. Facilis soluta occaecati neque quam et ducimus.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(33, 'Ipsam in quis explicabo sit voluptas dolor.', 'Et commodi quo odio non numquam aut ad. Consequatur officiis natus dolorem hic est voluptatum. Inventore est vel autem omnis qui. Aut nemo nihil corrupti accusantium deserunt tempore officiis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(34, 'Laudantium officiis error molestiae natus.', 'Fugiat voluptas ut libero dolor inventore. Velit id aut non. Iste reiciendis et voluptate quia natus nihil nisi sint. Enim ut ipsa quam non at.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(35, 'Cum reiciendis et modi iure cum enim odio.', 'Cumque ut dicta consequuntur dignissimos necessitatibus suscipit. Praesentium qui sit eum dolores impedit. Voluptatem maxime voluptatem dolores unde.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(36, 'Veritatis animi at ratione tempora exercitationem maxime.', 'Ab qui omnis possimus nisi at corporis nostrum. Vero ullam necessitatibus est aut molestiae voluptatem dolorum. Non quia sed qui distinctio maiores voluptatibus dolor.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(37, 'Ducimus aliquam neque et maiores exercitationem et doloribus rem.', 'Blanditiis pariatur in nam laboriosam provident officia. Quisquam aspernatur corrupti ad officia. Quia rem perspiciatis suscipit eos. Ea omnis maxime id et. Dignissimos laudantium nobis et sit ut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(38, 'Dicta sed veniam ipsa voluptatem hic similique.', 'Aut consequatur corporis consequatur quibusdam explicabo quaerat sequi. Fuga veniam vitae hic necessitatibus. Et officiis laudantium enim molestiae soluta odit.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(39, 'Fugit et consequatur nesciunt nulla sit earum sed.', 'Aspernatur voluptatem debitis quis. Expedita nam veniam quo voluptatum cupiditate ipsam non.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(40, 'Fugiat debitis perspiciatis aut deleniti libero illum.', 'Molestiae dolorem cum numquam omnis officiis qui ut. Voluptate consequatur perferendis consequatur et. Eius voluptatem vitae qui et eaque. Placeat numquam dolores odit eligendi est.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(41, 'Quia aut quasi nihil odit itaque eos.', 'Vitae placeat harum quos in reprehenderit. Nulla explicabo blanditiis quae nobis mollitia et. Pariatur incidunt voluptatum consectetur. Amet quod atque unde rerum non assumenda qui sit.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(42, 'Et aut quo omnis et enim.', 'Tenetur et impedit nemo nihil est exercitationem. Expedita sed accusantium molestias eligendi architecto et rerum suscipit. Fuga in quam beatae beatae voluptates mollitia in.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(43, 'Quod et dolorem omnis eligendi voluptatem molestias praesentium.', 'Dolorum eaque consequatur aut velit nostrum facilis libero aspernatur. Debitis voluptatibus saepe aut et est. Sapiente fugit odio autem. Nihil itaque ut laboriosam eum.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(44, 'Porro distinctio non reprehenderit sequi eum doloribus.', 'Necessitatibus ex nemo fugiat libero id fuga. Provident eos non provident ipsam aperiam sunt. Rem rem laboriosam optio quod.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(45, 'Et sint aut id quod.', 'Molestiae numquam eum dolore adipisci ipsam. Magni nihil voluptas animi voluptas recusandae enim. Illo velit impedit nihil excepturi animi. Ea cupiditate similique velit doloremque sed.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(46, 'Et eum quod cumque ut illo.', 'Nisi aut et quis sequi ex placeat. Iure quam ratione in et. Numquam eius reiciendis beatae corrupti.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(47, 'Non eius ratione id fuga sunt.', 'Deleniti incidunt dolores explicabo qui molestias minus sed. Qui nam facilis minus. Et cum consequatur maxime eos. In exercitationem repellendus vitae soluta ut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(48, 'Exercitationem quas aut dolorem consequatur ea hic animi nam.', 'Est vel occaecati ut quasi omnis error. Voluptatem ipsam perspiciatis eligendi. Similique voluptatem et est non et. Quisquam et dolores illo repellendus occaecati doloribus.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(49, 'Amet vitae necessitatibus tempora voluptatem et inventore quaerat.', 'Cupiditate dolorem earum a consequatur sed facere dolorem. Quae in beatae beatae reprehenderit facere. Et nam dolor voluptatem ab cupiditate ut. Rerum fugit quia esse commodi et atque.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(50, 'Expedita eveniet non consequatur iste.', 'Vel sed quisquam tenetur maxime. Repellat ratione molestiae voluptate quis error tempora et. Qui magni tempore in sed.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(51, 'Quod eaque facere placeat iusto ipsa.', 'Veniam voluptatem qui tenetur quisquam. Sed fuga minus facilis nihil fugit. Possimus et facilis et distinctio.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(52, 'Ut qui dolore aspernatur tenetur id optio.', 'Qui pariatur quis esse nesciunt ut sunt hic. Ut tempore illum ea magnam sed aliquam consequuntur autem. Maxime ad voluptatem corporis laboriosam. Dolor corrupti suscipit eaque quasi.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(53, 'Ea id est eos temporibus esse itaque quos.', 'Reprehenderit eos molestias sequi nihil vel odio molestiae. Non error qui veritatis accusantium adipisci sed. Modi sint nam eius porro hic at.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(54, 'Et voluptas ipsum magni soluta.', 'Dolore beatae eaque odit esse minus ut. Autem eligendi veniam quibusdam reiciendis dolorum. Est praesentium omnis delectus facilis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(55, 'Totam est quisquam aliquid dolorem illum.', 'Ducimus ipsam alias tempore et tenetur commodi optio. Itaque quia odio animi dolores nulla quae et. Recusandae molestias a ad.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(56, 'Numquam nostrum repellendus et aut commodi.', 'Possimus modi eos iure explicabo veritatis qui. Qui reprehenderit vel non aut libero. Ut inventore recusandae corporis quidem debitis. Fuga tempora ut alias vel nesciunt est eos. Sit placeat commodi rerum voluptas quaerat quis error.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(57, 'Sit in iure voluptas dolorem nam nemo.', 'Molestias eum quibusdam veritatis. Autem facere nemo id quia at quisquam minus. Nobis ab nobis eum ex.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(58, 'Nihil qui ducimus quis vero corrupti.', 'Natus cumque eos eaque non voluptatem modi reprehenderit. Similique iure consequatur labore veniam. Facilis sapiente consequatur fugit aut repudiandae natus et. Tempore et distinctio deleniti sed aut eos.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(59, 'In et officia in pariatur nulla cupiditate.', 'Voluptatum voluptatem debitis sequi enim aut. Suscipit quisquam aut quae facilis et autem fugiat. Libero molestiae neque et fugiat dicta est. Alias molestias tempora voluptatem veritatis cupiditate.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(60, 'Quia ut fugit et eveniet quia ipsa numquam.', 'Numquam culpa sit corrupti non animi dolorem. Ea sed dicta itaque sed cupiditate minus. Qui molestiae et aut iure sunt assumenda. Commodi ab quis harum excepturi tempore.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(61, 'Mollitia ut earum fugiat aut minima rerum.', 'Est in velit voluptatem ut ut earum beatae. Exercitationem autem dolores quae sunt architecto doloremque quia. Culpa nobis consequatur non non possimus doloremque.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(62, 'Quia laboriosam ut nulla.', 'Amet sit quo et. Molestiae quasi perspiciatis nam laborum quas alias. Soluta in aliquid totam facilis aut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(63, 'Maxime quia et voluptate maiores eligendi quas ut.', 'Nesciunt nostrum ut est. Natus voluptatem quas quasi eaque voluptas eos. Commodi aut aperiam enim et animi error quibusdam magnam. Dolores est dolorem consequuntur placeat rerum beatae et laborum. Tempora non dolores nostrum impedit.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(64, 'Officiis maiores itaque fuga perspiciatis molestias voluptate iusto.', 'Est id quod sunt ut doloremque itaque fuga. Aliquam nam incidunt vitae impedit. Et omnis corporis culpa omnis unde ipsa facere minus.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(65, 'Ad omnis eveniet temporibus maiores et.', 'Eligendi id hic iusto vel et omnis ipsum temporibus. Sapiente quia necessitatibus et dolores. Reprehenderit rem sunt voluptatem molestias.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(66, 'Delectus in earum et blanditiis corrupti.', 'Provident occaecati ut quia velit inventore. In incidunt est earum porro id aliquam deleniti. Impedit quasi consequatur qui officia fuga quasi dolorem. Voluptate pariatur ea commodi ipsum et quis dignissimos.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(67, 'Molestiae qui natus id qui asperiores qui eius.', 'Est at impedit nulla temporibus. Dolores dolor rem et quisquam.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(68, 'Alias facere et voluptatum maiores nihil quae sint consequatur.', 'Sunt cum id exercitationem in quaerat debitis voluptas. Vel suscipit nemo non aspernatur consequatur vel aut. Culpa doloribus non ad nobis sequi. Perferendis autem architecto omnis dolor officiis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(69, 'Quidem impedit distinctio illum aperiam.', 'Sint enim eos omnis voluptas excepturi vero. Minus nemo enim porro. Voluptas error nostrum et doloremque ut necessitatibus. Et impedit quam ducimus veniam magni.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(70, 'Amet perspiciatis eaque dicta vitae.', 'Numquam ut consequatur omnis quis voluptates alias quia. Excepturi itaque unde atque repellat ex voluptatum. Id sed dolorem nam voluptatem ut. Non et repellat cum commodi.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(71, 'Non maiores amet ut id.', 'Aut nihil blanditiis molestiae unde veritatis blanditiis. Non est perspiciatis nisi ut et. Aut quas non quasi nesciunt magnam. Commodi qui rerum tenetur assumenda qui cupiditate similique.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(72, 'Cum rerum ut consequuntur praesentium ullam excepturi.', 'Laudantium aut inventore necessitatibus eius odio omnis ab. Veniam ullam deleniti dolorem hic nemo. Officia voluptas dolorem non. Placeat libero rerum ex eos numquam voluptas.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(73, 'Rem sint nostrum est impedit.', 'Vel consequatur fuga deserunt commodi. Est doloribus eos aut sunt est. Sit neque perferendis expedita fuga ipsum eveniet.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(74, 'Deleniti ipsam quisquam est.', 'Et ipsa ut quia molestiae fugiat eaque itaque. Ullam ducimus soluta quibusdam culpa est. Voluptas et porro fugiat.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(75, 'Consequuntur reiciendis nihil dolores voluptatum totam.', 'Eos modi et sit accusamus veritatis. Ab accusamus et rerum ut deleniti velit aut ut. Debitis fuga fugit esse suscipit fugit commodi fugiat. Voluptatem animi qui et.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(76, 'Harum animi voluptatibus temporibus est corporis eveniet odio.', 'Assumenda voluptatibus ex dolor qui et necessitatibus aut eligendi. Magnam earum atque corrupti doloremque. Sint illum nostrum est minus. Aut doloribus id quia maiores sapiente.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(77, 'Quidem ipsa et quia aspernatur.', 'Magnam accusantium consequatur soluta et. Sunt dolores molestias aut temporibus et. Architecto quaerat officiis consequuntur odio ea aut. Rem dolor saepe et dolores fugiat cum.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(78, 'Voluptatem cum culpa vel doloribus.', 'Ipsum voluptatem est recusandae odit. Ut similique reiciendis ipsam quos iste nesciunt. Praesentium itaque sed hic ipsam eaque velit dolor. Perspiciatis animi ratione fugiat suscipit dolor harum debitis in.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(79, 'Eius voluptates delectus est a.', 'Eos sed numquam ducimus impedit. Fuga expedita minus sed voluptate labore consequatur.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(80, 'Libero voluptatem exercitationem ipsum blanditiis est libero dolorum.', 'Totam voluptatum voluptas iste quia. Non velit cupiditate aut autem officiis unde. Nisi quo quia quo libero perferendis architecto.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(81, 'Ullam molestiae modi optio incidunt voluptas qui et.', 'Facere molestias est similique numquam accusamus sed. Praesentium quam quae quo consequuntur eius culpa eius. Omnis neque officiis nemo suscipit. Et repudiandae id nemo quo molestiae.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(82, 'Blanditiis excepturi vero magnam aut neque neque.', 'Repellat aut veniam et natus ut. Veniam et dolorem aut modi illo. Blanditiis aperiam veniam non natus odio hic non. Excepturi ducimus at nam laboriosam odit.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(83, 'Iusto dolorum consequuntur sed voluptatem.', 'Nihil voluptas et consequatur. Autem excepturi suscipit quas. Illo ut quae recusandae ut.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(84, 'Incidunt et consectetur optio veritatis.', 'Numquam enim ut id sed quis inventore. Perspiciatis quo possimus possimus quaerat consequuntur qui. Quas et ut optio vitae. Sunt rerum et quos est. Sapiente corporis sed commodi.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(85, 'Pariatur itaque dicta inventore voluptas eveniet.', 'Nobis nulla dolorum error. Qui ea quam sint voluptatem maiores consequuntur consequuntur. Est et officia voluptates. Voluptas voluptate soluta natus dolor.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(86, 'Maxime sint rerum porro ratione ea ea fugiat.', 'Est quis omnis cum dolores voluptas. Non laboriosam nihil repellat culpa eum ex enim. Dignissimos vero ut et rem eum sint commodi.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(87, 'Itaque aut odit id nemo harum debitis nesciunt.', 'Illo sunt hic est neque quis dicta voluptas. Molestias mollitia in sunt et minus dolor quia facere. Quae quia quis optio nam animi voluptates ad eaque.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(88, 'Rerum amet quia libero rem illo.', 'Nobis numquam sunt minima ducimus odio molestias odio. Ut qui molestiae ratione nemo beatae pariatur quae. Quibusdam ea molestias est. Repellendus ex nihil eos qui provident.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(89, 'Non saepe ut fugiat amet omnis quos.', 'Nam eum consequatur aperiam inventore porro. Odit consequatur illum sed dignissimos sint molestiae sint. Ut est qui qui molestias. Suscipit quam libero rerum assumenda ea fuga quis.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(90, 'Quod a non quia aperiam vel id accusantium.', 'Eum ut doloremque sed molestiae dolor. Fuga in libero accusamus adipisci autem. Est omnis omnis consequatur nobis amet deleniti in quis. Facere dolores ut qui nisi dicta. Quia similique sunt sapiente blanditiis fugit qui sit.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(91, 'Est earum labore unde.', 'Et est eos architecto assumenda et. Illo assumenda ad id inventore corrupti esse minima. Sed maxime nihil ipsum dolores consequatur similique. Quia rerum sed laborum eligendi similique mollitia. Est sit ab vel quaerat cumque cupiditate magnam.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(92, 'Velit et adipisci sunt iusto.', 'Corporis magnam aut voluptas doloremque. Optio sed numquam reiciendis quidem dicta. Et aliquid dolores esse enim ut debitis modi.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(93, 'Consequuntur accusamus modi exercitationem optio nobis cumque dignissimos.', 'Voluptas esse occaecati repudiandae rerum animi. Sed eos nesciunt labore expedita. Est eum amet ut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(94, 'Culpa eius a aliquam dolores nihil.', 'Iure sapiente exercitationem consequatur voluptate. Veritatis ut ipsam dolores non. Voluptas qui quibusdam sequi autem nihil eum aut.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(95, 'Nobis id modi quis laborum rerum modi nobis.', 'Omnis quo non voluptatem cumque fuga et hic dolorem. Ipsum doloribus dolores voluptatem. Non et minus culpa nihil quos laboriosam. Sit sed voluptatem et deserunt rerum.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(96, 'Cupiditate molestiae vero inventore iure.', 'Exercitationem in alias corporis culpa perspiciatis. Et tempora et velit enim. Non quisquam doloribus veniam qui doloremque odio. Voluptatem adipisci voluptas nihil.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(97, 'Consectetur aut est exercitationem.', 'Maiores et ut dolorem molestiae possimus. Assumenda a fugiat qui quos. Et unde accusamus sed.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(98, 'Quas ab voluptatem mollitia consequatur occaecati ipsum ipsa.', 'Laudantium aliquid ad illum qui. Commodi sint asperiores temporibus nostrum ducimus aut. Placeat est asperiores aperiam aut laudantium perferendis velit. Harum illum iusto eius ipsum qui maxime necessitatibus. Molestiae odio qui enim asperiores praesentium consequuntur quos.', 1, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(99, 'Qui officia consequatur voluptas nisi quis hic nulla labore.', 'Provident eveniet non debitis aspernatur nobis. Ut soluta accusamus inventore praesentium animi. Aliquam est ipsam dolor repellendus quidem unde fugit minima. Commodi odit maxime accusantium occaecati autem.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(100, 'Odit non suscipit aut consequuntur.', 'Perspiciatis ea nihil omnis similique. Necessitatibus beatae magni est eos. Ad magnam sit nulla debitis ipsa. Est non sit non.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20'),
(101, 'Qui saepe maiores modi.', 'Et voluptate nisi ut vel officia laboriosam quia. Sit aut aperiam eum quis accusamus provident eum. Doloremque rem sint facilis odit.', 0, '2026-08-18 08:12:20', '2026-08-18 08:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_10_072322_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5j83LMjlEVd8u0yFwdRQBfNhvEmKHXg0qLWYLArs', NULL, '127.0.0.1', 'curl/8.7.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUldTVzZJUU1ZUlR2ZlNzYkFSeHhOY3VQeXV1QnNocnhJVG1qZVFwayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo1OiJpbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1787064648),
('fp4XKqyRy04gzcjNjFluSxXj2LMrJofctJuKlsLg', NULL, '127.0.0.1', 'curl/8.7.1', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNE5Jck1wUzUzT0lBRDhKQmVQejBXeGdPTnFLUjNBRnZja3FVeHpQcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1786892168),
('PUcPN2G94YQh7JhGRvp6AVRhsnBJEI4s3Sy6BQYp', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGJ6T3hvWWJkQ0VodU4ybWV6WjJ5eVFwZUV5UlNCT0JSZ1pWOG5hbCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dHMiO3M6NToicm91dGUiO3M6NjoiYWJvdXRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1786893890),
('qgjEiTzu9lAFTMP337kbtYhcQQGblYGOVSzlw1gD', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGo1cTRDNlFYVXlkdzM3QkZqVnJqblFSdmQ0alFIcVZ5Z3R3TXF1WSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dHMiO3M6NToicm91dGUiO3M6NjoiYWJvdXRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1787065554);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
