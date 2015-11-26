<?php
class TwigController extends Controller {
	
	public function data() {
	}

	public function run() {
		$path = $this->controller->get_uri();
		$php_dir = dirname($_SERVER["PHP_SELF"]);
		$file = explode($php_dir, $path);
		$file = $file[1];
		if ($file == "/") {
			$file = "/index.html";
		}
		global $twig;
		$data = $this->data();
		if ($data) {
			 echo $twig->render($file, $this->data());
		} else {
			 echo $twig->render($file);
		}
	}
}