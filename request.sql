SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `cost` int(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `request` (`id`, `name`, `cost`, `img`) VALUES
(1, 'one', 111111, 'pictures/succulent5.png'),
(2, 'three', 333333, 'pictures/succulent3.png'),
(3, '5555', 5555, 'pictures/succulent1.png'),
(4, '5665', 5555, 'pictures/succulent5.png');
COMMIT;