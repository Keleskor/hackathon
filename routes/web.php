<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get("/", [RouteController::class,"indexLogin"])->name("indexLogin");
Route::get("/logout", [UserController::class,"logout"])->name("logout");
Route::get("/login", [RouteController::class,"index"])->name("index");
Route::get('/college', [CollegeController::class, "collegeName"])->name("CollegeName");
Route::get('/college/{college}', [CollegeController::class, "CollegeNameOne"])->name("CollegeNameOne");
Route::post("/college/search", [CollegeController::class, "CollegeSearch"])->name("search");
Route::post("/college/searchProfessial", [CollegeController::class, "CollegeSearchProfessial"])->name("CollegeSearchProfessial");
Route::post("register", [UserController::class, "register"])->name("register");
Route::post("auth", [UserController::class, "auth"])->name("auth");
Route::get("/survey/question", [QuestionController::class, "Question"])->name("Question");

Route::get("/survey", [RouteController::class, "survey"])->name("survey");

Route::get("/contact", [RouteController::class, "contact"])->name("contact");
Route::get("/student", [RouteController::class, "student"])->name("student");



