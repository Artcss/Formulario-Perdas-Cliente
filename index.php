
<?PHP 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Natural da Terra</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="matestilo.css">
        
        
    </head>

<body>

    <nav class="navbar navbar-light bg-secondary">
        <a style="width: 250px;" class="navbar-brand" href="../inicioperdas.php"><img src="imagem/LOGOS_HF_NT.png" class="img-fluid" alt="Responsive image"></a>
      </nav>
    <div class="container">

        <div class="card">
            <div class="card-body">
              PERDAS MATSUSAKO.
            </div>
          </div>     
</div>

<div class="container" id="news1">

<form action="enviado.php" method="POST"> 

<table   class="table  table-striped table-dark" id="news3">



			

  <thead>
    <tr>
      <th id="display"  class="tempo" scope="col">CODIGO</th>
      <th  scope="col">MATERIAL</th>
      <th  scope="col">QUANTIDADE</th>
      
    </tr>
  </thead>
  <div id="news4" class="container">
 
<tbody>
<tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100562"></td>
             <td  id="largura"    ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ACELGA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100028"></td>
             <td id="largura"     ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="AGRIAO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140276"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="AGRIAO HIDRO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm " name="codigo[]" id="inlineFormInputGroup" value="100031"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="AIPO SALSAO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100033"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALECRIM"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="134824"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="PRIMAVERA MIX 250G"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140302"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="AMERICANA UN"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor"  ></td>
      
 </tr>
 <tr>
             <td id="display"><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137163"></td>
             <td  id="largura"><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY FRIZZE MAX"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137165"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY FRIZZE MIX "></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137167"></td>
             <td id="largura"    ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY FRIZZE ROXA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137168"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY LISA MAX"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137166"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY LISA ROXA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="134831"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CENOURA RALADA 250G"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="137164"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BABY MIX 100G"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100036"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALFACE CRESPA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100041"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CRESPA ROXA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140300"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ROXA HIDROP"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140279"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="VERDE HIDROP"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100038"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALFACE LISA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="120125"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="LISA HIDROPO "></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140278"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="MIMOSA HIDROP"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="134831"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="MINI ROMANA "></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100040"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALFACE ROMANA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100043"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALFAVACA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100048"></td>
             <td  id="largura"  ><input type="text"  readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALHO PORO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100050"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ALMEIRAO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100059x'"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="DILL ENDRO UN"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100059"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ARRUDA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100082"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BETERRABA RAMA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100086"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BROCOLIS"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="132452"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="BROC NINJA "></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100568"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CAPIM-LIMAO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"    ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100103"></td>
             <td id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CATALONIA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"    ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100110"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CEBOLINHA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"    ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100112"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CENOURA RAMA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="101027"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="CHEIRO VERDE"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100115"></td>
             <td    id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="COENTRO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="132758"></td>
             <td   id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="COUVE FLOR UN"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100117"></td>
             <td   id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="COUVE MINEIRA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140778"></td>
             <td   id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ERVA DOCE FUNCHO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100747"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ESCAROLA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100128"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ESPINAFRE"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100145"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="HORTELA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100170"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="LOURO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100190"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="MANJERICAO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td   id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100187"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="MANJERONA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100213"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="MOSTARDA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100216"></td>
             <td id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="NABO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100692"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="OREGANO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"   ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140755"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="RABANETE BDJ UN"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"    ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="140754"></td>
             <td  id="largura"   ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="RABANETE RAMA UN"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100280"></td>
             <td id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="REPOLHO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100281"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="REPOLHO ROXO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100284"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="RUCULA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100260"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="RUCULA HIDRO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td  id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100285"></td>
             <td id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="SALSA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100287"></td>
             <td  id="largura" ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="SALVIA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display" ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100319"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="TOMILHO"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100128"></td>
             <td  id="largura"          ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="ESPINAFRE"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 <tr>
             <td id="display"  ><input type="text" readonly class="form-control form-control-sm" name="codigo[]" id="inlineFormInputGroup" value="100284"></td>
             <td  id="largura"  ><input type="text" readonly class="form-control form-control-sm" name="material[]" id="inlineFormInputGroup" value="RUCULA"></td>
             <td><input type="number" class="form-control form-control-sm" name="quantidade[]" id="inlineFormInputGroup" placeholder="valor" ></td>
      
 </tr>
 
 
 
 </div>
   
 </tbody>
  
</table>

<div class="col-auto my-1">
    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
  </div>


  </form>
  <footer id="news10">
      <div style="top: 12px;" class="card text-center">
        <div class="card-header">
          TATUAPÉ
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          
        </div>
        <div class="card-footer text-muted">
          Copyright Natural da Terra.
        </div>
      </div>

    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>




 
</html>
?>
