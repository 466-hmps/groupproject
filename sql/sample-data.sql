INSERT INTO USER(Email, Name, Address) VALUES
  ('testemail@aol.com', 'Test User', 'Test address Test Drive, Test city, state, zip, country'),
  ('marrugaloo@gmail.com', 'Michael Marrougi', 'None ya business, my city, IL, 12345, Merica'),
  ('lehuta@faculty.niu.edu', 'Jon Lehuta', 'Somewhere here in, DeKalb, IL, 60115, USA');

INSERT INTO EMPLOYEE(EmpID, Email) VALUES
  ('00001', 'marrugaloo@gmail.com');

INSERT INTO CUSTOMER(Email, BillingInfo) VALUES
  ('testemail@aol.com', '0000 0000 0000 0001 12/99 123');

INSERT INTO PRODUCT(ProdID, Title, Weight, Price, QTY) VALUES
  ('B01', 'Ground Beef', '1.00', '9.99', '20'),
  ('P01', 'Pork Chop', '3.00', '6.99', '10'),
  ('C01', 'Chicken Breast', '2.00', '8.99', '6'),
  ('T01', 'Ground Turkey', '0.50', '5.99', '4'),
  ('F01', 'Salmon Filet', '5.00', '19.99', '17');