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

- _id         _ObjectID_
- name        _String_
- file        _String_
- created_at  _UTCDateTime_
- created_by  _ObjectID_

#### Likes

- _id         _ObjectID_
- video_id    _ObjectID_
- created_at  _UTCDateTime_
- created_by  _ObjectID_

#### User

- _id         _ObjectID_
- name        _String_
- created_at  _UTCDateTime_
- OTHER REQUIRED FIELDS FOR AUTHENTICATION




