<?php 
use Microblog\Utilitarios;
require_once "inc/cabecalho.php";

$noticia->setDestaque("sim");
$destaques = $noticia->listarDestaques();

// Utilitarios::dump($noticia);
$todasNoticias = $noticia->listarTodas();
// Utilitarios::dump($destaques);
setlocale(LC_TIME, 'pt_BR.utf8', 'pt_BR', 'Portuguese_Brazil', 'Brazil');



?>

<section class="parallax" id="section-ajuda">
    <div class="message">
      <h1 style="color: white; margin-bottom: 30px;">Ajuda</h1>
    </div>
</section>



<div class="container px-4 py-5" id="hanging-icons">
    <h3 class="pb-2 border-bottom">Informações Úteis</h3>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

    <!-- Como se associar a AAJA-SP -->
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
        </svg>
        </div>
        <div>
          <h5 class="text-body-emphasis">Como se Associar à AAJA-SP</h5>
          <p>A AAJASP (Associação de Angolanos Jovens e Amigos de São Paulo) oferece suporte essencial para seus associados, incluindo assistência social e oportunidades de desenvolvimento.</p>
        <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#aajasp" aria-expanded="false" aria-controls="aajasp">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="aajasp">
            <div class="card card-body" style="width: 300px;">
            <section id="associacao-aajasp">
                <h5>📝 Benefícios da Associação</h5>
                <ul>
                    <li>Apoio psicológico com profissionais da área</li>
                    <li>Distribuição de cesta básica</li>
                    <li>Participação em feiras e eventos</li>
                    <li>Capacitações e cursos</li>
                    <li>Acesso à comunidade</li>
                </ul>
                
                <h5>📝 Passos para se tornar membro</h5>
                <p>Para se associar, é necessário preencher o formulário de cadastro.</p>
                
                <h5>📄 Documentos necessários</h5>
                <p>Os documentos exigidos são: CPF, RNM, Passaporte ou Bilhete de Identidade.</p>
                
                
                <h5>🔗 Link para Cadastro</h5>
                <p><a href="#" target="_blank">Clique aqui para se cadastrar</a></p>
            </section>
            </div>
        </div>
        </div>


        </div>
      </div>


    <!-- Legalização na Polícia Federal -->
    <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
            <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
            <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0z"/>
        </svg>
        </div>
        <div>
            <h5 class="text-body-emphasis">Legalização na Polícia Federal</h5>
            <p>A legalização na Polícia Federal, por meio do acordo da CPLP, permite que cidadãos de países de língua portuguesa regularizem sua permanência no Brasil por até 2 anos.</p>
            <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#federal" aria-expanded="false" aria-controls="federal">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="federal">    
        <div class="card card-body" style="width: 300px;">
        <section class="container my-5">

            <h5 class="mt-4">🛂 Endereço e Horário de Atendimento</h5>
            <p>O atendimento ocorre nas unidades da <strong>Polícia Federal</strong> de cada estado. Recomenda-se verificar o endereço mais próximo e os horários de funcionamento no site oficial da PF.</p>
            <p><a target="_blank" href="https://www.gov.br/pf/pt-br/acesso-a-informacao/institucional/quem-e-quem/superintendencias-e-delegacias" class="btn btn-dark">Encontre a unidade mais próxima</a></p>

            <h5 class="mt-4">📄 Documentos Necessários</h5>
            <ul>
                <li><strong>Formulário eletrônico preenchido e assinado:</strong> <a target="_blank" href="https://servicos.dpf.gov.br/sismigra-internet/faces/publico/tipoSolicitacao/permanenciaRegistroEmissaoCie.seam">Acesse aqui</a></li>
                <li><strong>Passaporte ou cédula de identidade</strong> (mesmo vencido)</li>
                <li><strong>Certidão de nascimento, casamento ou consular</strong> (se não constar a filiação)</li>
                <li><strong>Certidão de antecedentes criminais do país de origem</strong> (legalizada ou apostilada)</li>
                <li><strong>Declaração de ausência de antecedentes criminais no Brasil e no exterior</strong></li>
                <li><strong>Comprovante de pagamento da taxa de emissão de CRNM</strong> (R$ 204,77)</li>
                <li><strong>1 foto 3x4 recente</strong> (se o sistema biométrico estiver indisponível)</li>
            </ul>



            <h5 class="mt-4">✅ Passo a Passo do Processo</h5>
            <ol>
                <li><strong>Preencher o formulário eletrônico</strong> no site da Polícia Federal e imprimir.</li>
                <li><strong>Reunir os documentos necessários</strong> listados acima.</li>
                <li><strong>Agendar atendimento presencial</strong> na unidade da PF mais próxima.</li>
                <li><strong>Comparecer à Polícia Federal</strong> no dia agendado com os documentos e a GRU paga.</li>
                <li><strong>Acompanhar o processo</strong> e retirar a Carteira de Registro Nacional Migratório (CRNM).</li>
            </ol>

            <h5 class="mt-4">🔗 Link Oficial da PF</h5>
            <p>Para mais informações sobre o processo de regularização, acesse o site da Polícia Federal:</p>
            <p><a target="_blank" href="https://www.gov.br/pf/pt-br/assuntos/imigracao/autorizacao-residencia/autorizacao-de-residencia-a-nacionais-da-comunidade-dos-paises-de-lingua-portuguesa-cplp" class="btn btn-dark">Página Oficial da PF sobre Migração</a></p>
            </section>

            </div>
        </div>
        </div>
        </div>
    </div>

    <!-- Equivalência de Certificados na Diretoria de Ensino -->
    <div class="col d-flex align-items-start">
        <div  class="icon-square text-body-emphasis  bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-mortarboard" viewBox="0 0 16 16">
            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
        </svg>
        </div>
        <div>
            <h5 class="text-body-emphasis">Equivalência de Certificados na Diretoria de Ensino</h5>
            <p>A Equivalência de Estudos é indicada para alunos que estudaram no exterior, cursando parcial ou integralmente o Ensino Fundamental ou Médio.</p>
            <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#equivalencia" aria-expanded="false" aria-controls="equivalencia">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="equivalencia">
            <div class="card card-body" style="width: 300px;">
            <section class="container my-5">  
                <h5 class="mt-4">🏫 Passos para Equivalência</h5>
                <ol>
                    <li><strong>Reunir os documentos necessários</strong> (listados abaixo).</li>
                    <li><strong>Preencher e enviar o formulário eletrônico</strong> disponibilizado pela Diretoria de Ensino.</li>
                    <li><strong>Aguardar o prazo de análise</strong> (aproximadamente 90 dias).</li>
                    <li><strong>Receber a confirmação por e-mail</strong> com orientações sobre o processo.</li>
                </ol>
                
                <h5 class="mt-4">📄 Documentos Necessários</h5>
                <ul>
                    <li><strong>CPF, RG ou RNE</strong></li>
                    <li><strong>Comprovante de residência</strong></li>
                    <li><strong>Histórico Escolar e Certificado do exterior</strong> (com tradução juramentada, se necessário)</li>
                    <li><strong>Histórico Escolar do Brasil</strong> (se parte do curso foi realizado no Brasil)</li>
                </ul>
                
                <h5 class="mt-4">🔗 Link Oficial para Mais Informações</h5>
                <p>Para detalhes adicionais e acesso ao formulário, consulte o site oficial:</p>
                <p><a target="_blank" href="https://denorte2.educacao.sp.gov.br/equivalencia-de-estudos/" class="btn btn-dark">Solicitar Equivalência de Certificado</a></p>
            </section>
            </div>
        </div>
        </div>
        </div>
    </div>

    <!-- Solicitação de Cesta Básica – AAJA-SP -->
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-basket" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
        </svg>
        </div>
        <div>
          <h5 class=" text-body-emphasis">Solicitação de Cesta Básica – AAJA-SP</h5>
          <p>Disponível para membros ativos da associação, a cesta básica pode ser solicitada diretamente com a AAJASP.</p>
          
          <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#cesta" aria-expanded="false" aria-controls="cesta">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="cesta">
            <div class="card card-body" style="width: 300px;">
            <section id="cesta-basica-aajasp">
                
                <h5>Quem pode solicitar?</h5>
                <p>Todo membro associado ativo da AAJASP.</p>
                
                <h5>📄 Documentos necessários</h5>
                <p>É necessário ser um associado ativo da AAJASP.</p>
                
                <h5>📝 Link do Formulário de Solicitação</h5>
                <p>Para solicitar, entre em contato com a AAJASP.</p>
                
                <h5>📞 Contato da AAJASP</h5>
                <p>📧 E-mail: <a href="mailto:Joaocabralcabral2@gmail.com">Joaocabralcabral2@gmail.com</a></p>
                <p>📞 Telefone: +55 (11) 98468-8459</p>
            </section>
            </div>
        </div>
        </div>


        </div>
      </div>

    <!-- Informações sobre o Consulado de Angola -->
    <div class="col d-flex align-items-start">
        <div  class="icon-square text-body-emphasis  bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-globe-europe-africa" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M3.668 2.501l-.288.646a.847.847 0 0 0 1.479.815l.245-.368a.81.81 0 0 1 1.034-.275.81.81 0 0 0 .724 0l.261-.13a1 1 0 0 1 .775-.05l.984.34q.118.04.243.054c.784.093.855.377.694.801-.155.41-.616.617-1.035.487l-.01-.003C8.274 4.663 7.748 4.5 6 4.5 4.8 4.5 3.5 5.62 3.5 7c0 1.96.826 2.166 1.696 2.382.46.115.935.233 1.304.618.449.467.393 1.181.339 1.877C6.755 12.96 6.674 14 8.5 14c1.75 0 3-3.5 3-4.5 0-.262.208-.468.444-.7.396-.392.87-.86.556-1.8-.097-.291-.396-.568-.641-.756-.174-.133-.207-.396-.052-.551a.33.33 0 0 1 .42-.042l1.085.724c.11.072.255.058.348-.035.15-.15.415-.083.489.117.16.43.445 1.05.849 1.357L15 8A7 7 0 1 1 3.668 2.501"/>
        </svg>
        </div>
        <div>
          <h5 class="text-body-emphasis">Informações sobre o Consulado de Angola</h5>
          <p>O Consulado Geral de Angola no Brasil oferece diversos serviços para cidadãos angolanos e estrangeiros</p>
          <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#consulado" aria-expanded="false" aria-controls="consulado">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="consulado">
            <div class="card card-body" style="width: 300px;">
            <section id="consulado-angola">

            <h3>🏛️ Serviços Prestados</h3>
            <ul>
                <li>Emissão e renovação de passaportes</li>
                <li>Vistos para entrada em Angola</li>
                <li>Registro consular</li>
                <li>Reconhecimento de documentos</li>
                <li>Assistência a cidadãos angolanos no Brasil</li>
            </ul>

            <h3>📍 Endereço e Contatos</h3>
            <p><strong>Consulado Geral de Angola em São Paulo</strong></p>
            <p>📍 Rua Estados unidos, 1030 - Atendimento : segundas|quarta|sexta 09:30 as 12:00h</p>
            <p>📞 Telefone: +55 (011)3087-1000</p>
            <p>✉️ E-mail: <a href="mailto:contacto@consuladogeraldeangolasp.net">contacto@consuladogeraldeangolasp.net</a></p>

            <h3>🔗 Links Oficiais</h3>
            <ul>
                <li>🌐 <a href="https://consuladogeraldeangolasp.net/" target="_blank">Site Oficial do Consulado de Angola</a></li>
                <li>🗓️ <a href="https://consuladogeraldeangolasp.servicos.ws/agenda/">Agendamento</a></li>
                <li>📝 <a href="https://consuladogeraldeangolasp.net/servicos-especiais-2/" target="_blank">Requerimentos e Documentos</a></li>
            </ul>
            </section>
            </div>
        </div>
        </div>

        </div>
    </div>


    <!-- Assistência com Documentos e Informações – ADUS -->
      <div class="col d-flex align-items-start">
        <div  class="icon-square text-body-emphasis  bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-bank" viewBox="0 0 16 16">
            <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
            </svg>
        </div>
        <div>
          <h5 class="text-body-emphasis">Assistência com Documentos e Informações – ADUS</h5>
          <p>O Instituto Adus é uma ONG que promove a integração de refugiados na sociedade brasileira desde 2010.</p>

        <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#adus" aria-expanded="false" aria-controls="adus">
                Saber mais
            </button>
        </p>
        <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="adus">
        <div class="card card-body" style="width: 300px;">
            <section class="container my-5">                
                <h5 class="mt-4">📝 Serviços Oferecidos</h5>
                <ul>
                    <li>Auxílio na obtenção de documentos.</li>
                    <li>Intermediação com órgãos públicos e ONGs.</li>
                    <li>Capacitação profissional e cursos de idioma.</li>
                    <li>Intermediação para colocação profissional.</li>
                </ul>
                
                <h5 class="mt-4">📞 Contato e Links Úteis</h5>
                <p><strong>Endereço:</strong> Avenida São João, nº 313, 11º Andar, Centro – São Paulo/SP – CEP: 01035-000</p>
                <p><strong>Telefone:</strong> +55 (11) 3225-0439</p>
                <p><strong>Email:</strong> adus@adus.org.br</p>
                <p><a target="_blank" href="https://www.adus.org.br" class="btn btn-dark">Visite o site oficial do ADUS</a></p>
            </section>
        </div>
        </div>
        </div>



        </div>
      </div>
    

    </div>

</div>


<?php 
require_once "inc/rodape.php";
?>

