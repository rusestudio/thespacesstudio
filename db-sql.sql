--
-- Database: `rusestudio`
--

CREATE DATABASE IF NOT EXISTS `rusestudio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rusestudio`;

-- --------------------------------------------------------

--
-- Table structure for table `form_tbl`
--

DROP TABLE IF EXISTS `form_tbl`;
CREATE TABLE `form_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_tbl`
--
ALTER TABLE `form_tbl`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_tbl`
--
ALTER TABLE `form_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
