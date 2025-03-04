<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">
                    HOTEL LA CASCATA
                </h1>
                <h2 class="text-center display-4 title-2">Tutti meritano una pausa</h2>
                @if (session('mailInviata'))
                    <div class="alert alert-success">
                        {{ session('mailInviata') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-layout>