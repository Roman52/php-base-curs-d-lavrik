<?php
function isValidController(string $url): bool {
	return (bool) preg_match('/^[aA-zZ0-9_\-]*$/', $url);
}
