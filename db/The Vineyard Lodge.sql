drop database if exists VineyardLodge;
create database VineyardLodge;
use VineyardLodge;

create table Customer (
	userID int primary key unique auto_increment,
    firstName varchar(100),
    lastName varchar(100),
    email varchar(50) unique,
    userPassword varchar(100) unique,
	dateOfBirth date,
    registrationDate date
);

create table Juice (
	juiceID int primary key unique auto_increment,
    juiceName varchar(100), 
    storageInstructions text,
    price float
);

create table OrderTable (
	orderId int primary key unique auto_increment,
    
    userID int,
    foreign key (userID) references Customer(userID),
    
    juiceID int,
    foreign key (juiceID) references Juice(juiceID),
    
    dateOrdered date,
    deliveryDate date #input by the user.
);

# This table will already be populated
create table Ingredients (
	ingredientID int primary key unique auto_increment,
	ingredientName varchar(100),
    availability bool # True of false. True = available, False = not available
);

# Orders that are individually designed by the users
create table curatedOrders (
	curateOrderID int primary key unique auto_increment,
    orderName varchar(100),
    dateOrdered date,
    deliveryDate date # Needs a function that is 2 weeks or more of the dateOrdered.
);

/*This table allows to track all the needed ingredients for the customer. A function will be needed to retrive all the ingredients
when it is displayed. This will be achieved through the curateOrderID*/
create table OrderIngredients (
	curateOrderID int,
    foreign key (curateOrderID) references curatedOrders(curateOrderID),
    
    ingredientID int,
    foreign key (ingredientID) references Ingredients(ingredientID) 
);

insert into Juice (juiceName, storageInstructions, price) values
('Orange Juice', 'Store in refrigerator', 10.50),
('Apple Juice', 'Keep refrigerated', 9.25),
('Pineapple Juice', 'Keep chilled', 11.75),
('Grape Juice', 'Refrigerate after opening', 12.00),
('Mango Juice', 'Best served cold', 13.50),
('Strawberry Juice', 'Refrigerate to preserve freshness', 14.25),
('Watermelon Juice', 'Keep chilled', 10.75),
('Banana Juice', 'Shake well before serving', 9.75),
('Peach Juice', 'Store in refrigerator', 11.50),
('Passionfruit Juice', 'Refrigerate after opening', 15.00),
('Lemon Juice', 'Keep refrigerated', 8.50),
('Ginger Juice', 'Store in a cool, dry place', 16.25),
('Guava Juice', 'Refrigerate after opening', 12.75),
('Papaya Juice', 'Keep chilled', 10.25),
('Cranberry Juice', 'Refrigerate after opening', 17.50),
('Kiwi Juice', 'Keep refrigerated', 14.75),
('Carrot Juice', 'Refrigerate to maintain freshness', 11.25),
('Tomato Juice', 'Store in refrigerator', 9.50),
('Lime Juice', 'Keep chilled', 13.25),
('Coconut Juice', 'Refrigerate after opening', 18.00);


insert into Ingredients (ingredientName, availability) values
('Apple', true),
('Banana', true),
('Orange', true),
('Pear', true),
('Grape', true),
('Strawberry', true),
('Blueberry', true),
('Raspberry', true),
('Pineapple', true),
('Watermelon', true),
('Kiwi', true),
('Peach', true),
('Plum', true),
('Mango', true),
('Cherry', true),
('Lemon', true),
('Lime', true),
('Grapefruit', true),
('Cantaloupe', true),
('Honeydew', true),
('Pomegranate', true),
('Coconut', true),
('Avocado', true),
('Papaya', true),
('Apricot', true),
('Nectarine', true),
('Fig', true),
('Passionfruit', true),
('Guava', true),
('Cucumber', true),
('Carrot', true),
('Tomato', true),
('Bell Pepper', true),
('Spinach', true),
('Broccoli', true),
('Lettuce', true),
('Cabbage', true),
('Celery', true),
('Kale', true),
('Zucchini', true),
('Eggplant', true),
('Potato', true),
('Sweet Potato', true),
('Onion', true),
('Garlic', true),
('Ginger', true),
('Mushroom', true),
('Asparagus', true),
('Green Bean', true),
('Pea', true),
('Corn', true),
('Artichoke', true),
('Brussels Sprout', true),
('Radish', true),
('Beet', true);

#display tables.
select * from Ingredients;
select * from Juice;


