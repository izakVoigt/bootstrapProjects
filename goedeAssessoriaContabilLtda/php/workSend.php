<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pretendedArea=$_POST['pretendedArea'];
        $academicGraduation=$_POST['academicGraduation'];
        $professionalExperience=$_POST['professionalExperience'];
        $otherLanguages=$_POST['otherLanguages'];

        $to='tecnico01@goedeassessoria.com.br';
        $subject='Currículo';
        $message="Currículo enviado pelo site da Goede"."\n\n\n"."Nome: ".$name."\n"."E-mail: ".$email."\n"."Telefone/Celular: ".$phone."\n\n"."Área Pretendida: ".$pretendedArea."\n\n"."Formações Acadêmicas: ".$academicGraduation."\n\n"."Experiência Profissional: ".$professionalExperience."\n\n"."Linguas Extrangeiras".$otherLanguages;
        $header="From: ".$email;

        if(mail($to, $subject, $message, $header)){
            echo "<script>alert('Currículo enviado com sucesso!')</script>";
        }
        else {
            echo "<script>alert('Erro ao enviar o currículo!')</script>";
        }
    }
?>