<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="assets/slick/slick.css" type="text/css"/>
        <link rel="stylesheet" href="assets/slick/slick-theme.css" type="text/css"/>
        <title>Medizi</title>
    </head>
    <body>
        <div class="wrapper">
            
            <nav>
                <span class="green-logo">medizi</span>
                <ul>
                    <li><a href="#discounts">Descontos</a></li>
                    <li><a href="#viability">Comprimissos</a></li>
                </ul>
            </nav>
            
            <div id="hero">
                <h1>Compre remédios com desconto</h1>
                <h3>Encontre medicamentos com até 90% de desconto</h3>
            </div>
            
            <section id="discounts">
                <div class="container">
                    <h1>Descontos de novembro</h1>
                    <div id="discounts-grid">
                    	@foreach($medicamentos as $medicamento)
                        <div class="discount-card">
                            <img src="{{ $medicamento->image_url }}" />
                            <span>{{ $medicamento->nome }}</span>
                            
                            <div class="card-preco">de <span class="strike">R$ {{ $medicamento->preco_inicial }}</span><br>
                            por R$ {{ $medicamento->preco_final }}<br>
                            desconto de {{ (1 - $medicamento->preco_final/$medicamento->preco_inicial) * 100 }}%!</div>
                            
                            <button class="purchase">Adquirir</button>
                            
                            <span>Vencimento:</span>
                            <span>{{ $medicamento->validade }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        
        <section id="viability">
            <div class="container">
                
                <div class="card-container">
                    <div class="card">
                        <div class="card-icon pills"></div>
                        <div class="card-text">
                            <span>Evite o desperdício</span>
                            <p>Em 2014 e 2015, R$ 16 milhões em
                            medicamentos foram incinerados 
                            pela perda da validade, no Distrito Federal 
                            e em 11 estados, incluindo Pernambuco.</p>
                        </div>
                    </div>
                </div>
                
                <div class="card-container">
                    <div class="card">
                        <div class="card-icon pills"></div>
                        <div class="card-text">
                            <span>Grandes prejuízos</span>
                            <p>Estima-se que R$1 bilhão em 
                            medicamentos são desperdiçados no Brasil. </p>
                        </div>
                    </div>
                </div>
                
                <div class="card-container">
                    <div class="card">
                        <div class="card-icon plus"></div>
                        <div class="card-text">
                            <span>O meio ambiente corre risco</span>
                            <p>Resíduos gerados pelo descarte 
                            de medicamentos são alguns dos grandes
                            poluentes do meio ambiente, e são extremamente
                            difíceis de serem tratados, podendo poluir 
                            lençóis e poços de água por um bom tempo. </p>
                        </div>
                    </div>
                </div>
                
                <div class="card-container">
                    <div class="card">
                        <div class="card-icon plus"></div>
                        <div class="card-text">
                            <span>Responsabilidade Ambiental</span>
                            <p>Ao adquirir um produto, você estará 
                            evitando o desperdício de medicamentos 
                            e que mais gases poluentes sejam emitidos
                            na natureza. </p>
                        </div>
                    </div>
                </div>
                
                <div class="card-container">
                    <div class="card">
                        <div class="card-icon pills"></div>
                        <div class="card-text">
                            <span>Faça parte</span>
                            <p>Nós da Medizi queremos junto com você 
                            ajudar na preservação do meio ambiente,
                            e contribuir para que as próximas gerações
                            tenham um futuro melhor. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div id="modal">
            <span id='close'>X</span>
            <span id="drug-name">Nome do Remédio</span>
            <div id="drug-info">
                <span>Código: 0000-AAAA-ZZZZ</span>
                <span>Preço: R$ X,XX</span>
            </div>
            <a href="#" id="print">Imprimir</a>
            <div id="map">Mapa</div>
            <span id="drugstore-name">Nome da Farmácia</span>
            <div id="drugstore-info">
                <span>Bairro</span>
                <span>Rua, Número</span>
                <span>Horário de funcionamento</span>
            </div>
        </div>
        
        <script>
          function initMap() {
            var drugstore = {lat: -8.046169, lng: -34.948508};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 10,
              center: drugstore
            });
            var marker = new google.maps.Marker({
              position: drugstore,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQKDdlxSHaemBkch9FW4QALb0HKt_t1vc&callback=initMap">
        </script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="assets/slick/slick.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>