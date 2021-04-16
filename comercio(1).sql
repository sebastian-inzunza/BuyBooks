-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2021 a las 02:39:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(10) NOT NULL,
  `titulo` text COLLATE utf16_spanish2_ci NOT NULL,
  `genero` text COLLATE utf16_spanish2_ci NOT NULL,
  `detalle` text COLLATE utf16_spanish2_ci NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(3) NOT NULL,
  `imagen` text COLLATE utf16_spanish2_ci NOT NULL,
  `autor` text COLLATE utf16_spanish2_ci NOT NULL,
  `editorial` varchar(150) COLLATE utf16_spanish2_ci NOT NULL DEFAULT 'Alfaguara'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `genero`, `detalle`, `precio`, `cantidad`, `imagen`, `autor`, `editorial`) VALUES
(1, 'Dialogos', 'Filosofia', 'Diálogos de Platón una obra escrita por el célebre filósofo griego, Platón, distinguido también por haber sido el principal estudiante de Sócrates y maestro de Aristóteles, con quienes conforma el cuadro de los tres filósofos clásicos de la antigua Griega.', 150, 20, 'img/Filosofia/1.png', 'Platon', 'Alfaguara'),
(3, 'El poder de un bestia Magnifica', 'Filosofia', '¿En qué sentido el poder es una bestia magnífica? Michel Foucault no lo piensa como un monstruo frío o un leviatán, a la manera de Nietzsche o Hobbes, sino como un conjunto de dispositivos que hay que analizar para ver cómo funcionan, qué producen, cuáles son sus discursos y sus prácticas. Ahora bien, ¿cuándo y por qué Foucault empieza a interesarse en el poder? A través de entrevistas, conferencias e intervenciones en su mayor parte inéditas o inaccesibles en español, este volumen esclarece las circunstancias políticas y las preocupaciones personales que están en el origen de los libros y de los cursos del autor, y permite situarlos en el marco de una elaboración teórica en constante mutación. En estos escritos sólo en apariencia \"laterales\", Foucault relaciona con claridad de síntesis los saberes y las luchas: así, por ejemplo, revisa la función de la policía, las interpretaciones del terrorismo y de la violencia política, la dinámica de los nacionalismos, la medicalización de la sociedad, la situación de las instituciones penitenciarias. De estos textos surge un Foucault muchas veces coloquial, que articula sus ideas en el cruce entre la erudición y esa cotidianidad que se desprende de los programas televisivos, de la lectura de los diarios o de los sucesos puntuales en los que ha decidido intervenir. El criterio de selección de los textos aquí reunidos incorpora los nuevos horizontes de lectura abiertos por los trabajos de Foucault recientemente publicados. En este sentido, el presente volumen busca funcionar como un puente entre sus cursos y sus libros, así como entre sus investigaciones y la actualidad. El poder, una bestia magnífica inicia una serie abierta, que contribuirá sin duda a una mejor comprensión del pensamiento foucaultiano.', 377.99, 40, 'img/Filosofia/2.png', '', 'Porrua'),
(4, 'El Existencialismo es un Humanismo ', 'Filosofia', '\"El existencialismo es un humanismo\" (1945) es una conferencia (luego publicada como libro) en la que Jean-Paul Sartre explica las ideas esenciales de su existencialismo con ejemplos prácticos.\r\n\r\nLa conferencia tuvo lugar en el club Maintenant, creado al finalizar la Segunda Guerra Mundial y superó todas las expectativas de asistencia.', 250.5, 12, 'img/Filosofia/3.png', '', 'Alfaguara'),
(5, 'La Ilíada', 'Filosofia', 'La Ilíada, compuesta en el siglo VIII a.C., narra una leyenda micénica situada en el siglo XIII a.C., una edad heroica dominada por los aspectos militares, el individualismo desenfrenado y la persecución de la riqueza y la gloria. La Ilíada cuenta un episodio de la epopeya de la rica y estratégica ciudad de Troya, o Ilión. Es el poema de la cólera de Aquiles, hijo de mortal y diosa y el más destacado de los combatientes griegos, en su afán de heroicidad y sus ansias de venganza. El poema de una gran guerra que afecta a multitud de seres humanos, víctimas del enfrentamiento personal de un reducido grupo de héroes en su particular lucha por el poder. El canto del dolor y el sufrimiento, de la caída de unos valores y de un modo de vida, refinado y aristocrático, que acaba en la muerte o en la esclavitud. Pero es también la exaltación de la belleza de la fascinación por la acción y la consecución de la gloria.', 245.65, 15, 'img/Filosofia/4.png', '', 'Alfaguara'),
(6, 'La Nausea', 'Filosofia', 'Después de haber pasado unos años viajando, Antoine Roquentin, hombre de treinta años que disfruta de una modesta renta, se halla instalado en la ciudad portuaria de Bouville dedicado a escribir un libro sobre un turbio aristócrata del siglo XVIII. Sin embargo, un día se ve asaltado por una sensación desconocida, la náusea, cuya revelación como el sentimiento radical de la contingencia y la soledad del ser humano cambiará por completo su vida de sentido. Publicada en 1938, La náusea de Jean-Paul Sartre es, junto con el extranjero de Albert Camus, la novela que encarna de forma más emblemática la corriente de pensamiento existencialista fruto de la atroz experiencia de la primera guerra mundial y sus funestas consecuencias.', 260, 25, 'img/Filosofia/5.png', '', 'Alfaguara'),
(8, 'La Odisea', 'Filosofia', 'Más allá de todas las lecturas posibles, nunca como ahora es necesaria la lectura de una obra como La Odisea, ya que a través de ella nuestra imaginación puede ir recuperando buena parte de la agilidad perdida por efecto de las condiciones de existencia en que transcurren nuestras vidas. Por si esto fuera poco, La Odisea es una obra capaz de reconciliarnos con la esperanza, en un mundo que a veces nos desespera demasiado.', 39.99, 4, 'img/Filosofia/6.png', '', 'Alfaguara'),
(9, 'La Metafísica', 'Filosofia', 'La Metafísica, uno de los tratados fundamentales de Aristóteles (384-322 a. C.), tuvo como génesis un conjunto de escritos independientes, cuya finalidad original era sobre todo educativa. Así pues, por su naturaleza, la Metafísica no puede considerarse tanto la exposición de un sistema perfectamente acabado como una obra que aborda diferentes temas a lo largo de catorce libros. No obstante, su concepción integral acaba dando a luz la ciencia «más allá de la física», es decir, la filosofía primera. La Metafísica no solo es un libro pionero, sino que se trata una de las obras capitales de la filosofía, cuyo peso e influencia son inmensos e inabarcables. En este cuidado volumen se presentan tres versiones del texto aristotélico.', 215, 23, 'img/Filosofia/7.png', '', 'Alfaguara'),
(10, 'VIGILAR Y CATIGAR nacimiento de la prisión', 'Filosofia', 'Quizás nos dan hoy vergüenza nuestras prisiones. El siglo XIX, se sentía orgulloso de las fortalezas que construía en los límites a veces en el corazón de las ciudades. Le encantaba esta nueva benignidad que reemplazaba los patíbulos. Se maravillaba de no castigar ya los cuerpos y de saber corregir en adelante las almas. Aquellos muros, aquellos cerrojos, aguellas celdas figuraban una verdadera empresa de ortopedia social. A los que roban se los cencarcela; a los que violan se los encarcela; a los que matan, también. ¿De dónde viene esta extraña práctica y el curioso proyecto de encerrar para corregir, que traen consigo los Códigos penales de la época moderna? ¿Una vieja herencia de las mazmorras de la Edad Media? Más bien una tecnología nueva: el desarrollo, del siglo XVI al XIX, de un verdadero conjunto de procedimientos para dividir en zonas, controlar, medir, encauzar a los individuos y hacerlos a la vez \"dóciles y útiles\". Vigilancia, ejercicios, maniobras, calificaciones, rangos y lugares, clasificaciones, exámenes, registros, una manera de someter los cuerpos, de dominar las multiplicidades humanas y de manipular sus fuerzas, se ha desarrollado en el curso de los siglos clásicos, en los hospitales, en el ejército, las escuelas, los colegios o los talleres: la disciplina. El siglo XIX inventó, sin duda, las libertades; pero les dio un subsuelo profundo y sólido -la sociedad disciplinaria de la que seguimos dependiendo-. Hay que volver a situar la prisión en la formación de esta sociedad de vigilancia. La penalidad moderna no se atreve ya a decir qeu castiga crímenes; pretende readaptar a los delincuentes. Pronto hará ya dos siglos que se halla próxima y hasta cierto punto emparentada con las \"ciencias humanas\". Tal es su orgullo, su manera, en todo caso, de no sentirse demasiado avergonzada de sí misma: \"No soy quizá todavía del todo justa; hay que tener conmigo un poco de paciencia y ver cómo me estoy volviendo sabia\". Pero ¿de qué manera la psicología, la psiquatría, la criminología, podrían jutificar la justicia de hoy, puesto que su historia muestra una misma tecnología polític aen el punto en que se han formado las unas y las otras? Bajo el conocimiento de los hombres y bajo la humanidad de los castigos, se encuentra cierto dominio disciplinario de los cuerpos, una forma mixta de sometimiento y de objetivación, un mismo \"poder saber\" (M. Foucault).', 599.99, 60, 'img/Filosofia/8.png', '', 'Alfaguara'),
(12, 'Madame Bovary', 'Novela', 'Insatisfecha de la cotidianidad de su vida como ama de casa, Emma Bovary se cuestiona día a día el sentido de su existencia. Es hasta que Rodolphe, un elegante hombre de mundo, la seduce cuando está convencida de que ha encontrado la razón vivir en esta pasión; sin embargo, le costará comprender que vive en un mundo ilusorio de amores y riquezas falsos.', 238, 21, 'img/Novelas/1.png', '', 'Alfaguara'),
(13, 'Penas del Joven Werther ', 'Novela', 'El éxito alcanzado por “Penas del joven Werther” en el momento de su publicación (1774) se debió tanto a sus valores literarios como a su afinidad con el nuevo talante que comenzaba a transformar la sensibilidad y el espíritu de la época y que habría de plasmarse en el romanticismo. Sin embargo, la historia de amores desdichados que alumbró Johann Wolfgang Goethe (1749-1832) es, como apunta en su iluminador prólogo Rosa Sala Rose, un río subterráneo que aflora una y otra vez no sólo en la historia de su autor sino en la historia de nuestra época. Y esto es sin duda por su capacidad para conectar con los conflictos e insatisfacciones latentes en todos los tiempos: justo lo que hace de una obra un “clásico”.', 249.99, 20, 'img/Novelas/2.png', '', 'Alfaguara'),
(14, 'Crimen y Castigo', 'Novela', 'Crimen y castigo (1866) es seguramente la obra más lograda de Fiódor Dostoyevski (1821-1881). En esta parábola de transgresión y expiación, las elucubraciones de su protagonista Rodion Raskolnikov anihilista descarriado por las teorías utilitaristas procedentes de Occidente en torno al derecho de los hombres extraordinarios a utilizar el asesinato como medio para alcanzar fines superiores confieren al relato su carga ideológica. Sin embargo, los argumentos doctrinales encaminados a justificar la muerte de una vieja prestamista se combinan de forma inextricable con el estudio psicológico del criminal, cuyo forcejeo y desgarro íntimos confieren a la novela sus excepcionales complejidad y hondura. Traducción de Juan López-Morillas', 319, 40, 'img/Novelas/3.png\r\n', '', 'Alfaguara'),
(15, 'Los Hermanos Karamozov', 'Novela', 'Escrita entre 1879 y 1880, LOS HERMANOS KARAMÁZOV es la última novela que escribió Fiódor Dostoyevski (1821-1881) y supone una síntesis de todas las inquietudes existenciales del autor. Su compleja galería de personajes está presidida por Fiódor Karamázov, el padre, ruin, hipócrita, avaro, cínico y libertino, y por sus descendientes: Dmitri, sensual, orgulloso y cruel, pero también generoso y capaz de rasgos de bondad y sacrificio; Iván, un Intelectual escéptico que niega la existencia de Dios y el amor al prójimo; Aliosha, un cristiano místico que opone al humanitarismo revolucionario y al nihilismo el amor a Dios y al prójimo, aunque tampoco es inmune a las sensaciones turbias que lo invaden, y finalmente Smerdiakov, el cínico y perverso hijo natural, carente de todo sentido de responsabilidad moral. La obra, que tiene uno de sus puntos culminantes con el célebre relato del Gran Inquisidor, refleja una concepción del hombre como campo de batalla en el que luchan Dios y el Diablo, el bien y el mal.', 497.2, 25, 'img/Novelas/4.png', '', 'Alfaguara'),
(16, 'Humillados y Ofendidos', 'Novela', 'Omsk durante cuatro años y su posterior servicio como soldado durante cinco, HUMILLADOS Y OFENDIDOS es una novela clave en la trayectoria de Fiódor Dostoyevski (1821-1881), pues supuso la afirmación del rumbo que habría de tomar en adelante su extraordinaria carrera literaria. Influida aún por el carácter folletinesco de su publicación original en 1861, es a la vez crónica de amores imposibles y drama social, gran novela de entretenimiento y notable galería de personajes que mereció el elogio del gran Tolstói.', 327, 15, 'img/Novelas/5.png', '', 'Alfaguara'),
(17, 'Los Miserables', 'Novela', 'Jean Valjean ha cumplido una condena de casi veinte años por robar comida para su familia. Fuera de la cárcel, la sociedad le margina y no le queda más remedio que seguir robando. Un inesperado encuentro con el obispo Myriel le hará cambiar de actitud y redimirse. A pesar de ello y de adoptar una nueva identidad, la justicia, encarnada en el implacable policía Javert, le obliga a emprender una huida permanente que le llevará a esconderse en conventos y cloacas, y a pasar por los campos de batalla de Waterloo y por las barricadas del París revolucionario de 1832, siempre buscando para sí y para los demás una justicia que le es negada. \"Los miserables\", una de las obras clásicas de la literatura universal que se ofrece aquí en una traducción moderna y fidedigna, sin omisiones ni censuras, ha sido llevada al cine en numerosas ocasiones y es la base del mundialmente conocido musical homónimo.', 679, 25, 'img/Novelas/6.png', '', 'Alfaguara'),
(18, 'Nuestra Señora de Paris', 'Novela', 'En el París del siglo XV, con sus sombrías callejuelas pobladas por desheredados de la fortuna y espíritus atormentados, la gitana Esmeralda, que predice el porvenir y atrae fatalmente a los hombres, es acusada injustamente de la muerte de su amado y condenada al patíbulo. Agradecido por el apoyo que en otro tiempo recibió de ella, Quasimodo, campanero de Nuestra Señora, de fuerza hercúlea y cuya horrible fealdad esconde un corazón sensible, la salva y le da asilo en la catedral. \"Nuestra Señora de París\" ha dado lugar a numerosos libretos de ópera y a varias versiones cinematográficas.', 244, 15, 'img/Novelas/7.png', '', 'Alfaguara'),
(19, 'Caín', 'Novela', 'Del Premio Nobel de Literatura 1998, José Saramago.\r\n\r\nUn irónico y mordaz recorrido en el que el lector asiste a una guerra secular, y en cierto modo, involuntaria, entre el creador y su criatura.\r\n\r\nEn un itinerario heterodoxo, recorre ciudades decadentes y establos, palacios de tiranos y campos de batalla, imprimiéndole la música y el humor refinado que caracterizan su obra. Caín pone de manifiesto lo que hay de sorprendente en la prosa de Saramago: la capacidad de hacer nueva una historia que se conoce de principio a fin', 199.99, 10, 'img/Novelas/8.png', '', 'Alfaguara'),
(20, 'En Las Montañas de la Locura', 'Terror', 'Arkham, 1933. El profesor Dyer, un destacado geólogo, se entera de que una expedición a la Antártida partirá pronto con la esperanza de seguir los pasos que el mismo dio en 1931. Con la esperanza de disuadirlos de tal iniciativa, Dyer relata los trágicos sucesos a los que sobrevivió en su expedición y que rechazó contar a su vuelta por miedo a que lo tomasen por loco.\r\n\r\nPaisajes de desiertos helados, criaturas indescriptibles de millones de años descubiertas en un estado anormal de conservación, extrañas estructuras geométricas en la cima de las montañas negras, las más altas que el Everest... Esta historia de Lovecraft ha inspirado a generaciones de autores y directores, desde John Carpenter hasta Guillermo del Toro.\r\n\r\nFascinado por el universo Lovecraft, François Baranger, ilustrador mundialmente reconocido por su talento como artista conceptual en cine y videojuegos, abordó la tarea de poner en imágenes sus historias principales.\r\n\r\nMás allá de sus formidables trazos está esta visión iluminada de la aventura, del misterio, del horror. Observa cómo se las ha arreglado para transportarnos al hielo. Cada lámina es un viaje. Cada transición es un escalofrío. Pronto acusarás el frío, querrás gritar a los personajes que no se metan en ese agujero, temerás que la coraza congelada que protege a los Grandes Antiguos se derrita y libere su olor fétido... Porque François ha dado vida al texto, pero además le ha dado emoción visual.', 559, 25, 'img/Terror/1.png', '', 'Alfaguara'),
(21, 'La llamada de Cthulhu y otro relato', 'Terror', 'Indudablemente, los relatos de H. P. Lovecraft ocupan una zona singularísima en el género que gusta de lo macabro. Sus textos tienen el mérito de persistir retomándose en sucesivos relatos en la existencia de ciertos dioses, libros y poetas. En La llamada de Cthulhu el narrador hereda de su tío abuelo, no sólo sus bienes materiales, sino un laberinto de papeles que lo llevará a la investigación más riesgosa de su vida y al conocimiento de un culto escalofriante. Su curiosidad es la que lo lleva a vislumbrar ese abismo, en cuya comprobación lo había precedido su tío. En Herbert West: Reanimador, el narrador entra en contacto con un compañero universitario que tiene a la manera de Victor Frankenstein la voluntad de devolverle la vida a los muertos. Es testigo y respaldo del afán de su amigo, pero es presumible que, por no ser la mano ejecutora, llega a salvarse. Los dos relatos nos advierten que hay terrores indecibles acechando a los hombres; en los dos casos la curiosidad es más poderosa que la cautela y la muerte persigue a los desobedientes.', 204, 15, 'img/Terror/2.png', '', 'Alfaguara'),
(22, 'El Cuervo: La caída de la casa Usher, El pozo y el péndulo', 'Terror', 'Ebook con un sumario dinámico y detallado: El cuervo es un poema narrativo escrito por Edgar Allan Poe, que fue publicado por primera vez en 1845 y constituye su composición poética más famosa, ya que este poema lo hizo reconocido internacionalmente. Son notables su musicalidad, el lenguaje estilizado y la atmósfera sobrenatural que logra recrear. El poema narra la misteriosa visita de un cuervo parlante a la casa de un amante afligido, y del lento descenso hacia la locura de este último. El amante, que a menudo se ha identificado como un estudiante, llora la pérdida de su amada, Leonor. El cuervo negro, posado sobre un busto de Palas, parece azuzar su sufrimiento con la constante repetición de las palabras \"Nunca más\". En el poema, Poe hace alusión al folclore y a varias obras clásicas.', 50, 10, 'img/Terror/3.png', '', 'Porrua'),
(23, 'El Gato Negro y Otros Relatos de Terror', 'Terror', 'Uno de los rasgos característicos de Edgar Allan Poe en su tratamiento del terror consiste en la mezcla de elementos terroríficos en sí mismos con otros que producen el mismo efecto por vía indirecta. En los once relatos que integran este volumen —entre los que se encuentran algunos de sus cuentos más memorables— puede advertirse todo el arco de posibilidades y modos que tuvo Poe de acercarse a la literatura de terror: espacios cerrados, amores fúnebres, mares tenebrosos, tumbas, cadáveres, sangre y esa típica opresión psicológica que procede de lo extraordinario, es decir, de lo que está más allá de los sentidos, de toda naturaleza, de cualquier lógica. [Edición anotada, con presentación y apéndice]', 240, 15, 'img/Terror/4.png', '', 'Alfaguara'),
(24, 'Dracula', 'Terror', 'Antes de ser elevada por el cine, la leyenda del vampiro alcanzó un gran reconocimiento en este clásico de la literatura de terror. En ella se sintetizan las pulsiones más profundas del ser humano: la vida y la muerte, la sexualidad y el bien y el mal.', 270, 40, 'img/Terror/5.png', '', 'Alfaguara'),
(25, 'IT(ESO)', 'Terror', '¿Quién o qué mutila y mata a los niños de un pequeño pueblo norteamericano?¿Por qué llega cíclicamente el horror a Derry en forma de un payaso siniestro que va sembrando la destrucción a su paso?\r\n\r\nEsto es lo que se proponen averiguar los protagonistas de esta novela. Tras veintisiete años de tranquilidad y lejanía, una antigua promesa infantil les hace volver al lugar en el que vivieron su infancia y juventud como una terrible pesadilla. Regresan a Derry para enfrentarse con su pasado y enterrar definitivamente la amenaza que los amargó durante su niñez.\r\n\r\nSaben que pueden morir, pero son conscientes de que no conocerán la paz hasta que aquella cosa sea destruida para siempre.\r\n\r\nIt es una de las novelas más ambiciosas de Stephen King, con la que ha logrado perfeccionar de un modo muy personal las claves del género de terror.', 409, 15, 'img/Terror/6.png', '', 'Alfaguara'),
(26, 'El Exorcista', 'Terror', 'Si la medicina y la psiquiatría no ayudan, ¿puede el exorcismo ser la respuesta?\r\n\r\nHa llegado el momento para el implacable rito que enfrenta a exorcista y demonio en duelo mortal.\r\n\r\nEl exorcista es una de las obras de ficción más sobrecogedoras y terroríficas jamás escritas.\r\n\r\nBasada en un hecho real, ocurrido en la década de los cuarenta del siglo pasado, la protagonista es una niña de apenas once años que sufre terribles transformaciones, sobre todo en su comportamiento. Ni médicos ni científicos ni psicólogos son capaces de hallar la causa de tal estado y paulatinamente todo se va decantando hacia la hipótesis de que la niña está poseída por el demonio.\r\n\r\nPublicada en 1971, El exorcista es una de las novelas más sobrecogedoras y terroríficas jamás escritas, y ha dado origen a una saga cinematográfica y una seriede televisión de culto.', 119, 12, 'img/Terror/7.png', '', 'Alfaguara'),
(27, 'Frankenstein', 'Terror', 'Famously written on a dare by the author\'s famous friend, poet Lord Byron, this bloodcurdling Gothic horror novel is one of the most haunting stories of all time. It recounts the tragic events in the life of young doctor Frankenstein and the dreadful consequences of his attempt at creating artificial life. More than 100 years after its publication, it remains a brilliant and essential reflection on scientific ethics, as well a literary masterpiece.', 325, 15, 'img/Terror/8.jpg', '', 'Alfaguara'),
(28, 'El Lobo y los siete Cabritos', 'Cuento', 'La mágica y eterna historia de El Lobo y los 7 Cabritos contada en rimas para deleite de los chicos. Las hermosas ilustraciones se podrán encontrar en el interior del libro. ¡Disfrute de la lectura!', 45, 4, 'img/Cuentos/1.png', '', 'Alfaguara'),
(29, 'El Principito', 'Cuento', 'El principito es una fábula infantil que disfrutan por igual los niños y los adultos.', 44, 7, 'img/Cuentos/2.png', '', 'Alfaguara'),
(30, 'Erase una (y otra) Vez ', 'Cuento', 'En este libro, a modo de enciclopedia de personajes, se desvelan aquellos secretos jamás narrados. Algunas de las anécdotas que aquí aparecen pueden resultar increíbles, pero realmente ocurrieron. Y como ni los hermanos Grimm, ni Perrault, ni Andersen, ni tantos otros optaron por narrar estos hechos, la abuelita, personaje sabio y valiente donde los haya, se ha decidido a contar aquello que nunca fue dicho: desde la miopía y el daltonismo de Caperucita, hasta la predilección de Pulgarcito por jugar al escondite o la necesidad del lobo de presentarse a castings para dejar algún día de hacer los mismos papeles en todos los cuentos.', 70, 8, 'img/Cuentos/3.png', '', 'Alfaguara'),
(31, 'Cuentos para jugar', 'Cuento', 'La genialidad de Rodari, maestro de la creatividad, al servicio de los lectores más audaces.', 20, 6, 'img/Cuentos/4.png', '', 'Alfaguara'),
(32, 'Las aventuras de Pinocho', 'Cuento', '«¿Qué nombre le pondré? —se preguntó—. Le voy a llamar Pinocho. Este nombre le traerá suerte.»', 44, 8, 'img/Cuentos/5.png', '', 'Alfaguara'),
(33, 'La maquina de fabricar besos', 'Cuento', 'Cornelius era un hombre que no había conocido el amor. Triste y solo, se dedicaba a inventar cosas: Semillas voladoras, rastrillos que no funcionaban, ruedecitas de flores, etc. Pero un día, con un poco de cuerda, unos clavos y papel, ¡Cornelius inventó una máquina para fabricar besos!', 205, 16, 'img/Cuentos/6.png', '', 'Alfaguara'),
(34, 'Un beso de Mandarina', 'Cuento', 'Tavi se enamora de Vanina el primer día que la ve sentada en la clase. Ella ha llegado de un país lejano, envuelta en misterios. Él no tendrá el camino nada fácil: cada vez que se quiere acercar a Vanina, Ricki y sus colegas le cierran el paso. Eso le ayuda a descubrir que hay un montón de cosas de sí mismo que no sabía, y que, cuando se lo propone, puede llegar muy lejos.', 246, 15, 'img/Cuentos/7.png', '', 'Alfaguara'),
(35, 'Las Jirafas no pueden bailar', 'Cuento', 'Gerald es una jirafa que simplemente no puede bailar. Pruébalo como quiera, sus largas y espinosas piernas se abrochan cada vez que empieza a abuchear. Cada año teme ir a la Gran Danza de la Selva - hasta una noche cuando encuentra su propia música especial...', 288, 20, 'img/Cuentos/8.png', '', 'Alfaguara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id` int(10) NOT NULL,
  `nombreEmpresa` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `paginaweb` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pago` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT 'Sin pagar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `provedor`
--

INSERT INTO `provedor` (`id`, `nombreEmpresa`, `telefono`, `correo`, `direccion`, `paginaweb`, `pago`) VALUES
(11, 'Alfaguara', 2147483647, 'alfaguara@hotmail.com', 'vidrio #1145', 'http://alfaguara.com.mx', 'Pagado'),
(14, 'Porrua', 2147483647, 'porrua@hotmail.com', 'vidrio #1146', 'http://porrua.com.mx', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventas`
--

CREATE TABLE `tbventas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `correo` varchar(5000) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `total` decimal(60,2) NOT NULL,
  `estatus` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numeroTarjeta` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `libros` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `envio` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbventas`
--

INSERT INTO `tbventas` (`id`, `fecha`, `correo`, `total`, `estatus`, `numeroTarjeta`, `libros`, `envio`) VALUES
(41, '2021-04-15', 'sebastian', '250.00', 'PREPARANDO PAQUETE', '23', 'Dialogos, ', 'Estafeta Agilizado ($100)'),
(43, '2021-04-15', 'sebastian', '495.65', 'PAQUETE EN CAMINO', '12343245234735', 'Dialogos, La Ilíada, ', 'Estafeta Agilizado ($100)'),
(44, '2021-04-15', 'sebastian', '627.99', 'PREPARANDO PAQUETE', '123456789892', 'Dialogos, El poder de un bestia Magnifica, ', 'Estafeta Agilizado ($100)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `correo` text COLLATE utf16_spanish2_ci NOT NULL,
  `contrasena` text COLLATE utf16_spanish2_ci NOT NULL,
  `tipo` text COLLATE utf16_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasena`, `tipo`) VALUES
(1, 'davidtorres', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'a'),
(2, 'sebastian', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'u');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
