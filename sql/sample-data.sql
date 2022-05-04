INSERT INTO USER(ID, Email, Name, Address, Password) VALUES
  ('1', 'testemail@aol.com', 'Test User', 'Test address Test Drive, Test city, state, zip, country', 'test123'),
  ('2', 'marrugaloo@gmail.com', 'Michael Marrougi', 'None ya business, my city, IL, 12345, Merica', 'user2'),
  ('3', 'lehuta@faculty.niu.edu', 'Jon Lehuta', 'Somewhere here in, DeKalb, IL, 60115, USA', 'usertest');

INSERT INTO EMPLOYEE(EmpID) VALUES
  ('2');

INSERT INTO CUSTOMER(CustID, CardNum, CardExp, CVV) VALUES
  ('1', '0000000000000001',  '2023-01-01', '123'),
  ('3', '1234567890987654', '1776-07-01', '890');

INSERT INTO PRODUCT(ProdID, ProdType, Title, Weight, Price, QTY) VALUES
  ('1', 'Beef', 'Ground Beef', '1.00', '9.99', '20'),
  ('2', 'Pork', 'Pork Chop', '3.00', '6.99', '10'),
  ('3', 'Chicken', 'Chicken Breast', '2.00', '8.99', '6'),
  ('4', 'Turkey', 'Ground Turkey', '0.50', '5.99', '4'),
  ('5', 'Salmon', 'Salmon Filet', '5.00', '19.99', '17');

INSERT INTO ORDERS(OrderID, CustID, Status, Total) VALUES
  ('1', '3', 'Shipped', '127.87'),
  ('2', '1', 'Processing', '2796.00');

INSERT INTO ORDERITEMS(OrderID, ProdID, Amt) VALUES
  ('1', '5', '3'),
  ('1', '4', '8'),
  ('1', '1', '2'),
  ('2', '2', '400');
