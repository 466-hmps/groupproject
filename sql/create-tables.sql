DROP VIEW IF EXISTS OrderInfo;
DROP TABLE IF EXISTS ORDERITEMS, ORDERS, CART, CUSTOMER, EMPLOYEE, PRODUCT, USER;

CREATE TABLE USER (
	ID INT AUTO_INCREMENT PRIMARY KEY, -- Primary key
	Email VARCHAR(30) NOT NULL, -- Email of user
	Name VARCHAR(20) NOT NULL, -- Name of user
	Address VARCHAR(100) NOT NULL, -- Address of user
	Password VARCHAR(100) NOT NULL -- User Password
);

CREATE TABLE PRODUCT (
	ProdID INT AUTO_INCREMENT PRIMARY KEY, -- Primary Key for Product Table, Product ID string
	ProdType VARCHAR(255) NOT NULL, -- type of meat sold(chicken, beef, etc.)
	Title VARCHAR(15) NOT NULL, -- Name of product in store
	Weight DECIMAL(3,2) NOT NULL, -- Weight of purchasing option
	Price DECIMAL(4,2) NOT NULL, -- Price of product option
	QTY INT NOT NULL, -- Amount of Product available in Inventory
	Description VARCHAR(255)
);

CREATE TABLE EMPLOYEE (
	EmpID INT PRIMARY KEY, -- Primary Key of Employee table, Employee ID string

	FOREIGN KEY(EmpID) REFERENCES USER(ID) -- Foreign key to ID from user
);

CREATE TABLE CUSTOMER (
	CustID INT PRIMARY KEY, -- Primary key
	CardNum CHAR(16), -- Billing information of user
	CardExp DATE, -- Expiration date on card
	CVV CHAR(3), -- CVV code of the card

	FOREIGN KEY(CustID) REFERENCES USER(ID) -- Foreign key email from USER table
);

CREATE TABLE CART (
	CustID INT,
	ProdID INT, -- Primary Key for cart table, ProdID
	Amt INT NOT NULL, -- Amount to be ordered by user

	PRIMARY KEY(CustID, ProdID), -- Primary Keys Email and ProdID
	FOREIGN KEY(CustID) REFERENCES CUSTOMER(CustID), -- Foreign key to email in customer table
	FOREIGN KEY(ProdID) REFERENCES PRODUCT(ProdID) -- Foreign key to ProdID in product table
);

CREATE TABLE ORDERS (
	OrderID INT AUTO_INCREMENT PRIMARY KEY,
	CustID INT,
	Status ENUM('Processing', 'Shipped') DEFAULT 'Processing',
	Total DECIMAL(9,2),

	FOREIGN KEY(CustID) REFERENCES CUSTOMER(CustID) -- Foreign Key to Email from customer table
);

CREATE TABLE ORDERITEMS (
	OrderID INT,
	ProdID INT, 
	Amt INT NOT NULL, -- Amount ordered and needing to be shipped

	PRIMARY KEY(OrderID, ProdID), -- Primary Keys Email and ProdID
	FOREIGN KEY(OrderID) REFERENCES ORDERS(OrderID), -- Foreign Key to OrderID from customer table
	FOREIGN KEY(ProdID) REFERENCES PRODUCT(ProdID) -- Foreign key to ProdID from product table
);

------------------------------------------------------ DONE CREATING TABLES
CREATE VIEW OrderInfo AS
	SELECT * FROM ORDERS
	INNER JOIN ORDERITEMS USING (OrderID)
	INNER JOIN CUSTOMER USING (CustID)
	INNER JOIN USER ON USER.ID = CustID
	INNER JOIN PRODUCT USING (ProdID);

------------------------------------------------------ DONE CREATING VIEWS
