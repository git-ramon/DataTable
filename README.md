
[![Build Status](https://github.com/codeigniter4/CodeIgniter4/workflows/PHPUnit/badge.svg)](https://github.com/codeigniter4/CodeIgniter4/actions?query=workflow%3A%22PHPUnit%22)
[![Coverage Status](https://coveralls.io/repos/github/codeigniter4/CodeIgniter4/badge.svg?branch=develop)](https://coveralls.io/github/codeigniter4/CodeIgniter4?branch=develop)
[![Downloads](https://poser.pugx.org/codeigniter4/framework/downloads)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub release (latest by date)](https://img.shields.io/github/v/release/codeigniter4/CodeIgniter4)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub stars](https://img.shields.io/github/stars/codeigniter4/CodeIgniter4)](https://packagist.org/packages/codeigniter4/framework)
[![GitHub license](https://img.shields.io/github/license/codeigniter4/CodeIgniter4)](https://github.com/codeigniter4/CodeIgniter4/blob/develop/LICENSE)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/codeigniter4/CodeIgniter4/pulls)
<br>

# Instalação

DataTables é uma poderosa biblioteca Javascript para adicionar recursos de interação a tabelas HTML e, embora a simplicidade seja um princípio de design central para o projeto como um todo, pode parecer bastante assustador começar. No entanto, dar esses primeiros passos e executar DataTables em seu site é bastante simples, pois você precisa incluir apenas dois arquivos adicionais em sua página:

O arquivo Javascript DataTables
O arquivo CSS DataTables
Existem outros arquivos disponíveis, como Editor para adicionar recursos de edição e outros plug-ins , que podem ser usados ​​para estender o conjunto de recursos de DataTables, mas basicamente, tudo o que você precisa fazer é incluir esses dois arquivos para começar a funcionar!

# Requisitos

Antes de começarmos, precisamos considerar os requisitos que o DataTables tem para operar.

### Dependências

DataTables tem apenas uma dependência de biblioteca (outro software no qual ele depende para funcionar) - jQuery . Sendo um plug-in do jQuery, o DataTables faz uso de muitos dos excelentes recursos que o jQuery fornece e se conecta ao sistema de plug-in do jQuery, da mesma forma que todos os outros plug-ins do jQuery . jQuery 1.7 ou mais recente funcionará com DataTables, embora normalmente você queira usar a versão mais recente. DataTables inclui tudo o que é necessário para operar.

### HTML

Para que DataTables possa aprimorar uma tabela HTML, a tabela deve ser HTML válida, bem formatada, com um cabeçalho ( thead) e um corpo único ( tbody). Um rodapé opcional ( tfoot) também pode ser usado. <br>
Se você estiver gerando seu documento HTML usando um programa do lado do servidor, como um script PHP, um script Ruby, um programa C# ou qualquer outra coisa - tudo o que eles precisam fazer é gerar sua tabela assim. <br>
Isso é exatamente o que você teria para uma tabela HTML normal, embora às vezes você precise adicionar as tags theade tbody, pois elas nem sempre são usadas (elas permitem que DataTables saiba o que deve ser usado para os cabeçalhos das colunas e as tags click-to -controles de pedidos).

Observe que DataTables pode realmente gerar o thead e tbody para você, junto com todas as linhas e células da tabela, se você estiver usando dados de origem Ajax, mas no momento vamos nos concentrar em HTML simples.
Observe também que, embora DataTables suporte cols e rows no cabeçalho e rodapé da tabela, eles não são suportados nas tabelas tbody e não devem estar presentes.


# Instalando Javascript/CSS

A parte principal da instalação do DataTables é incluir os arquivos de origem do DataTables em sua página. Conforme observado no início desta página, isso envolve simplesmente incluir os arquivos Javascript e CSS do DataTables. O arquivo CSS é realmente opcional, mas fornece um estilo padrão para sua tabela para torná-la boa com o mínimo de esforço. Consulte o criador do tema de estilo se desejar personalizar as cores do CSS DataTables padrão.

Os arquivos necessários podem ser instalados de várias maneiras diferentes:

Usando a CDN DataTables
Localmente
Com um gerenciador de pacotes como NPM.

### CDN

Para incluir DataTables em sua página, basta incluir o seguinte HTML (lembre-se de incluir jQuery também ):



            $(document).ready(function() {
            $('#tableuser').DataTable( {
                "ajax": "Ajax/Usuarios/getDados",
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json" // Traduçao dos campos nativos 
                    }
                } );
            } );

Arquivo Javascript: <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> <br>
Arquivo Css: link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"

### Instalação local

Se você preferir não usar um CDN e, em vez disso, ter os arquivos hospedados em seu próprio servidor, ou se quiser modificar os arquivos, é simples continuar com DataTables.

Basta usar o construtor de download para baixar a versão mais recente do DataTables, selecionar qualquer software adicional e estilo desejado e baixar o pacote personalizado. Em seguida, descompacte e faça o upload para o seu servidor web. Você terá então um diretório chamado DataTables disponível em seu servidor. Em seguida, inclua DataTables em sua página usando o seguinte HTML:

Arquivo Css: link rel="stylesheet" type="text/css" href="/DataTables/datatables.css" <br>
Arquivo Javascript: <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

### NPM

DataTables e suas extensões estão disponíveis como pacotes NPM . O nome base do pacote é datatables. nele as extensões e opções de integração de estilo estão disponíveis como pacotes individuais - consulte o guia de instalação do NPM para obter detalhes completos sobre os pacotes disponíveis.

Por exemplo, o seguinte pode ser usado para instalar DataTables e seu estilo padrão:

 - npm install datatables.net   <br>
 - npm install datatables.net-dt <br>

Todos os pacotes DataTables exportam uma função de fábrica que pode ser executada com dois argumentos opcionais - o windowobjeto e jQuery a ser usado - novamente, consulte o guia de instalação do NPM para obter detalhes sobre esses parâmetros. Ao usar o Browserify , você pode simplesmente executar a função sem nenhum parâmetro - por exemplo:

 - var $  = require( 'jquery' ); <br>
 - var dt = require( 'datatables.net' )(); <br>

# Inicializando DataTables

É quase isso! Temos a tabela HTML que queremos aprimorar e temos todo o software e estilos de que precisamos. Tudo o que é necessário agora é dizer ao DataTables para realmente fazer sua mágica na mesa. Isso é feito com algumas linhas de Javascript:

          
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
            

Se você já usou jQuery antes, você reconhecerá a forma deste script: esperamos que o documento esteja totalmente pronto, e então selecionamos a tabela que queremos e executamos a função DataTables nela.

É isso! DataTables adicionará ordenação, pesquisa, paginação e informações à sua tabela por padrão, dando aos seus usuários finais a capacidade de encontrar as informações que desejam o mais rápido possível.

Se você quiser personalizar seu DataTable, isso pode ser feito especificando parâmetros de configuração em um objeto passado para a DataTable()função. Para obter informações sobre como usar esses parâmetros de configuração, consulte a página do manual de opções .

# Inicialização não-jQuery

Se você preferir escrever Javascript sem usar as abstrações que o jQuery fornece, você pode inicializar DataTables (a partir da v1.11) usando:

              let table = new DataTable('#example', {
                  // options
              });
  
Onde os parâmetros para new DataTable()são:

Um seletor DOMString ou elementos HTML para selecionar a(s) tabela(s) do DOM.
Um objeto de opções de DataTables .
E o construtor retornará uma instância da API DataTables permitindo a manipulação da tabela
