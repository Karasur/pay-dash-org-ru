<?

function gen_passwd($a){
		return password_hash($a, PASSWORD_DEFAULT, ['cost' => 12]);
}

echo gen_passwd("dash");
