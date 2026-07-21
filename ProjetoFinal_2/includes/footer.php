<?php
/**
 * footer.php
 * Rodapé - Academia Alta Forma
 * Basta incluir este arquivo no final das suas páginas com:
 * <?php include 'footer.php'; ?>
 */

$ano_atual = date('Y'); // gera o ano automaticamente
?>

<footer class="af-footer">
    <div class="af-footer__container">

        <!-- Coluna 1: Logo + descrição + redes sociais -->
        <div class="af-footer__col af-footer__about">
            <img src="images/logo-alta-forma.png" alt="Academia Alta Forma" class="af-footer__logo">

            <p class="af-footer__text">
                Mais que uma academia, um estilo de vida. Oferecemos treinos de musculação, CrossFit,
            </p>
            <p class="af-footer__text">
                Zumba, Pilates e suplementos nutricionais
            </p>
            <p class="af-footer__text">
                para ajudar voce a conquistar sua melhor
            </p>
            <p class="af-footer__text">
                versão todos os dias.
            </p>

            <span class="af-footer__follow">SIGA-NOS</span>
            <div class="af-footer__social">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Coluna 2: Links Rápidos (páginas) -->
        <div class="af-footer__col">
            <div class="af-footer__title">
                <i class="fas fa-link"></i>
                <h4>LINKS RÁPIDOS</h4>
            </div>
            <ul class="af-footer__list af-footer__list--chevron">
                <li><i class="fas fa-chevron-right"></i> <a href="#">Página Inicial</a></li>
                <li><i class="fas fa-chevron-right"></i> <a href="#">Nossa Academia</a></li>
                <li><i class="fas fa-chevron-right"></i> <a href="#">Nossos Produtos</a></li>
                <li><i class="fas fa-chevron-right"></i> <a href="#">Fale Conosco</a></li>
            </ul>
        </div>

        <!-- Coluna 3: Links Rápidos (modalidades) -->
        <div class="af-footer__col">
            <div class="af-footer__title">
                <i class="fas fa-dumbbell"></i>
                <h4>LINKS RÁPIDOS</h4>
            </div>
            <ul class="af-footer__list af-footer__list--star">
                <li><i class="fas fa-star"></i> <a href="#">Musculação</a></li>
                <li><i class="fas fa-star"></i> <a href="#">Zumba</a></li>
                <li><i class="fas fa-star"></i> <a href="#">CrossFit</a></li>
                <li><i class="fas fa-star"></i> <a href="#">Pilates</a></li>
                <li><i class="fas fa-star"></i> <a href="#">Suplementos Nutricionais</a></li>
            </ul>
        </div>

        <!-- Coluna 4: Contato -->
        <div class="af-footer__col">
            <div class="af-footer__title">
                <i class="fas fa-phone"></i>
                <h4>LINKS RÁPIDOS</h4>
            </div>
            <ul class="af-footer__list af-footer__list--contact">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Rua das Acácias, 123 - Centro<br>São Paulo - SP. 01000-000</span>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>(11)98756-4321</span>
                </li>
                <li>
                    <i class="fab fa-whatsapp"></i>
                    <span>(11)98756-4321</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <span><a href="mailto:contato@altaforma.com.br">contato@altaforma.com.br</a></span>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <span>Segunda á sexta: 06h às 22h<br>Sábado: 06h às 16h</span>
                </li>
            </ul>
        </div>

    </div>

    <div class="af-footer__bottom">
        <p>&copy; <?php echo $ano_atual; ?> Academia Alta Forma LTDA. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Font Awesome (ícones) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    * {
        box-sizing: border-box;
    }

    .af-footer {
        background-color: #0a0a0f;
        color: #d9d9de;
        font-family: 'Segoe UI', Arial, Helvetica, sans-serif;
        padding: 50px 40px 0 40px;
    }

    .af-footer__container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.3fr 1fr 1fr 1.3fr;
        gap: 40px;
        padding-bottom: 30px;
    }

    .af-footer__col {
        border-left: 1px solid #2a2a33;
        padding-left: 30px;
    }

    .af-footer__about {
        border-left: none;
        padding-left: 0;
    }

    /* Logo */
    .af-footer__logo {
        height: 90px;
        margin-bottom: 15px;
    }

    .af-footer__text {
        font-size: 13px;
        line-height: 1.6;
        color: #c7c7cf;
        margin: 0 0 4px 0;
        font-weight: 600;
    }

    .af-footer__follow {
        display: block;
        color: #2f6fed;
        font-weight: 700;
        font-size: 13px;
        letter-spacing: .5px;
        margin: 18px 0 12px 0;
    }

    .af-footer__social {
        display: flex;
        gap: 12px;
    }

    .af-footer__social a {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1px solid #4a4a55;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #e8e8ec;
        text-decoration: none;
        font-size: 14px;
        transition: all .2s ease;
    }

    .af-footer__social a:hover {
        background-color: #2f6fed;
        border-color: #2f6fed;
        color: #fff;
    }

    /* Títulos das colunas */
    .af-footer__title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .af-footer__title i {
        color: #2f6fed;
        font-size: 20px;
    }

    .af-footer__title h4 {
        margin: 0;
        font-size: 15px;
        letter-spacing: .5px;
        color: #fff;
        font-weight: 700;
    }

    .af-footer__col::after {
        content: "";
    }

    .af-footer__col > .af-footer__title {
        position: relative;
        padding-bottom: 12px;
    }

    .af-footer__col > .af-footer__title::after {
        content: "";
        position: absolute;
        left: 30px;
        bottom: 0;
        width: 34px;
        height: 3px;
        background-color: #2f6fed;
    }

    /* Listas */
    .af-footer__list {
        list-style: none;
        margin: 6px 0 0 0;
        padding: 0;
    }

    .af-footer__list li {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 13px;
        font-weight: 600;
    }

    .af-footer__list a {
        color: #d9d9de;
        text-decoration: none;
    }

    .af-footer__list a:hover {
        color: #2f6fed;
    }

    .af-footer__list--chevron i,
    .af-footer__list--star i {
        color: #2f6fed;
        font-size: 11px;
        margin-top: 3px;
    }

    .af-footer__list--contact i {
        color: #2f6fed;
        width: 16px;
        margin-top: 2px;
        font-size: 13px;
    }

    .af-footer__list--contact span {
        line-height: 1.5;
        font-weight: 600;
        color: #d9d9de;
    }

    .af-footer__list--contact a {
        color: #d9d9de;
    }

    .af-footer__list--contact a:hover {
        color: #2f6fed;
        text-decoration: underline;
    }

    /* Rodapé inferior */
    .af-footer__bottom {
        border-top: 1px solid #2a2a33;
        text-align: center;
        padding: 18px 0;
    }

    .af-footer__bottom p {
        margin: 0;
        font-size: 12.5px;
        color: #8a8a94;
    }

    @media (max-width: 900px) {
        .af-footer__container {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 600px) {
        .af-footer__container {
            grid-template-columns: 1fr;
        }

        .af-footer__col {
            border-left: none;
            padding-left: 0;
            border-top: 1px solid #2a2a33;
            padding-top: 20px;
        }

        .af-footer__about {
            border-top: none;
            padding-top: 0;
        }
    }
</style>
