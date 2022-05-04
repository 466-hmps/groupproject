INSERT INTO USER(ID, Email, Name, Address, Password) VALUES
  ('1', 'testemail@aol.com', 'Test User', 'Test address Test Drive, Test city, state, zip, country', 'test123'),
  ('2', 'marrugaloo@gmail.com', 'Michael Marrougi', 'None ya business, my city, IL, 12345, Merica', 'user2'),
  ('3', 'lehuta@faculty.niu.edu', 'Jon Lehuta', 'Somewhere here in, DeKalb, IL, 60115, USA', 'usertest');

INSERT INTO EMPLOYEE(EmpID) VALUES
  ('2');

INSERT INTO CUSTOMER(CustID, CardNum, CardExp, CVV) VALUES
  ('1', '0000000000000001',  '2023-01-01', '123'),
  ('3', '1234567890987654', '1776-07-01', '890');

INSERT INTO PRODUCT(ProdID, ProdType, Title, Weight, Price, QTY, Description) VALUES
  ('1', 'Beef', 'Ground Beef', '1.00', '9.99', '20', "Ground Beef. 85% Fat and 15% Lean.<br>Great for burgers or making burgers or meatballs."),
  ('2', 'Pork', 'Pork Chop', '3.00', '6.99', '10', "Breaded Pork Chops<br>Great for a wholesome family dinners or gatherings."),
  ('3', 'Chicken', 'Chicken Breast', '2.00', '8.99', '6', "Boneless/Skinless Chicken Breast. Wonderfull for all purpose meals.<br> Can be used for your chicken tacos, fettucini alfredo, or even your protein sourcce for macro conscious lifters."),
  ('4', 'Turkey', 'Ground Turkey', '0.50', '5.99', '4', "Fresh Ground turkey by the pound.<br>Great choice for a more healthy alternative for meatballs or burgers."),
  ('5', 'Salmon', 'Salmon Filet', '5.00', '19.99', '17', "Salmon Fillets. Wild Alaskan Salmon. Healthy meat alternative for a reduction<br> of red meat products. Great for grilling or pan searing on a bed of rice.");

INSERT INTO ORDERS(OrderID, CustID, Status, Total) VALUES
  ('1', '3', 'Shipped', '127.87'),
  ('2', '1', 'Processing', '2796.00');

INSERT INTO ORDERITEMS(OrderID, ProdID, Amt) VALUES
  ('1', '5', '3'),
  ('1', '4', '8'),
  ('1', '1', '2'),
  ('2', '2', '400');
