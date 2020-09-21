-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 sep. 2020 à 01:42
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `storedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `app_clients`
--

CREATE TABLE `app_clients` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_expenses_categories`
--

CREATE TABLE `app_expenses_categories` (
  `Expense_id` tinyint(3) UNSIGNED NOT NULL,
  `ExpenseName` varchar(30) NOT NULL,
  `FixedPayment` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_expenses_daily_list`
--

CREATE TABLE `app_expenses_daily_list` (
  `D_Expense_id` int(10) UNSIGNED NOT NULL,
  `Expense_id` tinyint(3) UNSIGNED NOT NULL,
  `Payment` decimal(7,2) NOT NULL,
  `Created_at` datetime NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_notifications`
--

CREATE TABLE `app_notifications` (
  `Notification_id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `Type` tinyint(2) NOT NULL,
  `Created_at` datetime NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL,
  `seen` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_products_categories`
--

CREATE TABLE `app_products_categories` (
  `Category_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_products_list`
--

CREATE TABLE `app_products_list` (
  `Product_id` int(10) UNSIGNED NOT NULL,
  `Category_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(30) DEFAULT NULL,
  `Quantity` smallint(5) UNSIGNED NOT NULL,
  `Price` decimal(6,0) NOT NULL,
  `BarCode` char(20) DEFAULT NULL,
  `Unit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_purchases_invoices`
--

CREATE TABLE `app_purchases_invoices` (
  `Invoice_id` int(10) UNSIGNED NOT NULL,
  `Supplier_id` int(10) UNSIGNED NOT NULL,
  `PaymentType` tinyint(1) NOT NULL,
  `PaymenetStatus` tinyint(1) NOT NULL,
  `Created_at` date NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_purchases_invoices_details`
--

CREATE TABLE `app_purchases_invoices_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `Product_id` int(10) UNSIGNED NOT NULL,
  `Quantity` smallint(6) NOT NULL,
  `ProductPrice` decimal(7,2) NOT NULL,
  `Invoice_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_purchases_invoices_receipts`
--

CREATE TABLE `app_purchases_invoices_receipts` (
  `Receipt_id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `Payment_type` tinyint(1) NOT NULL,
  `Payment_amount` decimal(8,2) NOT NULL,
  `Payment_literal` varchar(60) NOT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `bank_account_number` varchar(30) DEFAULT NULL,
  `check_number` varchar(15) DEFAULT NULL,
  `Transfered_to` varchar(30) DEFAULT NULL,
  `created_at` date NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_sales_invoices`
--

CREATE TABLE `app_sales_invoices` (
  `Invoice_id` int(10) UNSIGNED NOT NULL,
  `Client_id` int(10) UNSIGNED NOT NULL,
  `PaymentType` tinyint(1) NOT NULL,
  `PaymenetStatus` tinyint(1) NOT NULL,
  `Created_at` date NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_sales_invoices_details`
--

CREATE TABLE `app_sales_invoices_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `Product_id` int(10) UNSIGNED NOT NULL,
  `Quantity` smallint(6) NOT NULL,
  `ProductPrice` decimal(7,2) NOT NULL,
  `Invoice_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_sales_invoices_receipts`
--

CREATE TABLE `app_sales_invoices_receipts` (
  `Receipt_id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `Payment_type` tinyint(1) NOT NULL,
  `Payment_amount` decimal(8,2) NOT NULL,
  `Payment_literal` varchar(60) NOT NULL,
  `bank_name` varchar(30) DEFAULT NULL,
  `bank_account_number` varchar(30) DEFAULT NULL,
  `check_number` varchar(15) DEFAULT NULL,
  `Transfered_to` varchar(30) DEFAULT NULL,
  `created_at` date NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_suppliers`
--

CREATE TABLE `app_suppliers` (
  `Supplier_id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_users`
--

CREATE TABLE `app_users` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` char(60) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PhoneNumber` varchar(5) DEFAULT NULL,
  `SubscriptionDate` date NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Group_id` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_users_groups`
--

CREATE TABLE `app_users_groups` (
  `Group_id` tinyint(1) UNSIGNED NOT NULL,
  `Group_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_users_groups_privileges`
--

CREATE TABLE `app_users_groups_privileges` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `Group_id` tinyint(1) UNSIGNED NOT NULL,
  `Privilege_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `app_users_privileges`
--

CREATE TABLE `app_users_privileges` (
  `Privilege_id` tinyint(3) UNSIGNED NOT NULL,
  `Privilege` varchar(30) NOT NULL,
  `PrivilegeTitle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `app_users_privileges`
--

INSERT INTO `app_users_privileges` (`Privilege_id`, `Privilege`, `PrivilegeTitle`) VALUES
(1, '\\suppliers\\create', 'vendeur'),
(2, '/fournisseur/create', 'fournisseur');

-- --------------------------------------------------------

--
-- Structure de la table `app_users_profiles`
--

CREATE TABLE `app_users_profiles` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `Adress` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `app_clients`
--
ALTER TABLE `app_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `app_expenses_categories`
--
ALTER TABLE `app_expenses_categories`
  ADD PRIMARY KEY (`Expense_id`);

--
-- Index pour la table `app_expenses_daily_list`
--
ALTER TABLE `app_expenses_daily_list`
  ADD PRIMARY KEY (`D_Expense_id`),
  ADD KEY `Expense_id` (`Expense_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_notifications`
--
ALTER TABLE `app_notifications`
  ADD PRIMARY KEY (`Notification_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_products_categories`
--
ALTER TABLE `app_products_categories`
  ADD PRIMARY KEY (`Category_id`);

--
-- Index pour la table `app_products_list`
--
ALTER TABLE `app_products_list`
  ADD PRIMARY KEY (`Product_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Index pour la table `app_purchases_invoices`
--
ALTER TABLE `app_purchases_invoices`
  ADD PRIMARY KEY (`Invoice_id`),
  ADD KEY `Supplier_id` (`Supplier_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_purchases_invoices_details`
--
ALTER TABLE `app_purchases_invoices_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `Invoice_id` (`Invoice_id`);

--
-- Index pour la table `app_purchases_invoices_receipts`
--
ALTER TABLE `app_purchases_invoices_receipts`
  ADD PRIMARY KEY (`Receipt_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_sales_invoices`
--
ALTER TABLE `app_sales_invoices`
  ADD PRIMARY KEY (`Invoice_id`),
  ADD KEY `Client_id` (`Client_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_sales_invoices_details`
--
ALTER TABLE `app_sales_invoices_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `Invoice_id` (`Invoice_id`);

--
-- Index pour la table `app_sales_invoices_receipts`
--
ALTER TABLE `app_sales_invoices_receipts`
  ADD PRIMARY KEY (`Receipt_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `app_suppliers`
--
ALTER TABLE `app_suppliers`
  ADD PRIMARY KEY (`Supplier_id`);

--
-- Index pour la table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Group_id` (`Group_id`);

--
-- Index pour la table `app_users_groups`
--
ALTER TABLE `app_users_groups`
  ADD PRIMARY KEY (`Group_id`);

--
-- Index pour la table `app_users_groups_privileges`
--
ALTER TABLE `app_users_groups_privileges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Group_id` (`Group_id`),
  ADD KEY `Privilege_id` (`Privilege_id`);

--
-- Index pour la table `app_users_privileges`
--
ALTER TABLE `app_users_privileges`
  ADD PRIMARY KEY (`Privilege_id`);

--
-- Index pour la table `app_users_profiles`
--
ALTER TABLE `app_users_profiles`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `app_clients`
--
ALTER TABLE `app_clients`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_expenses_categories`
--
ALTER TABLE `app_expenses_categories`
  MODIFY `Expense_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_expenses_daily_list`
--
ALTER TABLE `app_expenses_daily_list`
  MODIFY `D_Expense_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_notifications`
--
ALTER TABLE `app_notifications`
  MODIFY `Notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_products_categories`
--
ALTER TABLE `app_products_categories`
  MODIFY `Category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_products_list`
--
ALTER TABLE `app_products_list`
  MODIFY `Product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_purchases_invoices`
--
ALTER TABLE `app_purchases_invoices`
  MODIFY `Invoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_purchases_invoices_details`
--
ALTER TABLE `app_purchases_invoices_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_purchases_invoices_receipts`
--
ALTER TABLE `app_purchases_invoices_receipts`
  MODIFY `Receipt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_sales_invoices`
--
ALTER TABLE `app_sales_invoices`
  MODIFY `Invoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_sales_invoices_details`
--
ALTER TABLE `app_sales_invoices_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_sales_invoices_receipts`
--
ALTER TABLE `app_sales_invoices_receipts`
  MODIFY `Receipt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_suppliers`
--
ALTER TABLE `app_suppliers`
  MODIFY `Supplier_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `User_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_users_groups`
--
ALTER TABLE `app_users_groups`
  MODIFY `Group_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_users_groups_privileges`
--
ALTER TABLE `app_users_groups_privileges`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_users_privileges`
--
ALTER TABLE `app_users_privileges`
  MODIFY `Privilege_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `app_users_profiles`
--
ALTER TABLE `app_users_profiles`
  MODIFY `User_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `app_expenses_daily_list`
--
ALTER TABLE `app_expenses_daily_list`
  ADD CONSTRAINT `app_expenses_daily_list_ibfk_1` FOREIGN KEY (`Expense_id`) REFERENCES `app_expenses_categories` (`Expense_id`),
  ADD CONSTRAINT `app_expenses_daily_list_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_notifications`
--
ALTER TABLE `app_notifications`
  ADD CONSTRAINT `app_notifications_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_products_list`
--
ALTER TABLE `app_products_list`
  ADD CONSTRAINT `app_products_list_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `app_products_categories` (`Category_id`);

--
-- Contraintes pour la table `app_purchases_invoices`
--
ALTER TABLE `app_purchases_invoices`
  ADD CONSTRAINT `app_purchases_invoices_ibfk_1` FOREIGN KEY (`Supplier_id`) REFERENCES `app_suppliers` (`Supplier_id`),
  ADD CONSTRAINT `app_purchases_invoices_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_purchases_invoices_details`
--
ALTER TABLE `app_purchases_invoices_details`
  ADD CONSTRAINT `app_purchases_invoices_details_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `app_products_list` (`Product_id`),
  ADD CONSTRAINT `app_purchases_invoices_details_ibfk_2` FOREIGN KEY (`Invoice_id`) REFERENCES `app_purchases_invoices` (`Invoice_id`);

--
-- Contraintes pour la table `app_purchases_invoices_receipts`
--
ALTER TABLE `app_purchases_invoices_receipts`
  ADD CONSTRAINT `app_purchases_invoices_receipts_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `app_purchases_invoices` (`Invoice_id`),
  ADD CONSTRAINT `app_purchases_invoices_receipts_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_sales_invoices`
--
ALTER TABLE `app_sales_invoices`
  ADD CONSTRAINT `app_sales_invoices_ibfk_1` FOREIGN KEY (`Client_id`) REFERENCES `app_clients` (`client_id`),
  ADD CONSTRAINT `app_sales_invoicess_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_sales_invoices_details`
--
ALTER TABLE `app_sales_invoices_details`
  ADD CONSTRAINT `app_sales_invoices_details_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `app_products_list` (`Product_id`),
  ADD CONSTRAINT `app_sales_invoices_details_ibfk_2` FOREIGN KEY (`Invoice_id`) REFERENCES `app_sales_invoices` (`Invoice_id`);

--
-- Contraintes pour la table `app_sales_invoices_receipts`
--
ALTER TABLE `app_sales_invoices_receipts`
  ADD CONSTRAINT `app_sales_invoices_receipts_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `app_sales_invoices` (`Invoice_id`),
  ADD CONSTRAINT `app_sales_invoices_receipts_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);

--
-- Contraintes pour la table `app_users`
--
ALTER TABLE `app_users`
  ADD CONSTRAINT `app_users_ibfk_1` FOREIGN KEY (`Group_id`) REFERENCES `app_users_groups` (`Group_id`);

--
-- Contraintes pour la table `app_users_groups_privileges`
--
ALTER TABLE `app_users_groups_privileges`
  ADD CONSTRAINT `app_users_groups_privileges_ibfk_1` FOREIGN KEY (`Group_id`) REFERENCES `app_users_groups` (`Group_id`),
  ADD CONSTRAINT `app_users_groups_privileges_ibfk_2` FOREIGN KEY (`Privilege_id`) REFERENCES `app_users_privileges` (`Privilege_id`);

--
-- Contraintes pour la table `app_users_profiles`
--
ALTER TABLE `app_users_profiles`
  ADD CONSTRAINT `app_users_profiles_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `app_users` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
