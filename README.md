# Social Media app

please create a project skeleton with the latest version of laravel.

## Project Description

our social media app is going to provide some rest api under version 1 routs would be

- `POST v1/login` login [Public]
- `POST v1/video` create new video [Authenticated API]
- `PUT v1/video/{id}` update video [Authenticated API]
- `GET v1/video/{id}` get video [Public]
- `PUT v1/video/{id}/like` like a video [Authenticated API]
- `DELETE v1/video/{id}/like` unlike a video [Authenticated API]

The goal is to create a simple RESTful api that provide above endpoint. consider all things you need a production ready project needs for them.

when you complete the project create a PR and send it for our review.

## Models

this project is going to work with Monogdb as data storage.

we have to entity in our database.

### Collections

we have three collection in our database `videos`, `likes`, `users`

#### Videos

- _id         ObjectID
- name        String
- file        String
- created_at  UTCDateTime
- created_by  ObjectID

#### Likes

- _id         ObjectID
- video_id    ObjectID
- created_at  UTCDateTime
- created_by  ObjectID

#### User

- _id         ObjectID
- name        String
- created_at  UTCDateTime
- OTHER REQUIRED FIELDS FOR AUTHENTICATION




