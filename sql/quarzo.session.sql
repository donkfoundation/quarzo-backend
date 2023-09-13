CREATE DATABASE IF NOT EXISTS quarzo;

CREATE TABLE IF NOT EXISTS Users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Categories(
    categorie_id INT PRIMARY KEY AUTO_INCREMENT,
    categorie_name VARCHAR(50) UNIQUE NOT NULL,
    categorie_description TEXT DEFAULT 'No description'
);

CREATE TABLE IF NOT EXISTS Products(
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(120) NOT NULL,
    product_description TEXT DEFAULT 'No description',
    sku VARCHAR(50) UNIQUE NOT NULL,
    product_price DOUBLE NOT NULL,
    product_state CHAR NOT NULL
);

-- tabla para gestionar la relacion de muchos a muchos de productos y categorias, aquí un producto puede tener varias categorias
CREATE TABLE IF NOT EXISTS ProductsCategories (
    product_categorie INT PRIMARY KEY AUTO_INCREMENT,
    product_id int,
    categorie_id int,
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (categorie_id) REFERENCES Categories(categorie_id)
);

CREATE TABLE IF NOT EXISTS Tags(
    tag_id INT PRIMARY KEY AUTO_INCREMENT,
    tag_name VARCHAR(36) UNIQUE NOT NULL
);

-- tabla para gestionar la relacion de muchos a muchos de productos y etiquetas, aquí un producto puede tener varias etiquetas
CREATE TABLE IF NOT EXISTS ProductTags(
    product_tag INT PRIMARY KEY auto_increment,
    product_id INT,
    tag_id INT,
    FOREIGN KEY (tag_id) references Tags(tag_id),
    FOREIGN KEY (product_id) references Products(product_id)
);
