<?php

return [
    // MainController
    "" => [
        "controller" => "main",
        "action" => "index",
    ],
    "main/index/{page:\d+}" => [
        "controller" => "main",
        "action" => "index",
    ],
    "about" => [
        "controller" => "main",
        "action" => "about",
    ],
    "contact" => [
        "controller" => "main",
        "action" => "contact",
    ],
    "post/{id:\d+}" => [
        "controller" => "main",
        "action" => "post",
    ],
    // AdminController
    "admin/login" => [
        "controller" => "admin",
        "action" => "login",
    ],
    "admin/logout" => [
        "controller" => "admin",
        "action" => "logout",
    ],
    "admin/add" => [
        "controller" => "admin",
        "action" => "add",
    ],
    "admin/edit" => [
        "controller" => "admin",
        "action" => "edit",
    ],
    "admin/delete" => [
        "controller" => "admin",
        "action" => "delete",
    ],
    "admin/posts" => [
        "controller" => "admin",
        "action" => "posts",
    ],
    "admin/posts" => [
        "controller" => "admin",
        "action" => "posts",
    ],
];
