-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 13 mai 2021 à 19:01
-- Version du serveur :  8.0.21
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gawadb`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_wiki`
--

CREATE TABLE `article_wiki` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_wiki`
--

INSERT INTO `article_wiki` (`id`, `name`) VALUES
(709, 'Abdoulaye_Diarrassouba'),
(655, 'Abdourahmane_Cissé'),
(28, 'Abés'),
(139, 'Aboutou_Roots'),
(634, 'Académie_de_football_Amadou_Diallo_de_Djékanou'),
(595, 'Adama_Coulibaly_(ministre)'),
(101, 'Ade_Liz'),
(525, 'Adjheï_Abbady'),
(742, 'Adriel_Ba_Loua'),
(758, 'Affoué_Delphine_Noël'),
(44, 'Agboville'),
(643, 'Ageroute'),
(759, 'Agnès_Monnet'),
(648, 'Ahéoua'),
(653, 'Ahoutoué'),
(719, 'Aka_Serge_Arnaud'),
(745, 'Alain_Guikou'),
(674, 'Alain-Richard_Donwahi'),
(747, 'Alcide_Djédjé'),
(607, 'Alounamouénou'),
(633, 'Alpha_Blondy_:_un_combat_pour_la_liberté'),
(661, 'Alphonse_Boni'),
(111, 'Alphonse_Djédjé_Mady'),
(716, 'Alphonse_Soro'),
(744, 'Amidou_Traoré'),
(166, 'Anaky_Kobéna'),
(692, 'Ange_Rodrigue_Dadjé'),
(613, 'Anono'),
(652, 'Anufo_(langue)'),
(565, 'Archidiocèse_de_Bouaké'),
(566, 'Archidiocèse_de_Gagnoa'),
(567, 'Archidiocèse_de_Korhogo'),
(685, 'Armand_Josse'),
(559, 'Arthur_Kocou'),
(31, 'ASEC_Mimosas_(football)'),
(576, 'Assamabo'),
(171, 'Association_générale_des_élèves_et_étudiants_de_Côte_d’Ivoire'),
(520, 'Association_sportive_Athlétic_d\'Adjamé'),
(660, 'Association_sportive_Jeanne_d\'Arc_de_Treichville'),
(79, 'Attentat_contre_Guillaume_Soro_du_29_juin_2007'),
(39, 'Attié_(peuple)'),
(57, 'Attiéké'),
(137, 'Attobrou'),
(72, 'Attoukpou'),
(133, 'Attoutou_A'),
(642, 'Autorité_nationale_de_l\'aviation_civile'),
(173, 'Awa_Maïga'),
(611, 'Awoulaba'),
(75, 'Aya_de_Yopougon'),
(41, 'Ayahous'),
(644, 'Ayô'),
(9, 'Balafon'),
(3, 'Bambara'),
(626, 'Bamo'),
(519, 'Ban_Sport'),
(2, 'Basilique_Notre-Dame-de-la-Paix_de_Yamoussoukro'),
(649, 'Batéguédia_II'),
(606, 'Benjamin_Kouadio'),
(574, 'Béta_Simon'),
(679, 'Bienvenue_au_Gondwana'),
(731, 'Bock_(bière)'),
(157, 'Bogolan_distribution'),
(718, 'Bombardement_de_Bouaké'),
(148, 'Bonahouin'),
(708, 'Bouake_Fofana'),
(650, 'Bouaké_Football_Club'),
(46, 'Boubacar_Barry_Copa'),
(67, 'Bourse_régionale_des_valeurs_mobilières'),
(640, 'Bruno_Dogbo_Blé'),
(736, 'Bureau_national_d\'études_techniques_et_de_développement'),
(689, 'Caféiculture_en_Côte_d\'Ivoire'),
(47, 'Caisse_de_stabilisation'),
(588, 'Canton_Tiéma'),
(511, 'Carnaval_de_Bouaké'),
(760, 'Cécile_Fakhoury'),
(516, 'Célestin_Kodet_Dadié'),
(701, 'Centre_africain_de_management_et_de_perfectionnement_des_cadres'),
(557, 'Centre_d\'imagerie_médicale_d\'Abidjan'),
(578, 'Centre_de_recherche_et_d\'action_pour_la_paix'),
(524, 'Championnat_de_Côte_d\'Ivoire_de_basket-ball'),
(721, 'Championnat_de_Côte_d\'Ivoire_de_football_2019-2020'),
(761, 'Championnat_de_Côte_d\'Ivoire_de_football_2020-2021'),
(523, 'Championnat_de_Côte_d\'Ivoire_de_handball'),
(83, 'Chantier_panafricain_d\'écriture_dramatique_des_femmes'),
(15, 'Chekeré'),
(637, 'Christian_Kouakou_(football,_1991)'),
(726, 'Christian_Kouan'),
(92, 'Christine_Adjobi'),
(668, 'Christopher_Naliali'),
(6, 'Chronologie_de_la_crise_politico-militaire_en_Côte_d\'Ivoire'),
(73, 'Clément_N\'Goran'),
(605, 'Cocody_Rock!'),
(513, 'Code_de_la_nationalité_ivoirienne'),
(115, 'Compagnons_de_l\'aventure_46'),
(158, 'Constitution_ivoirienne_de_2000'),
(672, 'Coupe_d\'Afrique_des_nations_de_football_2023'),
(56, 'Culture_de_la_Côte_d\'Ivoire'),
(161, 'Dagobert_Banzio'),
(625, 'Dakua'),
(509, 'Dalokan'),
(728, 'David_Monsoh'),
(36, 'David_Tayorault'),
(22, 'Désiré_Écaré'),
(48, 'Diabo_(Côte_d\'Ivoire)'),
(26, 'Dida_(peuple)'),
(17, 'Didier_Bilé'),
(628, 'Dikpi'),
(561, 'Diocèse_d\'Abengourou'),
(563, 'Diocèse_d\'Odienné'),
(562, 'Diocèse_de_Katiola'),
(564, 'Diocèse_de_San-Pédro_en_Côte_d\'Ivoire'),
(98, 'Dioula_(peuple)'),
(29, 'District_du_Bas-Sassandra'),
(572, 'DJ_Lewis'),
(113, 'DJ_Maréchal'),
(84, 'Djéni_Kobina'),
(632, 'Dogbogwie'),
(105, 'Domaboué'),
(109, 'Domangbeu'),
(104, 'Doubé'),
(62, 'Doudoukou'),
(43, 'Douk_Saga'),
(620, 'Dri'),
(615, 'Droits_LGBT_en_Côte_d\'Ivoire'),
(86, 'Edmond_Edouard_N\'Gouan'),
(722, 'Edmond_Joseph_Bouazo-Zégbéhi'),
(686, 'Édouard_Angoran'),
(684, 'Édouard_Kassaraté'),
(558, 'Éducation_coloniale_en_Côte_d\'Ivoire'),
(592, 'Élection_présidentielle_ivoirienne_de_1995'),
(591, 'Élection_présidentielle_ivoirienne_de_2000'),
(598, 'Élections_municipales_ivoiriennes_de_2011'),
(129, 'Émile_Atta_Brou'),
(96, 'Émile_Constant_Bombet'),
(32, 'Entente_sportive_de_Bingerville'),
(506, 'Erickson_Le_Zulu'),
(596, 'Ernest_Dükü'),
(63, 'Ernest_Roume'),
(677, 'Esther_Memel'),
(702, 'Établissements_français_de_la_Côte_de_l\'Or_et_du_Gabon'),
(599, 'Étoile_du_Sud'),
(151, 'Ettrokro'),
(733, 'Eugène_Aouélé_Aka'),
(164, 'Ezan_Akélé'),
(527, 'Fahani'),
(604, 'Fané_Bakary'),
(681, 'Fatim_Sidime'),
(727, 'Fausséni_Dembélé'),
(667, 'Fédération_ivoirienne_de_hockey_sur_gazon'),
(575, 'Femmes_(album)'),
(42, 'Fétiche_éburnéen'),
(756, 'Fior_de_Bior'),
(136, 'Fonds_national_de_solidarité_pour_la_promotion_d\'emplois_jeunes'),
(7, 'Forces_armées_de_Côte_d\'Ivoire'),
(81, 'Francis_Wodié'),
(33, 'François-Joseph_Amon_d\'Aby'),
(85, 'Fréquence_2'),
(690, 'Gabriel_Dadié'),
(23, 'Gabriel_Tiacoh'),
(725, 'Galerie_Cécile_Fakhoury'),
(658, 'Gary_Chaynes'),
(504, 'Gazégagnon'),
(618, 'Gbadi'),
(750, 'Gbêkê'),
(577, 'Gbélo'),
(49, 'Gbloh'),
(603, 'Gbofe'),
(143, 'Gbogolo'),
(543, 'Gbogui'),
(573, 'Georges_Kouadio'),
(556, 'Georges_Ouégnin'),
(743, 'Germain_Anouman_Ollo'),
(585, 'Gilbert_Marie_N\'gbo_Aké'),
(612, 'Glazai_Dohou_Kevin'),
(172, 'Gnahoré_Jimmy'),
(601, 'Gnaliepa'),
(539, 'Gnangnon'),
(735, 'Gnato_Gbala'),
(114, 'Gossan_Kwa_Gbeke'),
(624, 'Gotibo'),
(694, 'Gotibo_(canton)'),
(88, 'Gouessesso'),
(675, 'Gouvernement_Coulibaly_I'),
(639, 'Gouvernement_Houphouët-Boigny_XI'),
(80, 'Grabo_(Côte_d\'Ivoire)'),
(617, 'Guébié'),
(570, 'Guei_Thérèse'),
(154, 'Guiendé'),
(683, 'Guillaume_Koffi'),
(657, 'Honoré_N\'Zué'),
(162, 'Ibrahim_Sy_Savané'),
(50, 'Innocent_Naki'),
(584, 'Institut_universitaire_d\'Abidjan'),
(746, 'Irié_Goli_Bi'),
(710, 'Isaac_Avy'),
(127, 'Isabelle_Béké'),
(5, 'Ivoirité'),
(635, 'Je_m\'appelle_Fargass'),
(664, 'Jean-Baptiste_Yao'),
(87, 'Jean-Jacques_Béchio'),
(52, 'Jean-Jacques_Kouamé'),
(752, 'Jean-Louis_Koula'),
(34, 'Jeunesse_sportive_de_Bassam'),
(608, 'John_Koutoukou'),
(138, 'John_Yalley'),
(45, 'John_Zino'),
(16, 'Joseph_Andjou'),
(665, 'Kaba_Nialé'),
(757, 'Kadidiatou_Fadika-Coulibaly'),
(749, 'Kandice_Esther'),
(535, 'Kantélégué'),
(103, 'Kasombarga'),
(152, 'Kawolo-Sobara'),
(704, 'Khalife_Moustapha_Sonta'),
(141, 'Kodioussou'),
(703, 'Kodjo_Eboucle'),
(600, 'Kofiplé'),
(693, 'Kolokaha'),
(554, 'Konolo'),
(755, 'Kouame_Koffi_Athanase'),
(106, 'Koukourandoumi'),
(77, 'Koumassi'),
(549, 'Kounoumon'),
(622, 'Kriwa'),
(663, 'Krobou'),
(54, 'Krou_(peuple)'),
(126, 'La_Jet_Set'),
(571, 'Lagaze'),
(724, 'Lagune_de_Digbwé'),
(762, 'Lambert_Kouassi_Konan'),
(682, 'Lamine_Diabaté'),
(531, 'Lamine_Fadiga'),
(70, 'Le_Patriote_(journal)'),
(30, 'Le_Soleil_de_Cocody'),
(670, 'Léon_Naka'),
(95, 'Léonard_Groguhet'),
(60, 'Léonard_Offoumou_Yapo'),
(517, 'Les_Pivoines'),
(532, 'Les_Youlés'),
(678, 'Leticia_N\'cho'),
(124, 'Lino_Versace'),
(10, 'Liste_d\'atteintes_à_la_liberté_de_la_presse_en_Côte_d\'Ivoire'),
(673, 'Liste_d\'écrivains_ivoiriens'),
(135, 'Liste_d\'établissements_sanitaires_d\'Abidjan'),
(100, 'Liste_d\'établissements_scolaires_d\'Abidjan'),
(145, 'Liste_des_communes_de_Côte_d\'Ivoire'),
(20, 'Lobi_(peuple)'),
(552, 'Lodala'),
(587, 'Logobi'),
(550, 'Logouhi'),
(700, 'Lôh-Djiboua'),
(551, 'Lohouré'),
(623, 'Lossom'),
(695, 'Lossom_(canton)'),
(740, 'Louis_Kouakou-Habonouan'),
(593, 'Louis_Mouttet'),
(131, 'Loviguié'),
(582, 'Lycée_classique_d\'Abidjan'),
(74, 'M\'Bassidjé_Eddo_François'),
(580, 'M\'Batto'),
(723, 'Ma_grande_famille'),
(142, 'Mahalé'),
(11, 'Malinké_(peuple)'),
(645, 'Mamadou_Coulibaly_(football,_1980)'),
(688, 'Mamadou_Touré_(homme_politique)'),
(14, 'Man_(Côte_d\'Ivoire)'),
(569, 'Mandé'),
(76, 'Mantongouiné'),
(741, 'Manuella_Ollo'),
(165, 'Marcel_Amon-Tanoh'),
(754, 'Marcel_Kouamenan_Kouadio'),
(102, 'Mariam_Coulibaly_(animatrice_de_télévision)'),
(738, 'Marie_Koré'),
(734, 'Marie_Rose_Guiraud'),
(119, 'Marie-Thérèse_Houphouët-Boigny'),
(110, 'Martial_Joseph_Ahipeaud'),
(720, 'Masséré_Touré'),
(69, 'Médias_en_Côte_d\'Ivoire'),
(651, 'Méité_Sindou'),
(647, 'Métro_d\'Abidjan'),
(507, 'Michel_Gbagbo'),
(116, 'Michel_Konan_Blédou'),
(25, 'Micheline_Coulibaly'),
(676, 'Mohamé'),
(163, 'Mohamed_Lamine_Fadika'),
(4, 'Moïse_Koré'),
(24, 'Monique_Séka'),
(134, 'Monogaga'),
(659, 'Mouvement_écologique_ivoirien'),
(132, 'Musique_adjoukroue'),
(120, 'Musique_ivoirienne'),
(713, 'Mythe_de_la_création_du_monde_malinké'),
(555, 'N\'Dara'),
(669, 'N\'gban'),
(518, 'N\'zi_FC_Dimbokro'),
(533, 'Nangbolodougou'),
(614, 'Nangoniékaha'),
(19, 'Néyo_(langue)'),
(512, 'Ngolo_di_papa'),
(150, 'Niablé'),
(616, 'Niabré'),
(542, 'Niandono'),
(548, 'Niangboué'),
(544, 'Nianzongo'),
(18, 'Nigui-saff'),
(540, 'Noonlara'),
(729, 'NST_Cophie\'s'),
(641, 'Nyabwa_(peuple)'),
(21, 'Nzema_(peuple)'),
(123, 'Office_national_d\'identification_(Côte_d\'Ivoire)'),
(118, 'Olivier_Gnakabi_Ottro'),
(515, 'Oualébo'),
(526, 'Ouarapa'),
(753, 'Ouattara_Watts'),
(122, 'Ouendé-Kouassikro'),
(619, 'Paccolo'),
(730, 'Pandémie_de_Covid-19_en_Côte_d\'Ivoire'),
(568, 'Pape_Gnepo'),
(89, 'Parc_naturel_du_Gaoulou'),
(99, 'Parti_communiste_révolutionnaire_de_Côte_d\'Ivoire'),
(167, 'Pat_Sacko'),
(91, 'Paul_Antoine_Bohoun_Bouabré'),
(666, 'Paulette_Badjo_Ezouehu'),
(35, 'Peinture_ivoirienne'),
(40, 'Pelezi'),
(636, 'Philippe_Lacôte'),
(68, 'Philippe_Yacé'),
(715, 'Pierre-Michel_Pango'),
(739, 'Plaque_d\'immatriculation_ivoirienne'),
(589, 'Police_nationale_(Côte_d\'Ivoire)'),
(93, 'Polyclinique_internationale_Hôtel_Dieu_Abidjan'),
(553, 'Poniakélé'),
(714, 'Poro_(Côte_d\'Ivoire)'),
(546, 'Portio'),
(586, 'Première_dame_de_Côte_d\'Ivoire'),
(654, 'Programme_d\'appui_au_commerce_et_à_l’intégration_régionale'),
(155, 'Prosuma'),
(505, 'Qui_fait_ça_?'),
(732, 'Racing_Club_d\'Abidjan'),
(71, 'Radio_Côte_d\'Ivoire'),
(65, 'Radio_Jam'),
(58, 'Radiodiffusion_télévision_ivoirienne'),
(8, 'Rassemblement_des_républicains'),
(656, 'Région_du_Moronou'),
(64, 'Renaud_de_Malaussène'),
(160, 'René_Aphing_Kouassi'),
(581, 'René_Netro'),
(711, 'Ricardo_Bhaly'),
(597, 'Royaume_Baoulé'),
(169, 'Royaume_du_Sanwi'),
(59, 'RTI_1'),
(130, 'Rudy_Rudiction'),
(97, 'Rue_Princesse_(Abidjan)'),
(529, 'Sago_(Boundiali)'),
(590, 'Sah'),
(583, 'Saliou_Touré'),
(13, 'San-Pédro'),
(153, 'Sandégué'),
(530, 'Sankarani'),
(638, 'Satiklan'),
(662, 'Scoutisme_en_Côte_d\'Ivoire'),
(697, 'Secrétariat_d\'État_chargé_de_l\'Enseignement_technique_et_de_la_Formation_professionnelle'),
(107, 'Séguelon'),
(706, 'Sékou_Touré_(officier_général)'),
(538, 'Seleho'),
(12, 'Sénoufos'),
(705, 'Serge_Gogoua'),
(602, 'Serge_Grah'),
(168, 'Serge_Kassi'),
(90, 'Séverin_Kacou'),
(594, 'SIFCA'),
(712, 'Silas_Gnaka'),
(534, 'Sisséplé'),
(66, 'Sitarail'),
(630, 'Sobô'),
(170, 'Société_africaine_de_plantations_d\'hévéas'),
(159, 'Société_des_caoutchoucs_de_Grand-Béréby'),
(751, 'Société_ivoirienne_de_trading'),
(541, 'Sodalako'),
(108, 'Sokoro_(Côte_d\'Ivoire)'),
(696, 'Sokuyas'),
(125, 'Solidarité_africaine_d\'assurances'),
(144, 'Sorobango'),
(78, 'SOTRA_Tourisme_&_Voyages'),
(37, 'Soum_Bill'),
(82, 'Sporting_Club_de_Gagnoa'),
(691, 'Stade_olympique_Ebimpé'),
(528, 'Stéphane_Konaté'),
(609, 'Super_Timor'),
(671, 'Supercoupe_d\'Afrique_de_football_1982'),
(737, 'Suy_Fatem'),
(748, 'Sylvie_Fofana'),
(149, 'Taabo'),
(140, 'Tafiré'),
(128, 'Tagbana'),
(560, 'Tahiraguhé'),
(537, 'Talaho'),
(680, 'Tchimou-Assèkro'),
(146, 'Temate'),
(536, 'Ténélogo'),
(579, 'Thierry_Tanoh'),
(53, 'Tiburce_Koffi'),
(117, 'Tie_Ndiékro'),
(610, 'Tien-Oula'),
(147, 'Tina_Glamour'),
(687, 'Touala'),
(121, 'Toumoukoro'),
(545, 'Tounvré'),
(510, 'Trois_fables_à_l\'usage_des_Blancs_en_Afrique'),
(61, 'Un_homme_pour_deux_sœurs'),
(55, 'Union_démocratique_de_Côte_d\'Ivoire'),
(698, 'Union_nationale_des_blogueurs_de_Côte_d\'Ivoire'),
(112, 'Union_pour_le_développement_et_les_libertés'),
(503, 'Université_canadienne_des_arts,_des_sciences_et_du_management_(Côte_d\'Ivoire)'),
(508, 'Variétoscope'),
(514, 'Vetcho_Lolas'),
(707, 'Vincent_Toh_Bi_Irié'),
(94, 'Waipa_Saberty'),
(156, 'Wés'),
(699, 'Wikipédia_en_akan'),
(27, 'Wobé'),
(631, 'Yacolo'),
(1, 'Yamoussoukro'),
(521, 'Yaouré_(peuple)'),
(629, 'Yocolo'),
(51, 'Youssouf_Bakayoko'),
(522, 'Youssoumba'),
(547, 'Ziasso_(Côte_d\'Ivoire)'),
(621, 'Zikobouo'),
(646, 'Zlan_de_Belewale'),
(717, 'Zota'),
(38, 'Zouglou'),
(627, 'Zuglo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article_wiki`
--
ALTER TABLE `article_wiki`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article_wiki`
--
ALTER TABLE `article_wiki`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=763;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
