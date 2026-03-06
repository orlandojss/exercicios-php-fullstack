<?php

    function exercicio01($num1, $num2){
        return "a soma é: ".((int)$num1 + (int)$num2); // retorna o resultado da operação mas sem imprimir na tela
    } // fim do exercicio01
    function subtrair ($num1, $num2){
        return "A subtração é: ".((int)$num1 - (int)$num2);
    }//fim do método
    function multiplicacao ($num1, $num2){
        return "A multiplicação é: ".((int)$num1 * (int)$num2);
    } 
    function divisao ($num1, $num2){
        if($num2 <= 0){
            return "Impossivel dividir por zero!";
        }else if ($num1 < 0 || $num2 < 0){
            return "Impossivel dividir por número negativo!";
        }else{
            return "A divisao é: ".((int)$num1 / (int)$num2);
        }//fim do if
    }// fim do metodo
    function potencia ($num1,$num2){
        if($num2 < 0){
            return "Impossivel calcular a potência!";
        }else{
        return "A potencia é: ".pow($num1,$num2);
        }// fim do if
    }// fim do potencia

    function raiz($num1){
        if($num1 < 0){
            return "Impossivel calcular raiz de numero negativo";
        }else{
            return "A raiz é: ".sqrt((int)$num1);
        }//fim do if

    }
    function bissexto ($num1){
        if ($num1 % 4 == 0 && $num1 % 100 != 0){
            return "o ano é bissexto!";
        }else{
            return "O ano nao é bissexto!";
        }
    }
    //verificar se um numero esta entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        //for é "para" do portugol
        for($i=$inicio;$i <= $fim;$i++){
            if ($i == (int)$num){
                return true;
            }
        }//fim do for
        return false;
    }//fim do metodo
    //4 leia a idade e verifique se pode votar: >= 16 e < 18 facultativo; >18 obrigatorio
    function podeVotar($idade){
        if($idade >= 16 && $idade <= 18){
            return "Você pode votar (Voto facultativo)"; 
        }else if ($idade >= 18){
            return "Você Deve Votar!";
        }else{
            return "Você NAO PRECISA votar!";
        }
    }//fim do metodo

    //5 leia um numero de 1 a 7 e mostre o dia da semana 
    function diaDaSemana($num){
        switch($num){
            case 1: 
                return "domingo";
                break; // encerra o switch
            case 2:
                return "segunda";
                break;
            case 3: 
                return "terça";
                break;
            case 4: 
                return "quarta";
                break;
            case 5: 
                return "quinta";
                break;
            case 6:
                return "sexta";
                break;
            case 7:
                return "sabado";
                break;
            default:
                return "O numero informado é invalido";
                break;            
            }//fim do switch
    }//fim do metodo
    //6. verifique se uma senha digitada e valida
    function senhaValida($senha){
        if($senha == 900){
            return "Senha Correta";
        }else{
            return "senha invalida";
        }
    }
    //7. leia 2 horarios e determine qual e mais tarde
    function maiorHorario($hora1, $hora2){
        if($hora1 > $hora2){
            return "o horario $hora1 é maior que o horario $hora2";
        }else{
            return "o horario $hora2 é maior que o horario 
            $hora1";
        }
    }//fim metodo

    //8. leia 5 numeros e calcule a media
    function calculoMedia($num1,$num2,$num3,$num4,$num5){
        $media = ((int)$num1+(int)$num2+(int)$num3+(int)$num4+(int)$num5)/5;
        return "a media é $media";
    }//fim do metodo
    
    //9. leia numeros ate que a soma ultrapasse 100
    function somaValores($n1,$n2,$n3,$n4,$n5){
        $soma = ((int)$n1+(int)$n2+(int)$n3+(int)$n4+(int)$n5);
        return $soma;
    }//fim do metodo

    //10 (11 mas a 10 é igual a 6) classifique uma pessoa com base na idade: criança, jovelm, adulto e idoso
    function idades($idade){
        if ($idade <= 12){
            return "Criança";
        }else if($idade > 12 && $idade < 18){
            return "Jovem";
        }else if($idade > 18 && $idade < 60){
            return "Adulto";
        }else{
            return "idoso";
        }
    }

    //11 (12) verifique se um numero é par ou impar
    function numeroParImpar($num){
        if ($num % 2 == 0){
            return "par";
        }else{
            return "Impar";
        }
    }
    //12 leia dois numeros e veja o maior entre eles
    function numeroMaior($num1,$num2){
        if($num1 > $num2){
            return "O $num1 é o maior";
        }else{
            return "O $num2 é o maior";
        }
    }
    //13 imprima os numeros de 1 a 100 com para (for)
    function deUmACem(){
        //for é "para" do portugol
        for($i=0;$i<=100;$i++){
            echo "<br>".$i;
        }
    }         
    
    //14 verifique se um numero é multiplo por 3 e 5 ao mesmo tempo
    function numeroMultiplo($num1){
        if($num1 % 3 == 0 && $num1 % 5 == 0){
            return "este numero é multiplo";
        }else{
            return "este numero nao é multiplo";
        }
    }
    //15 Leia três valores e verifique se formam um triângulo. Classifique como equilátero, isósceles ou escaleno.
    function triangulo($a,$b,$c){
        if($a + $b > $c && $a + $c > $b && $b + $c > $a){
            if($a == $b && $b == $c){
                return "triangulo equilátero";
            }
            elseif($a == $b || $a == $c || $b == $c){
                return "triangulo isoseles";
            }
            else{
                return "escaleno";
            }
        }
        else{
            return "Os valores informados não podem formar um triângulo.";
        }   
    }
    //16. crie dois vetores de 10 posições e preencha um com a soma
    // e o outro com a multiplicação entre eles
    function mostrarVetor ($vetor){
          //USAR UM OU OUTRO NUUUUNNNCCAAAAAAA OS DOIs
        for ($i=0;$i<count($vetor);$i++){
            echo $vetor[$i];
        }
        //ou usar esse (mais rapido e escreve menos)
        foreach($vetor as $valor){
            echo $valor. "<br>";
        }
    }
    //17. Leia uma matriz 3x3 e imprima sua diagonal principal.
    function mostrarMatriz ($matriz){
        for ($i=0;$i<=2;$i++){
            for($j=0;$j<=2;$j++){
                if($i==$j){
                    echo $matriz[$i][$j]." ";
                }
            }
            echo "<br>";
        }
    }
    //18. Leia 10 valores e calcule a média. Mostre os que estão acima dela
    function mediaAcima($num){
        $soma = 0;
        for ($i = 0;$i < count($valores);$i++){
            $soma = $soma + $valores[$i];
        }

        $media = $soma / count($valores);

        echo "Média: " . $media . "<br>";
        echo "Valores acima da média:<br>";

        for($i = 0; $i < count($valores); $i++){
            if($valores[$i] > $media){
                echo $valores[$i] . "<br>";
            }
        }
        
    }
    //19. . Leia uma matriz 4x4 e exiba a maior linha (com maior soma).
    function maiorLinha($matriz){

        $maiorSoma = 0;
        $linhaMaior = 0;
    
        for($i = 0; $i < 4; $i++){
    
            $somaLinha = 0;
    
            for($j = 0; $j < 4; $j++){
                $somaLinha += $matriz[$i][$j];
            }
    
            if($somaLinha > $maiorSoma){
                $maiorSoma = $somaLinha;
                $linhaMaior = $i;
            }
        }
    
        echo "Linha com maior soma: <br>";
    
        for($j = 0; $j < 4; $j++){
            echo $matriz[$linhaMaior][$j] . " ";
        }
    }



























?>