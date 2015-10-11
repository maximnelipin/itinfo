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
			header('Locaition: main.php');
			exit;
	}
	
	//���� ������������ �� ���������������, �� ��������� ��� ����� �������
	if(isset($_POST['login']) && isset($_POST['pwd']))
		{
		$usr=$_POST['login'];
		$login=$_POST['login'].$domain;
		$pwd=$_POST['pwd'];
		//����������� � ��
		$conn=ldap_connect($host, $port) or die("LDAP ������ �����������");
		//�������� �������� ������� ������
		ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		if($conn)
		{
			//������ � ldap � ����������� �������� �������
			$bind=ldap_bind($conn,$login,$pwd);
			if($bind)
			{
				//�������� �� �������������� ������������ ������
				$check=ldap_search($conn, $itou, "(&(memberOf=".$groupit.")(sAMAccountName=".$usr."))");
				//���������, ���� �� ���������� ����������� �������
				$check_num=ldap_get_entries($conn, $check);
			}
			else die("����� �������� ����� ��� ������. <a href='index.php'> ����������� ��� ��� </a>");
		}
		//���� ������������ ����������� ������, ������� �� �������
		if ($check_num['count']!=0)
		{
			$_SESSION['user_id']=$login;
			header("Location: main.php");
			exit;
		}
		else die ("������ ������. <a href='index.php'> ����������� ��� ��� </a>");
		
	}
?>