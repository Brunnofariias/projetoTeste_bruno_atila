<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class resultado {

            protected $nota1 = 5; // primeira nota do aluno
            protected $nota2 = 3; // segunda nota do aluno
            protected $aluno = Bucha; // nome do aluno

            function nota() {

                $recebeAluno = $this->aluno; // valiaveis que recebem os valores protegidos
                $recebeNota1 = $this->nota1;
                $recebeNota2 = $this->nota2;

                $resultadoTotal = $recebeNota1 + $recebeNota2 / 2; // media do aluno

                If ((($recebeNota1 + $recebeNota2) / 2) >= 7) { // condi��o da media
                    echo "$recebeAluno passou com nota $resultadoTotal";
                } else {
                    echo "$recebeAluno não passou! Ficou com nota $resultadoTotal";
                }
            }

        }
        
        class recuperacao extends resultado { // class recuperacao esta fazendo uma heran�a
            
            function nota() {

                $recebeAluno = $this->aluno; // valiaveis que recebem os valores protegidos
                $recebeNota1 = $this->nota1;
                $recebeNota2 = $this->nota2;

                $resultadoTotal = $recebeNota1 + $recebeNota2 / 2; // media do aluno

                If ((($recebeNota1 + $recebeNota2) / 2) >= 5) { // condi��o da media
                    echo "$recebeAluno passou na recupera��o com nota $resultadoTotal";
                } else {
                    echo "$recebeAluno n�o passou na recupera��o! Ficou com nota $resultadoTotal";
                }
            }
            
        }
        
               
        ?>
    </body>
</html>
