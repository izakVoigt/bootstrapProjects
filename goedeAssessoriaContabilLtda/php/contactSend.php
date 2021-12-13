<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $to='tecnico01@goedeassessoria.com.br';
        $subject='Mensagem site Goede';
        $msg="Nome: ".$name."\n"."E-mail: ".$email."\n"."Assunto: ".$subject."\n"."Mensagem: ".$message;
        $headers="From: ".$email;

        if(mail($to, $subject, $msg, $headers)){
            echo "<script>alert('Mensagem enviada com sucesso!');</script>";
        }
        else {
            echo "<script>alert('Erro ao enviar a mensagem!')</script>";
        }
    }
?>