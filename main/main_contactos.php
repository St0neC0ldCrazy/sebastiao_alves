<main id="conteudo">
    <div class="container-fluid">
        <!-- 1ª CAIXA TEXTO-->
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-autor mt-5 ml-2 ml-md-5">Contactos</div>
            <div class="w-100"></div>
            <div class="col subtitulo-autor destaques-titulo mt-2 ml-2 ml-md-5 mb-3">Pode contactar-me através do email ou telefone</div>
        </div>
        <!-- 2ª CAIXA IMAGEM + TEXTO LATERAL-->
        <div class="container" style="margin-top: 80px;">
            <div class="row justify-content-center">
                <div class="col-10 col-md-3">
                    <div class="row">
                        <div class="col-12 contactos-titulo text-center">Telefone</div>
                    </div>
                    <div class="row">
                        <div class="col-12 contactos-conteudo text-center mt-1"><?= getContactos("telefone"); ?></div>
                    </div>
                </div>
                <div class="col-10 col-md-3 mt-5 mt-md-0">
                    <div class="row">
                        <div class="col-12 contactos-titulo text-center">Morada</div>
                    </div>
                    <div class="row">
                        <div class="col-12 contactos-conteudo text-center mt-1"><?= getContactos("morada"); ?></div>
                    </div>
                </div>
                <div class="col-10 col-md-3 mt-5 mt-md-0">
                    <div class="row">
                        <div class="col-12 contactos-titulo text-center">Email</div>
                    </div>
                    <div class="row">
                        <div class="col-12 contactos-conteudo text-center mt-1"><?= getContactos("email"); ?></div>
                    </div>
                </div>
            </div>
    
            <div class="row linha-contactos mx-auto"></div>
    
            <div class="row justify-content-center">
                <div class="col-10 col-md-4">
                    <div class="row">
                        <div class="col-12 contactos-titulo text-center">Horário</div>
                    </div>
                    <div class="row">
                        <div class="col-12 contactos-conteudo text-center mt-1"><?= getContactos("horario"); ?></div>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</main> 