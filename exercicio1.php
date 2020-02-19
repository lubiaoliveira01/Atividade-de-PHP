<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8" />
    <title>UOL Cinema</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <meta name="viewport" content="width-device-width, initial-scale=1">
        
    <style>
        body{
            
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
        img{
            height: 500px;
            width: 1100px;
        }
    </style>

</head>
<body>
    
<section class="container">

    <center><h1>G1 Música</h1></center>

    <?php

        $link = "https://g1.globo.com/rss/g1/musica/"; //guardando o endereço do arquivo xml dentro da variavel, 
                                                       //e aí a cada atualização lá, ele atualiza aqui

        $xml = simplexml_load_file($link) -> channel; 

        foreach($xml -> item as $item) //faz o loop nas tag com o nome "item"
                                        //exibe o valor das tags que estão dentro da tag "item"
                                        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        {    
            echo "<strong><p id=' '>Título:</strong> ".$item -> title."<br/>";
            echo "<strong>Link:</strong> ".$item -> link."<br/>"
            echo "<strong>Guid:</strong> ".$item -> guid."<br/>";
            echo "<strong>Descrição:</strong> ".$item -> description."<br/>";
            echo "<strong>Categoria:</strong> ".$item -> category."<br/>";
            echo "<strong>Data:</strong> ".$item -> pubDate."<br/>";
            echo "<br/>";
        } 
        //fim do foreach
        //foreach lé a matriz de dados xml, e le tudo que está dentro de item, um conjunto de itens,ou seja, péga uma linha de noticia e joga dentro do item
    ?>
    
    </section>
        
    <!--essa variavel recebe uma função php, se tornando uma matriz de dados -- -> channel seria a tag de onde começa o código xml -->

</body>
</html>