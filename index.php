$str = file_get_contents("https://github.com/SherlockPing/v/blob/main/test.txt", "r") or die("Unable to open file!"); echo base64_encode($str);
