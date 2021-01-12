<?php

for ($i = 0; $i < 100; $i++) {
	file_put_contents('./testa' . $i . '.txt', bin2hex(random_bytes(20000)));
}
