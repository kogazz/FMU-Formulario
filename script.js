function limpaFormularioCep() {
  document.getElementById('rua').value = ''
  document.getElementById('bairro').value = ''
  document.getElementById('cidade').value = ''
  document.getElementById('uf').value = ''
  document.getElementById('msg').value = ''
}

function pesquisacep(valor) {
  var cep = valor.replace(/\D/g, '')

  if (cep != "") {
    var validacep = /^[0-9]{8}$/

    if (validacep.test(cep)) {
      document.getElementById('rua').value = '...'
      document.getElementById('bairro').value = '...'
      document.getElementById('cidade').value = '...'
      document.getElementById('uf').value = '...'

      var script = document.createElement('script')
      script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meuCallback'
      document.body.appendChild(script);
    } else {
      limpaFormularioCep();
      alert("Formato de CEP inválido.")
    }
  } else {
    limpaFormularioCep()
  }
}

function meuCallback(conteudo) {
  if (!('erro' in conteudo)) {
    document.getElementById('rua').value = conteudo.logradouro
    document.getElementById('bairro').value = conteudo.bairro
    document.getElementById('cidade').value = conteudo.localidade
    document.getElementById('uf').value = conteudo.uf
  } else {
    limpaFormularioCep()
    alert("CEP não encontrado.")
  }
}

function mostrarPeso(valor) {
  document.getElementById('peso-valor').textContent = valor
}

function formatPhone(input) {
  let phone = input.value.replace(/\D/g, '')

  if (phone.length > 11) {
      phone = phone.substring(0, 11)
  }

  if (phone.length <= 2) {
      phone = phone.replace(/(\d{0,2})/, '($1')
  } else if (phone.length <= 6) {
      phone = phone.replace(/(\d{2})(\d{0,4})/, '($1) $2')
  } else {
      phone = phone.replace(/(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3')
  }

  input.value = phone
  if (phone.replace(/\D/g, '').length !== 11) {
      input.setCustomValidity('O número precisa ter 11 dígitos')
  } else {
      input.setCustomValidity('')
  }
}