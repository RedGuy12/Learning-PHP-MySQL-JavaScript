<?php
//headers
$design['title']       = 'LPMJ Book - Locking a file';
$design['description'] = 'File locking activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "lock, locking, flock, LOCK_EX, LOCK_UN, over, overwrite, create, fopen, fwrite, fclose, open, write, close, f, file, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>This is a replica of <a href='CH07-05 overwritingFiles.php'>CH07-05 overwritingFiles.php</a>, except this locks the file before wrting. That onyl lets one program write or read it at a time. Without that, the file could be come corrupted.
		<br>See what it evaluates to over there 👉!
	_END;
$design['RIGHT']       = '<pre class="code">'; {
	//conten
	$file = fopen("CH07-03 textFile.txt", 'w') or $design['RIGHT'] .= "Failed to open file</pre><p style='display:none'>";
	if (flock($file, LOCK_EX)) {
		fwrite($file, "File last written with CH07-15 lockingFile.php on " . date("l, F jS Y") . " at " . date("g:i:s A") . " GMT" . date("O") . ". " +
			"If the date is wrong, try pressing Ctrl/Cmd + Shift + R (Unfortunately, that's impossible on mobile).\n" +
			"It should be noted that CH07-05 overwritingFiles.php and CH07-15 lockingFiles.php are the only files that update the date in CH07-03 textFile.txt. " +
			"Other files do NOT update the date in any text file.\ndata\ndata\nMore data\nMore data\nLorem ispum dolor sit amet, sunt esse elit in dolor NULLa proident " +
			"exercitation duis eu est irure ipsum dolor ex. Irure NULLa est adipisicing occaecat irure ea cupidatat commodo ullamco id. Veniam magna tempor nisi esse aliqua mollit " +
			"minim consequat dolor laboris non reprehenderit. Et excepteur ipsum eiusmod fugiat elit culpa. Nisi consectetur officia occaecat ipsum proident ea pariatur laboris NULLa NULLa " +
			"adipisicing veniam. Excepteur consequat id adipisicing in veniam nostrud enim magna qui quis nisi. Non aliqua occaecat voluptate qui nisi ex velit laborum dolore. \nIpsum " +
			"adipisicing ad est sit. Velit fugiat eu nostrud qui aliqua in labore mollit sint sit nisi culpa. Esse aliqua irure non id sunt incididunt reprehenderit Lorem anim id Lorem " +
			"velit dolore deserunt. Veniam elit ipsum cupidatat quis cupidatat consequat in cillum id. Sunt exercitation est ex id culpa dolore. Aliquip minim ad do sit aliqua nisi do aliquip " +
			"sit. Deserunt in sit qui quis enim fugiat sit consectetur. \nId do aliqua est laboris irure laboris magna pariatur et quis. Ipsum est id et deserunt NULLa consectetur officia exercitation " +
			"et ad eu cupidatat aliqua. Culpa est culpa quis proident incididunt ea incididunt et do adipisicing excepteur. Proident magna duis irure velit cillum elit ipsum sit cillum NULLa quis. Ea " +
			"amet aute ea labore nostrud dolore cillum est. Exercitation labore et tempor officia reprehenderit deserunt est officia quis non cillum cupidatat. Est excepteur anim et velit excepteur " +
			"laborum veniam non fugiat est sint.\nTempor culpa cillum fugiat laborum sit ut id anim consequat. Velit magna aute irure in anim ad sunt officia anim ea veniam tempor culpa. Velit do sint" +
			" magna dolor mollit fugiat quis irure enim commodo aliquip incididunt incididunt nostrud. Ipsum qui irure est ad. Sint aliqua velit sint consectetur sint consectetur qui in incididunt " +
			"veniam consectetur irure laboris. Aliquip amet ex adipisicing id ex. Aute elit id deserunt ullamco. \nVelit proident elit dolor eu deserunt cupidatat. Consequat ea non cillum" +
			" dolor deserunt. Ullamco reprehenderit quis reprehenderit amet sunt ex aliquip esse nostrud sint elit NULLa amet elit. Velit minim sit consectetur sint eu. Nisi deserunt exercitation" +
			" sunt laborum consectetur exercitation aliquip sit anim culpa aliquip.")
			or $design['RIGHT'] .= "Could not write to file.";
		$design['RIGHT']        .= "<a href='CH07-03 textFile.txt'>Wrote to file 'CH07-03 textFile.txt' successfully!</a>";
	} else {
		$design['RIGHT'] .= "Failed to lock file";
	}

	fclose($file);
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
