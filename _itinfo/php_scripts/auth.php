<?php
	//��������� ������
	session_start();
	//���������� ���� � ����������� �����������
	include_once 'ldap_conf.php';
	if (isset($_GET['logout']))
		{if(isset($_SESSION['user_id']))
			{
			//��������� ������ 
			unset($_SESSION['user_id']);
			//������� ����
			setcookie('login','',0,"/");
			setcookie('pwd','',0,"/");
			//��������� �� �������� �����������
			header('Location: index.php');
			//���������� ���������� �������
			exit;
		}		
	}

	//���� ������������ ��� ����������������, �� ������������� ��� �� �������
	if (isset($_SESSION['user_id']))
		{
			header('Locaition: php_scripts/main.php');
			exit;
	}
	
	//���� ������������ �� ���������������, �� ��������� ��� ����� �������
	if(isset($_POST['login']) && isset($_POST['pwd']))
		{
		$usr=$_POST['login'];
		$login=$_POST['login'].$domain;
		$pwd=$_POST['pwd'];
		
	}
?>