<?php

	function write_error($string)
	{
		$file = fopen($_SERVER['DOCUMENT_ROOT']."/text/write_error.txt", "w");
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/text/write_error.txt"))
		{
			fwrite($file, "$string");
			fclose($file);
		}
		else 
		{
			echo "php_functions File Error : write_error.txt";
			exit();
		}
	}
	
	function write_previous($string)
	{
		$file = fopen($_SERVER['DOCUMENT_ROOT']."/text/write_previous.txt", "w");
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/text/write_previous.txt"))
		{
			fwrite($file, "$string");
			fclose($file);
		}
		else
		{
			echo "php_functions File Error : write_previous.txt";
			exit();
		}
	}

	function getUCount($string)
	{
		
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt"))
		{
			$IFile = fopen($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt", "r");
			while(!feof($IFile))
			{
				$string1 = fgets($IFile);
				$split = explode(" ", $string1);
				if($split[0] == "$string")
				{
					fclose($IFile);
					return (int)$split[1];
				}
			}
			fclose($IFile);
			$IFile = fopen($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt", "a+");
			fwrite($IFile, "$string 0\n");
			fclose($IFile);
			return 0;
		}

		else
		{
			$IFile = fopen($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt", "w");
			fwrite($IFile, "$string 0\n");
			fclose($IFile);
			return 0;
		}

	}

	function changeUCount($string, $num)
	{
		if(file_exists($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt"))
		{
			$IFile = fopen($_SERVER['DOCUMENT_ROOT']."/text/u_count.txt", "r+");
			while(!feof($IFile))
			{
				$string1 = fgets($IFile);
				$split = explode(" ", $string1);
				if($split[0] == "$string")
				{
					rewind($IFile);
					fwrite($IFile, "$string $num");
					fclose($IFile);
					return TRUE;
				}
			}
			fclose($IFile);
			return FALSE;
		}

		else
			return FALSE;
	}

	
?>