<?php

for ($i = 0; $i < 100; $i++) {
	file_put_contents('./test' . $i . '.txt', bin2hex(random_bytes(20000)));
}
