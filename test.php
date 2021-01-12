<?php

for ($i = 0; $i < 100; $i++) {
	file_put_contents('./testcbd' . $i . '.txt', bin2hex(random_bytes(80000)));
}
