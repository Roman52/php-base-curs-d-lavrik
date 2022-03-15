<?php
sessionsRemove($user['id_user']);
header('Location: ' . BASE_URL);
exit();
