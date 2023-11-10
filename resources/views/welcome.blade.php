@extends('layouts.main')

@section('title', 'Comunidade-Plugada')

@section('content')

<!-- Seção de Destaque -->
<section class="bg-light py-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">Comunidade Plugada</h1>
                <p class="lead">Promovendo inclusão digital e sustentabilidade através da reciclagem de resíduos eletrônicos.</p>
            </div>
           
        </div>
    </div>
</section>

<!-- Seção de Coleta de Equipamentos -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Coleta de Equipamentos</h2>
        <p class="text-center">
            A "Comunidade Plugada" está empenhada em promover a inclusão digital e a sustentabilidade através da coleta responsável de equipamentos eletrônicos. Contribua para a nossa missão ajudando-nos a reciclar e reutilizar dispositivos eletrônicos em desuso.
        </p>
        <p class="text-center">
            Como funciona:
        </p>
        <ul class="list-unstyled">
            <li><ion-icon name="arrow-forward-outline"></ion-icon> Doe seus equipamentos eletrônicos antigos, como monitores, teclados, mouses, notebooks, memórias RAM e TV box.</li>
            <li><ion-icon name="arrow-forward-outline"></ion-icon> Nossas equipes especializadas coletam os dispositivos doados em locais designados.</li>
            <li><ion-icon name="arrow-forward-outline"></ion-icon> Os equipamentos são cuidadosamente avaliados e, quando possível, reciclados para serem reutilizados em laboratórios de informática.</li>
            <li><ion-icon name="arrow-forward-outline"></ion-icon> Os laboratórios de informática resultantes são implementados em comunidades carentes, proporcionando acesso à tecnologia e à informação.</li>
        </ul>
        <p class="text-center">
            <a href="/contato" class="none" style="color: black; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">
                Junte-se a nós nesta jornada de inclusão digital e responsabilidade ambiental. Sua contribuição faz a diferença!
            </a>
        </p>
    </div>
</section>

@endsection
