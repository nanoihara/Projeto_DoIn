<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" /> <!-- Torna o site na linguagem pt-BR (português - Brasil), sendo possível utilizar acentos -->
	<title>Página principal | DoIn</title> <!-- Título do site -->

    <link rel="stylesheet" type="text/css" href="css/zero_page.css"/> <!-- refere-se ao css que zera os espaçamentos vindos por definição -->
    <link rel="stylesheet" type="text/css" href="css/teste.css" /> <!-- refere-se ao main_style.css -->
    <link rel="stylesheet" type="text/css" href="css/header.css" /> <!-- refere-se ao css do cabeçalho -->
    <link rel="stylesheet" type="text/css" href="css/category.css" /> <!-- refere-se ao css da categoria -->

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script> <!-- refere-se ao jQuery responsável por rodar o gif introdutório -->
    <link rel="icon" type="image/png" href="img/favicon.png" /> <!-- refere-se ao favicon.png -->
    <!--<script type="text/javascript" src="js/scroll.js"></script> -->
    <script type="text/javascript" src="js/category.js"></script>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> <!-- animate.style -->
</head>

    <!-- Estrutura do site/Conteúdo do site -->
	<body>

		<!-- Cabeçalho -->
		<?php
            include 'includes/header.php';
        ?>

        <!-- Seção principal -->
        <section>

            <!-- Container com as categorias (carrossel no celular) -->
            <?php
                include 'includes/category.php';
            ?>

            <!-- Importância da Troca e doação -->
            <div class="div_presentation">
                <img class="img_presentation" src="img/presentation.png">
                
                <div class="div_text_pres">
                    <h1>Projeto DoIn</h1>
                    <p>Site desenvolvido por estudantes do ensino médio com o objetivo de reduzir o consumismo e preservar o meio ambiente através da doação e troca de 
                    produtos na sociedade brasileira, facilitando o anúncio desses tipos de câmbio por 
                    meio deste site.</p>
                    <p>Se junte a nossa causa</p>
                    <a href="#" class="a_button"><div class="button_presentation">Doe ou troque produtos agora</div></a>
                </div>
            </div>

            <div class="div_about_site">
                <div class="button_presentation button_benef">Benefícios do site</div>
                <div class="div_benef_carrossel">
                    <div class="div_benef_icons">
                        <img src="img/doacao_alimento.png" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>                    
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/ranking.png" class="img_icons">
                        <div class="p_icons">Com um ranking de pessoas que trocam e doam produtos</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/brasil.png" class="img_icons">
                        <div class="p_icons">Focado a atender o território brasileiro, em toda sua região</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/traducao.png" class="img_icons">
                        <div class="p_icons">Acessível nas linguagens: português (brasileiro) e inglês</div>
                    </div>
                    <div class="div_benef_icons last_icon">
                        <img src="img/tema_escuro.png" class="img_icons">
                        <div class="p_icons">Disponível com os temas escuro e claro ao site inteiro</div>
                    </div>
                </div>
            </div>

            <div class="div_about_site div_important">
                <div class="button_presentation button_benef button_important">Importância da doação e troca</div>
                <div class="div_benef_carrossel">
                    <div class="div_benef_icons">
                        <img src="img/reciclagem.png" class="img_icons">
                        <div class="p_icons">Se evita o desperdício quando é doado um produto para outra pessoa</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Com um ranking de pessoas que trocam e doam produtos</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Focado a atender o território brasileiro, em toda sua região</div>
                    </div>
                    <div class="div_benef_icons">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Acessível nas linguagens: português (brasileiro) e inglês</div>
                    </div>
                    <div class="div_benef_icons last_icon">
                        <img src="img/pink.jpg" class="img_icons">
                        <div class="p_icons">Sempre tendo pessoas disponíveis para troca e doação em nosso site</div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="div_desenv">
                <label class="button_presentation button_benef label_ab_desenv">Sobre as desenvolvedoras do site</label>
                
                <div class="sub_div_desenv">

                    <div class="box_desenv">
                        <img src="img/alexia.jpeg" class="img_desenv">
                        <label class="label_desenv">Alexia Ferreira</label>
                        
                        <a href="https://github.com/Alexia01Edu">
                            <img src="img/github.png" class="img_fot_icons">
                        </a>

                        <a href="mailto:alexia.eduarda@aluno.ifsp.edu.br">
                            <img src="img/gmail.png" class="img_fot_icons">
                        </a>
                        
                        <p class="p_desenv"> Criação do banco de dados e sua conexão com o site (back-end).
                             Responsável pela elaboração das páginas do cadastro do produto, perfil do produto
                              e ranking dos usuários.</p>
                    </div>

                    <div class="box_desenv">
                        <img src="img/pink.jpg" class="img_desenv">
                        <label class="label_desenv">Alice Balbino</label>

                        <a href="https://github.com/alice-balbino">
                            <img src="img/github.png" class="img_fot_icons">
                        </a>

                        <p class="p_desenv">Responsável pela formação do cabeçalho e rodapé das páginas,
                            criação da página principal e perfil do usuário. Elaborou o design da logo e coloração do site.</p>
                    </div>

                    <div class="box_desenv">
                        <img src="img/pink.jpg" class="img_desenv">
                        <label class="label_desenv">Évelin Frederico</label>

                        <a href="#">
                            <img src="img/github.png" class="img_fot_icons">
                        </a>

                        <p class="p_desenv">Responsável pela formação do cabeçalho e rodapé das páginas,
                            criação da página principal e perfil do usuário. Elaborou o design da logo e coloração do site.</p>
                    </div>

                    <div class="box_desenv">
                        <img src="img/pink.jpg" class="img_desenv">
                        <label class="label_desenv">Giovanna Araujo</label>

                        <a href="https://github.com/Araujolim">
                            <img src="img/github.png" class="img_fot_icons">
                        </a>

                        <p class="p_desenv">Responsável pela formação do cabeçalho e rodapé das páginas,
                            criação da página principal e perfil do usuário. Elaborou o design da logo e coloração do site.</p>
                    </div>

                    <div class="box_desenv">
                        <img src="img/lana.jpg" class="img_desenv">
                        <label class="label_desenv">Lana Ihara</label>

                        <a href="https://github.com/nanoihara">
                            <img src="img/github.png" class="img_fot_icons">
                        </a>
                        
                        <a href="mailto:akemiihara1234@gmail.com">
                            <img src="img/gmail.png" class="img_fot_icons">
                        </a>

                        <p class="p_desenv">Responsável pela formação do cabeçalho e rodapé das páginas,
                            criação da página principal e perfil do usuário. Elaborou o design da logo e coloração do site.</p>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="div_fot_icons">
                <img src="img/footer/facebook.png" class="img_fot_icons">
                <img src="img/footer/twitter.png" class="img_fot_icons">
                <img src="img/footer/instagram.png" class="img_fot_icons">
            </div>
            <label>Sobre nós - Termos de privacidade</label>
            <label>Todos os direitos reservados ao Projeto DoIn</label>
        </footer>
	</body>
</html>