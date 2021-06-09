<?php

namespace View {

	interface TodolistView {

		function showTodolist(): void;
		function addTodolist(): void;
		function removeTodolist(): void;

	}

}