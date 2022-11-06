<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'items' => ['ItemController', 'index',],
    'items/edit' => ['ItemController', 'edit', ['id']],
    'items/show' => ['ItemController', 'show', ['id']],
    'items/add' => ['ItemController', 'add',],
    'items/delete' => ['ItemController', 'delete',],
    //form add new bottle
    'add' => ['WineController', 'viewAddForm'],
    //show form update bottle
    'showUpdateForm' => ['WineController', 'viewWineInfo', ['id']],
    //traitment of $_post from update wine
    'updateWine' => ['WineController', 'updateWine'],
    //register
    'register' => ['RegisterController', 'viewRegister',],
    // MaCave
    'maCave' => ['CaveController', 'index',],
    // fiche Vin
    'showWine' => ['WineController', 'showWineById', ['id']],
    'filteredCellar' => ['CaveController', 'showFilteredCellar'],
    'cellarByDomain' => ['CaveController', 'showCellarByDomain'],
    //accueil
    "accueil" => ['HomeController', 'accueil'],
    //profil
    "profil" => ['ProfilController', 'viewProfil'],
    // signup
    "signup" => ["UserController", "createUser"],
    //upadate User
    "updateUser" => ["UserController", "updateUser"],
];
