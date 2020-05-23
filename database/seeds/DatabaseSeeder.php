<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		factory(\App\Role::class, 1)->create(['name' => 'admin']);
		factory(\App\Role::class, 1)->create(['name' => 'client']);

		factory(\App\User::class, 1)->create([
			'name' => 'admin',
			'email' => 'admin@mail.com',
			'password' => bcrypt('secret'),
			'role_id' => \App\Role::ADMIN,
		]);

		factory(\App\Sector::class, 1)->create([
			'name' => 'Minería',
			'description' => 'Desde un proyecto minero en el desierto hasta el nivel más alto de una mina a tajo abierto o subterránea a 5,500 metros de altura en la sierra andina, MICOSER acompaña a la industria minera brindándole soluciones de Exploración, Operación y mantenimiento en sus diferentes proyectos, minas, plantas y sistemas de transporte de mineral. ',
			'characteristics' => ' 	Exploraciones: Perforación Diamantina y Aire reverso. |
								 	Minado y acarreo de mineral. |
								 	Operación de Plantas de Beneficio con circuitos de chancado y molienda, flotación, Lixiviación en columna CIL, Carbón en columna CIC, Reactor de lixiviación intensiva ILR, lixiviación en pilas, adsorción desorción reactivación ADR, filtrado y fundición. |
								 	Operación y Mantenimiento de sistemas de transporte de mineral (sistemas de fajas transportadoras y mineroductos). |
								 	Servicios especializados y generales de Soldadura. |
								 	Talleres mineros (Truck Shop). |
								 	Sistemas de lubricación a camiones gigantes. |
								 	Plantas Cementeras y de Concreto. |
								 	Sistemas de bombeo y tratamiento de aguas. |
								 	Instalación de geosinteticos. |
								 	Mantenimiento de plantas industriales con técnicas CBM.',
			'image' => 'mineria.jpg',
			'slug' => 'mineria',
		]);

		factory(\App\Sector::class, 1)->create([
			'name' => 'Petroquímica',
			'description' => 'Contamos con especialistas entrenados y certificados en la operación y el mantenimiento de diversos sistemas de transformación y procesamiento de hidrocarburos en la industria petroquímica. Conocedores de lo especializado de los procesos, empleamos a nuestros mejores ingenieros para supervisar y desarrollar nuestras actividades bajo la metodología de la excelencia operacional, garantizando así, una operación segura y dentro de los parámetros de aceptación establecidos desde el diseño. ',
			'characteristics' => ' 	Técnicas CBM Mecánico – Eléctrico (Análisis de Vibración, Análisis de Termografía, Análisis de Aceite, Análisis de Ultrasonido, Análisis de calidad de potencia). |
								 	Procesos especializados en Refinerías de crudo pesado y liviano. |
								 	Plantas de Cracking. |
								 	Plantas de Combustibles y Lubricantes. |
								 	Plantas de Fertilizantes. |
								 	Plantas de Amonio. |
								 	Plantas de Urea.',
			'image' => 'petroquimica.jpg',
			'slug' => 'petroquimica',
		]);

		factory(\App\Sector::class, 1)->create([
			'name' => 'Energía',
			'description' => 'MICOSER es su aliado en el sector de Energía. Nuestra experiencia nos permite manejar el proceso completo de Generación, Transmisión y Distribución de la energía de una manera confiable, segura y rentable. Mantenemos sus activos correctamente, minimizando el riesgo y garantizando operaciones dentro de los más altos estándares de calidad, confiabilidad y capacidad de respuesta. ',
			'characteristics' => ' 	Operación y mantenimiento integral de plantas térmicas. |
								 	Operación y mantenimiento integral de centrales hidráulicas. |
								 	Operación y mantenimiento integral de centrales eólicas y fotovoltaícas (ERNC). |
								 	Operación y Mantenimiento de sistemas de transmisión de energía. |
								 	Operación y Mantenimiento de subestaciones. |
								 	Reparación de Componentes/ Alabes para Turbinas. |
								 	Servicios a turbomaquinarias.',
			'image' => 'energia.jpg',
			'slug' => 'energia',
		]);

		factory(\App\Sector::class, 1)->create([
			'name' => 'Agroindustria',
			'description' => 'En MICOSER S.A tenemos la misión de crear oportunidades de desarrollo para nuestros clientes aportando soluciones precisas e innovadoras, mediante el conocimiento, la investigación y la experiencia. ',
			'characteristics' => ' 	 Diseño e Instalación de Sistemas de Riego Tecnificado por Aspersión y Goteo. |
								 	Servicios de control y monitoreo de cultivo. |
								 	Servicio de mantenimiento agrícola. |
								 	Servicios de riego y asesoría agrícola. |
								 	Fabricación y/o montaje de líneas de procesos, tanques, separadores, intercambiadores y estructuras en general. |
								 	Técnicas CBM Mecánico – Eléctrico (Análisis de Vibración, Análisis de Termografía, Análisis de Aceite, Análisis de Ultrasonido, Análisis de calidad de potencia). |
								 	Overhaul a Equipos Industriales.',
			'image' => 'agroindustria.jpg',
			'slug' => 'agroindustria',
		]);

		factory(\App\Sector::class, 1)->create([
			'name' => 'Construcción',
			'description' => 'En el rubro de construcción, poseemos una gran experiencia en la ejecución de proyectos, en los que nuestros profesionales altamente calificados han demostrado su capacidad para cumplir y sobrepasar las expectativas de nuestros clientes, aún en las condiciones más difíciles. Nuestro servicio se enfoca además en el desarrollo de proyectos civiles, donde se tiene como base la normativa de ejecución, la mejor elección de materiales, equipos y la más coherente ejecución sobre la línea de identidad corporativa de cada uno de nuestros clientes. ',
			'characteristics' => ' 	Ingeniería Conceptual, Básica y de Detalle. |
								 	Movimiento de Tierra. |
								 	Construcción de Plantas Industriales. |
								 	Fabricación y Montaje de Estructuras Metálicas. |
								 	Construcción de edi­ficaciones para o­ficinas, universidades, colegios, industria, locales comerciales y edi­ficaciones multifamiliares. |
								 	Construcción y diseño de sistemas de alcantarillado. |
								 	Obras en vías y carreteras. |
								 	Obras de Saneamiento. |
								 	Obras de infraestructura industrial. |
								 	Rehabilitación, Limpieza y restauración de fachadas. |
								 	Levantamiento de Planos y estudios Topográficos.  |
								 	Tratamiento e Impermeabilización y estructuras de superficies. |
								 	Implementación y reposición de redes sanitarias, con tubería PVC y PPR por termofusión y electrofusion. |
								 	Obras civiles en general.',
			'image' => 'construccion.jpg',
			'slug' => 'construccion',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'INGENIERIA',
			'description' => 'Nuestro equipo de ingeniería está enfocado en brindar servicios en el sector Minero, Petroquímica, Energía, Agroindustria y Construcción. Es esencial para nosotros brindar servicios de calidad y seguridad, es por ello que contamos con un equipo de profesionales de primer nivel, quienes tienen la pericia de brindar el servicio y la solución que cada proyecto requiera en todos sus niveles.',
			'characteristics' => ' 	Estudio para Perfil |
								 	Estudio Conceptual |
								 	Ingeniería Básica |
								 	Ingeniería de Detalle |
								 	Estudio de Pre factibilidad |
								 	Estudio de Factibilidad |
								 	Supervisión |
								 	Asistencia Técnica |
								 	EPC - Equipos Especiales |
								 	Entrenamiento de Operaciones |
								 	Pre-Comisionamiento |
								 	Comisionamiento |
								 	Arranque y Puesta en Marcha',
			'image' => 'ingenieria.jpg',
			'slug' => 'ingenieria',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'EXPLORACIONES',
			'description' => 'En MICOSER S.A contamos con un equipo completo y profesional junto con maquinarias certificadas para todo tipo de perforación.
							Nuestros servicios se caracterizan por la integración completa a la forma de trabajo de cada cliente, adecuándonos a sus procesos y requerimientos específicos, asumiendo el pleno compromiso para el logro de todos sus objetivos en perforación.',
			'characteristics' => ' 	Perforación diamantina (superficie e interior mina) |
								 	Perforación Aire reverso |
								 	Perforación geotécnica |
								 	Taladros Hidrogeológicos |
								 	Ensayos SPT |
								 	Ensayos LPT |
								 	Ensayos MPT |
								 	Ensayos Lugeon |
								 	Ensayos Lefrank |
								 	Ensayos Shellbi |
								 	Ensayos spt |
								 	Limpieza de sondajes |
								 	Colocación de piezómetros |
								 	Medición de sondajes',
			'image' => 'exploraciones.jpg',
			'slug' => 'exploraciones',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'OPERACIONES',
			'description' => 'Combinando soluciones tecnológicas de punta con el conocimiento y experiencia de nuestro equipo de especialistas, hemos desarrollado metodologías y prácticas en operación de sistemas y activos productivos, las cuales nos permiten maximizar el beneficio asociado a la operación, mientras minimizamos la variabilidad y riesgo del proceso. Nuestra experiencia en operaciones nos permite operar de manera segura y confiable, los siguientes tipos de plantas, sistemas y equipos:',
			'characteristics' => ' 	 Operación de Plantas de Procesos hidrometalúrgicos, pirometalúrgicos y fisicoquímicos de la industria minera |
								 	Sistemas de extracción, recolección, tratamiento y despacho de crudo |
								 	Plantas de tratamiento, inyección y vertimiento de agua de producción, uso doméstico (PTAP) y residuales (PTAR) |
								 	Sistemas de almacenamiento, bombeo y transporte de crudo y gas |
								 	Sistemas de generación, despacho, transmisión y distribución de energía |
								 	Centros de control integrado de operación de plantas de tratamiento de crudo, agua, gas y sistemas eléctricos |
								 	Maquinaría liviana y pesada: grúas, camiones, brazos articulados, cama-bajas/altas, camiones canasta, camiones de vacío, entre otros |
								 	Operación de centrales térmicas de ciclo sencillo y combinado |
								 	Operación de centrales hidráulicas |
								 	Operación de centrales con base en energías no convencionales (eólica o fotovoltaica) |
								 	Operación de Subestaciones de generación |
								 	Operación de sistemas de transmisión en media y alta tensión |
								 	Operación de subestaciones de distribución |
								 	Operación de sistemas de distribución, fiscalización y entrega de energía',
			'image' => 'operaciones.jpg',
			'slug' => 'operaciones',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'MANTENIMIENTO',
			'description' => 'Ofrecemos un amplio portafolio de servicios de mantenimiento integral en las diferentes industrias, contando con procedimientos técnicos especializados además de diversas metodologías alineadas al estado de la técnica, elementos que nos permiten asumir la responsabilidad integral de todo el ciclo del mantenimiento desde la planeación hasta la mejora continua en equipos tales como:',
			'characteristics' => ' 	 Equipos estáticos como vasijas, separadores, tanques, tratadores térmicos electrostáticos, calderas, intercambiadores de calor, torres de enfriamiento, entre otros, cumpliendo los requerimientos y estándares de cada industria |
								 	Equipos rotativos como sistemas de bombeo, grupos electrógenos, unidades compresoras y turbomaquinaria |
								 	Equipo reciprocante de media y alta potencia |
								 	Equipos y sistemas eléctricos como variadores de velocidad, cuartos de control de motores, transformadores, subestaciones, tableros y redes eléctricas de baja, media y alta tensión |
								 	Sistemas de transporte de fluidos (poliductos y mineroductos) incluyendo accesorios de corte y control, así como el derecho de vía asociado |
								 	Sistemas de instrumentación y control de procesos |
								 	Flotas de vehículos livianos y pesados, incluyendo equipos trackless |
								 	Equipos de facilidades como aires acondicionados, iluminación y locativos |
								 	Redes de alta, media y baja tensión, transformadores, subestaciones eléctricas, motores eléctricos |
								 	Circuitos de molienda, chancado y transporte de mineral |
								 	Equipamiento de procesos fisicoquímicos de la industria minera (flotación, lixiviación) |
								 	Conservación de superficies y estructuras mediante la adecuada preparación y pintura |
								 	Análisis de condiciones mecánicas a través de análisis de vibraciones en equipos rotativos, análisis dinámico y estático de motores eléctricos, pruebas de desempeño dinámico y Flujometrías de calor en equipos reciprocantes, termografía en sistemas eléctricos, rotativos y estáticos |
								 	Inspección visual, remota (videoscopia), pruebas no destructivas, corrientes de Eddy, medición de espesores, entre otros |
								 	Definición e implementación de estrategias de mantenimiento predictivo efectivas ajustadas a su realidad de negocio',
			'image' => 'mantenimiento.jpg',
			'slug' => 'mantenimiento',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'GEOSINTETICOS',
			'description' => 'La impermeabilización requiere la instalación de Geosintéticos. Usualmente, se emplean geomebranas HDPE, LDPE, Geocompuestos, Geomallas, Geotextiles porque su tiempo de instalación es corto y a sus costos son menores. Los geosintéticos y geoxtiles cuentan con una gran resistencia química a la corrosión y abrasión. Estos compuestos tienen una vida útil mayor a 50 años, con costos bajos de mantenimiento y operación.
				Contamos con equipos de la más alta calidad en Leister y McElroy. Ambas son marcas cuentan con productos de última generación y de la mayor confianza. Nuestros especialistas cuentan con los conocimientos técnicos para operar estos equipos y lograr resultados optimos.',
			'characteristics' => ' 	Revestimiento de Lagunas artificiales |
								 	Recubrimiento de Piscina para las Soluciones |
								 	Recubrimiento de Plantas SX-EW |
								 	Recubrimiento de Tanques y celdas HDPE |
								 	Canales de conducción |
								 	Pozas y Canales de Relaves |
								 	Recubrimiento de Relaveras, Dams |
								 	Pilas y Pad de Lixiviación |
								 	Canales de Riego |
								 	Muros de contención |
								 	Ingeniería de Caminos |
								 	Rellenos Sanitarios |
								 	Túneles |
								 	Estanques decantadores |
								 	Estanques de Hormigón |
								 	Fabricación de recipientes ácidos',
			'image' => 'geosinteticos.jpg',
			'slug' => 'geosinteticos',
		]);

		factory(\App\Service::class, 1)->create([
			'name' => 'CONSTRUCCION',
			'description' => 'En el rubro de construcción, poseemos una gran experiencia en la ejecución de proyectos, en los que nuestros profesionales altamente calificados han demostrado su capacidad para cumplir y sobrepasar las expectativas de nuestros clientes, aún en las condiciones más difíciles. Nuestro servicio se enfoca además en el desarrollo de proyectos civiles, donde se tiene como base la normativa de ejecución, la mejor elección de materiales, equipos y la más coherente ejecución sobre la línea de identidad corporativa de cada uno de nuestros clientes.',
			'characteristics' => ' 	Ingeniería Conceptual, Básica y de Detalle |
								 	Movimiento de Tierra. |
								 	Construcción de Plantas Industriales |
								 	Fabricación y Montaje de Estructuras Metálicas |
								 	Construcción de edi­ficaciones para o­ficinas, universidades, colegios, industria, locales comerciales y edi­ficaciones multifamiliares. |
								 	Construcción y diseño de sistemas de alcantarillado. |
								 	Obras en vías y carreteras. |
								 	Obras de Saneamiento. |
								 	Obras de infraestructura industrial. |
								 	Rehabilitación, Limpieza y restauración de fachadas. |
								 	Levantamiento de Planos y estudios Topográficos.  |
								 	Tratamiento e Impermeabilización y estructuras de superficies. |
								 	Implementación y reposición de redes sanitarias, con tubería PVC y PPR por termofusión y electrofusion. |
								 	Obras civiles en general. ',
			'image' => 'construccion.jpg',
			'slug' => 'construccion',
		]);
	}
}
