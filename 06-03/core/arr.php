<?php

/**
 * @param array $target - одномерный массив, 99% ассоциативный
 * @param array $fields - обычный массив, содержит список строк
 *
 * @return array
 */
function extractFields(array $target, array $fields):array {
	$res = [];
	foreach ($fields as $field) {
		$res[$field] = trim($target[$field]);
	}

	return $res;
}