/***********************************************************
 * Author: Leonard Siu                                     *
 * Date created: 24 August 2021                            *
 ***********************************************************/

CREATE DATABASE dbComputerForce;
USE dbComputerForce;

CREATE TABLE customer
(
  custID INT NOT NULL PRIMARY KEY AUTO_INCREMENT
  ,username VARCHAR(10) NOT NULL
  ,emailAddress VARCHAR(100) NOT NULL
  ,password VARCHAR(50) NOT NULL
  ,firstName VARCHAR(50) NOT NULL
  ,surname VARCHAR(50) NOT NULL
  ,gender ENUM('male', 'female')
  ,dateOfBirth DATE NULL DEFAULT NULL
  ,address VARCHAR(100) NOT NULL
  ,suburb VARCHAR(50) NOT NULL
  ,postcode VARCHAR(10) NOT NULL
  ,state VARCHAR(100) NOT NULL
  ,phoneNumber VARCHAR(20) NULL DEFAULT NULL
)
