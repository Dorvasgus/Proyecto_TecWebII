--
--
CREATE TABLE `disciplina` (
  `disciplina_id` varchar(20) NOT NULL,
  `disciplina_nombre` varchar(30) NOT NULL,
  `tiempo` varchar(150) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `disciplina` (`disciplina_id`, `disciplina_nombre`, `tiempo`, `tipo`) VALUES
('cf100', 'crossfit', '1 año', 'cardio');

-- --------------------------------------------------------
CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `unombre` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `unombre`, `pwd`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

CREATE TABLE `cliente` (
  `cliente_id` varchar(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `inicio` varchar(20) DEFAULT NULL,
  `edad` varchar(20) DEFAULT NULL,
  `paquete` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `pago_id` varchar(20) DEFAULT NULL,
  `entrenador_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
--
INSERT INTO `cliente` (`cliente_id`, `nombre`, `inicio`, `edad`, `paquete`, `celular`, `pago_id`, `entrenador_id`) VALUES
('cliedoug1', 'douglas', '26/04/2022', '30', '6 meses', '70283802', 'pago1', 'entrenador1');

-- --------------------------------------------------------
--
--
CREATE TABLE `pago` (
  `pago_id` varchar(20) NOT NULL,
  `monto` varchar(20) DEFAULT NULL,
  `disciplina_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
--
INSERT INTO `pago` (`pago_id`, `monto`, `disciplina_id`) VALUES
('pago1', '100000', 'cf100');
-- --------------------------------------------------------
--
--
CREATE TABLE `entrenador` (
  `entrenador_id` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `tiempo` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `pago_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
--
INSERT INTO `entrenador` (`entrenador_id`, `nombre`, `tiempo`, `celular`, `pago_id`) VALUES
('entrenador1', 'luisCarlos', '8-10 :AM', '702838028', 'pago1');
--
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`disciplina_id`);
--
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);
--
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `pago_id` (`pago_id`),
  ADD KEY `entrenador_id` (`entrenador_id`);
--
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`pago_id`),
  ADD KEY `disciplina_id` (`disciplina_id`);
--
--
ALTER TABLE `entrenador`
  ADD PRIMARY KEY (`entrenador_id`),
  ADD KEY `pago_id` (`pago_id`);
--
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`pago_id`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`entrenador_id`) REFERENCES `entrenador` (`entrenador_id`);
--
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`disciplina_id`);
--
--
ALTER TABLE `entrenador`
  ADD CONSTRAINT `entrenador_ibfk_1` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`pago_id`);
COMMIT;