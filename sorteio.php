<h2>CRIAR SORTEIO</h2>
<button onclick="novo()"
class="w3-button"><i class="fa fa-play" aria-hidden="true"></i> Novo</button>
<button class="w3-button w3-black" id="sort" onclick="sortear()">Sortear</button>


<textarea name="b1" id="b1" cols="50" rows="10" hidden></textarea>
<p><b >Números: </b><span id="x1"></span></p>
<p style="color:gold"> - <b id="0" ></b>
 - <b id="1"></b> - <b id="2"></b> - <b id="3"></b> - <b id="4"></b></p>

<script>
function novo(){
    location.reload();
}
 var nomes = new Array();//cria o array para guardar a lista

function sortear(){
 nomes="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25";//recebe a listagem de nomes e guarda em um array
 var suaString= nomes.toString();//transforma em uma listagem
 var nomesajustado = suaString.split(',');//ajusta a listagem informando que a virgula separa os nomes
 document.getElementById("x1").innerHTML = nomesajustado;//exibe o array
for(i=0;i<=4;i++){ //faz um loop para verificar os tres 

(function (i) {
    setTimeout(function () {
    var sorteado =  nomesajustado[Math.floor(Math.random() * nomesajustado.length)]; //percorre a lista e escolhe um aleatoriamente
nomesajustado.splice(nomesajustado.indexOf(sorteado), 1);
     document.getElementById(i).innerHTML = sorteado;
     document.getElementById("x1").innerHTML = nomesajustado;
    
    }, 5000*i);
    
  })(i);
} //volta ao loop ate o terceiro sorteio
//exibe o primeiro sorteado

 document.getElementById('sort').style.display="none";//retira o bota oda tela
 document.getElementById('b1').style.display="none";//retira a area de texto da tela
}

</script>