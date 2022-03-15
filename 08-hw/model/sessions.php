<?php
function sessionsAdd(int $idUser, string $token) : bool{
	$params = ['uid' => $idUser, 'token' => $token];
	$sql = "INSERT sessions (id_user, token) VALUES (:uid, :token)";
	dbQuery($sql, $params);
	return true;
}

function sessionsRemove(int $idUser) : bool{
	$sql = "DELETE FROM sessions WHERE id_user=$idUser";
	dbQuery($sql);
	return true;
}

function sessionsOne(string $token) : ?array{
	$sql = "SELECT * FROM sessions WHERE token=:token";
	$query = dbQuery($sql, ['token' => $token]);
	$session = $query->fetch();
	return $session === false ? null : $session;
}