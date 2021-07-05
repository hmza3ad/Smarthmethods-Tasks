SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `motors` (
  `id` int(10) NOT NULL,
  `Motor1` int(10) NOT NULL,
  `Motor2` int(10) NOT NULL,
  `Motor3` int(10) NOT NULL,
  `Motor4` int(10) NOT NULL,
  `Motor5` int(10) NOT NULL,
  `Motor6` int(10) NOT NULL,
  `is_on` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `motors` (`id`, `Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `status`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0);


ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `motors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
