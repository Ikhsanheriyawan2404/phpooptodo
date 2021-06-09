<?php

namespace Service {

	use Entity\Todolist;
	use Repository\TodolistRepository;

	interface TodolistService {

		function showTodoList(): void;
		function addTodoList(string $todo): void;
		function removeTodolist(int $number): void;

	}

	class TodolistServiceImpl implements TodolistService {

		private TodolistRepository $todolistRepository;

		public function __construct(TodolistRepository $todolistRepository)
		{
			$this->todolistRepository = $todolistRepository;
		}

		function showTodolist(): void
		{
			echo "--------------------" . PHP_EOL;
			echo "TODOLIST" . PHP_EOL;
			echo "--------------------" . PHP_EOL;
			$todolist = $this->todolistRepository->findAll();
			foreach ($todolist as $number => $value) {
				echo "$number. $value" . PHP_EOL;
			}
		}

		function addTodoList(string $todo): void
		{
			//
		}

		function removeTodolist(int $number): void
		{
			//
		}
	}

}