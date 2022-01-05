<html>
	<body>
		<?php
			#string functions
			$a = "Hello";
			$b = "World";

			echo $a, $b;
			echo "<br/>";

			#add space or break after each function
			function space()
			{
				echo "<br/>";
				echo "_______________________________________________________";
				echo "<br/>";
			}
			echo space();		
			#string reverse -> strrev(string)
			echo nl2br("1.String Reverse: ".strrev($a));
			echo space();

			#string Compare -> strcmp(string 1, string 2)
			echo nl2br("2.String compare:".strcmp($a, $b));
			echo space();
			
			#string length -> strlen(string)
			echo nl2br("3.Length:". strlen($a));
			echo space();

			#string to lower case -> strtolower(string)
			echo nl2br("4.Lowercase: ".strtolower($a));
			echo space();

			#string to upper case -> strtoupper(string)
			echo nl2br("5.Uppercase: ".strtoupper($b));
			echo space();

			#string trim -> trim(string)
			echo nl2br("6.Trim: ".trim($a));
			echo "<br/>";

			#string left trim -> ltrim(string)
			echo nl2br("7.LTrim: ".ltrim($a));
			echo space();

			#string right trim -> rtrim(string)
			echo nl2br("8.RTrim: ".rtrim($a));
			echo space();

			#add backslash in front off character in -> string addcslashes(string,characters)
			echo nl2br("9.Backslashing: ".addcslashes($a, "l"));
			echo "<br/>";

			#add backslashes in front of predefined characters (where sigle quote or double quote appear) -> addslashes(string)
			echo nl2br("10.Backslashing: ".addslashes("this's an 'example' of string's functions"));
			echo space();	

			#binary to hexadecial convertion -> bin2hex(string)
			echo nl2br("11.Binary to hexadecial: ".bin2hex($a));
			echo "<br/>";	
			#convert back to binary	using pack() function 
			echo "12.Hexadecial to Binary : ";
			echo pack("H*",bin2hex($a)) . "<br>";
			echo space();

			#removes whitespaces or other predefined characters from the right end of a string using Chop() function -> chop(string,charlist)
			echo nl2br("13.Remove white space: ".chop($a));
			echo space();	
			
			#Return characters from different ASCII values -> chr(ascii)
			echo nl2br("14.ASCII : ". chr(65));
			echo space();

			#splits a string into a series of smaller parts with any symbol after each split -> chunk_split(string, length, end)
			echo nl2br("15.split: ". chunk_split($a,2,"*"));
			echo space();

			#print capital letter and then small and also trim repeating characters 4 modes(0-2:array and 3:all character and 4:all unused characters)-> count_chars(string,mode)
			echo nl2br("16.countchar: ".count_chars($a,3));
			echo space();

			#CRC32 is an error-detecting code commonly used in digital networks and storage devices to detect accidental changes to raw data -> crc32(string)
			echo nl2br("17.CRC32: ".crc32($a));
			echo space();

			#function to returns a hashed string using DES, Blowfish, or MD5 algorithms -> crypt(str,salt)
			echo nl2br("18.Crypto: ".crypt($a, "123"));
			echo space();

			#breaks a string into an array -> explode(separator,string,limit)
			$c = 'one,two,three,four, five, six';
			print_r(explode(',',$c,0));
			echo space();

			#convert from hexadecmal to binary -> hex2bin(string)
			echo nl2br("19.Hexa to binary: ".hex2bin("4e32"));
			echo space();

			#return a string from the elements of an array -> implode(separator,array)
			$d = array("A", "B", "C");
			echo nl2br("20.impode:".implode(">>", $d));			
			echo space();

			#return a string from the elements of an array -> join(separator,array)
			echo nl2br("21.Join: ".join("#", $d));
			echo space();

			#lower case first character of String -> lcfirst(string)
			echo nl2br("22.Lower case first character: ".lcfirst($a));
			echo space();

			#uppercase first character of string -> ucfirst(string)
			echo nl2br("23.Upper case first character: ".ucfirst("str"));
			echo space();

			#uppercase first character of each string -> ucwords(string)
			echo nl2br("24.Upper case first character: ".ucwords("the change is here"));
			echo space();

			#calculates the MD5 hash of a string -> md5(string,raw)
			echo nl2br("25.MD5: ".md5($a));
			echo space();

			#metaphone key represents how a string sounds if said by an English speaking person -> metaphone(string,length)
			echo nl2br("26.Metaphone: ".metaphone($b));
			echo space();

			#format number with group 1000; 1,2 & 4 Parameters -> number_format(number,decimals,decimalpoint,separator)
			echo nl2br("27.format number: ". number_format(10000000));
			echo space();

			#ASCII value of the first character of a string -> ord(string)
			echo nl2br("28.ASCII of first character: ".ord($b));
			echo space();

			#calculate SHA-1 hash of a string -> sha1(string,raw)
			echo nl2br("29.SHA: ".sha1($a));
			echo space();

			#calculate similarity between two strings -> similar_text(string1,string2,percent)
			echo nl2br("30.Similarity: ".similar_text("Hello World", "Hello"));
			echo space();

			#replaces some characters with some other characters in a string in array only-> str_ireplace(find,replace,string,count)
			echo nl2br ("31.REplace: ".str_replace("World","Your","Hello good World"));
			echo space();

			#repeat string for a specified number of times -> str_repeat(string,repeat)
			echo nl2br("32.Repeat:".str_repeat("hello",3));
			echo space();

			#shuffle all the characters of a string -> str_shuffle(string)
			echo nl2br("33.Suffle: ".str_shuffle($a));
			echo space();

			#splits a string into an array in defined length -> str_split(string,length)
			print_r(str_split("HelloWorld",3));
			echo space();

			#count number of words in a string -> str_word_count(string,return,char)
			print_r(str_word_count("Hello world! welcome to PHP",1));
			echo space();

			#return position of characters including whitespaces found in a string start from 0 -> strcspn(string,char,start,length)
			echo nl2br("34.No of character: ".strcspn("welcome to the PHP","P",0, 20));
			echo space();

			#Find position of the last occurrence of a string inside another string	-> strpos(string,find,start)
			echo nl2br("35.position: ".strpos("Hello World, Welcome to PHP!", "to"));
			echo space();

			#finds the position of the last occurrence of a string within another string, and returns all characters from this position to the end of the string -> strrchr(string,char)
			echo nl2br("36.last occurence: ".strrchr("Hello World, Welcome to PHP!", "Welcome"));
			echo space();

			#translates certain characters in a string -> strtr(string,from,to)
			echo nl2br("37.Change particular character: ".strtr("Hello123!", "123","You" ));
			echo space();

			#return a part of a string or substring -> substr(string,start,length)
			echo nl2br("38.Substring: ".substr("hello world", 2));
			echo space();

			#counts the number of times a substring occurs in a string -> substr_count(string,substring,start,length)
			echo nl2br("39.Count SubString: ".substr_count("Welcome to PHP, Hello World PHP", "PHP"));
			echo space();

			#replaces a part of a string with another string -> substr_replace(string,replacement,start,length)
			echo nl2br("40.replace substring: ".substr_replace("Hello World, Welcome to PHP", "PHP", 10));
			echo space();

			#wraps a string into new lines when it reaches a specific length -> wordwrap(string,width,break,cut)
			echo nl2br("41.Word Wrap: ".wordwrap("Welcome to PHP, Hello World PHP", 10, "<br>"));

		?> 
	</body>
</html>
