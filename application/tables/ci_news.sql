--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_news`
--
CREATE TABLE `ci_news` (
  `ne_id` int(11) NOT NULL,
  `ne_title` varchar(300) NOT NULL,
  `ne_desc` text NOT NULL COMMENT 'نص الخبر',
  `ne_img` varchar(255) NOT NULL,
  `ne_lang` varchar(2) NOT NULL,
  `ne_created` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_news`
--

INSERT INTO `ci_news` (`ne_id`, `ne_title`, `ne_desc`, `ne_img`, `ne_lang`, `ne_created`) VALUES
(38, 'Climate predicts bird populations', 'Populations of the most common bird species in Europe and the US are being altered by climate change, according to an international study.\nFor the first time researchers showed climate to be having a similar, significant impact on bird populations in large, distant areas of the world.\nTheir study used population-predicting models and three decades of field data, gathered by bird-watching volunteers.\nThe findings are published in the journal Science.\nLed by Durham University scientists, the team developed models that related each species'' habitat to long-term climate patterns.\nUsing annual climate records - from 1980 to 2010 - these models were able to predict where a species had experienced an improvement or a decline in suitable climate.', 'bird.jpg', 'en', '1459435234'),
(39, 'Google April Fool Gmail button sparks backlash', 'Google has removed an April Fool''s Gmail button, which sent a comical animation to recipients, after reports of people getting into trouble at work.', 'google_splash.jpg', 'en', '1459435249'),
(44, 'las poblaciones de aves de predicción del clima', 'Las poblaciones de las especies de aves más comunes en Europa y los EE.UU. están siendo alterados por el cambio climático, según un estudio internacional.\r\nPor primera vez, los investigadores mostraron que el clima puede tener un impacto similar, significativo sobre las poblaciones de aves en áreas grandes y distantes del mundo.\r\nEl estudio utiliza modelos de población-y la predicción de tres décadas de datos de campo recogidos por los voluntarios, la observación de aves.\r\nLos resultados se publican en la revista Science.\r\nDirigido por científicos de la Universidad de Durham, el equipo desarrolló modelos que relacionan el hábitat de cada especie a los patrones climáticos a largo plazo.\r\nEl uso de registros climáticos anuales - 1980-2010 - estos modelos fueron capaces de predecir donde una especie había experimentado una mejora o una disminución en el clima adecuado.', 'fa700191093777838ffbeca963d41b4d.jpg', 'es', '1475934784'),
(45, 'les populations d''oiseaux de prévision climatique', 'Les populations d''espèces d''oiseaux les plus communs en Europe et aux États-Unis sont modifiés par le changement climatique, selon une étude internationale.\r\nPour la première fois, des chercheurs ont montré le climat à avoir une incidence significative similaire sur les populations d''oiseaux dans de vastes zones, éloignées du monde.\r\nLeur étude a utilisé des modèles de population prédire et trois décennies de données sur le terrain, recueillies par des volontaires d''observation des oiseaux.\r\nLes résultats sont publiés dans la revue Science.\r\nDirigée par des scientifiques de l''Université de Durham, l''équipe a développé des modèles qui ont trait l''habitat de chaque espèce à des modèles climatiques à long terme.\r\nUtilisation de dossiers annuels climatiques - 1980-2010 - ces modèles ont été en mesure de prédire où une espèce a connu une amélioration ou une baisse dans le climat approprié.', '8556a9d28221b7d6b65f5abac3f84d97.jpg', 'fr', '1475934877'),
(46, 'Loco Google Gmail abril botón chispas reacción violenta', 'Google ha eliminado el botón de Gmail de los Inocentes, que envió una animación cómica a los destinatarios, después de los informes de las personas que reciben en problemas en el trabajo.\r\nEl botón apareció junto botón enviar normales de Gmail y permitía a los usuarios a cerrar un hilo de correo electrónico mediante el envío de un gif de un Minion dejando caer un micrófono.\r\nSin embargo, una serie de quejas sobre el botón apareció en los foros de Google.\r\nya que la firma ha retirado la función y se disculpó.', 'f3307816af8e0a8337338187afbd79a8.jpg', 'es', '1475934964'),
(47, 'Gmail Google Avril bouton Fool étincelles jeu', 'Google a supprimé le bouton Gmail un poisson d''Avril, qui a envoyé une animation comique à des destinataires, après des rapports des gens en difficulté au travail.\r\nLe bouton à côté de Apparue bouton d''envoi standard de Gmail et a permis aux utilisateurs de fermer un fil de courriel en envoyant un gif d''un Minion laisser tomber un microphone.\r\nCependant, une avalanche de plaintes au sujet du bouton est apparu sur les forums de Google.\r\nLa firme a depuis retiré la fonction et se sont excusés.', '4db683628d646549b296c0e3c27268bc.jpg', 'fr', '1475935037');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_news`
--
ALTER TABLE `ci_news`
  ADD PRIMARY KEY (`ne_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_news`
--
ALTER TABLE `ci_news`
  MODIFY `ne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

