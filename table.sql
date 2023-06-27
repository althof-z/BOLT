CREATE DATABASE flash_fast

CREATE TABLE Users (
    id int(10) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    full_name varchar(255) NOT NULL,
    NIK varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(50) NOT NULL,
    address text not null,
    PRIMARY KEY(id)
);

CREATE TABLE Rent (
    id int(10) NOT NULL AUTO_INCREMENT,
    user int(10) NOT NULL,
    merk varchar(30) NOT NULL,
    start_date date NOT NULL,
    drop_off_date date NOT NULL,
    pickup_time time NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (user) REFERENCES Users(id)
);

INSERT INTO Users (username, full_name, NIK, password, email, address) values () 