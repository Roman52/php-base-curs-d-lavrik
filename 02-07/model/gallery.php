<?php
declare(strict_types=1);

function checkImageName(string $name): bool {
    return (bool) preg_match('/.*\.jpg$/', $name);
}