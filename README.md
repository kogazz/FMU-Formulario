# Formulário FMU

## Integrantes

- **Lucca Bonatto** - RA: 2874063  
- **Leonardo Koga** - RA: 2152146  
- **Felipe Bonafonte** - RA: 1702673  
- **Leonardo Cardoso Correia** - RA: 1461336  

---

## Descrição

Este projeto é um formulário de coleta de informações de usuário, implementado utilizando **HTML**, **CSS** e **JavaScript**. O formulário inclui campos para o usuário inserir dados como nome, e-mail, telefone, data de nascimento e outros dados pessoais. O design da interface foi aprimorado com CSS, e funcionalidades adicionais foram implementadas com JavaScript para melhorar a experiência do usuário.

---

## Funcionalidades

### Formulário de Entrada de Dados:

O formulário coleta informações como:

- **Nome, e-mail, telefone**  
- **Hora desejada e data de nascimento**  
- **Cor favorita, quantidade de filhos, peso (slider)**  
- **Sexo (botões de rádio), estado (seleção), e CEP**  

### Busca Automática de Endereço pelo CEP:

- Ao inserir o CEP e sair do campo (`onblur`), é realizada uma consulta ao serviço **ViaCEP** para preencher automaticamente os campos de endereço (rua, bairro, cidade, estado).

### Validações de Formulário:

- **Campos obrigatórios** (e.g., nome, e-mail)  
- **Validação do formato de telefone**: Apenas o formato brasileiro (e.g., "11 99999-9999") é permitido  
- **Validação do formato de CEP**

### Ajuste de Peso:

- O campo de peso utiliza um `input type="range"`, e o valor é atualizado em tempo real conforme o usuário ajusta o slider.

### Estilo Responsivo:

- CSS foi utilizado para garantir uma boa aparência em dispositivos variados e tamanhos de tela diferentes.

### Botões de Ação:

- **Enviar**: Submete os dados para o arquivo `recebe-dados.php`.  
- **Limpar**: Reseta todos os campos do formulário para seus valores padrão.

---

## Estrutura dos Arquivos

- **index.html**: Contém o formulário HTML e liga os arquivos de estilo e script.
- **style.css**: Estilo para o formulário, incluindo alinhamento, cores, fontes e espaçamento.
- **script.js**: Funções JavaScript para buscar informações de endereço via CEP, limpar o formulário e atualizar o valor do peso.

---

## Tecnologias Utilizadas

- **HTML5**: Estruturação do formulário e seus componentes.
- **CSS3**: Estilização da interface do usuário.
- **JavaScript**: Funcionalidades como a busca pelo CEP e atualização de peso.
- **Web Service (ViaCEP)**: Para buscar informações de endereço pelo CEP.

---

## Instruções de Uso

1. Clonar o repositório ou baixar os arquivos do projeto.
2. Abra o arquivo `index.html` em um navegador para visualizar o formulário.
3. Preencha os campos obrigatórios e clique em **"Enviar"** para submeter os dados.
4. Utilize o campo de CEP para preenchimento automático do endereço.
5. Clique em **Limpar** para resetar o formulário.

---

## Estrutura do Formulário

- **Campos de texto** (`<input type="text">`): Nome, Número, Bairro, Cidade, Estado.
- **Campos numéricos** (`<input type="number">`): Quantidade de filhos.
- **Campos de seleção** (`<select>`): Estado de residência.
- **Botões de seleção** (`<input type="radio">`): Sexo.
- **Caixa de seleção** (`<input type="checkbox">`): Meios de transporte.
- **Controle deslizante** (`<input type="range">`): Peso.
- **Áreas de texto** (`<textarea>`): Mensagem adicional.

---

## Observações

- Certifique-se de que a máquina onde o projeto está sendo executado tenha acesso à internet para a consulta ao serviço ViaCEP.
- O formulário possui estilo responsivo, mas testes adicionais em dispositivos diferentes podem ser necessários para garantir total compatibilidade.

---

## Melhorias Futuras

- **Validação do Lado do Servidor**: Adicionar validações no `recebe-dados.php` para garantir que os dados sejam seguros e corretos.
- **Estilo Avançado**: Utilizar frameworks como **Bootstrap** para melhorar a responsividade e o estilo.
- **Implementar API Fetch**: Substituir o uso de script externo pela API **Fetch** para obter os dados de CEP de forma mais moderna e eficiente.
