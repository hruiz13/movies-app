CREATE DATABASE IF NOT EXISTS api_movies;
USE api_movies;

CREATE TABLE users(
id                  int(255) auto_increment not null,
name                varchar(100) NOT NULL,
surname             varchar(100),
role                varchar(20),
email               varchar(255) NOT NULL,
password            varchar(255) NOT NULL,
description         text,
image               varchar(255),
created_at          datetime DEFAULT NULL,
updated_at          datetime DEFAULT NULL,
remember_token      varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE movies(
id                  int(255) auto_increment not null,
title               varchar(255) NOT NULL,
year                varchar(255),
imdbID              varchar(255),
type                varchar(255),
poster              varchar(255),
runtime             varchar(100),
language            varchar(100),
imdbRating          varchar(100),
genre               text,
actors              text,
created_at          datetime DEFAULT NULL,
updated_at          datetime DEFAULT NULL,
CONSTRAINT pk_movies PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE users_movies(
id                  int(255) auto_increment not null,
user_id             int(255) NOT NULL,
movie_id            int(255) NOT NULL,
viewed              tinyint(1),
CONSTRAINT pk_users_movies PRIMARY KEY(id),
CONSTRAINT fk_user_movie FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_movie_user FOREIGN KEY(movie_id) REFERENCES movies(id)
)ENGINE=InnoDb;