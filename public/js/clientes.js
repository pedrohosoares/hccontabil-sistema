let dados = [];
let jsons = {};
let formulario = {};

formulario.divCampos = document.querySelector('div.campos');
formulario.campo = '<div class="form-group novo_campo"> <label style="cursor:pointer;" for="novo_campo" onkeydown="alteraName(this);" contenteditable="true">! Digite aqui o nome do campo !</label> <div class="input-group"><input type="text" class="form-control" name="estado" placeholder="" required><span onclick="excluir(this);" style="cursor: pointer;" class="input-group-addon" class="remove"><i class="fa fa-remove"></i></span></div></div>';
formulario.botao_addCampo = document.querySelector('div.add-campo');
formulario.formsubmit = document.querySelector('form#formulario button[type="submit"]');
formulario.form = document.querySelector('form#formulario');
formulario.dados = document.querySelector('form#formulario input[name="dados"]');

function excluir(e){
    let valor = e.parentNode.querySelector('input').value;
    let indice = e.parentNode.parentNode.querySelector('label').innerText;
    let dados = formulario.dados.value;
    let novosDados = {};
    if(dados.length >0){
        dados = JSON.parse(dados);
        dados.forEach((v,i)=>{
            for(d in v){
                if(indice != d){
                    novosDados[d] = v[d];
                }
            }
        });
        formulario.dados.value = "["+JSON.stringify(novosDados)+"]";
    }
    e.parentNode.parentNode.remove();
}

function alteraName(e) {
    e.parentNode.querySelector('input').setAttribute('name', e.innerText);
};

function addCampo() {
    $('div.campos').append(formulario.campo);
};

formulario.formsubmit.onclick = (e) => {
    e.preventDefault();
    let camposAdicionais = document.querySelectorAll('div.novo_campo');
    camposAdicionais.forEach((e, i) => {
        jsons[e.querySelector('label').innerText] = e.querySelector('input').value;
    });
    formulario.dados.value = "[" + JSON.stringify(jsons) + "]";
    formulario.form.submit();
};