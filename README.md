Formulário FMU

Integrantes
Lucca Bonatto - RA: 2874063
Leonardo Koga - RA: 2152146
Felipe Bonafonte - RA: 1702673
Leonardo Cardoso Correia - RA: 1461336


Descrição
Este projeto é um formulário de coleta de informações de usuário, implementado utilizando HTML, CSS e JavaScript. O formulário inclui campos para o usuário inserir dados como nome, e-mail, telefone, data de nascimento, e diversos outros dados pessoais. O design da interface foi aprimorado com CSS, e funcionalidades adicionais foram implementadas com JavaScript para melhorar a experiência do usuário.

Funcionalidades
Formulário de Entrada de Dados: O formulário coleta informações como:

Nome, e-mail, telefone
Hora desejada e data de nascimento
Cor favorita, quantidade de filhos, peso (slider)
Sexo (botões de rádio), estado (seleção), e CEP
Busca Automática de Endereço pelo CEP: Quando o usuário insere o CEP e sai do campo (onblur), é realizada uma consulta ao web service ViaCEP para preencher automaticamente os campos de endereço (rua, bairro, cidade, estado).

Validações de Formulário: O formulário inclui várias validações, como:

Campos obrigatórios (e.g., nome, e-mail)
Padrão para telefone, permitindo apenas o formato brasileiro (e.g., "11 99999-9999")
Validação do formato do CEP
Ajuste de Peso: O campo de peso usa um input type="range", e o valor atual é exibido em tempo real conforme o usuário ajusta o slider.

Estilo Responsivo: Utiliza CSS para garantir que o formulário tenha uma boa aparência e seja usável em diversos dispositivos e tamanhos de tela.

Botões de Ação:

Enviar: Submete os dados para o arquivo recebe-dados.php.
Limpar: Reseta todos os campos do formulário para os valores padrão.
Estrutura dos Arquivos
index.html: Contém o formulário HTML e liga os arquivos de estilo e script.
style.css: Contém o estilo para o formulário, como alinhamento, cores, fontes e espaçamento.
script.js: Contém as funções JavaScript responsáveis por buscar informações do endereço via CEP, limpar o formulário e atualizar o valor do peso.
Tecnologias Utilizadas
HTML5: Estruturação do formulário e seus componentes.
CSS3: Estilização da interface do usuário.
JavaScript: Funcionalidades como a busca pelo CEP e atualização de peso.
Web Service (ViaCEP): Para buscar informações de endereço pelo CEP.
Instruções de Uso
Clonar o repositório ou baixar os arquivos do projeto.
Abra o arquivo index.html em um navegador para visualizar o formulário.
Preencha os campos obrigatórios e clique em "Enviar" para submeter os dados.
Utilize o campo de CEP para preenchimento automático do endereço.
Clique em Limpar para resetar o formulário.
Estrutura do Formulário
Campos de texto (<input type="text">): Nome, Número, Bairro, Cidade, Estado.
Campos numéricos (<input type="number">): Quantidade de filhos.
Campos de seleção (<select>): Estado de residência.
Botões de seleção (<input type="radio">): Sexo.
Caixa de seleção (<input type="checkbox">): Meios de transporte.
Controle deslizante (<input type="range">): Peso.
Áreas de texto (<textarea>): Mensagem adicional.
Observações
Certifique-se de que a máquina onde o projeto está sendo executado tenha acesso à internet para fazer a consulta ao serviço ViaCEP.
O formulário tem estilo responsivo, porém testes adicionais em diferentes dispositivos podem ser necessários para garantir a compatibilidade total.
Melhorias Futuras
Validação do Lado do Servidor: Adicionar validações no recebe-dados.php para assegurar que os dados sejam seguros e corretos.
Estilo Avançado: Utilizar frameworks como Bootstrap para melhorar a responsividade e o estilo.
Implementar API Fetch: Substituir o uso de script externo pela API Fetch para obter os dados de CEP de forma mais moderna e eficiente.
