DROP TABLE IF EXISTS ORDERINFO, CART, CUSTOMER, EMPLOYEE, PRODUCT, USER;

CREATE TABLE USER (
	Email VARCHAR(30) NOT NULL, -- Primary Key for user table, Email of user
	Name VARCHAR(20) NOT NULL, -- Name of user
	Address VARCHAR(100) NOT NULL, -- Address of user

	PRIMARY KEY(Email) -- Primary key Email
);

CREATE TABLE PRODUCT (
	ProdID VARCHAR(3) NOT NULL, -- Primary Key for Product Table, Product ID string
	Title VARCHAR(15) NOT NULL, -- Name of product in store
	Weight DECIMAL(3,2) NOT NULL, -- Weight of purchasing option
	Price DECIMAL(4,2) NOT NULL, -- Price of product option
	QTY INT NOT NULL, -- Amount of Product available in Inventory

	PRIMARY KEY(ProdID) -- Primary Key Product ID string
);

CREATE TABLE EMPLOYEE (
	EmpID VARCHAR(5) NOT NULL, -- Primary Key of Employee table, Employee ID string
	Email VARCHAR(30) NOT NULL, -- Foreign key from User table, email of employee

	PRIMARY KEY(EmpID), -- Primary Key EmpID
	FOREIGN KEY(Email) REFERENCES USER(Email) -- Foreign key to Email in user table
);

CREATE TABLE CUSTOMER (
	Email VARCHAR(30) NOT NULL, -- Primary Key for customer table, email of customer
	BillingInfo VARCHAR(50) NOT NULL, -- Billing information of user

	PRIMARY KEY(Email), -- Primary Key Email
	FOREIGN KEY(Email) REFERENCES USER(Email) -- Foreign key email from USER table
);

CREATE TABLE CART (
	Email VARCHAR(30) NOT NULL, -- Primary Key for cart table, Email string
	ProdID VARCHAR(3) NOT NULL, -- Primary Key for cart table, ProdID
	Amt INT NOT NULL, -- Amount to be ordered by user

	PRIMARY KEY(Email, ProdID), -- Primary Keys Email and ProdID
	FOREIGN KEY(Email) REFERENCES CUSTOMER(Email), -- Foreign key to email in customer table
	FOREIGN KEY(ProdID) REFERENCES PRODUCT(ProdID) -- Foreign key to ProdID in product table
);

CREATE TABLE ORDERINFO (
	Email VARCHAR(30) NOT NULL, -- Primary Key for Order table, Email string
	ProdID VARCHAR(3) NOT NULL, -- Primary Key for Order tbale, ProdID string
	Amt INT NOT NULL, -- Amount ordered and needing to be shipped
	Processed BOOL NOT NULL, -- Bool for whether the order is being processed or not
	Shipped BOOL NOT NULL, -- Bool for whether order has been shipped or not

	PRIMARY KEY(Email, ProdID), -- Primary Keys Email and ProdID
	FOREIGN KEY(Email) REFERENCES CUSTOMER(Email), -- Foreign Key to Email from customer table
	FOREIGN KEY(ProdID) REFERENCES PRODUCT(ProdID) -- Foreign key to ProdID from product table
);

------------------------------------------------------ DONE CREATING TABLES
