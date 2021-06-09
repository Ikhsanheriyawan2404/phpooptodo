<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodoList(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	$todolistRepository->todolist[1] = "BElajar PHP";
	$todolistRepository->todolist[2] = "BElajar Kotlin";
	$todolistRepository->todolist[3] = "BElajar Java";

	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->showTodoList();
}

testShowTodoList();